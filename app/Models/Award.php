<?php
/**
 * Class Award
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Award
 *
 * @property int $id
 * @property string $key
 * @property string $alias
 * @property string $title
 * @property string $image
 * @property string $description
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereMetaDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereMetaKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereMetaTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Award whereTitle($value)
 * @mixin \Eloquent
 */
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
	public function getUrl($sufix = '.html')
	{
		// доделать - оптимизировать
		$page = Page::find(Page::ID_AWARDS_PAGE);
		return $page
			? url($page->alias . '/' . $this->alias . $sufix)
			: null;
	}
}