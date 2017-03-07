<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@extends('layouts.app')

@section('layout-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 without-padding">
                <section id="content" class="white-section">
                    @yield('content')
                </section>
            </div>
            <div class="col-md-4 sidebar">
                <div class="widget widget-questions">
                    <div class="widget-title">
                        <h4 class="title">Вопросы пользователей</h4>
                        <div class="filters">
                            <a class="active" href="#">новые</a>
                            <a href="#">лучшие</a>
                            <a href="#">популярные</a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/default-avatar.png" alt="" class="avatar mini">
                            </a>
                            <div class="item-content">
                                <div class="item-info">
                                    <a href="profile.html"><span class="author">Парк</span></a>
                                    <span class="date">3 мин. назад</span>
                                </div>
                                <a href="question.html" class="text">Свист коробки передач ваз 21099</a>
                            </div>
                            <a href="question.html#answers" class="answers">
                                <i class="fa fa-comments-o"></i>
                                <span class="count">0</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/default-avatar.png" alt="" class="avatar mini">
                            </a>
                            <div class="item-content">
                                <div class="item-info">
                                    <a href="profile.html"><span class="author">Alexander</span></a>
                                    <span class="date">2 часа назад</span>
                                </div>
                                <a href="question.html" class="text">Можно ли ездить со сломанной передней пружиной?</a>
                            </div>
                            <a href="question.html#answers" class="answers">
                                <i class="fa fa-comments"></i>
                                <span class="count">23</span>
                            </a>
                        </div>
                        <div class="item has-solution">
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/avatar-1.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="item-content">
                                <div class="item-info">
                                    <a href="profile.html"><span class="author">Muph1984</span></a>
                                    <span class="date">30 августа</span>
                                </div>
                                <a href="question.html" class="text">
                                    Надо ли делать развал схождение после замены
                                    сальников рулевой колонки колонки колонки на ваз 2106?
                                </a>
                            </div>
                            <a href="question.html#answers" class="answers">
                                <i class="fa fa-comments"></i>
                                <span class="count">2 213</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="widget widget-articles">
                    <div class="widget-title">
                        <h4 class="title">Статьи за неделю</h4>
                        <div class="filters">
                            <a class="active" href="#">новые</a>
                            <a href="#">лучшие</a>
                            <a href="#">популярные</a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="item-info">
                                <span class="date">8 мин. назад</span>
                                <div class="answers">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="count">0</span>
                                </div>
                                <div class="views">
                                    <i class="fa fa-eye"></i>
                                    <span class="count">121 334</span>
                                </div>
                            </div>
                            <a href="page.html">
                                <img src="/img/uploads/statya-1-mini.png" alt="" class="item-image">
                            </a>
                            <div class="item-content">
                                <a href="page.html" class="text">
                                    Замена сайлентблоков передних (нижних верхних)
                                    рычагов на автомобилях ВАЗ-2101, ВАЗ-2102, ВАЗ-2103,
                                    ВАЗ-2104, ВАЗ-2105, ВАЗ-2106, ВАЗ-2107
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-info">
                                <span class="date">Сегодня в 18:23</span>
                                <div class="answers active">
                                    <i class="fa fa-thumbs-up"></i>
                                    <span class="count">1</span>
                                </div>
                                <div class="views">
                                    <i class="fa fa-eye"></i>
                                    <span class="count">122 443</span>
                                </div>
                            </div>
                            <a href="page.html">
                                <img src="/img/uploads/statya-2-mini.png" alt="" class="item-image">
                            </a>
                            <div class="item-content">
                                <a href="page.html" class="text">
                                    Замена охлаждающей жидкости (антифриза или тосола)
                                    в автомобиле ВАЗ-2101, ВАЗ-2104, ВАЗ-2105, ВАЗ-2106, ВАЗ-2107
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-info">
                                <span class="date">15 августа</span>
                                <div class="answers">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="count">122 657</span>
                                </div>
                                <div class="views">
                                    <i class="fa fa-eye"></i>
                                    <span class="count">32 453</span>
                                </div>
                            </div>
                            <a href="page.html">
                                <img src="/img/uploads/statya-3-mini.png" alt="" class="item-image">
                            </a>
                            <div class="item-content">
                                <a href="page.html" class="text">
                                    Замена радиатора печки на автомобиле ВАЗ-2101,
                                    ВАЗ-2102, ВАЗ-2106, ВАЗ-2107
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-users">
                    <h4 class="title">Лучшие пользователи</h4>
                    <div class="small-description">
                        Здесь отображаются самые активные пользователи сайта.
                        <br>
                        <a href="#">Как сюда попасть?</a>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="rating-position">1</div>
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/ivan.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="user">
                                <a href="profile.html" class="login"><span>Ivan</span></a>
                                <span class="rank">Эксперт</span>
                            </div>
                            <div class="rating">
                                <span class="count">1 416</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="rating-position">2</div>
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/avatar-2.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="user">
                                <a href="profile.html" class="login"><span>SKS</span></a>
                                <span class="rank">Эксперт</span>
                            </div>
                            <div class="rating">
                                <span class="count">1 097</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="rating-position">3</div>
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/avatar-3.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="user">
                                <a href="profile.html" class="login"><span>Мастер</span></a>
                                <span class="rank">Профи</span>
                            </div>
                            <div class="rating">
                                <span class="count">987</span>
                                <span class="rating-up">+1</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="rating-position">4</div>
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/avatar-1.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="user">
                                <a href="profile.html" class="login"><span>Muph1984</span></a>
                                <span class="rank">Энтузиаст</span>
                            </div>
                            <div class="rating">
                                <span class="count">456</span>
                                <span class="rating-down">-12</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="rating-position">5</div>
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/default-avatar.png" alt="" class="avatar mini">
                            </a>
                            <div class="user">
                                <a href="profile.html" class="login"><span>Макс</span></a>
                                <span class="rank">Любитель</span>
                            </div>
                            <div class="rating">
                                <span class="count">123</span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="all-items-button">
                        <i class="fa fa-users"></i>
                        <span>Все пользователи</span>
                    </a>
                </div>
                <div class="widget widget-comments">
                    <div class="widget-title">
                        <h4 class="title">Ответы пользователей</h4>
                        <div class="filters">
                            <a class="active" href="#">новые</a>
                            <a href="#">лучшие</a>
                            <a href="#">популярные</a>
                        </div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/ivan.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="item-content">
                                <div class="item-info">
                                    <a href="profile.html" class="author">
                                        <span>Ivan</span>
                                    </a>
                                    <span class="date">1 минуту назад</span>
                                    <a href="page.html" class="reply-link pull-right">
                                        <i class="fa fa-reply fa-flip-horizontal"></i>
                                    </a>
                                </div>
                                <a href="page.html#comment-1" class="text">
                                    Да, действительно, верхняя опора требует срочной замены.
                                    В противном случае, шток амортизационной стойки может
                                    в один прекрасный момент упереться в ...
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/ivan.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="item-content">
                                <div class="item-info">
                                    <a href="profile.html" class="author">
                                        <span>Ivan</span>
                                    </a>
                                    <span class="date">Сегодня в 12:23</span>
                                    <a href="page.html" class="reply-link pull-right">
                                        <i class="fa fa-reply fa-flip-horizontal"></i>
                                    </a>
                                </div>
                                <a href="page.html#comment-2" class="text">
                                    В подобной ситуации трудно назвать причину без осмотра
                                    и проверки двигателя. Довольно странно всё ...
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="profile.html" class="user-avatar">
                                <img src="/img/uploads/ivan.jpg" alt="" class="avatar mini">
                            </a>
                            <div class="item-content">
                                <div class="item-info">
                                    <a href="profile.html" class="author">
                                        <span>Ivan</span>
                                    </a>
                                    <span class="date">23 августа</span>
                                    <a href="page.html" class="reply-link pull-right">
                                        <i class="fa fa-reply fa-flip-horizontal"></i>
                                    </a>
                                </div>
                                <a href="page.html#comment-3" class="text">
                                    Передние тормозные шланги от автомобилей Ваз не
                                    подходят на автомобили Дэу Нексия и Дэу Ланос. Так же ...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-tags">
                    <h4 class="title">Популярные теги</h4>
                    <div class="tags">
                        <a href="#">
                            <span>Daewoo Lanos</span>
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
                        <a href="#">
                            <span>Ремонт</span>
                            <span class="count">67</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection