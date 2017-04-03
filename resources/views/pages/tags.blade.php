@extends('layouts.main', ['breadcrumbs' => $page->getBreadcrumbs()])

@section('content')

    @if($page->title)
        <h2 class="responsive-block">{{ $page->title }}</h2>
    @endif

    @if($page->introtext)
        <div class="text page-text">
            {!! $page->introtext !!}
        </div>
    @endif

    @if(count($tagsByAlphabet))

        <section id="letters">
            @foreach($tagsByAlphabet as $letter => $tags)
                <a href="#{{ $letter }}" class="btn btn-default btn-sm">
                    {{ $letter }}
                </a>
            @endforeach
        </section>

        <section id="tags-area" class="blog margin-top-10">
            <div class="count">
                Всего тегов: <span>{{ count($tagsByAlphabet) }}</span>.
            </div>
            @foreach($tagsByAlphabet as $letter => $tags)
                <div class="letter-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="{{ $letter }}" class="letter-title">
                                <span class="letter">{{ $letter }}</span>
                                <span class="count pull-right">количество тегов: {{ count($tags) }}</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tags">
                                <div class="row">
                                    @foreach($tags as $tag)
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <a href="{{ $tag->getUrl() }}">
                                                {{--@if($tag->image)--}}
                                                {{--{{ $tag->getImage(null, ['width' => '20px', 'class' => 'pull-left']) }}--}}
                                                {{--@endif--}}
                                                <span>{{ $tag->title }}</span>
                                                <span class="count">{{ count($tag->pages) }}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section><!--blog-area-->
    @else
        Тегов нет.
    @endif

    @if($page->content)
        <div class="delimiter indent"></div>
        <div class="text page-text">
            {!! $page->content !!}
        </div>
    @endif
@endsection