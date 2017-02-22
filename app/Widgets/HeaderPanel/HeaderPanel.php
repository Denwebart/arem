<?php
/**
 * Class HeaderPanel
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Widgets\HeaderPanel;

class HeaderPanel
{
	public function show()
	{
		return view('widget.headerPanel::index');
	}
}