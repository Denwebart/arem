<?php
/**
 * Class UserSocialAccount
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
