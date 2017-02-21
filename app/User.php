<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	
	/**
	 * Role
	 */
	const ROLE_ADMIN = 1;
	const ROLE_MODERATOR = 2;
	const ROLE_USER = 3;
	
	public static $roles = [
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
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
}
