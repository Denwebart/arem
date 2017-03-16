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

    <h2>Автомобили пользователя {{ $user->login }}</h2>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> автомобилей</span>:
                <span class="count">2</span>
            </div>
        </div>
        <div class="list">
            <div class="item car">
                <div class="item-title">
                    <ul class="category breadcrumbs">
                        <li><a href="category.html">Статьи</a></li>
                        <li><a href="category.html">Daewoo Lanos, Nexia, Matiz, Sens</a></li>
                    </ul>
                    <h3>
                        <a href="page.html">
                            Устраняем люфт и дребезжание ручки переключения передач
                            или замена уплотняющего кольца рычага кпп на автомобилях Daewoo Lanos,
                            Daewoo Nexia, Chevrolet Lanos, Daewoo Sens
                        </a>
                    </h3>
                </div>
                <div class="item-image">
                    <a href="page.html">
                        <img src="/img/uploads/articles/statya-3.jpg" alt="">
                    </a>
                </div>
                <div class="text item-text">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <img src="/img/uploads/ivan.jpg" class="avatar micro" title="" alt="">
                                <span class="login" itemprop="name">IvanIvanIvanIvan</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-06-01T22:17" itemprop="datePublished">1 июня 2013 в 22:17</time>
                        </div>
                    </div>
                    <p>
                        Эта  статья-фотоотчёт, можно сказать, плавно вытекает из
                        материала, ранее опубликованного на сайте. А, именно, из
                        статьи по замене рычага передней подвески на автомобилях
                        Дэу Ланос, Нексия, Сенс и Шевроле Ланос. Так как чаще всего
                        рычаг снимают с автомобиля не для замены на новый, а для
                        замены переднего сайлентблока. А этот самый сайлентблок не
                        так прост, как его напарник - задний сайлентблок (задняя
                        подушка рычага). Те автолюбители, которые уже имели счастье
                        своими руками монтировать передний сайлентблок, думаю,
                        согласятся со мной, если я скажу, что эта работа может отнять...
                    </p>
                </div>
                <div class="delimiter delimiter-dashed">
                    <div class="link">
                        <a href="page.html">
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
                                <i class="fa fa-comments-o"></i>
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
            </div>
            <div class="item car">
                <div class="item-title">
                    <ul class="category breadcrumbs">
                        <li><a href="category.html">Статьи</a></li>
                        <li><a href="category.html">Daewoo Lanos, Nexia, Matiz, Sens</a></li>
                    </ul>
                    <h3>
                        <a href="page.html">
                            Замена рычага передней подвески на автомобиле Daewoo Lanos,
                            Daewoo Nexia, Chevrolet Lanos, Daewoo Sens
                        </a>
                    </h3>
                </div>
                <div class="item-image">
                    <a href="page.html">
                        <img src="/img/uploads/articles/statya-2.jpg" alt="">
                    </a>
                </div>
                <div class="text item-text">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <img src="/img/uploads/ivan.jpg" class="avatar micro" title="" alt=""><span class="login" itemprop="name">Ivan</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-03-25T10:20" itemprop="datePublished">25 марта 2013 в 10:20</time>
                        </div>
                    </div>
                    <p>
                        Уважаемые Ланосоводы и Нексияведы, не проходите мимо!
                        Приглашаю Вас ознакомиться и оценить мой фотоотчёт по
                        снятию и замене рычага передней подвески автомобилей
                        Daewoo Lanos (Дэу Ланос), Daewoo Nexia (Дэу Нексия),
                        Chevrolet Lanos (Шевроле Ланос), Daewoo Sens (Дэу Сенс).
                        Надеюсь, что этот материал будет Вам интересен. Так как
                        в нём описывается не только сам процесс замены рычага,
                        но и даны советы по выбору качественных запчастей. А в
                        наше время это немало важно, так как покупка рычага низкого
                        качества влечёт за собой довольно большие проблемы. Но,
                        обо всём по порядку...
                    </p>
                </div>
                <div class="delimiter delimiter-dashed">
                    <div class="link">
                        <a href="page.html">
                            <span>Читать далее</span>
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="item-info">
                    <div class="page-info">
                        <div class="views" title="Количество просмотров">
                            <i class="fa fa-eye"></i>
                            <span>13 122</span>
                        </div>
                        <div class="comments-count" title="Количество комментариев">
                            <a href="page.html#comments">
                                <i class="fa fa-comments-o"></i><span class="count" itemprop="commentCount">12</span>
                            </a>
                        </div>
                        <div class="saved-count" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart-o"></i>
                            <span>1</span>
                        </div>

                        <div class="like-dislike-widget pull-right">
                            <div class="buttons">
                                <button class="like active">
                                    <i class="fa fa-thumbs-up"></i>
                                    <span class="count">1 121</span>
                                </button>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                    <span class="count">1</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="pagination">-->
        <!--<ul>-->
        <!--<li class="active"><a href="#">1</a></li>-->
        <!--<li><a href="#">2</a></li>-->
        <!--<li><a href="#">3</a></li>-->
        <!--<li><a href="#">4</a></li>-->
        <!--<li><a href="#">5</a></li>-->
        <!--<li class="next" title="Следующая">-->
        <!--<a href="#">-->
        <!--<span>следующая</span>-->
        <!--<i class="fa fa-angle-right"></i>-->
        <!--</a>-->
        <!--</li>-->
        <!--<li class="last">-->
        <!--<a href="#" title="Последняя">-->
        <!--<span>последняя</span>-->
        <!--<i class="fa fa-angle-double-right"></i>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
    </div>
@endsection