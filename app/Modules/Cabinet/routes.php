<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

Route::group(['module' => 'Cabinet', 'prefix' => 'user', 'middleware' => ['web', 'auth'], 'namespace' => 'Modules\Cabinet\Controllers'], function () {
	Route::get('/{login}', ['as' => 'user.profile', 'uses' => 'CabinetController@profile']);
	Route::get('/{login}/notifications', ['as' => 'user.notifications', 'uses' => 'CabinetController@notifications']);
	Route::get('/{login}/messages', ['as' => 'user.messages', 'uses' => 'CabinetController@messages']);
});