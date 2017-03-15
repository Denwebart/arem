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
                @foreach($messages as $message)
                    <li data-id="{{ $message->id }}">
                        <a href="{{ route('user.dialog', ['login' => Auth::user()->alias, 'companion' => $message->sender->alias]) }}">
                            @if($message->sender)
                                <img src="{{ $message->sender->getAvatarUrl() }}" alt="{{ $message->sender->login }}" class="avatar">
                            @endif
                            <span class="small-text">
                                @if($message->sender) {{ $message->sender->login }} @endif
                                ,
                                {{ \App\Helpers\Date::getRelative($message->created_at) }}
                            </span>
                            <span class="text">
                                {{ \App\Helpers\Str::limit($message->message, 75) }}
                            </span>
                        </a>
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@else
    <a href="{{ route('user.messages', ['login' => Auth::user()->alias]) }}" class="dropdown-button"><i class="fa fa-paper-plane-o dropdown-arrow"></i></a>
@endif