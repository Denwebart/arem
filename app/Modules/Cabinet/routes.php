<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

Route::group(['module' => 'Cabinet', 'prefix' => 'cabinet', 'middleware' => ['web', 'auth'], 'namespace' => 'Modules\Cabinet\Controllers'], function () {
	
	Route::get('/', ['as' => 'cabinet.index', 'uses' => 'CabinetController@index']);
	
});