<?php
/**
 * Class AdvertisingController
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Modules\Admin\Controllers;

use App\Models\Advertising;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class AdvertisingController extends Controller
{
	/**
	 * Display a listing of the comments.
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function index()
	{
		$advertisings = $this->getAdvertising();
		
		return view('admin::advertising.index', compact('advertisings'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Request $request
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function edit(Request $request, $id)
	{
		$comment = Comment::findOrFail($id);
		
		$backUrl = $request->has('back_url') ? urldecode($request->get('back_url')) : URL::previous();
		
		return view('admin::comments.edit', compact('comment', 'backUrl'));
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$comment = Comment::findOrFail($id);
		$data = $request->except('image');
		if($comment->isMain()) {
			$data['alias'] = '/';
		}
		$data = array_merge($data, $comment->setData($data));

		$rules = Comment::rules($comment->id);
		$messages = [];
		// validation rule for main comment
		if($comment->isMain()) {
			$rules['alias'] = 'regex:/^[\/]+$/u';
			$messages['alias.regex'] = 'Алиас главной страницы нельзя изменить.';
		}
		$validator = \Validator::make($data, $rules, $messages);
		
		if ($validator->fails())
		{
			return redirect(route('admin.comments.edit', ['id' => $comment->id, 'back_url' => urlencode($request->get('backUrl'))]))
				->withErrors($validator->errors())
				->withInput()
				->with('errorMessage', 'Страница не сохранена. Исправьте ошибки.');
		} else {
			if(count($comment->menus)) {
				foreach (['alias', 'title', 'menu_title', 'parent_id', 'is_published'] as $attribute) {
					if ($comment->$attribute != $data[$attribute]) {
						\Cache::forget('menuItems');
						break;
					}
				}
			}
			
			$comment->fill($data);
			$comment->setImage($request);
			$comment->content = $comment->saveEditorImages($data['tempPath']);
			$comment->introtext = $comment->saveEditorImages($data['tempPath'], 'introtext');
			$comment->save();
			
			if($request->get('returnBack')) {
				return redirect($request->get('backUrl'))->with('successMessage', 'Страница сохранена!');
			} else {
				return redirect(route('admin.comments.edit', ['id' => $comment->id, 'back_url' => urlencode($request->get('backUrl'))]))->with('successMessage', 'Страница сохранена!');
			}
		}
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param $id
	 * @return \Illuminate\Http\JsonResponse
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function destroy($id)
	{
		$comment = Comment::find($id);
		if($comment->canBeDeleted()) {
			$comment->delete();
			
			if(\Request::ajax()) {
				$comments = $this->getComments();
				
				return \Response::json([
					'success' => true,
					'message' => 'Страница успешно удалена.',
					'resultHtml' => view('admin::comments._table', compact('comments'))->render(),
				]);
			} else {
				return back()->with('successMessage', 'Страница успешно удалена.');
			}
		} else {
			if(\Request::ajax()) {
				return \Response::json([
					'success' => false,
					'message' => 'Эта страница не может быть удалена.'
				]);
			} else {
				return back()->with('warningMessage', 'Эта страница не может быть удалена.');
			}
		}
	}
	
	/**
	 * Change published status.
	 *
	 * @param Request $request
	 * @param $id
	 * @return \Illuminate\Http\JsonResponse
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function changePublishedStatus(Request $request, $id)
	{
		$comment = Comment::findOrFail($id);
		if(!$comment->isMain()) {
			if($request->has('is_published')) {
				$comment->is_published = !$request->get('is_published');
				$comment->published_at = Carbon::now();
				$comment->save();
				
				if(\Request::ajax()) {
					return \Response::json([
						'success' => true,
						'message' => $comment->is_published ? 'Страница опубликована.' : 'Страница снята с публикации.',
						'isPublished' => (integer) $comment->is_published,
						'isPublishedText' => Comment::$is_published[$comment->is_published],
					]);
				} else {
					return back()->with('successMessage', $comment->is_published ? 'Страница опубликована.' : 'Страница снята с публикации.');
				}
			}
		} else {
			if(\Request::ajax()) {
				return \Response::json([
					'success' => false,
					'message' => 'Главная страница должна быть всегда опубликована.',
				]);
			} else {
				return back()->with('warningMessage', 'Главная страница должна быть всегда опубликована.');
			}
		}
	}
	
	/**
	 * Get list of comments
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getAdvertising()
	{
		return Advertising::select(['id', 'type', 'area', 'position', 'title', 'is_answer', 'ip_id', 'page_id', 'is_active', 'is_deleted', 'votes_like', 'votes_dislike', 'mark', 'comment', 'created_at', 'published_at'])
//			->with('parent', 'children', 'user', 'page')
			->get();
	}
}
