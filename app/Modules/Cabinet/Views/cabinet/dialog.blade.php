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
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="profile-messages.html" itemprop="item"><span itemprop="name">Сообщения</span></a>
            <meta itemprop="position" content="3">
        </li>
    </ul>

    <h2>Диалог с другим пользователем</h2>

    <!--<div class="row">-->
    <!--<div class="col-md-3">-->
    <!--<div class="dialogs-users list users-list">-->
    <!--<div class="item user online">-->
    <!--<a href="profile.html" class="user-avatar">-->
    <!--<img src="img/uploads/ivan.jpg" alt="" class="avatar mini">-->
    <!--</a>-->
    <!--<div class="user">-->
    <!--<a href="profile.html" class="login"><span>Ivan</span></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item user">-->
    <!--<a href="profile.html" class="user-avatar">-->
    <!--<img src="img/uploads/avatar-2.jpg" alt="" class="avatar mini">-->
    <!--</a>-->
    <!--<div class="user">-->
    <!--<a href="profile.html" class="login"><span>SKS</span></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item user online">-->
    <!--<a href="profile.html" class="user-avatar">-->
    <!--<img src="img/uploads/avatar-3.jpg" alt="" class="avatar mini">-->
    <!--</a>-->
    <!--<div class="user">-->
    <!--<a href="profile.html" class="login"><span>Мастер</span></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item user">-->
    <!--<a href="profile.html" class="user-avatar">-->
    <!--<img src="img/uploads/avatar-1.jpg" alt="" class="avatar mini">-->
    <!--</a>-->
    <!--<div class="user">-->
    <!--<a href="profile.html" class="login"><span>Anaytisow-aleck1971</span></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="item user">-->
    <!--<a href="profile.html" class="user-avatar">-->
    <!--<img src="img/uploads/default-avatar.png" alt="" class="avatar mini">-->
    <!--</a>-->
    <!--<div class="user">-->
    <!--<a href="profile.html" class="login"><span>Макс</span></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--<div class="col-md-9">-->
    <div class="dialog blog with-filters">
        <div class="filters">
            <a href="profile-messages.html" class="back">
                <i class="fa fa-angle-left"></i>
            </a>
            <div class="dialog-user-info">
                <a href="profile.html" class="user-avatar">
                    <img src="/img/uploads/avatar.jpg" alt="" class="avatar mini">
                </a>
                <div class="user">
                    <span class="login">Denwebart</span>
                    <span class="is-online">Последний раз в сети 15 мин. назад</span>
                </div>
            </div>
        </div>
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> сообщений</span>:
                <span class="count">11</span>
            </div>
            <button class="pull-right" title="Удалить всю пекреписку">
                <i class="fa fa-trash"></i>
            </button>
            <button class="pull-right" title="Обновить">
                <i class="fa fa-refresh"></i>
            </button>
        </div>
        <div class="list messages-container scroll">
            <div class="item message outgoing-message">
                <div class="user">
                    <a href="profile.html" class="user-avatar">
                        <img src="/img/uploads/ivan.jpg" alt="" class="avatar mini">
                    </a>
                </div>
                <div class="content">
                    <span class="small-text date">1 ч. назад</span>
                    <span class="text">
                                                            Привет, Денис!
                                                        </span>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <span class="small-text date">1 ч. назад</span>
                    <span class="text">
                                                            Всем хорош автомобиль Порше,
                                                            но при ударе колесом о бордюр
                                                            (даже на маленькой скорости) подвеска
                                                            пробивает облегчённый алюминиевый кузов авто.
                                                            Цена ремонта в ЕС у официальных дилеров
                                                            - до 20 тысяч евро.
                                                        </span>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <span class="small-text date">1 ч. назад</span>
                    <span class="text">
                                                            Вот так вот.
                                                        </span>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item message outgoing-message">
                <div class="user">
                    <a href="profile.html" class="user-avatar">
                        <img src="/img/uploads/ivan.jpg" alt="" class="avatar mini">
                    </a>
                </div>
                <div class="content">
                    <span class="small-text date">45 мин. назад</span>
                    <span class="text">
                                                            Как продвигаются работы по сайту?
                                                        </span>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item message incoming-message">
                <div class="user">
                    <a href="profile.html" class="user-avatar">
                        <img src="/img/uploads/avatar.jpg" alt="" class="avatar mini">
                    </a>
                </div>
                <div class="content">
                    <span class="small-text date">25 мин. назад</span>
                    <span class="text">
                                                            Привет, Вань! Работа продвигается, стараемся быстрее закончить.
                                                            <br>
                                                            Долго потому, что стараемся сделать идеально.
                                                        </span>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <span class="small-text date">25 мин. назад</span>
                    <span class="text">
                                                            Как тебе дизайн личных сообщений? Мы старались :)
                                                        </span>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item message outgoing-message">
                <div class="user">
                    <a href="profile.html" class="user-avatar">
                        <img src="/img/uploads/ivan.jpg" alt="" class="avatar mini">
                    </a>
                </div>
                <div class="content">
                    <span class="small-text date">45 мин. назад</span>
                    <span class="text">
                                                            Отлично!
                                                        </span>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <span class="small-text date">45 мин. назад</span>
                    <span class="text">
                                                            Смотри, какую машину я купил
                                                        </span>
                    <div class="attachments">
                        <img src="/img/uploads/car-2.jpg" alt="">
                    </div>
                    <div class="buttons">
                        <a href="#" class="delete-button">
                            <i class="fa fa-close"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <form action="#" id="message-form">
            <div class="textarea" contenteditable="true" placeholder="Напишите сообщение..."></div>
            <div class="buttons">
                <button>
                    <i class="fa fa-smile-o"></i>
                </button>
                <button>
                    <i class="fa fa-paperclip"></i>
                </button>
            </div>
            <button class="send-message" type="button">
                <i class="fa fa-paper-plane"></i>
            </button>
        </form>
    </div>
@endsection