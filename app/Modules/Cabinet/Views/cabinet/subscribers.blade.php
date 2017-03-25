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

    <h2>Подписчики пользователя {{ $user->login }}</h2>

    <form action="search.html" method="POST" class="search-form" id="search-form">
        <div class="input-group">
            <input class="input" type="text" name="query" placeholder="Поиск пользователей" value="">
            <span class="input-group-button">
                                            <button type="submit" form="search-form-2" value="" class="button accent-button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
        </div>
        <div class="form-group input-group">
            <div class="fixed">
                <input name="online" id="online" type="checkbox" value="1">
            </div>
            <label for="online">
                Сейчас на сайте
            </label>
        </div>
    </form>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> подписчиков</span>:
                <span class="count">48</span>
            </div>
            <div class="sort">
                <span>Сортировать по:</span>
                <div class="sortby dropdown">
                    <a href="#" class="dropdown-button dropdown-arrow">умолчанию</a>
                    <div class="dropdown-container">
                        <div class="container-body">
                            <ul class="select-list">
                                <li data-value="login" class="selected">
                                    <i class="fa fa-heart"></i>
                                    <span>умолчанию</span>
                                </li>
                                <li data-value="login">
                                    <i class="fa fa-user"></i>
                                    <span>логину</span>
                                </li>
                                <li data-value="name">
                                    <i class="fa fa-user"></i>
                                    <span>имени</span>
                                </li>
                                <li data-value="rank">
                                    <i class="fa fa-user-circle-o"></i>
                                    <span>рангу</span>
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
        <div class="list users-list p-t-0">
            <div class="item user">
                <a href="profile.html" class="user-avatar big">
                    <img src="/img/uploads/avatar-2.jpg" alt="" class="avatar">
                </a>
                <div class="user">
                    <a href="profile.html" class="login"><span>SKS</span></a>
                    <span class="fullname">Вася Пупкин</span>
                    <span class="rank">Эксперт</span>
                    <span class="date">
                                                    <span>В подписчиках:</span>
                                                    <span class="value">1 год 6 месяцев 2 дня</span>
                                                </span>
                </div>
                <div class="buttons">
                    <button class="button dark-button small-button transparent-button">
                        <i class="fa fa-paper-plane"></i>
                        Написать сообщение
                    </button>
                    <button class="button accent-button small-button transparent-button">
                        <i class="fa fa-user-times"></i>
                        Добавить в друзья
                    </button>
                </div>
            </div>
            <div class="item user online">
                <a href="profile.html" class="user-avatar big">
                    <img src="/img/uploads/avatar-3.jpg" alt="" class="avatar">
                </a>
                <div class="user">
                    <a href="profile.html" class="login"><span>Мастер</span></a>
                    <span class="rank">Профи</span>
                    <span class="date">
                                                    <span>В подписчиках:</span>
                                                    <span class="value">1 год 10 месяцев 17 дней</span>
                                                </span>
                </div>
                <div class="buttons">
                    <button class="button dark-button small-button transparent-button">
                        <i class="fa fa-paper-plane"></i>
                        Написать сообщение
                    </button>
                    <button class="button default-button small-button">
                        <i class="fa fa-user-times"></i>
                        Убрать из друзей
                    </button>
                </div>
            </div>
            <div class="item user">
                <a href="profile.html" class="user-avatar big">
                    <img src="/img/uploads/avatar-1.jpg" alt="" class="avatar">
                </a>
                <div class="user">
                    <a href="profile.html" class="login"><span>Muph1984</span></a>
                    <span class="rank">Энтузиаст</span>
                    <span class="date">
                                                    <span>В подписчиках:</span>
                                                    <span class="value">9 месяцев 21 день</span>
                                                </span>
                </div>
                <div class="buttons">
                    <button class="button dark-button small-button transparent-button">
                        <i class="fa fa-paper-plane"></i>
                        Написать сообщение
                    </button>
                    <button class="button default-button small-button">
                        <i class="fa fa-user-times"></i>
                        Убрать из друзей
                    </button>
                </div>
            </div>
            <div class="item user">
                <a href="profile.html" class="user-avatar big">
                    <img src="/img/uploads/default-avatar.png" alt="" class="avatar">
                </a>
                <div class="user">
                    <a href="profile.html" class="login"><span>Макс</span></a>
                    <span class="fullname">Максим Галкин</span>
                    <span class="rank">Любитель</span>
                    <span class="date">
                                                    <span>В подписчиках:</span>
                                                    <span class="value">12 месяцев 1 день</span>
                                                </span>
                </div>
                <div class="buttons">
                    <button class="button dark-button small-button transparent-button">
                        <i class="fa fa-paper-plane"></i>
                        Написать сообщение
                    </button>
                    <button class="button default-button small-button">
                        <i class="fa fa-user-times"></i>
                        Убрать из друзей
                    </button>
                </div>
            </div>
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
