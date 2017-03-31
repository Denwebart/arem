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
            @foreach($page->children()->published()->get() as $category)
                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 full-xxs">
                    <a href="{{ $category->getUrl() }}" class="item">
                        <img src="img/uploads/articles-categories/vaz.jpg" alt="{{ $category->image_alt }}" title="{{ $category->image_alt }}">
                        <span class="title">
                            {{ $category->getTitle() }}
                            <span class="label count">{{ count($category->children) }}</span>
                        </span>
                    </a>
                </div>
            @endforeach
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
            @foreach($questions as $question)
                @include('parts.question')
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
@endsection
