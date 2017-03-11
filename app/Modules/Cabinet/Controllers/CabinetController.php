<?php
/**
 * Class CabinetController
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Modules\Cabinet\Controllers;

use Illuminate\Http\Request;

class CabinetController extends Controller
{
	/**
	 * Main page of the user profile
	 *
	 * @param Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function profile(Request $request)
	{
		return view('cabinet::cabinet.index');
	}
	
	/**
	 * All notifications of user (only owner)
	 *
	 * @param Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function notifications(Request $request)
	{
		return view('cabinet::cabinet.index');
	}
}