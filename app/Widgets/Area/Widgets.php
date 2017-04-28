<?php
/**
 * Class Area
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Widgets\Area;

use App\Models\Advertising;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class Widgets
{
	public function show($type, $limit, $advertisingModel)
	{
		switch ($type) {
			case (Advertising::WIDGET_QUESTIONS_TABS):
				return $this->questionsTabs($limit, $advertisingModel);
				break;
			case (Advertising::WIDGET_ARTICLES_TABS):
				return $this->articlesTabs($limit, $advertisingModel);
				break;
			case (Advertising::WIDGET_ANSWERS_TABS):
				return $this->answersTabs($limit, $advertisingModel);
				break;
			case (Advertising::WIDGET_COMMENTS_TABS):
				return $this->commentsTabs($limit, $advertisingModel);
				break;
			case (Advertising::WIDGET_TAGS):
				return $this->tags($limit, $advertisingModel);
				break;
			case (Advertising::WIDGET_USERS_RATING):
				return $this->usersRating($limit, $advertisingModel);
				break;
		}
	}
	
	/**
	 * Questions of users (tabs: new, best, popular)
	 *
	 * @param int $limit
	 * @param $advertisingModel
	 * @return mixed|string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function questionsTabs($limit = 3, $advertisingModel)
	{
		$cache = Cache::has('widgets.questionsTabs') ? Cache::get('widgets.questionsTabs') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$query = Page::select('id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'alias', 'title')
			->whereType(Page::TYPE_QUESTION)
			->published()
			->with([
				'parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'alias', 'login', 'avatar', 'firstname', 'lastname', 'is_online', 'last_activity');
				},
				'comments' => function($query) {
					$query->select('id', 'page_id', 'mark')->published()->answer();
				},
			])
			->withCount([
				'comments AS bestComments' => function($query) {
					$query->published()->answer()->whereMark(Comment::MARK_BEST);
				},
			])
			->limit($limit);
			
		$query = $query->orderBy('published_at', 'DESC');
		
		$questions = $query->get();
		
		$view = (string) view('widget.area::widgets.questionsTabs', compact('questions', 'advertisingModel'))->render();
		
		$cache[$limit] = $view;
		Cache::forever('widgets.questionsTabs.' . $limit, $cache);
		return $view;
	}
	
	/**
	 * Articles of users (tabs: new, best, popular)
	 *
	 * @param int $limit
	 * @param $advertisingModel
	 * @return mixed|string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function articlesTabs($limit = 3, $advertisingModel)
	{
		$cache = Cache::has('widgets.articlesTabs') ? Cache::get('widgets.articlesTabs') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$query = Page::select('id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'alias', 'title', 'image', 'image_alt', 'views', 'votes_like', 'votes_dislike')
			->whereType(Page::TYPE_ARTICLE)
			->published()
			->with([
				'parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'alias', 'login');
				},
			])
			->limit($limit);
		
		$query = $query->orderBy('published_at', 'DESC');
		
		$articles = $query->get();
		
		$view = (string) view('widget.area::widgets.articlesTabs', compact('articles', 'advertisingModel'))->render();
		
		$cache[$limit] = $view;
		Cache::forever('widgets.articlesTabs.' . $limit, $cache);
		return $view;
	}
	
	/**
	 * Answers of users (tabs: new, best, popular)
	 *
	 * @param int $limit
	 * @param $advertisingModel
	 * @return mixed|string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function answersTabs($limit = 3, $advertisingModel)
	{
		$cache = Cache::has('widgets.answersTabs') ? Cache::get('widgets.answersTabs') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$query = Comment::select('id', 'parent_id', 'user_id', 'is_answer', 'published_at', 'is_published', 'votes_like', 'votes_dislike', 'comment')
			->published()
			->answer()
			->with([
				'page' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'page.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'page.parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'alias', 'login', 'avatar', 'firstname', 'lastname', 'is_online', 'last_activity');
				},
			])
			->limit($limit);
		
		$query = $query->orderBy('published_at', 'DESC');
		
		$comments = $query->get();
		
		$view = (string) view('widget.area::widgets.commentsTabs', compact('comments', 'advertisingModel'))->render();
		
		$cache[$limit] = $view;
		Cache::forever('widgets.answersTabs.' . $limit, $cache);
		return $view;
	}
	
	/**
	 * Comments of users (tabs: new, best, popular)
	 *
	 * @param int $limit
	 * @param $advertisingModel
	 * @return mixed|string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function commentsTabs($limit = 3, $advertisingModel)
	{
		$cache = Cache::has('widgets.commentsTabs') ? Cache::get('widgets.commentsTabs') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$query = Comment::select('id', 'parent_id', 'user_id', 'is_answer', 'published_at', 'is_published', 'votes_like', 'votes_dislike', 'comment')
			->published()
			->comment()
			->with([
				'page' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'page.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'page.parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'alias', 'login', 'avatar', 'firstname', 'lastname', 'is_online', 'last_activity');
				},
			])
			->limit($limit);
		
		$query = $query->orderBy('published_at', 'DESC');
		
		$comments = $query->get();
		
		$view = (string) view('widget.area::widgets.commentsTabs', compact('comments', 'advertisingModel'))->render();
		
		$cache[$limit] = $view;
		Cache::forever('widgets.commentsTabs.' . $limit, $cache);
		return $view;
	}
	
	/**
	 * Popular tags
	 *
	 * @param int $limit Количество тегов
	 * @return string
	 */
	public function tags($limit = 20, $advertisingModel)
	{
		$cache = Cache::has('widgets.tags') ? Cache::get('widgets.tags') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$tags = Tag::select('id', 'alias', 'title')
			->has('pages')
			->with([
				'pages' => function($query) {
					$query->select('id');
				}
			])
			->whereHas('pages', function($query) {
				$query->published();
			})
			->limit($limit)
			->get()
			->sortBy(function($tag) {
				return $tag->pages->count();
			})->reverse();
		
		$view = (string) view('widget.area::widgets.tags', compact('tags', 'advertisingModel'))->render();
		
		$cache[$limit] = $view;
		Cache::forever('widgets.tags.' . $limit, $cache);
		return $view;
	}
	
	/**
	 * Rating of users
	 *
	 * @param int $limit
	 * @param $advertisingModel
	 * @return bool
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function usersRating($limit = 5, $advertisingModel)
	{
		$cache = Cache::has('widgets.usersRating') ? Cache::get('widgets.usersRating') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$users = User::select('id', 'role', 'alias', 'login', 'is_online', 'last_activity', 'avatar', 'firstname', 'lastname', 'rank', 'rating', 'sex')
			->active()
			->limit($limit)
			->orderBy('rating', 'DESC')
			->get();
		
		$view = (string) view('widget.area::widgets.usersRating', compact('users', 'advertisingModel'))->render();
		
		$cache[$limit] = $view;
		Cache::forever('widgets.usersRating.' . $limit, $cache);
		return $view;
	}
	
	
	/**
	 * Самое новое (по дате публикации)
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function latest($limit = 7)
	{
		$cache = Cache::has('widgets.latest') ? Cache::get('widgets.latest') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$pages = Page::whereIsPublished(1)
			->where('published_at', '<', date('Y-m-d H:i:s'))
			->whereIsContainer(0)
			->where('parent_id', '!=', 0)
			->where('type', '!=', Page::TYPE_QUESTION)
			->orderBy('published_at', 'DESC')
			->limit($limit)
			->with([
				'parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'login', 'alias');
				},
			])
			->get(['id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'alias', 'title']);
		
		$view = (string) view('widgets.sidebar.latest', compact('pages'))->render();
		$cache[$limit] = $view;
		Cache::put('widgets.latest', $cache, 60);
		return $view;
	}
	
	/**
	 * Лучшие по голосам
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function best($limit = 10)
	{
		$cache = Cache::has('widgets.best') ? Cache::get('widgets.best') : [];
		
		if(isset($cache[$limit])) {
			$pages = $cache[$limit];
		} else {
			$pages = Page::select([DB::raw('id, parent_id, published_at, is_published, title, alias, votes, voters, (votes/voters) AS rating')])
				->whereIsPublished(1)
				->where('published_at', '<', date('Y-m-d H:i:s'))
				->whereIsContainer(0)
				->where('parent_id', '!=', 0)
				->orderBy('rating', 'DESC')
				->limit($limit)
				->with([
					'parent' => function($query) {
						$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
					},
					'parent.parent' => function($query) {
						$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
					},
					'user' => function($query) {
						$query->select('id', 'login', 'alias');
					},
				])
				->get(['id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'alias', 'title', 'votes', 'voters']);
			
			$cache[$limit] = $pages;
			Cache::put('widgets.best', $cache, 60);
		}
		
		return (string) view('widget.area::widgets.best', compact('pages'))->render();
	}
	
	/**
	 * Худшие по голосам
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function notBest($limit = 10)
	{
		$cache = Cache::has('widgets.notBest') ? Cache::get('widgets.notBest') : [];
		
		if(isset($cache[$limit])) {
			$pages = $cache[$limit];
		} else {
			$pages = Page::select([DB::raw('id, parent_id, published_at, is_published, title, alias, votes, voters, (votes/voters) AS rating')])
				->whereIsPublished(1)
				->where('published_at', '<', date('Y-m-d H:i:s'))
				->whereIsContainer(0)
				->where('parent_id', '!=', 0)
				->orderBy('rating', 'ASC')
				->limit($limit)
				->with([
					'parent' => function($query) {
						$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
					},
					'parent.parent' => function($query) {
						$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
					},
					'user' => function($query) {
						$query->select('id', 'login', 'alias');
					},
				])
				->get(['id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'alias', 'title', 'votes', 'voters']);
			
			$cache[$limit] = $pages;
			Cache::put('widgets.notBest', $cache, 60);
		}
		
		return (string) view('widget.area::widgets.notBest', compact('pages'))->render();
	}
	
	/**
	 * Самое популярное (по просмотрам)
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function popular($limit = 5)
	{
		$cache = Cache::has('widgets.popular') ? Cache::get('widgets.popular') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$pages = Page::whereIsPublished(1)
			->where('published_at', '<', date('Y-m-d H:i:s'))
			->whereIsContainer(0)
			->where('parent_id', '!=', 0)
			->orderBy('views', 'DESC')
			->limit($limit)
			->with([
				'parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'login', 'alias');
				},
			])
			->get(['id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'alias', 'title', 'views', 'image', 'image_alt']);
		
		$view = (string) view('widget.area::widgets.popular', compact('pages'))->render();
		$cache[$limit] = $view;
		Cache::put('widgets.popular', $cache, 60);
		return $view;
	}
	
	/**
	 * Аутсайдеры (последние по просмотрам)
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function unpopular($limit = 7)
	{
		$cache = Cache::has('widgets.unpopular') ? Cache::get('widgets.unpopular') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$pages = Page::whereIsPublished(1)
			->where('published_at', '<', date('Y-m-d H:i:s'))
			->whereIsContainer(0)
			->where('parent_id', '!=', 0)
			->orderBy('views', 'ASC')
			->limit($limit)
			->with([
				'parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'login', 'alias');
				},
			])
			->get(['id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'alias', 'title', 'views', 'image', 'image_alt']);
		
		$view = (string) view('widget.area::widgets.unpopular', compact('pages'))->render();
		$cache[$limit] = $view;
		Cache::put('widgets.unpopular', $cache, 60);
		return $view;
	}
	
	/**
	 * Комментарии (последние комментарии)
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function comments($limit = 9)
	{
		$cache = Cache::has('widgets.comments') ? Cache::get('widgets.comments') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$comments = Comment::whereIsPublished(1)
			->whereIsDeleted(0)
			->whereIsAnswer(0)
			->limit($limit)
			->with([
				'page' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id', 'user_id');
				},
				'page.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'page.parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'page.user' => function($query) {
					$query->select('id', 'login', 'alias');
				},
				'user' => function($query) {
					$query->select('id', 'login', 'alias', 'avatar', 'firstname', 'lastname', 'is_online', 'last_activity');
				},
			])
			->orderBy('created_at', 'DESC')
			->get(['id', 'parent_id', 'page_id', 'user_id', 'user_name', 'created_at', 'is_published', 'comment']);
		
		$view = (string) view('widget.area::widgets.comments', compact('comments'))->render();
		$cache[$limit] = $view;
		Cache::put('widgets.comments', $cache, Config::get('settings.userActivityTime'));
		return $view;
	}
	
	/**
	 * Ответы (лучшие ответы)
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function answers($limit = 9)
	{
		$cache = Cache::has('widgets.answers') ? Cache::get('widgets.answers') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$answers = Comment::whereIsPublished(1)
			->whereIsDeleted(0)
			->whereIsAnswer(1)
			->whereMark(Comment::MARK_BEST)
			->limit($limit)
			->with([
				'page' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id', 'user_id');
				},
				'page.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'page.parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'login', 'alias', 'avatar', 'firstname', 'lastname', 'is_online', 'last_activity');
				},
			])
			->orderBy('updated_at', 'DESC')
			->get(['id', 'parent_id', 'page_id', 'mark', 'is_answer', 'user_id', 'user_name', 'created_at', 'is_published', 'comment']);
		
		$view = (string) view('widget.area::widgets.answers', compact('answers'))->render();
		$cache[$limit] = $view;
		Cache::put('widgets.answers', $cache, Config::get('settings.userActivityTime'));
		return $view;
	}
	
	/**
	 * Вопросы пользователей (новые вопросы)
	 *
	 * @param int $limit Количество записей
	 * @return string
	 */
	public function questions($limit = 3)
	{
		$cache = Cache::has('widgets.questions') ? Cache::get('widgets.questions') : [];
		
		if(isset($cache[$limit])) {
			return $cache[$limit];
		}
		
		$questions = Page::whereType(Page::TYPE_QUESTION)
			->published()
			->limit($limit)
			->with([
				'parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'parent.parent' => function($query) {
					$query->select('id', 'type', 'alias', 'is_container', 'parent_id');
				},
				'user' => function($query) {
					$query->select('id', 'login', 'alias', 'avatar', 'firstname', 'lastname', 'is_online', 'last_activity');
				},
			])
			->orderBy('published_at', 'DESC')
			->get(['id', 'parent_id', 'user_id', 'type', 'published_at', 'is_published', 'is_container', 'alias', 'title']);
		
		$view = (string) view('widget.area::widgets.questions', compact('questions'))->render();
		
		$cache[$limit] = $view;
		Cache::put('widgets.questions', $cache, Config::get('settings.userActivityTime'));
		return $view;
	}
	
	
	
	/**
	 * Подменю
	 *
	 * @param int $page Текущая страница
	 * @return string
	 */
	public function submenu($page)
	{
		if($page->is_container) {
			if(Cache::has('widgets.sidebar.' . $page->id)) {
				$items = Cache::get('widgets.sidebar.' . $page->id);
			} else {
				$items = Page::select(DB::raw('pages.id, pages.alias, pages.title, pages.menu_title, menus.position, pages.is_published, pages.published_at, pages.parent_id, pages.is_container, count(children.id) as pagesCount'))
					->where('pages.parent_id', '=', $page->id)
					->where('pages.is_container', '=', 1)
					->where('pages.is_published', '=', 1)
					->where('pages.published_at', '<', date('Y-m-d H:i:s'))
					->with('parent')
					->join('menus', 'pages.id', '=', 'menus.page_id')
					->leftJoin(DB::raw('pages children'), 'pages.id', '=', 'children.parent_id')
//					->where('children.is_published', '=', 1)
//					->where('children.published_at', '<', date('Y-m-d H:i:s'))
					->groupBy('pages.id')
					->orderBy('menus.position', 'ASC')
					->orderBy('pages.id', 'ASC')
					->get();
				
				Cache::forever('widgets.sidebar.' . $page->id, $items);
			}
			
			return (string) view('widget.area::widgets.submenu', compact('items', 'page'))->render();
		}
	}
	
	/**
	 * Социальные закладки
	 *
	 * @return string
	 */
	public function socialButtons()
	{
		if(Cache::has('widgets.socialButtons')) {
			return Cache::get('widgets.socialButtons');
		} else {
			$view = (string) view('widget.area::widgets.socialButtons')->render();
			
			Cache::put('widgets.socialButtons', $view, 60);
			return $view;
		}
	}
}