<?php
/**
 * Class SocialController
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\SocialAccountService;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Socialite;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
	use RedirectsUsers;
	
	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = '/';
	
	/**
	 * Login redirect path.
	 *
	 * @return string
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function redirectTo()
	{
		return url()->previous();
	}
	
	public function login($provider)
	{
		return Socialite::with($provider)->redirect();
	}
	
	public function callback(SocialAccountService $service, $provider)
	{
		$driver = Socialite::driver($provider);
		$user = $service->createOrGetUser($driver, $provider);
		
		Auth::login($user, true);
		
		return redirect($this->redirectPath()); //redirect()->intended('/');
	}
	
}