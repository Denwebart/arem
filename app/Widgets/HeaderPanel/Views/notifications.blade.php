<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>
@if(count(Auth::user()->notifications()))
    <a href="#" class="notification dropdown-button"><i class="fa fa-bell-o dropdown-arrow"></i></a>
    <div class="dropdown-container">
        <div class="container-header">
            <div class="title">
                Уведомлений:
                <span class="count">
                    @if($limit < count(Auth::user()->notifications()))
                        {{ $limit }} из
                    @endif
                    {{ count(Auth::user()->notifications()) }}
                </span>
            </div>
            <a href="{{ route('user.notifications', ['login' => Auth::user()->alias]) }}" class="pull-right">
                Все
                <i class="fa fa-angle-right pull-right"></i>
            </a>
        </div>
        <div class="delimiter"></div>
        <div class="container-body">
            <ul class="list notifications-list">
                @foreach(Auth::user()->notifications() as $notification)
                    <li data-id="{{ $notification->id }}">
                        <a href="{{ route('user.notifications', ['login' => Auth::user()->alias]) }}#item-{{ $notification->id }}">
                            <i class="fa fa-thumbs-up info"></i>
                            <span class="small-text date">25 мин. назад</span>
                            <span class="text">
                                {{ $notification->message }}
                            </span>
                        </a>
                        <a href="#" rel="nofollow" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@else
    <a href="{{ route('user.notifications', ['login' => Auth::user()->alias]) }}" class="dropdown-button"><i class="fa fa-bell-o"></i></a>
@endif