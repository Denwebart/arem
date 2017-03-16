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

    <h2>Уведомления пользователя {{ $user->login }}</h2>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> уведомлений</span>:
                <span class="count">11</span>
            </div>
            <div class="sort">
                <span>Сортировать по:</span>
                <div class="sortby">
                    дате
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
        <div class="filters">
            <button class="button default-button small-button pull-right">
                Удалить все
            </button>
        </div>
        <div class="list p-t-0">
            <div class="item notification" id="item-1">
                <div class="icon">
                    <i class="fa fa-thumbs-up info"></i>
                </div>
                <div class="content">
                    <span class="small-text date">25 мин. назад</span>
                    <span class="text">
                                                    Пользователю <a href="profile.html">Support</a> понравилась ваша статья.
                                                </span>
                </div>
                <div class="buttons">
                    <a href="#" class="delete-button">
                        <i class="fa fa-close"></i>
                    </a>
                </div>
            </div>
            <div class="item notification" id="item-2">
                <div class="icon">
                    <i class="fa fa-comment success"></i>
                </div>
                <div class="content">
                    <span class="small-text date">1 ч. назад</span>
                    <span class="text">
                                                    Роман (roman@email.com) оставил комментарий к вашей статье.
                                                </span>
                </div>
                <div class="buttons">
                    <a href="#" class="delete-button">
                        <i class="fa fa-close"></i>
                    </a>
                </div>
            </div>
            <div class="item notification" id="item-3">
                <div class="icon">
                    <i class="fa fa-user-plus success"></i>
                </div>
                <div class="content">
                    <span class="small-text date">16 ч. назад</span>
                    <span class="text">
                                                    Зарегистрировался новый пользователь <a href="profile.html">Denwebart</a>.
                                                </span>
                </div>
                <div class="buttons">
                    <a href="#" class="delete-button">
                        <i class="fa fa-close"></i>
                    </a>
                </div>
            </div>
            <div class="item notification" id="item-4">
                <div class="icon">
                    <i class="fa fa-trash danger"></i>
                </div>
                <div class="content">
                    <span class="small-text date">2 д. назад</span>
                    <span class="text">
                                                    Ваш вопрос "Как быть?" был удален.
                                                </span>
                </div>
                <div class="buttons">
                    <a href="#" class="delete-button">
                        <i class="fa fa-close"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="pagination">
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
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