<?php
/**
 * Class CabinetController
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Modules\Cabinet\Controllers;

class CabinetController extends Controller
{
	/**
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('cabinet::cabinet.index');
	}
}