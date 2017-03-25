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
                <i class="fa fa-file-text"></i>
                <span>Написать статью</span>
            </a>
        </div>
    </div>

    @if($page->introtext)
        <div class="text page-text">
            {!! $page->introtext !!}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <h3 class="title m-b-10">Популярные пользователи</h3>
            <div class="list users-list horisontal four-item m-b-20">
                <div class="item user">
                    <a href="profile-articles.html" class="user-avatar big">
                        <img src="/img/uploads/ivan.jpg" alt="" class="avatar">
                    </a>
                    <div class="user">
                        <a href="profile-articles.html" class="login"><span>Ivan</span></a>
                        <span class="text-1">327 статей</span>
                        <span class="text-2">12 подписчиков</span>
                    </div>
                </div>
                <div class="item user">
                    <a href="profile-articles.html" class="user-avatar big">
                        <img src="/img/uploads/avatar-3.jpg" alt="" class="avatar">
                    </a>
                    <div class="user">
                        <a href="profile-articles.html" class="login"><span>Мастер</span></a>
                        <span class="text-1">124 статьи</span>
                        <span class="text-2">14 подписчиков</span>
                    </div>
                </div>
                <div class="item user">
                    <a href="profile-articles.html" class="user-avatar big">
                        <img src="/img/uploads/avatar-1.jpg" alt="" class="avatar">
                    </a>
                    <div class="user">
                        <a href="profile-articles.html" class="login"><span>Muph1984</span></a>
                        <span class="text-1">54 статьи</span>
                        <span class="text-2">5 подписчиков</span>
                    </div>
                </div>
                <div class="item user">
                    <a href="profile-articles.html" class="user-avatar big">
                        <img src="/img/uploads/default-avatar.png" alt="" class="avatar">
                    </a>
                    <div class="user">
                        <a href="profile-articles.html" class="login"><span>Макс</span></a>
                        <span class="text-1">43 статьи</span>
                        <span class="text-2">2 подписчика</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog with-filters">
        <div class="filters">
            <div class="on-page">
                Всего<span class="hidden-xs"> статей</span>:
                <span class="count">586</span>
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
        <div class="list">
            <div class="item article">
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
                            <a href="profile-articles.html" itemprop="url">
                                <img src="/img/uploads/avatar.jpg" class="avatar micro" title="" alt="">
                                <span class="login" itemprop="name">Den</span>
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
                                <i class="fa fa-comment"></i>
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
            <div class="item article">
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
                            <a href="profile-articles.html" itemprop="url">
                                <img src="/img/uploads/avatar-3.jpg" class="avatar micro" title="" alt=""><span class="login" itemprop="name">Мастер</span>
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
                                <i class="fa fa-comment"></i><span class="count" itemprop="commentCount">12</span>
                            </a>
                        </div>
                        <div class="saved-count" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart"></i>
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
            <div class="item article">
                <div class="item-title">
                    <ul class="category breadcrumbs">
                        <li><a href="category.html">Статьи</a></li>
                        <li><a href="category.html">Daewoo Lanos, Nexia, Matiz, Sens</a></li>
                    </ul>
                    <h3>
                        <a href="page.html">Ремонт ключа трещотки своими руками</a>
                    </h3>
                </div>
                <div class="item-image">
                    <a href="page.html">
                        <img src="/img/uploads/articles/statya-1.jpg" alt="">
                    </a>
                </div>
                <div class="text item-text">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile-articles.html" itemprop="url">
                                <img src="/img/uploads/ivan.jpg" class="avatar micro" title="" alt=""><span class="login" itemprop="name">Ivan</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-03-17T19:55" itemprop="datePublished">17 марта 2013 в 19:55</time>
                        </div>
                    </div>
                    <p>
                        Я думаю, что у каждого автолюбителя, автомастера,
                        электрика, сантехника есть свой любимый инструмент,
                        который сделан именно под его руку и безотказно
                        служит уже не один год. Когда такой инструмент (ключ,
                        отвёртка, пассатижи, молоток и т.д.) ломается, приходит
                        в негодность, то настроение от такого события резко
                        ухудшается. Тут тебе и потеря верного соратника, и
                        дополнительные финансовые траты... Знакомо? Так, например,
                        было и со мной. В один прекрасный день, любимый ключ
                        трещотка фирмы TOPTUL сломался. По началу, правда, думал,
                        что ничего серьёзного. Так как ключ не первый день...
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
                                <i class="fa fa-comment-o"></i><span class="count" itemprop="commentCount">0</span>
                            </a>
                        </div>
                        <div class="saved-count" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart-o"></i>
                            <span>0</span>
                        </div>

                        <div class="like-dislike-widget pull-right">
                            <div class="buttons">
                                <button class="like">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="count">5 466</span>
                                </button>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                    <span class="count">32</span>
                                </button>
                            </div>
                        </div>
                    </div>
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