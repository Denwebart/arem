<?php
/**
 * Class Menu
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = 'menus';

	public $timestamps = false;

	/**
	 * Type of the menu (value of "type" field)
	 */
	const TYPE_MAIN   = 1;
	const TYPE_INFO   = 2;
	const TYPE_SYSTEM = 3;

	public static $types = [
		self::TYPE_MAIN   => 'Главное меню',
		self::TYPE_INFO   => 'Информационное меню',
		self::TYPE_SYSTEM => 'Системное меню',
	];

	protected $fillable = ['parent_id', 'page_id', 'type', 'position'];

	protected static $rules = [
		'type' => 'integer|min:1|max:3',
		'page_id' => 'required|integer',
		'position' => 'integer',
	];
	
	public static function boot()
	{
		parent::boot();
		
		static::deleting(function($menu) {
			$menu->children()->delete();
		});
	}
	
	/**
	 * Page
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function page()
	{
		return $this->belongsTo(Page::class);
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
		return $this->belongsTo(Menu::class, 'parent_id');
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
		return $this->hasMany(Menu::class, 'parent_id');
	}

	/**
	 * Get all menu items as array
	 *
	 * @param integer $type
	 * @return array
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public static function getMenuItems($type = null)
	{
		$query = self::whereParentId(0)
			->has('page')
			->with([
				'page' => function($query) {
					$query->select('id', 'alias', 'type', 'is_container', 'parent_id', 'title', 'menu_title');
				},
				'children' => function($query) {
					$query->has('page');
				},
				'children.page' => function($query) {
					$query->select('id', 'alias', 'type', 'is_container', 'parent_id', 'title', 'menu_title');
				},
				'children.page.parent' => function($query) {
					$query->select('id', 'alias', 'type', 'is_container', 'parent_id', 'title', 'menu_title');
				},
			]);
			if($type) {
				$query = $query->whereType($type);
			}
		$allItems = $query->orderBy('position', 'ASC')->get();

		foreach ($allItems as $item) {
			if($type) {
				$result[$item->id] = $item;
			} else {
				$result[$item->type][$item->id] = $item;
			}
		}

		return isset($result) ? $result : [];
	}
}
