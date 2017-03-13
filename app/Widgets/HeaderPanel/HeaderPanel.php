<?php
/**
 * Class HeaderPanel
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Widgets\HeaderPanel;

use App\Models\Letter;

class HeaderPanel
{
	public function show()
	{
		$letters = $this->getNewLetters();
		return view('widget.headerPanel::index')
			->with('limit', 5)
			->with('letters', $letters);
	}
	
	public function getNewLetters() {
		return Letter::select('id', 'user_id', 'user_name', 'user_email', 'subject', 'created_at', 'read_at', 'deleted_at')
			->new()
			->with([
				'user' => function($query) {
					$query->select('id', 'login', 'alias', 'avatar', 'email', 'firstname', 'lastname');
				}
			])
			->get();
	}
}