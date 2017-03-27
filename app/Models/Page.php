<?php
/**
 * Class Page
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	protected $table = 'pages';
	
	/**
	 * Id страниц с контактной формы и карты сайта
	 */
	const ID_CONTACT_PAGE = 2;
	const ID_SITEMAP_PAGE = 3;
	const ID_AWARDS_PAGE  = 4;
	
	/**
	 * Type of the page (value of "type" field)
	 */
	const TYPE_PAGE        = 1;
	const TYPE_QUESTIONS   = 2;
	const TYPE_QUESTION    = 3;
	const TYPE_JOURNAL     = 4;
	const TYPE_ARTICLE     = 5;
	const TYPE_SYSTEM_PAGE = 6;
	
	public static $types = [
		self::TYPE_PAGE     => 'Страница',
		self::TYPE_QUESTION => 'Вопрос',
		self::TYPE_ARTICLE  => 'Статья',
		self::TYPE_SYSTEM_PAGE  => 'Системная страница',
	];
	
	protected $fillable = [
		'parent_id',
		'user_id',
		'type',
		'alias',
		'is_published',
		'is_container',
		'title',
		'menu_title',
		'image',
		'image_alt',
		'introtext',
		'content',
		'published_at',
		'meta_title',
		'meta_desc',
		'meta_key',
	];

	protected static $rules = [
		
	];
	
	public static function boot()
	{
		parent::boot();
		
		static::deleting(function($page) {
			if(count($page->menus)) {
				\Cache::forget('menuItems');
				$page->menus()->delete();
			}
			$page->children()->delete();
		});
	}

	/**
	 * Parent of menu item
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function parent()
	{
		return $this->belongsTo(Page::class, 'parent_id');
	}

	/**
	 * Children of menu item
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function children()
	{
		return $this->hasMany(Page::class, 'parent_id');
	}
	
	/**
	 * Author of the page
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	/**
	 * Items of menu
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function menus()
	{
		return $this->hasMany(Menu::class);
	}
	
	/**
	 * Scope a query to only include active pages.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeActive($query)
	{
		return $query->whereIsPublished(1)->where('published_at', '<=', Carbon::now());
	}
	
	/**
	 * Get page title (menu_title or title)
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getTitle()
	{
		return $this->menu_title ? $this->menu_title : $this->title;
	}
	
	/**
	 * Get page url
	 *
	 * @param string $sufix
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getUrl($sufix = '.html')
	{
		// доделать - рефакторинг?
		if(self::TYPE_ARTICLE != $this->type) {
			
			$sufix = (!$this->is_container && $this->alias != '/') ? $sufix : '';
			
			if($this->parent_id) {
				return url($this->parent->getUrl() . '/' . $this->alias . $sufix);
			} else {
				return url($this->alias . $sufix);
			}
			
		} else {
			$parentUrl = $this->parent_id ? ($this->parent) ? $this->parent->alias : '' : '';
			return url($parentUrl . '/' . $this->user->alias . '/' . $this->alias . $sufix);
		}
	}
}
