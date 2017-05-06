<?php
/**
 * Class SiteRule
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteRule extends Model
{
	protected $table = 'site_rules';
	
	protected $fillable = [
		'position',
		'is_published',
		'title',
		'description',
	];
}