<?php
/**
 * Class User
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

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
	protected $defaultImagePath = '/img/default-avatar.png';
	
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
	 * Male
	 */
	const SEX_MALE = 0;
	const SEX_FEMALE = 1;
	
	public static $sex = [
		self::SEX_MALE => 'Мужской',
		self::SEX_FEMALE => 'Женский',
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
			$user->socialAccounts()->delete();
			$user->notifications()->delete();
			$user->receivedMessages()->delete();
			$user->sentMessages()->delete();
			$user->pages()->delete();
		});
	}
	
	/**
	 * Pages of the user
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function pages()
	{
		return $this->hasMany(Page::class);
	}
	
	/**
	 * User social accounts
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function socialAccounts()
	{
		return $this->hasMany(UserSocialAccount::class);
	}
	
	/**
	 * User notifications
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}
	
	/**
	 * Received (incoming) messages
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function receivedMessages()
	{
		return $this->hasMany(Message::class, 'user_id_recipient');
	}
	
	/**
	 * Sent (outgiong) messages
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function sentMessages()
	{
		return $this->hasMany(Message::class, 'user_id_sender');
	}
	
	/**
	 * Scope a query to only include active users.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeActive($query)
	{
		return $query->where('role', '!=', self::ROLE_NONE)->whereNull('remember_token');
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
	 * Get user's journal url
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getJournalUrl() {
		// доделать - оптимизировать
		$page = Page::whereType(Page::TYPE_JOURNAL)->first();
		return $page
			? url($page->alias . '/' . $this->alias)
			: null;
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
	 * Get user full name
	 *
	 * @return string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getFullName()
	{
		$separator = ($this->firstname && $this->lastname) ? ' ' : '';
		return $this->firstname . $separator . $this->lastname;
	}
	
	/**
	 * Get user car brand and model
	 *
	 * @return string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getCar()
	{
		$separator = ($this->car_brand && $this->car_model) ? ' ' : '';
		return $this->car_brand . $separator . $this->car_model;
	}
	
	/**
	 * Get user location (country and city)
	 *
	 * @return string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function getLocation()
	{
		$separator = ($this->country && $this->city) ? ', ' : '';
		return $this->country . $separator . $this->city;
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
			'alias' => Translit::make($login),
			'login' => $login,
			'email' => $providerUser->getEmail() ? $providerUser->getEmail() : 'null-email-' . $login, // доделать : не выбирается email на одноклассниках
			'avatar' => $providerUser->getAvatar(),
			'firstname' => array_key_exists(0, $nameArray) ? $nameArray[0] : '',
			'lastname' => array_key_exists(1, $nameArray) ? $nameArray[1] : '',
			'birthday' => array_key_exists('birthday', $user)
				? date('Y-m-d H:i:s', strtotime($user['birthday']))
				: null,
		]);
	}
}
