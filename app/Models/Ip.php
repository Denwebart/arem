<?php
/**
 * Class Ip
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ip
 *
 * @property int $id
 * @property string $ip
 * @property bool $is_banned
 * @property string $ban_at
 * @property string $unban_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Letter[] $letters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereBanAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereIp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereIsBanned($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Ip whereUnbanAt($value)
 * @mixin \Eloquent
 */
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