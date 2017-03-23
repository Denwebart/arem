<?php
/**
 * Class Ip
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
	protected $table = 'ips';
	
	public $timestamps = false;
	
	protected $fillable = [
		'ip',
		'is_banned',
		'ban_at',
		'unban_at',
	];
	
	public static $rules = [
		'ip' => 'required|ip',
		'is_banned' => 'boolean',
	];
	
	/**
	 * Comments from current ip
	 *
	 * @return mixed
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
	
	/**
	 * Users from current ip
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function users()
	{
		return $this->hasMany(User::class);
	}
	
	/**
	 * Letters from current ip
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function letters()
	{
		return $this->hasMany(Letter::class);
	}
}