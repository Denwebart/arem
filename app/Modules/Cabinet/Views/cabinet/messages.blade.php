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

    <h2>Личные сообщения пользователя {{ $user->login }}</h2>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page m-t-5">
                Всего<span class="hidden-xs"> диалогов</span>:
                <span class="count">5</span>
            </div>
            <button class="button default-button small-button pull-right">
                Удалить все
            </button>
        </div>
        <div class="dialogs list users-list p-t-0">
            <a href="{{ route('user.dialog', ['user' => $user->alias, 'companion' => 'denwebart']) }}" class="item user online new">
                <div class="user-avatar">
                    <img src="/img/uploads/avatar.jpg" alt="" class="avatar">
                </div>
                <div class="user">
                    <span class="login">Denwebart</span>
                    <span class="text-1">Den Malafey</span>
                </div>
                <div class="last-message">
                    Здравствуйте! Хотел поблагодарить за помощь в ремонте автомобиля ...
                </div>
                <div class="date">
                    <span class="small-description">25 мин. назад</span>
                </div>
                <div class="buttons">
                    <button class="delete-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </a>
            <a href="{{ route('user.dialog', ['user' => $user->alias, 'companion' => 'denwebart']) }}" class="item user">
                <div class="user-avatar">
                    <img src="/img/uploads/avatar-2.jpg" alt="" class="avatar">
                </div>
                <div class="user">
                    <span class="login">SKS</span>
                    <span class="text-1">Вася Пупкин</span>
                </div>
                <div class="last-message">
                    Привет, Вань!
                </div>
                <div class="date">
                    <span class="small-description">вчера</span>
                </div>
                <div class="buttons">
                    <button class="delete-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </a>
            <a href="{{ route('user.dialog', ['user' => $user->alias, 'companion' => 'denwebart']) }}" class="item user online">
                <div class="user-avatar">
                    <img src="/img/uploads/avatar-3.jpg" alt="" class="avatar">
                </div>
                <div class="user">
                    <span class="login">Мастер</span>
                </div>
                <div class="last-message">
                    Иван, подскажите, пожалуйста, как поменять заднюю балку?
                </div>
                <div class="date">
                    <span class="small-description">2 дня назад</span>
                </div>
                <div class="buttons">
                    <button class="delete-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </a>
            <a href="{{ route('user.dialog', ['user' => $user->alias, 'companion' => 'denwebart']) }}" class="item user">
                <div class="user-avatar">
                    <img src="/img/uploads/default-avatar.png" alt="" class="avatar">
                </div>
                <div class="user">
                    <span class="login">Support</span>
                </div>
                <div class="last-message">
                    <img src="/img/uploads/ivan.jpg" alt="" class="avatar micro">
                    Техподдержка привет! Посмотрите, пожалуйста, вот этот...
                </div>
                <div class="date">
                    <span class="small-description">15 января</span>
                </div>
                <div class="buttons">
                    <button class="delete-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </a>
            <a href="{{ route('user.dialog', ['user' => $user->alias, 'companion' => 'denwebart']) }}" class="item user">
                <div class="user-avatar">
                    <img src="/img/uploads/default-avatar.png" alt="" class="avatar">
                </div>
                <div class="user">
                    <span class="login">Макс</span>
                    <span class="text-1">Максим Галкин</span>
                </div>
                <div class="last-message">
                    Не могу создать новый вопрос. Захожу на страницу, а там ...
                </div>
                <div class="date">
                    <span class="small-description">24 декабря 2016</span>
                </div>
                <div class="buttons">
                    <button class="delete-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
            </a>
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