@if(count($users))
    <div class="widget widget-users">
        @if($advertisingModel->is_show_title)
            <h4 class="title">{{ $advertisingModel->title }}</h4>
        @endif
        <div class="small-description">
            Здесь отображаются самые активные пользователи сайта.
            <br>
            <a href="#">Как сюда попасть?</a>
        </div>
        <div class="items">
            @foreach($users as $index => $user)
                <div class="item">
                    <div class="rating-position">{{ $index + 1 }}</div>
                    <a href="{{ route('user.profile', ['login' => $user->alias]) }}" class="user-avatar">
                        <img src="{{ $user->getAvatarUrl() }}" alt="{{ $user->login }}" class="avatar mini">
                    </a>
                    <div class="user">
                        <a href="{{ route('user.profile', ['login' => $user->alias]) }}" class="login"><span>{{ $user->login }}</span></a>
                        <span class="rank">{{ $user->getRank() }}</span>
                    </div>
                    <div class="rating">
                        <span class="count">{{ $user->rating }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="{{ route('users') }}" class="all-items-button">
            <i class="fa fa-users"></i>
            <span>Все пользователи</span>
        </a>
    </div>
@endif