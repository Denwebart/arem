<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@if(count($messages))
    <a href="#" class="notification dropdown-button"><i class="fa fa-paper-plane-o dropdown-arrow"></i></a>
    <div class="dropdown-container">
        <div class="container-header">
            <div class="title">
                Сообщений:
                <span class="count">
                @if($limit < count($messages))
                        {{ $limit }} из
                    @endif
                    {{ count($messages) }}
            </span>
            </div>
            <a href="{{ route('user.messages', ['login' => Auth::user()->alias]) }}" class="pull-right">
                Все
                <i class="fa fa-angle-right pull-right"></i>
            </a>
        </div>
        <div class="delimiter"></div>
        <div class="container-body">
            <ul class="list messages-list">
                <li>
                    <a href="profile-dialog.html">
                        <img src="img/uploads/avatar.jpg" alt="" class="avatar">
                        <span class="small-text">Vasya, 2 мин. назад</span>
                        <span class="text">
                        Здравствуйте! Хотел поблагодарить за помощь в ремонте автомобиля ...
                    </span>
                    </a>
                    <a href="#" class="delete-button">
                        <i class="fa fa-close"></i>
                    </a>
                </li>
                <li>
                    <a href="profile-dialog.html">
                        <img src="img/uploads/default-avatar.png" alt="" class="avatar">
                        <span class="small-text">Den, 2 ч. назад</span>
                        <span class="text">
                        Привет, Вань!
                    </span>
                    </a>
                    <a href="#" class="delete-button">
                        <i class="fa fa-close"></i>
                    </a>
                </li>
                <li>
                    <a href="profile-dialog.html">
                        <img src="img/uploads/avatar.jpg" alt="" class="avatar">
                        <span class="small-text">Master, 2 д. назад</span>
                        <span class="text">
                        Иван, подскажите, пожалуйста, как поменять заднюю балку?
                    </span>
                    </a>
                    <a href="#" class="delete-button">
                        <i class="fa fa-close"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@else
    <a href="{{ route('user.messages', ['login' => Auth::user()->alias]) }}" class="dropdown-button"><i class="fa fa-paper-plane-o dropdown-arrow"></i></a>
@endif