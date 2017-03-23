@extends('layouts.main')

@section('content')
    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="home-page" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="index.html" itemprop="item"><span itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1">
        </li>
    </ul>

    @if($page->title)
        <h2 class="responsive-block">{{ $page->title }}</h2>
    @endif

    @if($page->introtext)
        <div class="text page-text">
            {!! $page->introtext !!}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ul id="sitemap" class="tree">
                @foreach($sitemapItems as $item)
                    <li>
                        <a href="{{ $item->getUrl() }}">
                            @if($item->type == \App\Models\Page::TYPE_QUESTION)
                                <i class="fa fa-question"></i>
                            @endif
                            <span>{{ $item->getTitle() }}</span>
                        </a>
                        {{ \App\Helpers\View::getChildrenPages($item, $item->getUrl()) }}
                    </li>
                @endforeach
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