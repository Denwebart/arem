@if(count($articles))
    <div class="widget widget-articles">
        <div class="widget-title">
            @if($advertisingModel->is_show_title)
                <h4 class="title">{{ $advertisingModel->title }}</h4>
            @endif
            <div class="filters">
                <a class="active" href="#">новые</a>
                <a href="#">лучшие</a>
                <a href="#">популярные</a>
            </div>
        </div>
        <div class="items">
            @foreach($articles as $article)
                <div class="item">
                    <div class="item-info">
                        <span class="date">
                            {{ \App\Helpers\Date::getRelative($article->published_at, false) }}
                        </span>
                        <div class="likes">
                            <i class="fa fa-thumbs-o-up"></i>
                            <span class="count">
                                {{ $article->votes_like }}
                            </span>
                        </div>
                        <div class="views">
                            <i class="fa fa-eye"></i>
                            <span class="count">
                                {{ $article->views }}
                            </span>
                        </div>
                    </div>
                    <a href="{{ $article->getUrl() }}">
                        <img src="{{ $article->getImageUrl() }}" alt="{{ $article->image_alt }}" class="item-image">
                    </a>
                    <div class="item-content">
                        <a href="{{ $article->getUrl() }}" class="text">
                            {{ $article->title }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif