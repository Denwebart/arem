<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Widgets;

class ServiceProvider extends  \Illuminate\Support\ServiceProvider
{
	public function boot()
	{
		$widgets = config("widget.widgets");
		while(list(,$widget) = each($widgets)) {
			if(is_dir(__DIR__. '/' . ucfirst($widget) . '/Views')) {
				$this->loadViewsFrom(__DIR__. '/'. ucfirst($widget) . '/Views', 'widget.' . $widget);
			}
		}
	}
	
	public function register()
	{
		$widgets = config("widget.widgets");
		while(list(,$widget) = each($widgets)) {
			if(file_exists(__DIR__. '/' . ucfirst($widget) . '/routes.php')) {
				include __DIR__.  '/' . ucfirst($widget) . '/routes.php';
			}
		}
	}
}