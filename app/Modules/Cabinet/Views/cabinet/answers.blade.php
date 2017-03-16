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

    <h2>Ответы пользователя {{ $user->login }}</h2>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> ответов</span>:
                <span class="count">1</span>
            </div>
        </div>
        <div class="list">
            <div class="item answer">
                <div class="row">
                    <div class="date pull-left">
                        <span class="title">Ответ оставлен</span>
                        <span class="value">25 окт. 2016 09:22</span>
                    </div>
                    <div class="buttons pull-right">
                        <button class="link delete-item" data-item-id="2223" title="Удалить">
                            <i class="material-icons">delete</i>
                        </button>
                        <a href="#" title="Редактировать">
                            <i class="material-icons">edit</i>
                        </a>
                    </div>
                    <h3 class="item-title">
                        <a href="http://avtorem.info/vopros-otvet/daewoo-lanos-nexia-sens-matiz-nubira/skrip-v-perednej-podveske-zaz-sens.html#comment-2223">
                            Скрип в передней подвеске ЗАЗ СЕНС
                        </a>
                    </h3>
                    <div class="text item-text">
                        <p>Забыл отписаться сразу, сори.</p>
                        <p>В общем, - подвеска оказалась в порядке. Источником посторонних звуков была развалившаяся в двух местах выхлопная. Из-за оторвавшейся от передней части гофры и вывалившейся из глушителя входной трубы - средняя часть выхлопной свободно болталась на повесах, терлась на стыках, задевала по кузову. Отсюда и специфические звуки.</p>
                        <p>Это можно было понять по рычанию двигателя под газом, но я думал, что это просто свищ.&nbsp;Реальные масштабы проблемы с выхлопной удивили, пришлось поменять почти полностью.</p>
                    </div>
                    <div class="vote" title="Оценка">
                        Оценка
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <div class="answers">
                            Комментарии к ответу:
                            <a href="#">
                                0
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="pagination">-->
        <!--<ul>-->
        <!--<li class="active"><a href="#">1</a></li>-->
        <!--<li><a href="#">2</a></li>-->
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