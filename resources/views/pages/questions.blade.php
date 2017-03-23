@extends('layouts.main')

@section('content')
    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="home-page" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="index.html" itemprop="item"><span itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="category.html" itemprop="item"><span itemprop="name">Родительская категория</span></a>
            <meta itemprop="position" content="2">
        </li>
    </ul>

    <div class="table-block page-title enter-xxs">
        @if($page->title)
            <h2 class="responsive-block p-r-25">{{ $page->title }}</h2>
        @endif
        <div class="fixed-block">
            <a href="#" class="button accent-button">
                <i class="fa fa-question"></i>
                <span>Задать вопрос</span>
            </a>
        </div>
    </div>

    @if($page->introtext)
        <div class="text page-text">
            {!! $page->introtext !!}
        </div>
    @endif

    <div class="row">
        <div class="menu submenu title-on-image">
            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 full-xxs">
                <a href="questions.html" class="item">
                    <img src="img/uploads/articles-categories/vaz.jpg" alt="">
                    <span class="title">
                                            ВАЗ 2101-2107, Жигули, Классика
                                            <span class="label count">29</span>
                                        </span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 full-xxs">
                <a href="questions.html" class="item">
                    <img src="img/uploads/articles-categories/lada.jpg" alt="">
                    <span class="title">
                                            Ваз-2108, Ваз-2109, Ваз-2115, Ваз-2110, Ваз-1117 Калина, Ваз-2170 Приора
                                            <span class="label count">18</span>
                                        </span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 full-xxs">
                <a href="questions.html" class="item">
                    <img src="img/uploads/articles-categories/slavuta.jpg" alt="">
                    <span class="title">
                                            ЗАЗ 1102-1105, Таврия, Славута
                                            <span class="label count">10</span>
                                        </span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 full-xxs">
                <a href="questions.html" class="item">
                    <img src="img/uploads/articles-categories/daewoo-matiz.jpg" alt="">
                    <span class="title">
                                            Daewoo Lanos, Nexia, Sens, Matiz, Nubira
                                            <span class="label count">55</span>
                                        </span>
                </a>
            </div>
        </div>
    </div>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> вопросов</span>:
                <span class="count">34</span>
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
                                    <i class="fa fa-comments-o"></i>
                                    <span>ответам</span>
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
                        <i class="fa fa-long-arrow-down"></i>
                    </button>
                    <button data-value="asc" title="По возростанию">
                        <i class="fa fa-long-arrow-up"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="filters">
            <div class="pull-right">
                <button class="button default-button dashed-button small-button">
                    <span>Без ответов</span>
                </button>
                <button class="button accent-button dashed-button small-button active">
                    <span>Нерешённые</span>
                </button>
                <button class="button accent-button dashed-button small-button">
                    <span>Решённые</span>
                </button>
            </div>
        </div>
        <div class="list">
            <div class="item question">
                <ul class="category breadcrumbs">
                    <li><a href="questions.html">Вопрос-ответ</a></li>
                    <li><a href="questions.html">Ваз-2108, Ваз-2109, Ваз-2115, Ваз-2110, Ваз-1117 Калина, Ваз-2170 Приора</a></li>
                </ul>
                <div class="item-content">
                    <a href="profile.html" class="user-avatar">
                        <img src="img/uploads/default-avatar.png" alt="" class="avatar mini">
                    </a>
                    <div class="item-title">
                        <h3>
                            <a href="question.html">
                                Свист коробки передач ваз 21099
                            </a>
                        </h3>
                    </div>
                    <div class="answers-count" title="Количество ответов">
                        <a href="question.html#answers">
                            <span class="count" itemprop="commentCount">0</span>
                            <span class="title">ответов</span>
                        </a>
                    </div>
                </div>
                <div class="item-info">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <!--<img src="img/uploads/default-avatar.png" alt="" class="avatar micro">-->
                                <span class="login" itemprop="name">Парк</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-06-01T22:17" itemprop="datePublished">1 июня 2013 в 22:17</time>
                        </div>
                        <div class="views" title="Количество просмотров">
                            <i class="fa fa-eye"></i>
                            <span>35 854</span>
                        </div>
                        <div class="saved-count" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart-o"></i>
                            <span>0</span>
                        </div>

                        <div class="like-dislike-widget">
                            <div class="buttons">
                                <button class="like">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="count">139</span>
                                </button>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                    <span class="count">0</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags">
                    <a href="#">
                        <span>Daewoo</span>
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
                    </a>
                </div>
            </div>
            <div class="item question">
                <ul class="category breadcrumbs">
                    <li><a href="questions.html">Вопрос-ответ</a></li>
                    <li><a href="questions.html">Daewoo Lanos, Nexia, Sens, Matiz, Nubira</a></li>
                </ul>
                <div class="item-content">
                    <a href="profile.html" class="user-avatar">
                        <img src="img/uploads/default-avatar.png" alt="" class="avatar mini">
                    </a>
                    <div class="item-title">
                        <h3>
                            <a href="question.html">
                                Можно ли ездить со сломанной передней пружиной?
                            </a>
                        </h3>
                    </div>
                    <div class="answers-count" title="Количество ответов">
                        <a href="question.html#answers">
                            <span class="count" itemprop="commentCount">23</span>
                            <span class="title">ответа</span>
                        </a>
                    </div>
                </div>
                <div class="item-info">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <!--<img src="img/uploads/default-avatar.png" alt="" class="avatar micro">-->
                                <span class="login" itemprop="name">Alexander</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-03-25T10:20" itemprop="datePublished">25 марта 2013 в 10:20</time>
                        </div>
                        <div class="views" title="Количество просмотров">
                            <i class="fa fa-eye"></i>
                            <span>13 122</span>
                        </div>
                        <div class="saved-count active" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart"></i>
                            <span>1</span>
                        </div>

                        <div class="like-dislike-widget">
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
                <div class="tags">
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
            <div class="item question has-solution">
                <ul class="category breadcrumbs">
                    <li><a href="questions.html">Вопрос-ответ</a></li>
                    <li><a href="questions.html">Ваз 2101-2107 Жигули, Классика</a></li>
                </ul>
                <div class="item-content">
                    <a href="profile.html" class="user-avatar">
                        <img src="img/uploads/avatar-1.jpg" alt="" class="avatar mini">
                    </a>
                    <div>
                        <div class="item-title">
                            <h3>
                                <a href="question.html">Надо ли делать развал схождение после замены сальников рулевой колонки колонки колонки на ваз 2106?</a>
                            </h3>
                        </div>
                        <div class="text item-text">
                            <p>
                                У меня к вам ещё пара вопросов. <strong>Теперь по
                                    рулевой колонке</strong>. Подтекает масло с рулевого
                                механизма. Решил менять сальники. <strong>После замены
                                    сальников нужно ли делать сход-развал?</strong>
                                И может ли подтекать масло из под регулировочных прокладок?
                                Автомобиль тот же - ВАЗ-2106 ;)
                            </p>
                        </div>
                        <div class="delimiter delimiter-dashed">
                            <div class="link">
                                <a href="question.html">
                                    <span>Читать далее</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="answers-count" title="Количество ответов">
                        <a href="question.html#answers">
                            <span class="count" itemprop="commentCount">2 213</span>
                            <span class="title">ответов</span>
                        </a>
                    </div>
                </div>
                <div class="item-info">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <!--<img src="img/uploads/avatar-1.jpg" alt="" class="avatar micro">-->
                                <span class="login" itemprop="name">Muph1984</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-03-17T19:55" itemprop="datePublished">17 марта 2013 в 19:55</time>
                        </div>
                        <div class="views" title="Количество просмотров">
                            <i class="fa fa-eye"></i>
                            <span>1 345 854</span>
                        </div>
                        <div class="saved-count" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart"></i>
                            <span>214 098</span>
                        </div>

                        <div class="like-dislike-widget">
                            <div class="buttons">
                                <button class="like">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="count">789 219</span>
                                </button>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                    <span class="count">91 567</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags">
                    <a href="#">
                        <span>Daewoo Lanos</span>
                        <span class="count">234</span>
                    </a>
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

    @if($page->content)
        <div class="delimiter indent m-t-30"></div>
        <div class="text page-text">
            {!! $page->content !!}
        </div>
    @endif
@endsection
