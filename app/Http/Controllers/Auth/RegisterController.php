<?php

namespace App\Http\Controllers\Auth;

use App\Mail\ActivateAccount;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Helpers\Translit;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
	        'login'       => 'required|unique:users|max:10|regex:/^[0-9A-Za-zА-Яа-яЁёЇїІіЄєЭэ\-\']+$/u',
	        'email'       => 'required|unique:users|email|max:150',
	        'alias'       => 'unique:users',
	        'password'    => 'required|min:6|max:100|confirmed',
	        'is_agree'    => 'required|integer|in:1',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
	    $newUser = User::create([
		    'login' => $data['login'],
		    'email' => $data['email'],
		    'alias' => Translit::make($data['login']),
		    'password' => bcrypt($data['password']),
		    'is_agree' => $data['is_agree'],
	    ]);
	    
	    // Send user message for activation account.
	    Mail::to($newUser)->send(new ActivateAccount($newUser));
	    
	    return $newUser;
    }
	
	/**
	 * Replaced method for ajax (don't login after register, confirmation of registration)
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function register(Request $request)
	{
		$this->validator($request->all())->validate();
		
		event(new Registered($user = $this->create($request->all())));
		
		// доделать проверку, если зарегистрирован
		if ($request->ajax()) {
			return response()->json([
				'success' => true,
				'status' => 200,
				'user' => $this->guard()->user(),
				'message' => Lang::get('auth.afterRegistration')
			]);
		}
		
		// доделать, если не ajax
		return $this->registered($request, $user)
			?: redirect($this->redirectPath());
	}
	
	/**
	 * Activation user.
	 *
	 * @param $userId
	 * @param $token
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
	 * @author     It Hill (it-hill.com@yandex.ua)
	 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
	 */
	public function activation($userId, $token)
	{
		$user = User::findOrFail($userId);
		
		// Check token in user DB. if null then check data (user make first activation).
		if ($user->isActive()) {
			// Check token from url.
			if (md5($user->email) == $token) {
				// Change status and login user.
				$user->role = User::ROLE_USER;
				$user->save();
				
				\Session::flash('flash_message', trans('interface.ActivatedSuccess'));
				
				// Make login user.
				Auth::login($user, true);
			} else {
				// Wrong token.
				\Session::flash('flash_message_error', trans('interface.ActivatedWrong'));
			}
		} else {
			// User was activated early.
			\Session::flash('flash_message_error', trans('interface.ActivatedAlready'));
		}
		return redirect('/');
	}
}
