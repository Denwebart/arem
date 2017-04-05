@extends('layouts.main', ['breadcrumbs' => $page->getBreadcrumbs()])

@section('content')

    {!! $areaWidget->contentTop() !!}

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

    {!! $areaWidget->contentMiddle() !!}

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
            @foreach($articles as $article)
                @include('parts.article')
            @endforeach
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

    {!! $areaWidget->contentBottom() !!}
@endsection