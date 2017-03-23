<?php
/**
 * Class Comment
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */


namespace App\Models;


class Comment
{
	const VOTE_LIKE = 'like';
	const VOTE_DISLIKE = 'dislike';
	
	const MARK_BEST = 1;
	
	protected $table = 'comments';
	
	protected $fillable = [
		'is_answer',
		'parent_id',
		'user_id',
		'ip_id',
		'user_email',
		'user_name',
		'page_id',
		'is_published',
		'comment',
		'published_at',
	];
	
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
}