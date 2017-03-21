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

/*
 * Routes for developers mode (comment out in production mode)
 */
Route::pattern('parentOne', '/^(?!.*(_debugbar).*$)/xs');


/*
 * Autorization
 */
Auth::routes();
// Activation user.
Route::get('activate/{id}/{token}', '\App\Http\Controllers\Auth\RegisterController@activation')->name('activation');
// Autorization by Social Networks
Route::get('/social_login/{provider}', '\App\Http\Controllers\Auth\SocialController@login')->name('login.social');
Route::get('/social_login/callback/{provider}', '\App\Http\Controllers\Auth\SocialController@callback')->name('login.social.callback');

/*
 * Pages
 */
Route::get('/', 'PagesController@index');

Route::get('sitemap.xml', ['as' => 'sitemapXml', 'uses' => 'PagesController@sitemapXml']);

Route::get('{parentOne}/{parentTwo}/{parentThree}/{page}{suffix}', ['uses' => 'PagesController@pageFourLevel'])->where('suffix', '.html');
Route::get('{parentOne}/{parentTwo}/{page}{suffix}', ['uses' => 'PagesController@pageThreeLevel'])->where('suffix', '.html');
Route::get('{parentOne}/{page}{suffix}', ['uses' => 'PagesController@pageTwoLevel'])->where('suffix', '.html');
Route::get('{page}{suffix}', ['uses' => 'PagesController@pageOneLevel'])->where('suffix', '.html');

Route::get('{parentOne}/{parentTwo}/{parentThree}/{page}', ['uses' => 'PagesController@pageFourLevel']);
Route::get('{parentOne}/{parentTwo}/{page}', ['uses' => 'PagesController@pageThreeLevel']);
Route::get('{parentOne}/{page}', ['uses' => 'PagesController@pageTwoLevel']);
Route::get('{page}', ['uses' => 'PagesController@pageOneLevel']);