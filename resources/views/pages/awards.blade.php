@extends('layouts.main', ['breadcrumbs' => $page->getBreadcrumbs()])

@section('content')

    {!! $areaWidget->contentTop() !!}

    @if($page->title)
        <h2 class="responsive-block">{{ $page->title }}</h2>
    @endif

    <div class="text page-text">
        {!! $page->content !!}
    </div>

    {!! $areaWidget->contentMiddle() !!}

    {!! $areaWidget->contentBottom() !!}
@endsection
