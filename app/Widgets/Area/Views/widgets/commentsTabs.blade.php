@if(count($comments))
    <div class="widget widget-comments">
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
            @foreach($comments as $comment)
                <div class="item">
                    @if($comment->user)
                        <a href="{{ route('user.profile', ['login' => $comment->user->alias]) }}" class="user-avatar">
                            <img src="{{ $comment->user->getAvatarUrl() }}" alt="{{ $comment->user->login }}" title="{{ $comment->user->login }}" class="avatar mini">
                        </a>
                    @endif
                    <div class="item-content">
                        <div class="item-info">
                            @if($comment->user)
                                <a href="{{ route('user.profile', ['login' => $comment->user->alias]) }}" class="author">
                                    <span>{{ $comment->user->login }}</span>
                                </a>
                            @endif
                            <span class="date">
                                {{ \App\Helpers\Date::getRelative($comment->published_at, false) }}
                            </span>
                            <a href="{{ $comment->getUrl() }}" class="reply-link pull-right">
                                <i class="fa fa-reply fa-flip-horizontal"></i>
                            </a>
                        </div>
                        <a href="{{ $comment->getUrl() }}" class="text">
                            {{ \App\Helpers\Str::limit($comment->comment, 150, '...') }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif