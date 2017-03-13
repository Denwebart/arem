<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>
@if(count($letters))
    <a href="#" class="notification dropdown-button"><i class="fa fa-envelope dropdown-arrow"></i></a>
    <div class="dropdown-container">
        <div class="container-header">
            <div class="title">
                Писем:
                <span class="count">
                    @if($limit < count($letters))
                        {{ $limit }} из
                    @endif
                    {{ count($letters) }}
                </span>
            </div>
            <a href="{{ route('admin.letters.index') }}" class="pull-right">
                Все
                <i class="fa fa-angle-right pull-right"></i>
            </a>
        </div>
        <div class="delimiter"></div>
        <div class="container-body">
            <ul class="list letters-list">
                @foreach($letters as $letter)
                    <li data-id="{{ $letter->id }}">
                        <a href="{{ route('admin.letters.show', ['id' => $letter->id]) }}">
                            <span class="small-text">
                                @if($letter->user)
                                    {{ $letter->user->login }}
                                @else
                                    {{ $letter->user_email }}
                                @endif
                                ,
                                {{ \App\Helpers\Date::getRelative($letter->created_at) }}
                            </span>
                            <span class="text">
                                {{ $letter->subject }}
                            </span>
                        </a>
                        <a href="#" rel="nofollow" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </li>
                    @break($loop->iteration == $limit)
                @endforeach
            </ul>
        </div>
    </div>
@else
    <a href="{{ route('admin.letters.index') }}" class="dropdown-button"><i class="fa fa-envelope dropdown-arrow"></i></a>
@endif
