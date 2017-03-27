<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@extends('cabinet::layout')

@section('content')
    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="home-page" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="index.html" itemprop="item"><span itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="profile.html" itemprop="item"><span itemprop="name">Профиль пользователя Ivan</span></a>
            <meta itemprop="position" content="2">
        </li>
    </ul>

    <h2>Статьи пользователя {{ $user->login }}</h2>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> статей</span>:
                <span class="count">121</span>
            </div>
            <div class="sort">
                <span>Сортировать по:</span>
                <div class="sortby dropdown">
                    <a href="#" class="dropdown-button dropdown-arrow">дате</a>
                    <div class="dropdown-container">
                        <div class="container-body">
                            <ul class="select-list">
                                <li data-value="published_at" class="selected">
                                    <i class="fa fa-calendar-o"></i>
                                    <span>дате</span>
                                </li>
                                <li data-value="popular">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span>рейтингу (оценке)</span>
                                </li>
                                <li data-value="price">
                                    <i class="fa fa-eye"></i>
                                    <span>просмотрам</span>
                                </li>
                                <li data-value="rating">
                                    <i class="fa fa-comment-o"></i>
                                    <span>комментариям</span>
                                </li>
                                <li data-value="popular">
                                    <i class="fa fa-heart-o"></i>
                                    <span>количеству сохранивших</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="direction">
                    <button data-value="desc" title="По убыванию" class="active">
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <button data-value="asc" title="По возростанию">
                        <i class="fa fa-angle-up"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="list">
            @foreach($articles as $article)
                @include('parts.article')
            @endforeach
        </div>
        <div class="pagination">
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="next" title="Следующая">
                    <a href="#">
                        <span>следующая</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="last">
                    <a href="#" title="Последняя">
                        <span>последняя</span>
                        <i class="fa fa-angle-double-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection