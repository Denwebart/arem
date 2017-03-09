<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the application main page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }
	
	/**
	 * Show the application pages.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function page()
	{
		return view('pages.page');
	}
    
}