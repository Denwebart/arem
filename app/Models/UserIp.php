<?php
/**
 * Class UserIp
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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