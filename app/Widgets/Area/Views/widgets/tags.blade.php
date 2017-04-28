@if(count($tags))
    <div class="widget widget-tags">
        @if($advertisingModel->is_show_title)
            <h4 class="title">{{ $advertisingModel->title }}</h4>
        @endif
        <div class="tags">
            @foreach($tags as $tag)
                <a href="{{ $tag->getUrl() }}">
                    <span>{{ $tag->title }}</span>
                    <span class="count">{{ count($tag->pages) }}</span>
                </a>
            @endforeach
        </div>
    </div>
@endif