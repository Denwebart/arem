<?php

namespace App\Models;

use App\Helpers\Translit;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	
	/**
	 * Path of avatar of user
	 */
	protected $imagePath = '/uploads/users/{alias}/';
	protected $defaultImagePath = '/img/uploads/avatar.jpg';
	
	/**
	 * Role
	 */
	const ROLE_NONE = 0;
	const ROLE_ADMIN = 1;
	const ROLE_MODERATOR = 2;
	const ROLE_USER = 3;
	
	public static $roles = [
		self::ROLE_NONE => 'Не задана',
		self::ROLE_ADMIN => 'Администратор',
		self::ROLE_MODERATOR => 'Модератор',
		self::ROLE_USER => 'Пользователь',
	];
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'role',
	    'alias',
	    'login',
	    'email',
	    'avatar',
	    'firstname',
	    'lastname',
	    'city',
	    'country',
	    'car_brand',
	    'car_model',
	    'profession',
	    'description',
	    'sex',
	    'birthday',
	    'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public static function boot()
	{
		parent::boot();
		
		static::creating(function($user) {
			//
		});
		
		static::deleting(function($user) {
			$user->userSocialAccounts()->delete();
		});
	}
	
	/**
	 * User social accounts
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function userSocialAccounts()
	{
		return $this->hasMany(UserSocialAccount::class);
	}
	
	/**
	 * Check is activated account
	 *
	 * @return bool
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
    public function isActive()
    {
    	return $this->role == self::ROLE_NONE && is_null($this->remember_token)
		    ? false : true;
    }
	
	/**
	 * Get user's avatar path
	 *
	 * @param bool $default
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getAvatarUrl($default = true) {
		// доделать с учетом незарегистрированных пользователей
		return $this->avatar
			? (
				preg_match("~^(?:f|ht)tps?://~i", $this->avatar)
				? $this->avatar
				: $this->imagePath //$this->getImagePath('avatar')
			)
			: ($default
				? url($this->defaultImagePath)
				: null);
	}
    
	/**
	 * Creating user by social provider
	 *
	 * @param $providerUser
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public static function createBySocialProvider($providerUser)
	{
		// доделать сохранение изображения на сервер
		$nameArray = explode(" ", $providerUser->getName());
		$user = $providerUser->user ? $providerUser->user : [];
		$login = $providerUser->getNickname()
			? ucfirst($providerUser->getNickname())
			: ucfirst(Translit::make($providerUser->getName()));
		
		return self::create([
			'role' => User::ROLE_USER,
			'alias' => Translit::make($providerUser->getNickname()),
			'login' => $login,
			'email' => $providerUser->getEmail() ? $providerUser->getEmail() : 'email', // доделать : не выбирается email на одноклассниках
			'avatar' => $providerUser->getAvatar(),
			'firstname' => array_key_exists(0, $nameArray) ? $nameArray[0] : '',
			'lastname' => array_key_exists(1, $nameArray) ? $nameArray[1] : '',
			'birthday' => array_key_exists('birthday', $user)
				? date('Y-m-d H:i:s', strtotime($user['birthday']))
				: null,
		]);
	}
}
