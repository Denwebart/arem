<?php
/**
 * Class Advertising
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Advertising
 *
 * @property int $id
 * @property bool $type
 * @property bool $area
 * @property int $position
 * @property string $title
 * @property bool $is_show_title
 * @property bool $access
 * @property string $code
 * @property bool $limit
 * @property string $description
 * @property bool $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AdvertisingPageType[] $pageTypes
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereAccess($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereArea($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereIsActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereIsShowTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereLimit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Advertising extends Model
{
	protected $table = 'advertisings';
	
	
	public static function boot()
	{
		parent::boot();
		
		static::deleting(function($advertising) {
			$advertising->pageTypes()->delete();
		});
	}
	
	/**
	 * Areas
	 */
	const AREA_NONE           = 0;
	const AREA_LEFT_SIDEBAR   = 1;
	const AREA_RIGHT_SIDEBAR  = 2; // +
	const AREA_CONTENT_TOP    = 3; // +
	const AREA_CONTENT_MIDDLE = 4; // +
	const AREA_CONTENT_BOTTOM = 5; // +
	const AREA_SITE_BOTTOM    = 6;
	
	public static $areas = [
		self::AREA_NONE           => '- Не выбрана -',
		self::AREA_LEFT_SIDEBAR   => 'В левой колонке',
		self::AREA_RIGHT_SIDEBAR  => 'В правой колонке',
		self::AREA_CONTENT_TOP    => 'Над текстом страницы',
		self::AREA_CONTENT_MIDDLE => 'Под текстом страницы',
		self::AREA_CONTENT_BOTTOM => 'В самом низу страницы',
		self::AREA_SITE_BOTTOM    => 'Внизу сайта',
	];
	
	/**
	 * Access
	 */
	const ACCESS_FOR_ALL        = 1;
	const ACCESS_FOR_REGISTERED = 2;
	const ACCESS_FOR_GUEST      = 3;
	
	public static $access = [
		self::ACCESS_FOR_ALL        => 'Для всех',
		self::ACCESS_FOR_REGISTERED => 'Для зарегистрированных',
		self::ACCESS_FOR_GUEST      => 'Для незарегистрированных',
	];
	
	/**
	 * Active status (значение поля is_active)
	 */
	const INACTIVE = 0;
	const ACTIVE   = 1;
	
	public static $is_active = [
		self::INACTIVE => 'Не включен',
		self::ACTIVE   => 'Включен',
	];
	
	/**
	 * Types
	 */
	const TYPE_ADVERTISING = 1;
	const TYPE_WIDGET      = 2;
	
	public static $types = [
		self::TYPE_ADVERTISING => 'Реклама',
		self::TYPE_WIDGET      => 'Виджет',
	];
	
	/**
	 * Widgets
	 */
	const WIDGET_QUESTIONS_TABS = 1;
	const WIDGET_ARTICLES_TABS  = 2;
	const WIDGET_ANSWERS_TABS   = 3;
	const WIDGET_COMMENTS_TABS  = 4;
	const WIDGET_TAGS           = 5;
	const WIDGET_USERS_RATING   = 6;
	
	public static $widgets = [
		self::WIDGET_QUESTIONS_TABS => 'Воросы (вкладки: новые, лучшие, популярные)',
		self::WIDGET_ARTICLES_TABS  => 'Статьи пользователей (вкладки: новые, лучшие, популярные)',
		self::WIDGET_ANSWERS_TABS   => 'Ответы (вкладки: новые, лучшие, популярные)',
		self::WIDGET_COMMENTS_TABS  => 'Комментарии (вкладки: новые, лучшие, популярные)',
		self::WIDGET_TAGS           => 'Популярные теги',
		self::WIDGET_USERS_RATING   => 'Рейтинг пользователей',
	];
	
	protected $fillable = [
		'type',
		'area',
		'position',
		'access',
		'title',
		'is_show_title',
		'code',
		'limit',
		'description',
		'is_active',
	];
	
	public static $rules = [
		'type' => 'required|numeric',
		'area' => 'numeric',
		'position' => 'numeric',
		'access' => 'numeric',
		'title' => 'required|max:100',
		'is_show_title' => 'boolean',
		'code' => 'required',
		'limit' => 'numeric|min:0|max:100',
		'description' => 'max:1000',
		'is_active' => 'boolean',
	];
	
	/**
	 * Page types
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function pageTypes()
	{
		return $this->hasMany(AdvertisingPageType::class);
	}
}