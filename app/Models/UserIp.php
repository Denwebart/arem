<?php
/**
 * Class UserIp
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserIp extends Model
{
	protected $table = 'users_ips';
	
	protected $primaryKey = ['user_id','ip_id'];
	
	public $incrementing = false;
	
	protected $fillable = [
		'user_id',
		'ip_id'
	];
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function ip()
	{
		return $this->belongsTo(Ip::class);
	}
}