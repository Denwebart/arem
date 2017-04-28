<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

@extends('layouts.app')

@section('layout-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 without-padding">
                <section id="content" class="white-section">
                    @if(isset($breadcrumbs))
                        <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="home-page" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a href="/" itemprop="item"><span itemprop="name">Главная</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            @foreach($breadcrumbs as $key => $breadcrumbItem)
                                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="{{ $breadcrumbItem['url'] }}" itemprop="item"><span itemprop="name">{{ $breadcrumbItem['title'] }}</span></a>
                                    <meta itemprop="position" content="{{ $key + 2 }}">
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    @yield('content')
                </section>
            </div>
            <div class="col-md-4 sidebar">

                @yield('rightSidebarTop')

                {!! $areaWidget->rightSidebar() !!}

                @yield('rightSidebarBottom')

            </div>
        </div>
    </div>
@endsection