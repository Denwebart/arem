<?php
/**
 * Class Letter
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * App\Models\Letter
 *
 * @property int $id
 * @property int $user_id
 * @property int $ip_id
 * @property string $user_name
 * @property string $user_email
 * @property string $subject
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $read_at
 * @property-read \App\Models\Ip $ip
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter new()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereIpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereReadAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereSubject($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUserEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Letter whereUserName($value)
 * @mixin \Eloquent
 */
class Letter extends Model
{
	protected $table = "letters";
	
	protected $fillable = [
		'user_id',
		'ip_id',
		'user_name',
		'user_email',
		'subject',
		'message',
		'read_at',
	];
	
	public static $rules = [
		'user_id' => 'required_without_all:user_name,user_email|numeric',
		'user_name' => 'required_without_all:user_id|regex:/^[A-Za-zА-Яа-яЁёЇїІіЄєЭэ \-\']+$/u|min:3|max:50',
		'user_email' => 'required_without_all:user_id|email|max:100',
		'subject' => 'min:3|max:500',
		'message' => 'required|min:5',
	];
	
	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot()
	{
		parent::boot();
		
		static::addGlobalScope('newFirst', function (Builder $builder) {
			$builder->orderBy('created_at', 'DESC');
		});
		
		static::creating(function($letter) {
			//
		});
		
		static::deleting(function($letter) {
			if(!$letter->deleted_at) {
				$letter->deleted_at = Carbon::now();
				$letter->save();
				return false;
			}
		});
	}
	
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
	
	/**
	 * Ip
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function ip()
	{
		return $this->belongsTo(Ip::class);
	}
	
	/**
	 * Scope a query to only include unreaded letters.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeNew($query)
	{
		return $query->whereNull('read_at')->whereNull('deleted_at');
	}
	
}