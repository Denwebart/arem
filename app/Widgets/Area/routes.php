<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

Route::group(['middleware' => ['web'], 'namespace' => 'Widgets\Area'], function () {
	
	Route::post('/widget_questions_tabs', ['as' => 'widget.area.questionsTabs', 'uses' => 'Widgets@questionsTabs']);
	
});