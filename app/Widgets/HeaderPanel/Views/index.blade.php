<?php
/**
 * @author     It Hill (it-hill.com@yandex.ua)
 * @copyright  Copyright (c) 2015-2016 Website development studio It Hill (http://www.it-hill.com)
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
                                        <a href="#" class="button default-button circle-button"><i class="fa fa-vk"></i></a>
                                        <a href="#" class="button default-button circle-button"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="button default-button circle-button"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="button default-button circle-button"><i class="fa fa-odnoklassniki"></i></a>
                                        <a href="#" class="button default-button circle-button"><i class="fa fa-google-plus"></i></a>
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
                            <a href="#" class="notification dropdown-button"><i class="fa fa-bell-o dropdown-arrow"></i></a>
                            <div class="dropdown-container">
                                <div class="container-header">
                                    <div class="title">
                                        Уведомлений:
                                        <span class="count">5 из 15</span>
                                    </div>
                                    <a href="profile-notifications.html" class="pull-right">
                                        Все
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </div>
                                <div class="delimiter"></div>
                                <div class="container-body">
                                    <ul class="list notifications-list">
                                        <li>
                                            <a href="profile-notifications.html#item-1">
                                                <i class="fa fa-thumbs-up info"></i>
                                                <span class="small-text date">25 мин. назад</span>
                                                <span class="text">
                                                    Пользователю Support понравилась ваша статья.
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile-notifications.html#item-2">
                                                <i class="fa fa-comment success"></i>
                                                <span class="small-text date">1 ч. назад</span>
                                                <span class="text">
                                                    Роман (roman@email.com) оставил комментарий к вашей статье.
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile-notifications.html#item-3">
                                                <i class="fa fa-user-plus success"></i>
                                                <span class="small-text date">16 ч. назад</span>
                                                <span class="text">
                                                    Зарегистрировался новый пользователь Denwebart.
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile-notifications.html#item-4">
                                                <i class="fa fa-trash danger"></i>
                                                <span class="small-text date">2 д. назад</span>
                                                <span class="text">
                                                    Ваш вопрос был удален.
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="messages pull-left dropdown">
                            <a href="#" class="notification dropdown-button"><i class="fa fa-paper-plane-o dropdown-arrow"></i></a>
                            <div class="dropdown-container">
                                <div class="container-header">
                                    <div class="title">
                                        Сообщений:
                                        <span class="count">3</span>
                                    </div>
                                    <a href="profile-messages.html" class="pull-right">
                                        Все
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </div>
                                <div class="delimiter"></div>
                                <div class="container-body">
                                    <ul class="list messages-list">
                                        <li>
                                            <a href="profile-dialog.html">
                                                <img src="img/uploads/avatar.jpg" alt="" class="avatar">
                                                <span class="small-text">Vasya, 2 мин. назад</span>
                                                <span class="text">
                                                    Здравствуйте! Хотел поблагодарить за помощь в ремонте автомобиля ...
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile-dialog.html">
                                                <img src="img/uploads/default-avatar.png" alt="" class="avatar">
                                                <span class="small-text">Den, 2 ч. назад</span>
                                                <span class="text">
                                                    Привет, Вань!
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile-dialog.html">
                                                <img src="img/uploads/avatar.jpg" alt="" class="avatar">
                                                <span class="small-text">Master, 2 д. назад</span>
                                                <span class="text">
                                                    Иван, подскажите, пожалуйста, как поменять заднюю балку?
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="letters pull-left dropdown">
                            <a href="#" class="notification dropdown-button"><i class="fa fa-envelope dropdown-arrow"></i></a>
                            <div class="dropdown-container">
                                <div class="container-header">
                                    <div class="title">
                                        Писем:
                                        <span class="count">2</span>
                                    </div>
                                    <a href="#" class="pull-right">
                                        Все
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </div>
                                <div class="delimiter"></div>
                                <div class="container-body">
                                    <ul class="list letters-list">
                                        <li>
                                            <a href="#">
                                                <span class="small-text">masterservis@email.com, 2 мин. назад</span>
                                                <span class="text">
                                                    Предложение о сотрудничестве
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="small-text">reklama-na-sajte@email.com, 2 ч. назад</span>
                                                <span class="text">
                                                    Реклама на сайте
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="small-text">Master, 2 д. назад</span>
                                                <span class="text">
                                                    Иван, подскажите, пожалуйста, как поменять заднюю балку?
                                                </span>
                                            </a>
                                            <a href="#" class="delete-button">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="user pull-left dropdown">
                            <a href="profile.html" class="dropdown-button">
                                <img src="img/uploads/avatar.jpg" class="avatar pull-left" alt="">
                                <i class="fa fa-bars dropdown-arrow"></i>
                            </a>
                            <div class="dropdown-container">
                                <div class="container-body">
                                    <ul class="menu user-menu">
                                        <li><a href="profile.html"><i class="fa fa-user"></i><span>Профиль</span></a></li>
                                        <li><a href="profile-cars.html"><i class="fa fa-car"></i><span>Автомобили</span></a></li>
                                        <li><a href="profile-questions.html"><i class="fa fa-question-circle"></i><span>Вопросы</span></a></li>
                                        <li><a href="profile-articles.html"><i class="fa fa-book"></i><span>Журнал</span></a></li>
                                        <li><a href="profile-comments.html"><i class="fa fa-comment"></i><span>Комментарии</span></a></li>
                                        <li><a href="profile-answers.html"><i class="fa fa-comments"></i><span>Ответы</span></a></li>
                                        <li><a href="profile-saved.html"><i class="fa fa-heart"></i><span>Сохраненное</span></a></li>
                                        <li><a href="profile-subscriptions.html"><i class="fa fa-newspaper-o"></i><span>Подписки</span></a></li>
                                        <li><a href="profile-friends.html"><i class="fa fa-handshake-o"></i><span>Друзья</span></a></li>
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