<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();
// Activation user.
Route::get('activate/{id}/{token}', '\App\Http\Controllers\Auth\RegisterController@activation')->name('activation');
// Autorization by Social Networks
Route::get('/social_login/{provider}', '\App\Http\Controllers\Auth\SocialController@login');
Route::get('/social_login/callback/{provider}', '\App\Http\Controllers\Auth\SocialController@callback');

Route::get('/home', 'HomeController@index');
Route::get('/page-1', 'HomeController@index');
Route::get('/page-2', 'HomeController@index');
Route::get('/page-3', 'HomeController@index');
