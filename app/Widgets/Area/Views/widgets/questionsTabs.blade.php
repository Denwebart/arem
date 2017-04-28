@if(count($questions))
    <div class="widget widget-questions">
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
            @foreach($questions as $question)
                <div class="item @if($question->best_comments_count) has-solution @endif">
                    <a href="{{ route('user.profile', ['login' => $question->user->alias]) }}" class="user-avatar">
                        <img src="{{ $question->user->getAvatarUrl() }}" alt="{{ $question->user->login }}" title="{{ $question->user->login }}" class="avatar mini">
                    </a>
                    <div class="item-content">
                        <div class="item-info">
                            <a href="{{ route('user.profile', ['login' => $question->user->alias]) }}">
                                <span class="author">{{ $question->user->login }}</span>
                            </a>
                            <span class="date">
                                {{ \App\Helpers\Date::getRelative($question->published_at, false) }}
                            </span>
                        </div>
                        <a href="{{ $question->getUrl() }}" class="text">
                            {{ $question->title }}
                        </a>
                    </div>
                    <a href="{{ $question->getUrl() }}#answers" class="answers">
                        <i class="fa @if(!count($question->comments)) fa-comments-o @else fa-comments @endif"></i>
                        <span class="count">{{ count($question->comments) }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endif