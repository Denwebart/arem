<?php
/**
 * Class Message
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $table = "messages";
	
	protected $fillable = [
		'user_id_sender',
		'user_id_recipient',
		'message',
		'read_at',
		'deleted_sender',
		'deleted_recipient',
	];
	
	public static $rules = [
		'user_id_sender' => 'required|numeric',
		'user_id_recipient' => 'required|numeric',
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
//		return $this->belongsTo(User::class);
	}
	
	/**
	 * Scope a query to only include unreaded letters.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeNew($query)
	{
//		return $query->whereNull('read_at')->whereNull('deleted_at');
	}
	
}