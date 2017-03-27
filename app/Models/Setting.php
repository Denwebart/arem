<?php
/**
 * Class Setting
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	protected $table = 'settings';
	
	protected $imagePath = '/uploads/settings/{id}';
	
	/**
	 * Types of the settings (values variant of "type" field)
	 */
	const TYPE_BOOLEAN = 1;
	const TYPE_INTEGER = 2;
	const TYPE_TEXT    = 3;
	const TYPE_STRING  = 4;
	const TYPE_HTML    = 5;
	const TYPE_IMAGE   = 6;
	
	public static $types = [
		self::TYPE_BOOLEAN => 'Логическое значение',
		self::TYPE_INTEGER => 'Целое число',
		self::TYPE_TEXT    => 'Длинный текст',
		self::TYPE_STRING  => 'Короткий текст',
		self::TYPE_HTML    => 'HTML-код',
		self::TYPE_IMAGE   => 'Изображение',
	];
	
	/**
	 * Published status (values variant of "is_active" field)
	 */
	const INACTIVE = 0;
	const ACTIVE   = 1;
	
	public static $is_active = [
		self::INACTIVE => 'Отключена',
		self::ACTIVE   => 'Включена',
	];
	
	/**
	 * Categories of the settings (values variant of "category" field)
	 */
	const CATEGORY_SITE         = 1;
	const CATEGORY_CONTACT_PAGE = 2;
	const CATEGORY_SYSTEM       = 3;
	
	public static $categories = [
		self::CATEGORY_SITE         => 'Общие настройки сайта',
		self::CATEGORY_CONTACT_PAGE => 'Настройки для страницы с контактами',
		self::CATEGORY_SYSTEM       => 'Системные настройки',
	];
	
	/**
	 * Site logo
	 */
	const THEME_VALUE_DEFAULT = '';
	const THEME_VALUE_NEW_YEAR = 'new-year';
	const THEME_VALUE_HALLOWEEN = 'halloween';
	const THEME_VALUE_8_MARCH = '8-march';
	
	public static $themeValues = [
		self::THEME_VALUE_DEFAULT => 'Обычная',
		self::THEME_VALUE_NEW_YEAR => 'Новогодняя',
		self::THEME_VALUE_HALLOWEEN => 'Halloween',
		self::THEME_VALUE_8_MARCH => '8 марта',
	];
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'value',
		'is_active',
	];
	
	/**
	 * @var array Validation rules
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected static $rules = [
		'is_active' => 'boolean',
	];
	
	/**
	 * Get validation rules for current setting
	 *
	 * @return array
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getRules()
	{
		$rules = self::$rules;
		$rules['value'] = $this->validation_rule;
		return $rules;
	}
	
	/**
	 * Get validation message for current setting
	 *
	 * @return array
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getMessages()
	{
		$messages = [
//			'map.latitude' => [
//				'regex' => 'Поле должно содержать правильные географические координаты (в градусах).',
//			],
//			'map.longitude' => [
//				'regex' => 'Поле должно содержать правильные географические координаты (в градусах).',
//			],
		];
		
		return isset($messages[$this->key]) ? $messages[$this->key] : [];
	}
	
	public static function boot()
	{
		parent::boot();
		
		static::saving(function($setting) {
			\Cache::forget('settings.setting-key-' . $setting->key);
			\Cache::forget('settings.category-' . $setting->category);
			\Cache::forget('settings');
		});
		
		static::deleting(function($setting) {
			\Cache::forget('settings.setting-key-' . $setting->key);
			\Cache::forget('settings.category-' . $setting->category);
			\Cache::forget('settings');
		});
	}
	
	/**
	 * Path of the image
	 *
	 * @return string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getImagePath()
	{
		return $this->imagePath;
	}
	
	/**
	 * Get image url
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getImageUrl()
	{
		return $this->value
			? asset($this->imagePath . $this->key . '/' . $this->value)
			: '';
	}
	
	/**
	 * Get image path
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getImagesPath()
	{
		return public_path() . $this->imagePath . $this->key . '/';
	}
}