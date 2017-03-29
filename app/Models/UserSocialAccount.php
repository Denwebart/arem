<?php
/**
 * Class UserSocialAccount
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class UserSocialAccount extends Model
{
	
	protected $table = "users_social_accounts";

    protected $fillable = ['user_id', 'provider_user_id', 'provider'];
	
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
