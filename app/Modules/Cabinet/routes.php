<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

Route::group(['module' => 'Cabinet', 'prefix' => 'user', 'middleware' => ['web', 'auth'], 'namespace' => 'Modules\Cabinet\Controllers'], function () {
	Route::get('/{login}', ['as' => 'user.profile', 'uses' => 'CabinetController@profile']);
	
	Route::get('/{login}/cars', ['as' => 'user.cars', 'uses' => 'CabinetController@cars']);
	
	Route::get('/{login}/questions', ['as' => 'user.questions', 'uses' => 'CabinetController@questions']);
	
	Route::get('/{login}/comments', ['as' => 'user.comments', 'uses' => 'CabinetController@comments']);
	
	Route::get('/{login}/answers', ['as' => 'user.answers', 'uses' => 'CabinetController@answers']);
	
	Route::get('/{login}/saved', ['as' => 'user.saved', 'uses' => 'CabinetController@saved']);
	
	Route::get('/{login}/subscriptions', ['as' => 'user.subscriptions', 'uses' => 'CabinetController@subscriptions']);
	
	Route::get('/{login}/friends', ['as' => 'user.friends', 'uses' => 'CabinetController@friends']);
	
	Route::get('/{login}/notifications', ['as' => 'user.notifications', 'uses' => 'CabinetController@notifications']);
	
	Route::get('/{login}/messages', ['as' => 'user.messages', 'uses' => 'CabinetController@messages']);
	Route::get('/{login}/messages/{companion}', ['as' => 'user.dialog', 'uses' => 'CabinetController@dialog']);
});