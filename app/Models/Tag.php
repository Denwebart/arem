<?php
/**
 * Class Tag
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table = 'tags';
	
	public $timestamps = false;
	
	protected $fillable = [
		'image',
		'title',
	];
	
	public static $rules = [
		'image' => 'mimes:jpeg,bmp,png|max:2048',
		'title' => 'required|unique:tags,title,:id|max:100',
	];
	
	public static $messages = [
		'title.unique' => 'Такой тег уже существует.',
	];
	
	public static function boot()
	{
		parent::boot();
		
		static::deleted(function($tag)
		{
			$tag->pagesTags()->delete();
		});
	}
	
	/**
	 * Pages with tag
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function pages()
	{
		return $this->belongsToMany(Page::class, 'pages_tags');
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
	 * Get tag url
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getUrl()
	{
		// доделать - оптимизировать
		$page = Page::find(Page::ID_TAGS_PAGE);
		return $page
			? url($page->alias . '/' . $this->alias)
			: null;
	}
	
	/**
	 * All tags grouped by alphabet
	 *
	 * @return array
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public static function getByAlphabet()
	{
		$tags = self::orderBy('title', 'ASC')
			->whereHas('pages', function($query) {
				$query->whereIsPublished(1)->where('published_at', '<', date('Y-m-d H:i:s'));
			})->with(['pages' => function($query) {
				$query->select('id', 'is_published', 'published_at');
			}])->get();
		$tagsByAlphabet = [];
		foreach ($tags as $item) {
			$codeArray = preg_split('//u', mb_strtoupper($item->title), -1, PREG_SPLIT_NO_EMPTY);
			$tagsByAlphabet[$codeArray[0]][] = $item;
		}
		return $tagsByAlphabet;
	}
}