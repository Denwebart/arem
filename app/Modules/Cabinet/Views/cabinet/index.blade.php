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
    </ul>

    <h2>Профиль пользователя Ivan</h2>

    <div class="small-description m-t--15">
        В сообществе Avtorem.info уже
        <span class="date">1 год 10 месяцев 12 дней</span>
    </div>

    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div class="info-list two-col">
                <div class="item">
                    <span class="title">Роль:</span>
                    <span class="value">Администратор</span>
                </div>
                <div class="item">
                    <span class="title">Автомобиль:</span>
                    <span class="value">Daewoo Nexia</span>
                </div>
                <div class="item">
                    <span class="title">Зарегистрирован:</span>
                    <span class="value">4 февраля 2015 </span>
                </div>
                <div class="item">
                    <span class="title">Профессия:</span>
                    <span class="value">Автомеханик</span>
                </div>
                <div class="item">
                    <span class="title">Email:</span>
                    <span class="value">avtorem.info@yandex.ru</span>
                </div>
                <div class="item">
                    <span class="title">Пол:</span>
                    <span class="value">Мужской</span>
                </div>
                <div class="item">
                    <span class="title">Местоположение:</span>
                    <span class="value">Украина, Харьков</span>
                </div>
                <div class="item">
                    <span class="title">Дата рождения:</span>
                    <span class="value">3 февраля 1979</span>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="images-collage">
                <a href="#"><img src="img/uploads/car-2.jpg" alt=""></a>
                <a href="#"><img src="img/uploads/car-3.jpg" alt=""></a>
                <a href="#"><img src="img/default-image.svg" alt=""></a>
            </div>
        </div>
    </div>

    <div class="small-description m-b-0">О себе:</div>
    <div class="text page-text">
        <p>
            Зовут меня Плахотин Иван. Родился, живу и работаю
            в «Первой столице» Украины, славном городе Харькове.
            Там же закончил школу и университет ХГТУСХ
            имени П. Василенко, с дипломом инженера-механика
            по ремонту и обслуживанию с\х техники. И вот уже более
            10 лет своей жизни посвятил ремонту легковых автомобилей
            в своей небольшой мастерской. Все статьи на сайте написал
            лично, исходя из персонального опыта и багажа знаний.
            И практически все фотографии сделал сам, как говорится
            «в рабочей обстановке».
        </p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="widget user-balance-widget">
                <div class="title">
                    <h3>Мой баланс</h3>
                    <div class="small-description">
                        <a href="#">Что это?</a>
                    </div>
                </div>
                <div class="user-balance">
                    <span class="count">2 134</span>
                    <span>балла</span>
                </div>
                <div class="buttons">
                    <a href="#" class="button accent-button">Пополнить баланс</a>
                    <a href="#" class="button default-button">Выбрать сувенир</a>
                </div>
                <div class="small-description">
                    <a href="#">Как заработать рейтинг и получить баллы?</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="title">
                <h3>Награды</h3>
                <div class="small-description">
                    <a href="#">Как получить награду?</a>
                </div>
            </div>

            <div class="user-awards">
                <a href="#" class="item" title="Лучший знаток 2015 года">
                    <img src="img/uploads/awards/pisatel-goda.png" alt="">
                </a>
                <a href="#" class="item" title="Лучший писатель 2015 года">
                    <img src="img/uploads/awards/znatok-goda.png" alt="">
                </a>
                <a href="#" class="item" title="Лучший комментатор августа 2015 года">
                    <img src="img/uploads/awards/kommentator-mesyatsa.png" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection