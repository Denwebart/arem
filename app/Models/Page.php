<?php
/**
 * Class Page
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use App\Helpers\Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Page
 *
 * @property int $id
 * @property int $parent_id
 * @property int $user_id
 * @property bool $type
 * @property string $alias
 * @property bool $is_published
 * @property bool $is_container
 * @property string $title
 * @property string $menu_title
 * @property string $image
 * @property string $image_alt
 * @property int $views
 * @property int $votes_like
 * @property int $votes_dislike
 * @property string $introtext
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $published_at
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Page[] $children
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Menu[] $menus
 * @property-read \App\Models\Page $parent
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereImageAlt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereIntrotext($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereIsContainer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereIsPublished($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMenuTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMetaDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMetaKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMetaTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereViews($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereVotesDislike($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereVotesLike($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page published()
 */
class Page extends Model
{
	protected $table = 'pages';
	
	/**
	 * Path of the main image
	 */
	protected $imagePath = '/uploads/pages/{id}/';
	protected $defaultImagePath = '/img/default-image.svg';
	
	protected $pageSufix = '.html';
	
	/**
	 * Id страниц с контактной формы и карты сайта
	 */
	const ID_MAIN_PAGE    = 1;
	const ID_CONTACT_PAGE = 2;
	const ID_SITEMAP_PAGE = 3;
	const ID_AWARDS_PAGE  = 4;
	const ID_TAGS_PAGE    = 6;
	
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
	
	public static $pagesIcons = [
		self::ID_MAIN_PAGE     => 'fa fa-home',
		self::ID_CONTACT_PAGE  => 'fa fa-envelope-o',
		self::ID_SITEMAP_PAGE  => 'fa fa-sitemap',
		self::ID_AWARDS_PAGE   => 'fa fa-trophy',
		self::ID_TAGS_PAGE     => 'fa fa-tags',
	];
	
	/**
	 * Статус публикации (значение поля is_published)
	 */
	const UNPUBLISHED = 0;
	const PUBLISHED   = 1;
	
	public static $is_published = [
		self::UNPUBLISHED => 'Не опубликована',
		self::PUBLISHED   => 'Опубликована',
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
			if(count($page->pagesTags)) {
				$page->pagesTags()->delete();
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
	 * Comments of the page (answers and comments)
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function comments()
	{
		return $this->hasMany(Comment::class);
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
	 * Tags of the page
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function tags()
	{
		return $this->belongsToMany(Tag::class, 'pages_tags');
	}
	
	/**
	 * Pages Tags
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function pagesTags()
	{
		return $this->hasMany(PageTag::class);
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
	public function scopePublished($query)
	{
		return $query->whereIsPublished(1)->where('published_at', '<=', Carbon::now());
	}
	
	/**
	 * Is main page?
	 * @return bool
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function isMain()
	{
		return $this->id == self::ID_MAIN_PAGE ? true : false;
	}
	
	/**
	 * Can page be deleted?
	 * @return bool
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function canBeDeleted()
	{
		return ($this->type != self::TYPE_SYSTEM_PAGE) ? true : false;
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
	 * Get introtext (from field introtext or content)
	 *
	 * @param int $limit default 500
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getIntrotext($limit = 500)
	{
		return $this->introtext ? $this->introtext : Str::limit($this->content, $limit, '...');
	}
	
	/**
	 * Get attribute "alt" of the main image (from field image_alt or title)
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getImageAlt()
	{
		return $this->image_alt ? $this->image_alt : $this->title;
	}
	
	/**
	 * Get page url
	 *
	 * @param bool $withoutDomain
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getUrl($withoutDomain = false)
	{
		// доделать - рефакторинг?
		if(self::TYPE_ARTICLE != $this->type) {
			
			$sufix = (!$this->is_container && $this->alias != '/') ? $this->pageSufix : '';
			
			if($this->parent_id) {
				$url = $this->parent->getUrl($withoutDomain) . '/' . $this->alias . $sufix;
			} else {
				$url = $this->alias == '/' ? '/' : '/' . $this->alias . $sufix;
			}
			
		} else {
			$parentUrl = $this->parent_id ? (($this->parent) ? $this->parent->alias . '/' : '') : '';
			$userUrl = $this->user_id ? (($this->user) ? $this->user->alias . '/' : '') : '';
			$url = $parentUrl . $userUrl . $this->alias . $this->pageSufix;
		}
		
		return $withoutDomain ? $url : url($url);
	}
	
	/**
	 * Get page parents
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getBreadcrumbs()
	{
		// доделать - рефакторинг?
		if(self::TYPE_ARTICLE != $this->type) {
			if($this->parent_id) {
				return
					array_merge(
						$this->parent->getBreadcrumbs(),
						[
							[
								'url' => $this->parent->getUrl(),
								'title' => $this->parent->getTitle(),
							]
						]
					);
			} else {
				return [];
			}
		} else {
			return array_merge(
				$this->parent->getBreadcrumbs(),
				[
					[
						'url' => $this->user->getJournalUrl(),
						'title' => $this->user->login,
					],
					[
						'url' => $this->parent->getUrl(),
						'title' => $this->parent->getTitle(),
					]
				]
			);
		}
	}
	
	/**
	 * Get url of the main image
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
//	public function getImageUrl($default = true)
//	{
//		// доделать
//		return $this->image
//			? url($this->defaultImagePath)
//			: ($default
//				? url($this->defaultImagePath)
//				: null);
//	}
	
	/**
	 * Get url of the main image
	 *
	 * @param null $prefix (null, 'origin', 'full', 'mini')
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getImageUrl($prefix = null)
	{
		$prefix = is_null($prefix) ? '' : ($prefix . '_');
		return $this->image ? asset($this->imagePath . $this->id . '/' . $prefix . $this->image) : '';
	}
	
	/**
	 * Get default image url
	 *
	 * @param null $prefix (null, 'origin', 'full', 'mini')
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getDefaultImageUrl($prefix = null)
	{
		$prefix = is_null($prefix) ? '' : ($prefix . '_');
		return asset($this->defaultImagePath . $prefix . $this->defaultImageName);
	}
	
	/**
	 * Getting the path for loading images through the editor
	 *
	 * @return string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getImageEditorPath() {
		return $this->imagePath . $this->id . '/editor/';
	}
	
	/**
	 * Get a temporary path for loading an image
	 *
	 * @return string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getTempPath() {
		return '/uploads/temp/' . \Illuminate\Support\Str::random(20) . '/';
	}
	
	/**
	 * Moving images from a temporary folder
	 *
	 * @param $tempPath
	 * @param string $field
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function saveEditorImages($tempPath, $field = 'content')
	{
		$moveDirectory = File::copyDirectory(public_path($tempPath), public_path($this->getImageEditorPath()));
		if($moveDirectory) {
			File::deleteDirectory(public_path($tempPath));
		}
		
		return str_replace($tempPath, $this->getImageEditorPath(), $this->$field);
	}
	
	/**
	 * Deliting images wich where uploaded by editor
	 *
	 * @return bool
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function deleteEditorImages()
	{
		$fieldsValue = $this->introtext . $this->content;
		// Deleting files from directory
		if(File::exists(public_path($this->getImageEditorPath()))) {
			$files = File::allFiles(public_path($this->getImageEditorPath()));
			foreach($files as $file)
			{
				if(strpos($fieldsValue, $file->getFilename()) === false) {
					if(File::exists($file)) {
						$filename = $file->getPath() . $file->getFilename();
						File::delete($filename);
					}
				}
			}
		}
		
		return true;
	}
}
