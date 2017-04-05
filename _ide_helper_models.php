<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Advertising
 *
 * @property int $id
 * @property bool $type
 * @property bool $area
 * @property int $position
 * @property string $title
 * @property bool $is_show_title
 * @property bool $access
 * @property string $code
 * @property bool $limit
 * @property string $description
 * @property bool $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AdvertisingPageType[] $pageTypes
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereAccess($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereArea($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereIsActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereIsShowTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereLimit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Advertising whereUpdatedAt($value)
 */
	class Advertising extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AdvertisingPageType
 *
 * @property int $advertising_id
 * @property int $page_type
 * @property-read \App\Models\Advertising $advertising
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AdvertisingPageType whereAdvertisingId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\AdvertisingPageType wherePageType($value)
 */
	class AdvertisingPageType extends \Eloquent {}
}

namespace App\Models{
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
	class Award extends \Eloquent {}
}

namespace App\Models{
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
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ip
 *
 * @property int $id
 * @property string $ip
 * @property bool $is_banned
 * @property string $ban_at
 * @property string $unban_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Letter[] $letters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereBanAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereIsBanned($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereUnbanAt($value)
 * @mixin \Eloquent
 */
	class Ip extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Letter
 *
 * @property int $id
 * @property int $user_id
 * @property int $ip_id
 * @property string $user_name
 * @property string $user_email
 * @property string $subject
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $read_at
 * @property-read \App\Models\Ip $ip
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter new()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereIpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereReadAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereSubject($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUserEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUserName($value)
 * @mixin \Eloquent
 */
	class Letter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menu
 *
 * @property int $id
 * @property bool $type
 * @property int $page_id
 * @property int $parent_id
 * @property bool $position
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Menu[] $children
 * @property-read \App\Models\Page $page
 * @property-read \App\Models\Menu $parent
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Menu whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Menu wherePageId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Menu whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Menu wherePosition($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Menu whereType($value)
 * @mixin \Eloquent
 */
	class Menu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Message
 *
 * @property int $id
 * @property int $user_id_sender
 * @property int $user_id_recipient
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $read_at
 * @property string $deleted_sender
 * @property string $deleted_recipient
 * @property-read \App\Models\User $recipient
 * @property-read \App\Models\User $sender
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message new()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereDeletedRecipient($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereDeletedSender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereReadAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereUserIdRecipient($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereUserIdSender($value)
 * @mixin \Eloquent
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
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
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NotificationMessage
 *
 * @property int $id
 * @property string $message
 * @property string $description
 * @property string $variables
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationMessage whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationMessage whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationMessage whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\NotificationMessage whereVariables($value)
 * @mixin \Eloquent
 */
	class NotificationMessage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property int $parent_id
 * @property int $user_id
 * @property bool $type
 * @property string $alias
 * @property bool $is_published
 * @property bool $is_container
 * @property string $title
 * @property string $menu_title
 * @property string $image
 * @property string $image_alt
 * @property int $views
 * @property int $votes_like
 * @property int $votes_dislike
 * @property string $introtext
 * @property string $content
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $published_at
 * @property string $meta_title
 * @property string $meta_desc
 * @property string $meta_key
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Page[] $children
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Menu[] $menus
 * @property-read \App\Models\Page $parent
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereImageAlt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereIntrotext($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereIsContainer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereIsPublished($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMenuTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMetaDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMetaKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereMetaTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereViews($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereVotesDislike($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page whereVotesLike($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Page published()
 */
	class Page extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property bool $category
 * @property bool $type
 * @property string $title
 * @property string $description
 * @property string $value
 * @property bool $is_active
 * @property string $validation_rule
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereIsActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereValidationRule($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Setting whereValue($value)
 * @mixin \Eloquent
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property bool $role
 * @property string $alias
 * @property string $login
 * @property string $email
 * @property bool $is_active
 * @property bool $is_banned
 * @property bool $is_online
 * @property string $last_activity
 * @property string $avatar
 * @property string $firstname
 * @property string $lastname
 * @property string $city
 * @property string $country
 * @property int $points
 * @property string $car_brand
 * @property string $car_model
 * @property string $profession
 * @property string $description
 * @property bool $sex
 * @property string $birthday
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $activation_code
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Page[] $pages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Message[] $receivedMessages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Message[] $sentMessages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserSocialAccount[] $socialAccounts
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User active()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereActivationCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereBirthday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCarBrand($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCarModel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereFirstname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereIsActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereIsBanned($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereIsOnline($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLastActivity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLastname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePoints($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereProfession($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRole($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereSex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserIp
 *
 * @property int $user_id
 * @property int $ip_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\Ip $ip
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserIp whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserIp whereIpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserIp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserIp whereUserId($value)
 * @mixin \Eloquent
 */
	class UserIp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserSocialAccount
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider_user_id
 * @property string $provider
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserSocialAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserSocialAccount whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserSocialAccount whereProvider($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserSocialAccount whereProviderUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserSocialAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\UserSocialAccount whereUserId($value)
 * @mixin \Eloquent
 */
	class UserSocialAccount extends \Eloquent {}
}

