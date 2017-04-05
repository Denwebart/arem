<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>
    <div class="item article">
        <div class="item-title">
            <ul class="category breadcrumbs">
                @foreach($article->getBreadcrumbs() as $breadcrumbItem)
                    <li><a href="{{ $breadcrumbItem['url'] }}">{{ $breadcrumbItem['title'] }}</a></li>
                @endforeach
            </ul>
            <h3>
                <a href="{{ $article->getUrl() }}">
                    {{ $article->title }}
                </a>
            </h3>
        </div>
        <div class="item-image">
            <a href="{{ $article->getUrl() }}">
                <img src="{{ $article->image }}" alt="{{ $article->image_alt }}" title="{{ $article->image_alt }}">
            </a>
        </div>
        <div class="text item-text">
            <div class="page-info">
                <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                    <a href="{{ route('user.profile', ['login' => $article->user->alias]) }}" itemprop="url">
                        <img src="{{ $article->user->getAvatarUrl() }}" class="avatar micro" title="{{ $article->user->login }}" alt="{{ $article->user->login }}">
                        <span class="login" itemprop="name">{{ $article->user->login }}</span>
                    </a>
                </div>
                <div class="date">
                    <i class="fa fa-calendar-o"></i>
                    <time datetime="2013-06-01T22:17" itemprop="datePublished">{{ \App\Helpers\Date::format($article->published_at, true, true) }}</time>
                </div>
            </div>
            {{ $article->getIntrotext() }}
        </div>
        <div class="delimiter delimiter-dashed">
            <div class="link">
                <a href="{{ $article->getUrl() }}">
                    <span>Читать далее</span>
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="item-info">
            <div class="page-info">
                <div class="views" title="Количество просмотров">
                    <i class="fa fa-eye"></i>
                    <span>2 123 122</span>
                </div>
                <div class="comments-count" title="Количество комментариев">
                    <a href="page.html#comments">
                        <i class="fa fa-comment"></i>
                        <span class="count" itemprop="commentCount">12 222</span>
                    </a>
                </div>
                <div class="saved-count active" title="Сколько пользователей сохранили">
                    <i class="fa fa-heart"></i>
                    <span>122 222</span>
                </div>

                <div class="like-dislike-widget pull-right">
                    <div class="buttons">
                        <button class="like">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span class="count">345 333</span>
                        </button>
                        <button class="dislike">
                            <i class="fa fa-thumbs-o-down"></i>
                            <span class="count">20 222</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('parts.tags', ['item' => $article])
    </div>