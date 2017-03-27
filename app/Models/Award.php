<?php
/**
 * Class Award
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
	protected $table = 'awards';
	
	/**
	 * Get award url
	 *
	 * @param string $sufix
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getUrl($sufix = '.html') {
		// доделать - оптимизировать
		$page = Page::find(Page::ID_AWARDS_PAGE);
		return $page
			? url($page->alias . '/' . $this->alias . $sufix)
			: null;
	}
}