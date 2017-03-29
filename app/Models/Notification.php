<?php
/**
 * Class Notification
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Notification
 *
 * @property int $id
 * @property int $user_id
 * @property bool $type
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Notification whereUserId($value)
 * @mixin \Eloquent
 */
class Notification extends Model
{
	protected $table = "notifications";
	
	protected $fillable = ['user_id', 'type', 'message'];
	
	public static $rules = [
		'user_id' => 'required|numeric',
		'type' => 'required|numeric',
		'message' => 'required|max:500',
	];
	
	const TYPE_POINTS_FOR_COMMENT_ADDED = 1;
	const TYPE_POINTS_FOR_ANSWER_ADDED = 2;
	const TYPE_POINTS_FOR_ARTICLE_ADDED = 3;
	const TYPE_POINTS_FOR_BEST_ANSWER_ADDED = 4;
	const TYPE_POINTS_FOR_COMMENT_REMOVED = 5;
	const TYPE_POINTS_FOR_ANSWER_REMOVED = 6;
	const TYPE_POINTS_FOR_ARTICLE_REMOVED = 7;
	const TYPE_POINTS_FOR_BEST_ANSWER_REMOVED = 8;
	const TYPE_BANNED = 9;
	const TYPE_UNBANNED = 10;
	const TYPE_NEW_COMMENT = 11;
	const TYPE_NEW_ANSWER = 12;
	const TYPE_COMMENT_LIKED = 13;
	const TYPE_COMMENT_DISLIKED = 14;
	const TYPE_ANSWER_LIKED = 15;
	const TYPE_ANSWER_DISLIKED = 16;
	const TYPE_BEST_ANSWER = 17;
	const TYPE_PAGE_LIKE = 18; // TYPE_RATING
	const TYPE_PAGE_DISLIKE = 32; // TYPE_RATING
	const TYPE_SUBSCRIBED_ON_QUESTION = 19;
	const TYPE_SUBSCRIBED_ON_JOURNAL = 20;
	const TYPE_UNSUBSCRIBED_FROM_QUESTION = 21;
	const TYPE_UNSUBSCRIBED_FROM_JOURNAL = 22;
	const TYPE_ROLE_CHANGED = 23;
	const TYPE_COMMENT_DELETED = 24;
	const TYPE_ANSWER_DELETED = 25;
	const TYPE_QUESTION_DELETED = 26;
	/* for only admin */
	const TYPE_FOR_ADMIN_NEW_USER = 27;
	const TYPE_FOR_ADMIN_NEW_QUESTION = 28;
	const TYPE_FOR_ADMIN_NEW_ARTICLE = 29;
	const TYPE_FOR_ADMIN_NEW_ANSWER = 30;
	const TYPE_FOR_ADMIN_NEW_COMMENT = 31;
	
	public static $typeIcons = [
		self::TYPE_POINTS_FOR_COMMENT_ADDED => '<i class="fa fa-money success"></i>',
		self::TYPE_POINTS_FOR_ANSWER_ADDED => '<i class="fa fa-money success"></i>',
		self::TYPE_POINTS_FOR_ARTICLE_ADDED => '<i class="fa fa-money success"></i>',
		self::TYPE_POINTS_FOR_BEST_ANSWER_ADDED => '<i class="fa fa-money success"></i>',
		self::TYPE_POINTS_FOR_COMMENT_REMOVED => '<i class="fa fa-money warning"></i>',
		self::TYPE_POINTS_FOR_ANSWER_REMOVED => '<i class="fa fa-money warning"></i>',
		self::TYPE_POINTS_FOR_ARTICLE_REMOVED => '<i class="fa fa-money warning"></i>',
		self::TYPE_POINTS_FOR_BEST_ANSWER_REMOVED => '<i class="fa fa-money warning"></i>',
		self::TYPE_BANNED => '<i class="fa fa-lock danger"></i>',
		self::TYPE_UNBANNED => '<i class="fa fa-unlock-alt success"></i>',
		self::TYPE_NEW_COMMENT => '<i class="fa fa-comment info"></i>',
		self::TYPE_NEW_ANSWER => '<i class="fa fa-comments info"></i>',
		self::TYPE_COMMENT_LIKED => '<i class="fa fa-thumbs-up info"></i>', // <- NEW
		self::TYPE_COMMENT_DISLIKED => '<i class="fa fa-thumbs-up warning"></i>',
		self::TYPE_ANSWER_LIKED => '<i class="fa fa-thumbs-up info"></i>',
		self::TYPE_ANSWER_DISLIKED => '<i class="fa fa-thumbs-up warning"></i>',
		self::TYPE_BEST_ANSWER => '<i class="fa fa-check success"></i>',
		self::TYPE_PAGE_LIKE => '<i class="fa fa-thumbs-up info"></i>',
		self::TYPE_PAGE_DISLIKE => '<i class="fa fa-thumbs-down info"></i>',
		self::TYPE_SUBSCRIBED_ON_QUESTION => '<i class="fa fa-newspaper-o info"></i>',
		self::TYPE_SUBSCRIBED_ON_JOURNAL => '<i class="fa fa-newspaper-o info"></i>',
		self::TYPE_UNSUBSCRIBED_FROM_QUESTION => '<i class="fa fa-newspaper-o danger"></i>',
		self::TYPE_UNSUBSCRIBED_FROM_JOURNAL => '<i class="fa fa-newspaper-o danger"></i>',
		self::TYPE_ROLE_CHANGED => '<i class="fa fa-user-circle-o info"></i>',
		self::TYPE_COMMENT_DELETED => '<i class="fa fa-comment danger"></i>',
		self::TYPE_ANSWER_DELETED => '<i class="fa fa-comments danger"></i>',
		self::TYPE_QUESTION_DELETED => '<i class="fa fa-question danger"></i>',
		/* for only admin */
		self::TYPE_FOR_ADMIN_NEW_USER => '<i class="fa fa-user-plus success"></i>',
		self::TYPE_FOR_ADMIN_NEW_QUESTION => '<i class="fa fa-question success"></i>',
		self::TYPE_FOR_ADMIN_NEW_ARTICLE => '<i class="fa fa-newspaper-o success"></i>',
		self::TYPE_FOR_ADMIN_NEW_ANSWER => '<i class="fa fa-comments success"></i>',
		self::TYPE_FOR_ADMIN_NEW_COMMENT => '<i class="fa fa-comment success"></i>',
	];
	
	public static $notificationSettingColumns = [
		self::TYPE_POINTS_FOR_COMMENT_ADDED => ['notification_points'],
		self::TYPE_POINTS_FOR_ANSWER_ADDED => ['notification_points'],
		self::TYPE_POINTS_FOR_ARTICLE_ADDED => ['notification_points'],
		self::TYPE_POINTS_FOR_BEST_ANSWER_ADDED => ['notification_points'],
		self::TYPE_POINTS_FOR_COMMENT_REMOVED => ['notification_points'],
		self::TYPE_POINTS_FOR_ANSWER_REMOVED => ['notification_points'],
		self::TYPE_POINTS_FOR_ARTICLE_REMOVED => ['notification_points', 'notification_deleted'],
		self::TYPE_POINTS_FOR_BEST_ANSWER_REMOVED => ['notification_points', 'notification_deleted'],
		self::TYPE_BANNED => ['notification_banned'],
		self::TYPE_UNBANNED => ['notification_banned'],
		self::TYPE_NEW_COMMENT => ['notification_new_comments'],
		self::TYPE_NEW_ANSWER => ['notification_new_answers'],
		self::TYPE_COMMENT_LIKED => ['notification_like_dislike'],
		self::TYPE_COMMENT_DISLIKED => ['notification_like_dislike'],
		self::TYPE_ANSWER_LIKED => ['notification_like_dislike'],
		self::TYPE_ANSWER_DISLIKED => ['notification_like_dislike'],
		self::TYPE_BEST_ANSWER => ['notification_best_answer'],
		self::TYPE_PAGE_LIKE => ['notification_rating'],
		self::TYPE_PAGE_DISLIKE => ['notification_rating'],
		self::TYPE_SUBSCRIBED_ON_QUESTION => ['notification_question_subscribed'],
		self::TYPE_SUBSCRIBED_ON_JOURNAL => ['notification_journal_subscribed'],
		self::TYPE_UNSUBSCRIBED_FROM_QUESTION => ['notification_question_subscribed'],
		self::TYPE_UNSUBSCRIBED_FROM_JOURNAL => ['notification_journal_subscribed'],
		self::TYPE_ROLE_CHANGED => ['notification_role_changed'],
		self::TYPE_COMMENT_DELETED => ['notification_deleted', 'notification_points'],
		self::TYPE_ANSWER_DELETED => ['notification_deleted', 'notification_points'],
		self::TYPE_QUESTION_DELETED => ['notification_deleted'],
		/* for only admin */
		self::TYPE_FOR_ADMIN_NEW_USER => ['notification_all_new_user'],
		self::TYPE_FOR_ADMIN_NEW_QUESTION => ['notification_all_new_question'],
		self::TYPE_FOR_ADMIN_NEW_ARTICLE => ['notification_all_new_article'],
		self::TYPE_FOR_ADMIN_NEW_ANSWER => ['notification_all_new_answer'],
		self::TYPE_FOR_ADMIN_NEW_COMMENT => ['notification_all_new_comment'],
	];
	
	/**
	 * User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}