<?php
/**
 * Class Controller
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Modules\Cabinet\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends \App\Http\Controllers\Controller
{
	public $user;
	
	public function __construct(Request $request)
	{
		parent::__construct();
		
		$this->user = Auth::check() && Auth::user()->alias == $request->login
			? Auth::user()
			: User::whereAlias($request->login)->firstOrFail();

		\View::share('user', $this->user);
	}
}