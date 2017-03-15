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
	public $notifications;
	public $messages;
	public $letters;
	
	public function show()
	{
		if(Auth::check()) {
			$this->notifications = $this->getNewNotifications();
			$this->messages = $this->getNewMessages();
			$this->letters = $this->getNewLetters();
		}
		
		return view('widget.headerPanel::index')
			->with('limit', 5)
			->with('notifications', $this->notifications)
			->with('messages', $this->messages)
			->with('letters', $this->letters);
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