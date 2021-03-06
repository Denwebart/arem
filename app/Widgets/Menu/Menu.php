<?php
/**
 * Class Menu
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Widgets\Menu;

class Menu
{
	private $menuItems = [];

	public function __construct()
	{
		// доделать cache
		$this->menuItems = \Cache::rememberForever('menuItems', function() {
			return \App\Models\Menu::getMenuItems();
		});
	}

	/**
	 * Get menu items
	 *
	 * @param $type
	 * @return array|mixed
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	private function getMenuItems($type)
	{
		return isset($this->menuItems[$type]) ? $this->menuItems[$type] : [];
	}
	
	/**
	 * Main menu
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function main()
	{
		return (string) view('widget.menu::main')
			->with('menuItems', $this->getMenuItems(\App\Models\Menu::TYPE_MAIN))
			->render();
	}
	
	/**
	 * Information menu
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function info()
	{
		return (string) view('widget.menu::info')
			->with('menuItems', $this->getMenuItems(\App\Models\Menu::TYPE_INFO))
			->render();
	}
	
	/**
	 * System menu (contact and sitemap pages)
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function system()
	{
		return (string) view('widget.menu::system')
			->with('menuItems', $this->getMenuItems(\App\Models\Menu::TYPE_SYSTEM))
			->render();
	}
	
}