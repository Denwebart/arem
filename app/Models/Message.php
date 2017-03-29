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

/**
 * App\Models\Message
 *
 * @property int $id
 * @property int $user_id_sender
 * @property int $user_id_recipient
 * @property string $message
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $read_at
 * @property string $deleted_sender
 * @property string $deleted_recipient
 * @property-read \App\Models\User $recipient
 * @property-read \App\Models\User $sender
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message new()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereDeletedRecipient($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereDeletedSender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereReadAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereUserIdRecipient($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Message whereUserIdSender($value)
 * @mixin \Eloquent
 */
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
		'message' => 'required|max:5000',
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
	 * Sender
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function sender()
	{
		return $this->belongsTo(User::class, 'user_id_sender');
	}
	
	/**
	 * Recipient
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function recipient()
	{
		return $this->belongsTo(User::class, 'user_id_recipient');
	}
	
	/**
	 * Scope a query to only include unreaded mesages.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeNew($query)
	{
		return $query->whereNull('read_at');
	}
	
}