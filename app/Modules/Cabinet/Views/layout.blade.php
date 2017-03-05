<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@extends('layouts.app', ['panelClass' => 'user-profile'])

@section('layout-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 without-padding">
                <div class="m-b-30">
                    <div id="user-menu-section">
                        <ul class="menu user-menu">
                            <li class="active"><a href="profile.html"><i class="fa fa-user"></i><span>Профиль</span></a></li>
                            <li><a href="profile-cars.html"><i class="fa fa-car"></i><span>Автомобили</span></a></li>
                            <li><a href="profile-questions.html"><i class="fa fa-question-circle"></i><span>Вопросы</span></a></li>
                            <li><a href="profile-articles.html"><i class="fa fa-book"></i><span>Журнал</span></a></li>
                            <li><a href="profile-comments.html"><i class="fa fa-comment"></i><span>Комментарии</span></a></li>
                            <li><a href="profile-answers.html"><i class="fa fa-comments"></i><span>Ответы</span></a></li>
                            <li><a href="profile-messages.html"><i class="fa fa-paper-plane"></i><span>Сообщения</span></a></li>
                            <li><a href="profile-saved.html"><i class="fa fa-heart"></i><span>Сохраненное</span></a></li>
                            <li><a href="profile-subscriptions.html"><i class="fa fa-newspaper-o"></i><span>Подписки</span></a></li>
                            <li><a href="profile-notifications.html"><i class="fa fa-bell"></i><span>Уведомления</span></a></li>
                            <li><a href="profile-friends.html"><i class="fa fa-handshake-o"></i><span>Друзья</span></a></li>
                        </ul>
                    </div>
                    <div id="user-content-section">
                        <div id="user-section">
                            <div class="user-avatar">
                                <a href="profile.html">
                                    <img src="img/uploads/avatar-2.jpg" alt="" class="avatar">
                                </a>
                                <div class="buttons">
                                    <div class="button-group pull-right">
                                        <button class="button default-button transparent-button">
                                            В друзьях
                                        </button>
                                        <button class="button dark-button transparent-button">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="user-profile-picture" style="background: url('img/uploads/user-background.jpg');">
                                <div class="gradient">
                                    <div class="user-info">
                                        <div>
                                            <span class="login">Ivan</span>
                                            <span class="is-online online">В сети</span>
                                        </div>
                                        <div class="fullname">Иван Плахотин</div>
                                        <div class="rank">Эксперт</div>
                                        <div class="rating-position">
                                            <div class="label">
                                                <span>1-й</span>
                                                <svg class="image" x="0px" y="0px" viewBox="0 0 1885 1886" style="enable-background:new 0 0 1885 1886;" xml:space="preserve">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M885.2,0.5c476.3,0,864.1,374.8,885.2,845c-7-4-15.1-7-22.1-10c-30.1-11.1-62.3-14.1-92.4-9
                                                    c-6,1-13.1,2-19.1,4c-29.1-389.9-354.7-697.3-751.6-697.3c-415,0-752.6,337.6-752.6,752.6c0,393.9,302.4,717.4,687.3,750.6
                                                    c-11.1,40.2-8,92.4,12.1,133.6C367.8,1742.8,0,1357,0,885.7C0,397.4,396.9,0.5,885.2,0.5z M1497.1,1130.9l-40.2,39.2c-2,3-4,4-6,6
                                                    l-17.1,17.1c-17.1,18.1-35.2,34.2-51.2,52.2l-18.1,16.1c-9,10-18.1,21.1-28.1,29.1c-9,8-14.1,15.1-23.1,23.1l-11.1,11.1
                                                    c-2,2-4,4-6,6c-9,10-19.1,19.1-28.1,29.1c-11.1,11.1-23.1,22.1-34.2,34.2c-2,2-4,3-6,5c-2,2-4,4-6,6c-2,2-3,3-5,5l-57.3,58.3
                                                    c-7,7-25.1,23.1-29.1,29.1c-9-2-17.1-5-27.1-7c-28.1-5-59.3,0-85.4,9c-16.1,5-31.1,13.1-43.2,22.1l-19.1,14.1c-3,3-5,5-9,8
                                                    c-4,4-4,5-8,9c-34.2,34.2-58.3,93.4-52.2,146.7c2,13.1,9,45.2,17.1,50.2c2,0,11.1-9,13.1-11.1c2-2,3-4,6-7l18.1-18.1
                                                    c15.1-16.1,39.2-37.2,54.3-54.3c3-3,4-4,7-6c15.1-15.1,28.1-34.2,58.3-39.2c21.1-3,40.2,4,55.3,17.1c6,5,12.1,12.1,18.1,18.1
                                                    c3,2,5,4,7,6c13.1,14.1,19.1,34.2,16.1,54.3c-4,31.1-28.1,49.2-44.2,65.3c-10,10-20.1,22.1-30.1,31.1l-25.1,24.1
                                                    c-6,7-35.2,33.2-35.2,38.2c3,4,16.1,8,23.1,10c9,3,18.1,5,28.1,6c37.2,4,74.4-6,105.5-23.1c14.1-8,28.1-18.1,38.2-27.1
                                                    c45.2-41.2,73.4-105.5,63.3-166.8c-2-10-4-17.1-7-26.1l51.2-51.2c9-10,20.1-19.1,29.1-29.1l120.6-120.6c9-10,20.1-19.1,29.1-29.1
                                                    c12.1-14.1,40.2-41.2,56.3-56.3c2-3,4-4,6-6c18.1-20.1,38.2-38.2,57.3-57.3l18.1-18.1c9,2,16.1,5,26.1,7c45.2,7,92.4-7,129.6-31.1
                                                    c3-3,6-4,9-7l18.1-15.1c10-8,29.1-34.2,36.2-47.2c8-14.1,15.1-31.1,19.1-48.2c5-19.1,7-41.2,5-61.3c-2-12.1-10-44.2-16.1-49.2
                                                    c-4,0-16.1,14.1-19.1,17.1c-2,2-4,4-6,6c-2,2-4,4-6,6l-36.2,36.2c-6,6-12.1,13.1-19.1,18.1l-12.1,13.1
                                                    c-16.1,15.1-28.1,34.2-58.3,39.2c-15.1,2-28.1,0-41.2-6c-5-3-10-6-14.1-10l-13.1-12.1c-8-10-15.1-14.1-22.1-26.1
                                                    c-6-11.1-9-26.1-7-41.2c4-31.1,24.1-44.2,38.2-60.3l61.3-60.3c4-5,8-8,12.1-12.1c5-6,23.1-21.1,23.1-27.1
                                                    c-29.1-17.1-75.4-20.1-110.5-10c-32.2,8-62.3,24.1-85.4,46.2c-5,5-10,10-15.1,16.1c-39.2,43.2-58.3,105.5-44.2,163.8
                                                    C1494.1,1121.9,1496.1,1126.9,1497.1,1130.9z M1226.9,1196.2H885.2H543.6c-1,18.1,0,39.2,0,57.3c0,16.1,3,40.2-5,51.2
                                                    c-10,14.1-22.1,14.1-43.2,14.1c-19.1,0-37.2,0-56.3,0c-31.1,0-82.4,10-84.4-29.1c-1-24.1,0-85.4,0-113.5c0-23.1,0-29.1-8-48.2
                                                    c-8-18.1-10-25.1-11.1-47.2c0-47.2-1-118.6,7-163.8c6-31.1,12.1-66.3,16.1-97.5c1-13.1,7-42.2-1-51.2
                                                    c-11.1-12.1-47.2-25.1-54.3-31.1c-6-5-8-8-9-19.1c0-14.1-2-38.2,18.1-39.2c16.1-1,37.2,0,55.3,0c4,0,10,0,14.1,1c4,2,4,4,10,2
                                                    c9-4,16.1-29.1,19.1-38.2c3-6,6-12.1,9-19.1c14.1-34.2,16.1-32.2,29.1-55.3c3-7,6-12.1,10-18.1c7-13.1,14.1-24.1,23.1-34.2
                                                    c15.1-19.1,14.1-16.1,27.1-30.1c18.1-19.1,49.2-34.2,78.4-34.2c21.1,0,158.8,0,297.4,0c139.7,0,277.3,0,298.4,0
                                                    c29.1,0,60.3,15.1,78.4,34.2c13.1,14.1,12.1,11.1,27.1,30.1c8,10,16.1,21.1,23.1,34.2c4,6,7,11.1,10,18.1
                                                    c13.1,23.1,15.1,21.1,29.1,55.3c3,7,6,13.1,9,19.1c3,9,10,34.2,19.1,38.2c6,2,6,0,10-2c4-1,9-1,14.1-1c17.1,0,38.2-1,55.3,0
                                                    c20.1,1,18.1,25.1,18.1,39.2c-1,11.1-3,14.1-9,19.1c-7,6-44.2,19.1-54.3,31.1c-8,9-2,38.2-1,51.2c4,31.1,9,66.3,15.1,97.5
                                                    c9,45.2,8,116.6,7,163.8c0,13.1,0,21.1-3,29.1l-196.9,197.9c-1-1-2-2-2-3c-8-11.1-5-35.2-5-51.2
                                                    C1227.9,1235.4,1228.9,1214.3,1226.9,1196.2z M885.2,742h423c8-1,15.1-10,18.1-17.1c7-17.1-2-41.2-7-57.3
                                                    c-6-18.1-14.1-33.2-21.1-50.2c-18.1-44.2-22.1-48.2-55.3-84.4c-10-10-24.1-20.1-45.2-24.1c-15.1-3-51.2-1-69.3-1H885.2H643.1
                                                    c-18.1,0-54.3-2-69.3,1c-21.1,4-35.2,14.1-45.2,24.1c-33.2,36.2-37.2,40.2-56.3,84.4c-7,17.1-14.1,32.2-20.1,50.2
                                                    c-5,16.1-14.1,40.2-7,57.3c3,7,10,16.1,18.1,17.1H885.2z M719.4,947c0-13.1-9-70.3-15.1-78.4c-9-11.1-23.1-8-39.2-8H475.3
                                                    c-21.1,0-25.1-5-39.2-9c1,20.1,7,64.3,13.1,81.4c5,14.1,15.1,14.1,32.2,14.1C506.4,947,708.4,948,719.4,947z M1052,947
                                                    c0-13.1,9-70.3,15.1-78.4c9-11.1,23.1-8,39.2-8h189.9c21.1,0,24.1-5,39.2-9c-1,20.1-7,64.3-13.1,81.4c-5,14.1-15.1,14.1-32.2,14.1
                                                    C1264,947,1063.1,948,1052,947z"/>
                                            </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <div class="button-group pull-left">
                                            <button class="button accent-button">
                                                <i class="fa fa-newspaper-o"></i>
                                                Подписаться
                                            </button>
                                            <a href="profile-subscribers.html" class="button default-button">
                                                <i class="fa fa-users"></i>
                                                124 890
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <button class="button red-button">
                                                <i class="fa fa-ban"></i>
                                                Забанить
                                            </button>
                                            <a href="profile-edit.html" class="button default-button">
                                                <i class="fa fa-pencil"></i>
                                                Редактировать профиль
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-statistics">
                                <div class="pull-left">
                                    <div class="item rating">
                                        <span>Рейтинг:</span>
                                        <!--<i class="fa fa-signal" title="Рейтинг"></i>-->
                                        <span class="count">1 416</span>
                                    </div>
                                </div>

                                <div class="pull-right">
                                    <!-- иконка не закрашена, если 0 -->
                                    <a href="profile-articles.html" class="item articles">
                                        <span class="count">127</span>
                                        <!--<i class="fa fa-file-text" title="Статьи"></i>-->
                                        <span>статей</span>
                                    </a>
                                    <a href="profile-questions.html" class="item questions">
                                        <span class="count">54</span>
                                        <!--<i class="fa fa-question" title="Вопросы"></i>-->
                                        <span>вопроса</span>
                                    </a>
                                    <a href="profile-answers.html" class="item answers">
                                        <span class="count">933</span>
                                        <!--<i class="fa fa-comments" title="Ответы"></i>-->
                                        <span>ответов</span>
                                    </a>
                                    <a href="profile-comments.html" class="item comments">
                                        <span class="count">3 245</span>
                                        <!--<i class="fa fa-comment" title="комментарии"></i>-->
                                        <span>комментариев</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <section id="content" class="white-section">
                            @yield('content')
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-3 sidebar">
                <!--<div class="widget user-balance-widget white-section">-->
                <!--<div class="widget-title">-->
                <!--<h4 class="title">Мой баланс</h4>-->
                <!--<div class="filters">-->
                <!--<a href="#">Что это?</a>-->
                <!--</div>-->
                <!--</div>-->
                <!--<div class="user-balance">-->
                <!--<span class="count">2 134</span>-->
                <!--<span>балла</span>-->
                <!--</div>-->
                <!--<div class="buttons">-->
                <!--<a href="#" class="button accent-button">Пополнить баланс</a>-->
                <!--<a href="#" class="button default-button">Выбрать сувенир</a>-->
                <!--</div>-->
                <!--<div class="small-description">-->
                <!--<a href="#">Как заработать рейтинг и получить баллы?</a>-->
                <!--</div>-->
                <!--</div>-->
                <div class="widget widget-users white-section">
                    <div class="widget-title">
                        <h4 class="title">Друзья</h4>
                        <a href="profile-friends.html" class="count">
                            12
                        </a>
                    </div>
                    <div class="items horisontal">
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Ivan">
                                <img src="img/uploads/ivan.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Мастер">
                                <img src="img/uploads/avatar-3.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Muph1984">
                                <img src="img/uploads/avatar-1.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Макс">
                                <img src="img/uploads/default-avatar.png" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Ivan">
                                <img src="img/uploads/ivan.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Мастер">
                                <img src="img/uploads/avatar-3.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Muph1984">
                                <img src="img/uploads/avatar-1.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Макс">
                                <img src="img/uploads/default-avatar.png" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Ivan">
                                <img src="img/uploads/ivan.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Мастер">
                                <img src="img/uploads/avatar-3.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Muph1984">
                                <img src="img/uploads/avatar-1.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Макс">
                                <img src="img/uploads/default-avatar.png" alt="" class="avatar mini">
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-title">
                        <h4 class="title">Друзья онлайн</h4>
                        <a href="profile-friends.html" class="count">
                            1
                        </a>
                    </div>
                    <div class="items horisontal">
                        <div class="item user">
                            <a href="profile.html" class="user-avatar" title="Denwebart">
                                <img src="img/uploads/avatar.jpg" alt="" class="avatar mini">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
