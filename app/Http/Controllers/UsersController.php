<?php

namespace App\Http\Controllers;

use App\Models\User;

class UsersController extends Controller
{
	/**
	 * Show the application main page.
	 *
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function users() {
		
		$users = User::active()->get();
		
		return view('users.users', compact('users'));
	}
}