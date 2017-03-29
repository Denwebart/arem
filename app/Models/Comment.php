<?php
/**
 * Class Comment
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Comment
 *
 * @property int $id
 * @property bool $is_answer
 * @property int $parent_id
 * @property int $user_id
 * @property int $ip_id
 * @property string $user_email
 * @property string $user_name
 * @property int $page_id
 * @property bool $is_published
 * @property bool $is_deleted
 * @property int $votes_like
 * @property int $votes_dislike
 * @property string $comment
 * @property bool $mark
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $published_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $children
 * @property-read \App\Models\Page $page
 * @property-read \App\Models\Comment $parent
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereIpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereIsAnswer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereIsDeleted($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereIsPublished($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereMark($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment wherePageId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereUserEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereUserName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereVotesDislike($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Comment whereVotesLike($value)
 * @mixin \Eloquent
 */
class Comment extends Model
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
	 * Parent of menu item
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function parent()
	{
		return $this->belongsTo(Comment::class, 'parent_id');
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
		return $this->hasMany(Comment::class, 'parent_id');
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
}