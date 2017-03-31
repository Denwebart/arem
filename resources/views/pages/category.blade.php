@extends('layouts.main', ['breadcrumbs' => $page->getBreadcrumbs()])

@section('content')

    @if($page->title)
        <div class="page-title">
            <h2>{{ $page->title }}</h2>
        </div>
    @endif

    @if($page->introtext)
        <div class="text page-text">
            <img src="img/uploads/articles-categories/lada-big.jpg" alt="" class="m-b-20">
            <!--<img src="img/uploads/articles-categories/vaz-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/mitsubishi-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/chery-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/slavuta-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/daewoo-matiz-big.jpg" alt="">-->
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
                Всего<span class="hidden-xs"> статей</span>:
                <span class="count">121</span>
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
                                    <i class="fa fa-comment-o"></i>
                                    <span>комментариям</span>
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
        <div class="delimiter indent"></div>
        <div class="text page-text">
            {!! $page->content !!}
        </div>
    @endif
@endsection
