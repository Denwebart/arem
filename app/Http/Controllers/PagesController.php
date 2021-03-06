<?php

namespace App\Http\Controllers;

use App\Helpers\Settings;
use App\Models\Award;
use App\Models\Page;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	/**
	 * Show the application main page.
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function index() {
		
		$page = Page::whereAlias('/')->firstOrFail();
		
		return view('pages.index', compact('page'));
	}
	
	/**
	 * Show the application pages.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param object $page
	 * @return mixed
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function pageOneLevel(Request $request, $page)
	{
		return $this->renderPage($request, $page);
	}
	
	public function pageTwoLevel(Request $request, $parentOne, $page)
	{
		// доделать - оптимизировать
		$parent = Page::whereAlias($parentOne)->published()->firstOrFail();
		
		if(!is_object($page) && $parent->type == Page::TYPE_JOURNAL) {
			$page = User::whereAlias($page)->active()->first();
		}
		
		if(!is_object($page) && $parent->id == Page::ID_AWARDS_PAGE) {
			$page = Award::whereAlias($page)->firstOrFail();
		}
		
		if(!is_object($page) && $parent->id == Page::ID_TAGS_PAGE) {
			$page = Tag::whereAlias($page)->firstOrFail();
		}
		
		return $this->renderPage($request, $page);
	}
	
	public function pageThreeLevel(Request $request, $parentOne, $parentTwo, $page)
	{
		return $this->renderPage($request, $page);
	}
	
	public function pageFourLevel(Request $request, $parentOne, $parentTwo, $parentThree, $page)
	{
		return $this->renderPage($request, $page);
	}
	
	protected function renderPage($request, $page)
	{
		if (is_a($page, 'App\Models\User') && url($request->getPathInfo()) == $page->getJournalUrl()) {
			return $this->getUserJournalPage($request, $page);
		}
		
		if (is_a($page, 'App\Models\Award') && url($request->getPathInfo()) == $page->getUrl()) {
			return $this->getAwardPage($request, $page);
		}
		
		if (is_a($page, 'App\Models\Tag') && url($request->getPathInfo()) == $page->getUrl()) {
			return $this->getTagPage($request, $page);
		}
		
		if(!is_a($page, 'App\Models\Page') || url($request->getPathInfo()) != $page->getUrl()) {
			abort(404);
		}
		
		if($page->type == Page::TYPE_JOURNAL) {
			return $this->getJournalPage($request, $page);
		} elseif($page->type == Page::TYPE_QUESTIONS) {
			return $this->getQuestionsPage($request, $page);
		} elseif($page->type == Page::TYPE_QUESTION) {
			return $this->getQuestionPage($request, $page);
		}
		
		if($page->id == Page::ID_CONTACT_PAGE) {
			return $this->getContactPage($request, $page);
		} elseif($page->id == Page::ID_SITEMAP_PAGE) {
			return $this->getSitemapPage($request, $page);
		} elseif($page->id == Page::ID_AWARDS_PAGE) {
			return $this->getAwardsPage($request, $page);
		} elseif($page->id == Page::ID_TAGS_PAGE) {
			return $this->getTagsPage($request, $page);
		}

		if($page->is_container) {
			return $this->getCategoryPage($request, $page);
		} else {
			return $this->getPage($request, $page);
		}
	}
	
	/**
	 * Get page info
	 *
	 * @param $request
	 * @param $page
	 * @return mixed
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getPage($request, $page)
	{
		return view('pages.page', compact('page'));
	}
	
	/**
	 * Contact page
	 *
	 * @param $request
	 * @param $page
	 * @return mixed
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getContactPage($request, $page)
	{
		return view('pages.contact', compact('page'));
	}
	
	/**
	 * Page with all awards
	 *
	 * @param $request
	 * @param $page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getAwardsPage($request, $page)
	{
		return view('pages.awards', compact('page'));
	}
	
	/**
	 * Page for description of current award
	 *
	 * @param $request
	 * @param $page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getAwardPage($request, $page)
	{
		return view('pages.award', compact('page'));
	}
	
	/**
	 * Page with all tags
	 *
	 * @param $request
	 * @param $page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getTagsPage($request, $page)
	{
		$tagsByAlphabet = Tag::getByAlphabet();
		
		return view('pages.tags', compact('page', 'tagsByAlphabet'));
	}
	
	/**
	 * Page for description of current tag
	 *
	 * @param $request
	 * @param $page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getTagPage($request, $page)
	{
		return view('pages.tag')->with('tag', $page);
	}
	
	/**
	 * Page with articles of user journal
	 *
	 * @param $request
	 * @param $page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getUserJournalPage($request, $page)
	{
		$user = $page;
		$page = new Page();
		
		$articles = Page::whereType(Page::TYPE_ARTICLE)->whereUserId($user->id)->published()->get();
		
		return view('cabinet::cabinet.articles', compact('page', 'user', 'articles'));
	}
	
	/**
	 * Page with all articles of journals
	 *
	 * @param $request
	 * @param $page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getJournalPage($request, $page)
	{
		$articles = Page::whereType(Page::TYPE_ARTICLE)->whereParentId($page->id)->published()->get();
		
		return view('pages.articles', compact('page', 'articles'));
	}
	
	/**
	 * Page with questions (all or from category)
	 *
	 * @param $request
	 * @param $page
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getQuestionsPage($request, $page)
	{
//		$childrenPages = \Cache::rememberForever('page.'. $page->id .'.children', function() use($page) {
//			return $page->is_container
//				? $page->publishedChildren()->orderBy('published_at', 'DESC')->paginate(10)
//				: [];
//		});
		
		// доделать выбор из нужной категории
		$questions = Page::whereType(Page::TYPE_QUESTION)->published()->get();
		
		return view('pages.questions', compact('page', 'questions'));
	}
	
	/**
	 * Page with articles from category
	 *
	 * @param $request
	 * @param $page
	 * @return mixed
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getCategoryPage($request, $page)
	{
		// доделать вложенность (рекурсивно?)
//		$subcategories = \Cache::rememberForever('catalog.' . $page->id . '.subcategories', function() use($page) {
//			return $page->publishedChildren()
//				->has('products')
//				->with([
//					'products' => function($q) {
//						$q->select('id', 'category_id');
//					}
//				])
//				->get(['id', 'parent_id', 'menu_title', 'title', 'alias']);
//		});
		
		// сброс фильтров
//		if($request->get('reset-filters')) {
//			$url = url($request->decodedPath());
//		}
		
		// покатегория
//		if($request->has('subcat') && $request->get('subcat') && !$request->get('reset-filters')) {
//			$subcategoryIds = $page->publishedChildren()
//				->whereIn('alias', explode(',', $request->get('subcat')))
//				->pluck('id');
//		} else {
//			$subcategoryIds = $subcategories->pluck('id');
//			$subcategoryIds[] = $page->id;
//		}
		
		// максимальная/минимальная цена
//		$subcat = $subcategories->pluck('id');
//		$subcat[] = $page->id;
//		$rangePrice = Product::select(['id', 'price'])
//			->whereIn('category_id', $subcat)
//			->where('products.is_published', '=', 1)
//			->where('products.published_at', '<=', Carbon::now())
//			->orderBy('price', 'DESC')
//			->get();
		
		// фильтрация по характеристикам (properties)
//		$postProperties = array_filter($request->except(['price', 'page', 'subcat']));
//		if($postProperties && !$request->get('reset-filters')) {
//			$properties = Property::whereIn('title', array_flip($postProperties))->get();
//		}
//		if(isset($properties)) {
//			foreach ($properties as $property) {
//				$query->whereHas('productProperties', function ($qu) use($properties, $request, $property) {
//					if($request->has($property->title)) {
//						$propertyValues = explode(',', $request->get($property->title));
//						$qu->where(function ($q) use($property, $propertyValues) {
//							$q->where('property_values.property_id', '=', $property->id);
//							$i = 0;
//							foreach ($propertyValues as $value) {
//								if(!$i) {
//									$q->where('property_values.value', '=', $value);
//								} else {
//									$q->orWhere('property_values.value', '=', $value);
//								}
//								$i++;
//							}
//						});
//					}
//				});
//			}
//		}
		
		// сортировка
		if($request->has('sortby') && !$request->get('reset-filters') && in_array($request->get('sortby'), Product::$sortingAttributes)) {
			$sortby = $request->get('sortby');
		} else {
			$sortby = $request->cookie('sortby', 'popular');
		}
		$direction = $request->has('direction') ? $request->get('direction') : $request->cookie('direction', 'DESC');
		
		// sort by sales (popular)
//		if($sortby == 'popular') {
//			$query->leftJoin('orders_products', 'orders_products.product_id', '=', 'products.id')
//				->addSelect(\DB::raw('COUNT(distinct orders_products.id) as `popular`'));
//
//			$query->leftJoin('products_reviews', 'products_reviews.product_id', '=', 'products.id')
//				->where(function($q) {
//					$q->where(function ($qu) {
//						$qu->where('products_reviews.parent_id', '=', 0);
//					})->orWhereNull('products_reviews.id');
//				})
//				->addSelect(\DB::raw('COUNT(distinct products_reviews.id) as reviews_count'));
//
//			$query->orderBy('popular', $direction);
//			$query->orderBy('reviews_count', $direction);
//		}
		// sort by rating
//		elseif($sortby == 'rating') {
//			$query->leftJoin('products_reviews', 'products_reviews.product_id', '=', 'products.id')
//				->where(function($q) {
//					$q->where(function ($qu) {
//						$qu->where('products_reviews.parent_id', '=', 0);
//					})->orWhereNull('products_reviews.id');
//				})
//				->addSelect(\DB::raw('CASE WHEN (products_reviews.is_published = 1 && products_reviews.rating != 0) THEN (SUM(products_reviews.rating) / COUNT(CASE WHEN (products_reviews.is_published = 1 && products_reviews.rating != 0) THEN 1 END)) ELSE 0 END as rating'));
//			$query->orderBy($sortby, $direction);
//		} else {
//			$query->orderBy($sortby, $direction);
//		}
//		$query->orderBy('products.published_at', $direction);
//		$query->groupBy('products.id');
		
		// кол-во на странице
		$limit = ($request->has('onpage') && !$request->get('reset-filters'))
			? $request->get('onpage')
			: $request->cookie('catalog-onpage', 12);
		
//		$products = $query->paginate($limit);
		
//		$properties = \Cache::rememberForever('properties', function() {
//			return Property::with(['values'])->get();
//		});
		
		$articles = Page::whereParentId($page->id)->whereIsContainer(0)->published()->get();
		
		if(!$request->ajax()) {
			return view('pages.category', compact('page', 'articles'));
		} else {
//			return \Response::json([
//				'success' => true,
//				'productsListHtml' => view('parts.productsList', compact('products'))->render(),
//				'countHtml' => view('parts.count')->with('models', $products)->render(),
//				'pageUrl' => isset($url) ? $url : $products->url($request->get('page', 1)),
//			])->withCookie(cookie()->forever('catalog-onpage', $limit))
//				->withCookie(cookie()->forever('sortby', strtolower($sortby)))
//				->withCookie(cookie()->forever('direction', strtolower($direction)));
		}
	}
	
	/**
	 * Question page
	 *
	 * @param $request
	 * @param $page
	 * @return mixed
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getQuestionPage($request, $page)
	{
		return view('pages.question', compact('page'));
	}
	
	/**
	 * HTML Sitemap page
	 *
	 * @param $request
	 * @param $page
	 * @return mixed
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function getSitemapPage($request, $page)
	{
		$sitemapItems = \Cache::rememberForever('sitemapItems', function() {
			return Page::whereParentId(0)
				->published()
				->get(['id', 'parent_id', 'user_id', 'type', 'is_container', 'alias', 'title', 'menu_title']);
		});
		
		return view('pages.sitemap', compact('page', 'sitemapItems'));
	}
	
	/**
	 * XML Sitemap
	 *
	 * @return \Illuminate\Contracts\View\View
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function sitemapXml()
	{
		$sitemapItems = Page::whereParentId(0)
			->published()
			->get(['id', 'parent_id', 'user_id', 'type', 'is_container', 'alias', 'title', 'menu_title', 'updated_at', 'published_at']);
		
		$content = \View::make('pages.sitemapXml', compact('sitemapItems'))->render();
		
		return response($content)->header('Content-Type', 'text/xml');
	}
	
	/**
	 * Sending letter from contact form
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function sendLetter(Request $request)
	{
		if($request->ajax()) {
			$data = $request->all();
			$data['updated_at'] = null;
			$validator = \Validator::make($data, Letter::rules());
			
			if($validator->fails()) {
				return \Response::json([
					'success' => false,
					'message' => 'Письмо не отправлено. Исправьте ошибки.',
					'errors' => $validator->errors()
				]);
			}
			
			if($letter = Letter::create($data)) {
				
				Notification::forAllUsers(Notification::TYPE_NEW_LETTER, [
					'[linkToLetter]' => route('admin.letters.show', ['id' => $letter->id]),
					'[letterFromEmail]' => $letter->email,
					'[letterFromName]' => $letter->name,
					'[letterSubject]' => $letter->subject,
					'[letterText]' => $letter->message,
					'[letterCreatedAt]' => $letter->created_at,
				]);
				
				return \Response::json([
					'success' => true,
					'message' => 'Ваше письмо успешно отправлено!',
				]);
			}
		}
	}
	
	/**
	 * Requesting call
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function requestCall(Request $request)
	{
		if($request->ajax()) {
			$data = $request->all();
			$messages = [
				'name.required' => 'Введите Ваше имя',
				'phone.required' => 'Введите Ваш номер телефона'
			];
			$validator = \Validator::make($data, RequestedCall::rules(), $messages);
			
			if($validator->fails()) {
				return \Response::json([
					'success' => false,
					'message' => 'Запрос не отправлен. Исправьте ошибки.',
					'errors' => $validator->errors()
				]);
			}
			
			if($call = RequestedCall::create($data)) {
				Notification::forAllUsers(Notification::TYPE_NEW_REQUESTED_CALL, [
					'[linkToCall]' => route('admin.calls.edit', ['id' => $call->id]),
					'[userName]' => $call->name,
					'[userPhone]' => $call->phone,
				]);
				
				return \Response::json([
					'success' => true,
					'message' => 'Ваш запрос успешно отправлен! Менеджер свяжется с вами в течение рабочего дня call-центра.',
				]);
			}
		}
	}
	
	/**
	 * Remember in cookie
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function rememberInCookie(Request $request)
	{
		if($request->ajax() && $request->get('key')) {
			return \Response::json([
				'success' => true,
			])->withCookie(cookie()->forever($request->get('key'), $request->get('value')));
		}
	}
    
}