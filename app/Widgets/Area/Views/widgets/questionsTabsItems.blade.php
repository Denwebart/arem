<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@foreach($questions as $question)
    <div class="item @if($question->best_comments_count) has-solution @endif">
        <a href="{{ route('user.profile', ['login' => $question->user->alias]) }}" class="user-avatar">
            <img src="{{ $question->user->getAvatarUrl() }}" alt="{{ $question->user->login }}" title="{{ $question->user->login }}" class="avatar mini">
        </a>
        <div class="item-content">
            <div class="item-info">
                <a href="{{ route('user.profile', ['login' => $question->user->alias]) }}">
                    <span class="author">{{ $question->user->login }}</span>
                </a>
                <span class="date">
                    {{ \App\Helpers\Date::getRelative($question->published_at, false) }}
                </span>
            </div>
            <a href="{{ $question->getUrl() }}" class="text">
                {{ $question->title }}
            </a>
        </div>
        <a href="{{ $question->getUrl() }}#answers" class="answers">
            <i class="fa @if(!count($question->comments)) fa-comments-o @else fa-comments @endif"></i>
            <span class="count">{{ count($question->comments) }}</span>
        </a>
    </div>
@endforeach