@extends('layouts.main')

@section('content')

    {!! $areaWidget->contentTop() !!}

    @if($page->title)
        <h2 class="responsive-block">{{ $page->title }}</h2>
    @endif

    <div class="text page-text">
        {!! $page->description !!}
    </div>

    {!! $areaWidget->contentMiddle() !!}

    <h4>Пользователи, которые получили награду</h4>

    {!! $areaWidget->contentBottom() !!}
@endsection

@section('sidebar')
    <div class="widget widget-users">
        <h4 class="title">Награды</h4>
        <div class="small-description">
            Награды за достижения...
            <br>
            <a href="#">Как получить награду?</a>
        </div>
        <div class="items">
            <div class="item">
                <a href="profile.html" class="user-avatar">
                    <img src="img/uploads/awards/kommentator-mesyatsa.png" alt="" class="avatar mini">
                </a>
                <div class="user">
                    <a href="profile.html" class="login"><span>Комментатор месяца</span></a>
                    <span class="rank">Краткое описание награды (?)</span>
                </div>
            </div>
            <div class="item">
                <a href="profile.html" class="user-avatar">
                    <img src="img/uploads/awards/pisatel-goda.png" alt="" class="avatar mini">
                </a>
                <div class="user">
                    <a href="profile.html" class="login"><span>Писатель года</span></a>
                    <span class="rank">...</span>
                </div>
            </div>
            <div class="item">
                <a href="profile.html" class="user-avatar">
                    <img src="img/uploads/awards/znatok-goda.png" alt="" class="avatar mini">
                </a>
                <div class="user">
                    <a href="profile.html" class="login"><span>Знаток года</span></a>
                    <span class="rank">...</span>
                </div>
            </div>
        </div>
    </div>
@endsection