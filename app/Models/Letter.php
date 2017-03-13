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
		'read_at'
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