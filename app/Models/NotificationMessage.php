<?php
/**
 * Class NotificationMessage
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationMessage extends Model
{
	protected $table = "notifications_messages";
	
	/*
	 * Id in notifications_message table = type in notifications table
	 */
	public $incrementing = false;
	public $timestamps = false;
	
	protected $fillable = ['message', 'description'];
	
	public static $rules = [
		'message' => 'required|max:1000',
		'description' => 'max:500',
	];
}