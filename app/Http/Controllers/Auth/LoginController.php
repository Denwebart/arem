<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
	
	/**
	 * Replaced method for ajax
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function sendLoginResponse(Request $request)
	{
		$request->session()->regenerate();
		
		$this->clearLoginAttempts($request);
		
		if ($request->ajax()) {
			return response()->json([
				'success' => true,
				'status' => 200,
				'user' => $this->guard()->user(),
				'redirectPath' => $this->redirectPath()
			]);
		}
		
		return $this->authenticated($request, $this->guard()->user())
			?: redirect()->intended($this->redirectPath());
	}
	
	/**
	 * Replaced method for ajax
	 *
	 * @param Request $request
	 * @return $this|\Illuminate\Http\JsonResponse
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	protected function sendFailedLoginResponse(Request $request)
	{
		if ($request->ajax()) {
			return response()->json([
				'error' => Lang::get('auth.failed')
			], 401);
		}
		
		return redirect()->back()
			->withInput($request->only($this->username(), 'remember'))
			->withErrors([
				$this->username() => Lang::get('auth.failed'),
			]);
	}
}
