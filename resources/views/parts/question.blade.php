<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

<div class="item question">
        <ul class="category breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="questions.html">Ваз-2108, Ваз-2109, Ваз-2115, Ваз-2110, Ваз-1117 Калина, Ваз-2170 Приора</a></li>
        </ul>
        <div class="item-content">
            <a href="{{ route('user.profile', ['login' => $question->user->alias]) }}" class="user-avatar">
                <img src="{{ $question->user->getAvatarUrl() }}" alt="{{ $question->user->login }}" title="{{ $question->user->login }}" class="avatar mini">
            </a>
            <div class="item-title">
                <h3>
                    <a href="{{ $question->getUrl() }}">
                        {{ $question->title }}
                    </a>
                </h3>
            </div>
            <div class="answers-count" title="Количество ответов">
                <a href="{{ $question->getUrl() }}#answers">
                    <span class="count" itemprop="commentCount">0</span>
                    <span class="title">ответов</span>
                </a>
            </div>
        </div>
        <div class="item-info">
            <div class="page-info">
                <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                    <a href="{{ route('user.profile', ['login' => $question->user->alias]) }}" itemprop="url">
                        <!--<img src="img/uploads/default-avatar.png" alt="" class="avatar micro">-->
                        <span class="login" itemprop="name">{{ $question->user->login }}</span>
                    </a>
                </div>
                <div class="date">
                    <i class="fa fa-calendar-o"></i>
                    <time datetime="2013-06-01T22:17" itemprop="datePublished">{{ \App\Helpers\Date::format($question->user->login, true, true) }}</time>
                </div>
                <div class="views" title="Количество просмотров">
                    <i class="fa fa-eye"></i>
                    <span>35 854</span>
                </div>
                <div class="saved-count" title="Сколько пользователей сохранили">
                    <i class="fa fa-heart-o"></i>
                    <span>0</span>
                </div>

                <div class="like-dislike-widget">
                    <div class="buttons">
                        <button class="like">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span class="count">139</span>
                        </button>
                        <button class="dislike">
                            <i class="fa fa-thumbs-o-down"></i>
                            <span class="count">0</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tags">
            <a href="#">
                <span>Daewoo</span>
                <span class="count">234</span>
            </a>
            <a href="#">
                <span>Замена колеса</span>
                <span class="count">34</span>
            </a>
            <a href="#">
                <span>Колесные диски</span>
                <span class="count">4</span>
            </a>
            </a>
        </div>
</div>