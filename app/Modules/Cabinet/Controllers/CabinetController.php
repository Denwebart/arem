<?php
/**
 * Class CabinetController
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Modules\Cabinet\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
	
	public function index(Request $request)
	{
		$user = \Auth::check()
			? \Auth::user()
			: User::whereLogin($request->get('login'))->firstOrFail();
			
		return view('cabinet::cabinet.index')->with('user', $user);
	}
}