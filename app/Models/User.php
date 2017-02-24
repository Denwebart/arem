<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	
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
	
	
	/**
	 * Check is activated account
	 *
	 * @return bool
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
    public function isActive()
    {
    	return $this->role == self::ROLE_NONE && is_null($this->remember_token)
		    ? false : true;
    }
	
}
