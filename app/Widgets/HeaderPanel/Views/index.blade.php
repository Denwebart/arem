<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2017 Website development studio It Hill (http://www.it-hill.com)
 */
?>

<div id="header-widget" class="dark-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(Auth::guest())
                    <!--Для незарегистрированных пользователей-->

                    {{--Преимущества регистрации--}}
                    <div class="pull-left hidden-xs hidden-sm">
                        <div class="pull-left m-r-25 hidden-md">
                            Регистрируйтесь, чтобы:
                        </div>
                        <ul class="pull-left">
                            <li>
                                <i class="fa fa-question"></i>
                                <span class="visible-lg">задавать вопросы,</span>
                                <span class="visible-md">Задавйте вопросы,</span>
                            </li>
                            <li>
                                <i class="fa fa-file-text"></i>
                                <span class="visible-lg">писать статьи,</span>
                                <span class="visible-md">пишите статьи,</span>
                            </li>
                            <li>
                                <i class="fa fa-comments"></i>
                                <span class="visible-lg">общаться с пользователями,</span>
                                <span class="visible-md">общайтесь с пользователями,</span>
                            </li>
                            <li>
                                <i class="fa fa-gift"></i>
                                <span class="visible-lg">получать призы!</span>
                                <span class="visible-md">получайте призы!</span>
                            </li>
                        </ul>
                    </div>
                    {{--Вход/Регистрация--}}
                    <div class="pull-right user-panel sign-in-container">
                        <i class="fa fa-user"></i>
                        <div class="dropdown">
                            <a href="#" rel="nofollow" class="dropdown-button dropdown-arrow"><span>Войти</span></a>
                            <div class="dropdown-container">
                                <div class="container-body">
                                    <div class="sign-in-social">
                                        <a href="{{ URL::route('login.social', ['provider' => 'vkontakte']) }}" class="button default-button circle-button"><i class="fa fa-vk"></i></a>
                                        <a href="{{ URL::route('login.social', ['provider' => 'facebook']) }}" class="button default-button circle-button"><i class="fa fa-facebook"></i></a>
                                        <a href="{{ URL::route('login.social', ['provider' => 'twitter']) }}" class="button default-button circle-button"><i class="fa fa-twitter"></i></a>
                                        <a href="{{ URL::route('login.social', ['provider' => 'odnoklassniki']) }}" class="button default-button circle-button"><i class="fa fa-odnoklassniki"></i></a>
                                        <a href="{{ URL::route('login.social', ['provider' => 'google']) }}" class="button default-button circle-button"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <form action="{{ route('login') }}" method="POST" role="form" class="send-ajax" id="sign-in-form">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" title="Email или логин *">
                                            <input id="email" name="email" type="text" value="{{ old('email') }}" placeholder="Email или логин *">
                                            <span class="help-block error email_error">
                                                {{ $errors->first('email') }}
                                            </span>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" title="Пароль *">
                                            <input id="password" name="password" type="password" placeholder="Пароль *">
                                            <span class="help-block error password_error">
                                                {{ $errors->first('password') }}
                                            </span>
                                        </div>
                                        <div class="error-message"></div>
                                        <div class="success-message"></div>
                                        <div class="form-group input-group">
                                            <div class="fixed">
                                                <input id="remember" name="remember" type="checkbox" value="1" {{ old('remember') ? 'checked' : '' }}>
                                            </div>
                                            <label for="remember-me">
                                                Запомнить меня
                                            </label>
                                        </div>
                                        <button class="button small-button accent-button m-r-10" type="submit">
                                            <i class="fa fa-sign-in"></i>
                                            Войти
                                        </button>
                                        <a href="#" class="link">Забыли пароль?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="pull-left">
                            /
                        </div>
                        <div class="dropdown">
                            <a href="#" class="dropdown-button dropdown-arrow"><span>Зарегистрироваться</span></a>
                            <div class="dropdown-container">
                                <div class="container-body">
                                    <form action="{{ route('register') }}" method="POST" role="form" class="send-ajax" id="registration-form">
                                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}" title="Логин *">
                                            <input id="login" name="login" type="text" value="{{ old('login') }}" placeholder="Логин *">
                                            <span class="help-block error login_error">
                                                {{ $errors->first('login') }}
                                            </span>
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" title="Email *">
                                            <input id="email" name="email" type="text" value="{{ old('email') }}" placeholder="Email *">
                                            <span class="help-block error email_error">
                                                {{ $errors->first('email') }}
                                            </span>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" title="Пароль *">
                                            <input id="password" name="password" type="password" placeholder="Пароль *">
                                            <span class="help-block error password_error">
                                                {{ $errors->first('password') }}
                                            </span>
                                        </div>
                                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}" title="Повтор пароля *">
                                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Повтор пароля *">
                                            <span class="help-block error password_confirmation_error">
                                                {{ $errors->first('password_confirmation') }}
                                            </span>
                                        </div>
                                        <div class="form-group input-group{{ $errors->has('is_agree') ? ' has-error' : '' }}">
                                            <div class="fixed">
                                                <input id="is_agree" name="is_agree" type="checkbox" value="1">
                                            </div>
                                            <label for="is_agree">
                                                Я соглашаюсь с <a href="#">правилами сайта</a>
                                            </label>
                                            <span class="help-block error is_agree_error">
                                                {{ $errors->first('is_agree') }}
                                            </span>
                                        </div>

                                        <div class="small-description">
                                            Указывайте ваш настоящий email-адрес,
                                            так как на этот ящик будет выслано письмо с подтверждением регистрации.
                                        </div>

                                        <div class="error-message"></div>
                                        <div class="success-message"></div>

                                        <button class="button small-button accent-button m-r-10" type="submit">
                                            <i class="fa fa-user-plus"></i>
                                            Зарегистрироваться
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!--Для зарегистрированных пользователей-->

                    {{--Новая статья/вопрос--}}
                    <div class="pull-left hidden-xs">
                        <ul class="pull-left">
                            <li>
                                <i class="fa fa-file-text"></i>
                                <a href="#">Написать статью</a>
                            </li>
                            <li>
                                <i class="fa fa-question"></i>
                                <a href="#">Задать вопрос</a>
                            </li>
                        </ul>
                    </div>
                    {{--Меню пользователя--}}
                    <div class="user-panel pull-right">
                        <div class="notifications pull-left dropdown">
                            @include('widget.headerPanel::notifications')
                        </div>
                        <div class="messages pull-left dropdown">
                            @include('widget.headerPanel::messages')
                        </div>
                        <div class="letters pull-left dropdown">
                            @include('widget.headerPanel::letters')
                        </div>
                        <div class="user pull-left dropdown">
                            <a href="#" rel="nofollow" class="dropdown-button">
                                <img src="{{ Auth::user()->getAvatarUrl() }}" class="avatar pull-left" alt="{{ Auth::user()->login }}" title="{{ Auth::user()->login }}">
                                <i class="fa fa-bars dropdown-arrow"></i>
                            </a>
                            <div class="dropdown-container">
                                <div class="container-body">
                                    <ul class="menu user-menu">
                                        <li @if (Request::url() == route('user.profile', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.profile', ['login' => Auth::user()->alias]) }}"><i class="fa fa-user"></i><span>Профиль</span></a></li>
                                        <li @if (Request::url() == route('user.cars', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.cars', ['login' => Auth::user()->alias]) }}"><i class="fa fa-car"></i><span>Автомобили</span></a></li>
                                        <li @if (Request::url() == route('user.questions', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.questions', ['login' => Auth::user()->alias]) }}"><i class="fa fa-question-circle"></i><span>Вопросы</span></a></li>
                                        <li><a href="profile-articles.html"><i class="fa fa-book"></i><span>Журнал</span></a></li>
                                        <li @if (Request::url() == route('user.comments', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.comments', ['login' => Auth::user()->alias]) }}"><i class="fa fa-comment"></i><span>Комментарии</span></a></li>
                                        <li @if (Request::url() == route('user.answers', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.answers', ['login' => Auth::user()->alias]) }}"><i class="fa fa-comments"></i><span>Ответы</span></a></li>
                                        <li @if (Request::url() == route('user.saved', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.saved', ['login' => Auth::user()->alias]) }}"><i class="fa fa-heart"></i><span>Сохраненное</span></a></li>
                                        <li @if (Request::url() == route('user.subscriptions', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.subscriptions', ['login' => Auth::user()->alias]) }}"><i class="fa fa-newspaper-o"></i><span>Подписки</span></a></li>
                                        <li @if (Request::url() == route('user.friends', ['user' => Auth::user()->alias])) class="active" @endif><a href="{{ route('user.friends', ['login' => Auth::user()->alias]) }}"><i class="fa fa-handshake-o"></i><span>Друзья</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('logout') }}" class="exit-button button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>