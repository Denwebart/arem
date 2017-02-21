<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Helpers\Translit;
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
	    return User::create([
		    'login' => $data['login'],
		    'email' => $data['email'],
		    'alias' => Translit::make($data['login']),
		    'password' => bcrypt($data['password']),
	    ]);
    }
}
