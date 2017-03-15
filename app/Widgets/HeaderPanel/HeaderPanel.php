<?php
/**
 * Class HeaderPanel
 *
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */

namespace Widgets\HeaderPanel;

use App\Models\Letter;
use Illuminate\Support\Facades\Auth;

class HeaderPanel
{
	public function show()
	{
		$notifications = $this->getNewNotifications();
		$messages = $this->getNewMessages();
		$letters = $this->getNewLetters();
		
		return view('widget.headerPanel::index')
			->with('limit', 5)
			->with('notifications', $notifications)
			->with('messages', $messages)
			->with('letters', $letters);
	}
	
	public function getNewNotifications() {
		return Auth::user()->notifications()
			->orderBy('created_at', 'DESC')
			->orderBy('id', 'DESC')
			->get();
	}
	
	public function getNewMessages() {
		return Auth::user()->receivedMessages()
			->new()
			->whereNull('deleted_recipient')
			->get();
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