<?php
/**
 * Class PageTag
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageTag extends Model
{
	protected $table = 'pages_tags';
	
	protected $primaryKey = ['page_id','tag_id'];
	
	public $incrementing = false;
	
	public $timestamps = false;
	
	protected $fillable = [
		'tag_id',
		'page_id',
	];
	
	public function page()
	{
		return $this->belongsTo(Page::class);
	}
	
	public function user()
	{
		return $this->belongsTo(Tag::class);
	}
}