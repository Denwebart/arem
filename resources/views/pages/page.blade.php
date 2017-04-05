@extends('layouts.main', ['breadcrumbs' => $page->getBreadcrumbs()])

@section('content')

    {!! $areaWidget->contentTop() !!}

    <div class="table-block page-title">
        <h2 class="responsive-block p-r-25">{{ $page->title }}</h2>
        <div class="fixed-block">
            <div class="widget like-dislike-widget">
                <div class="buttons">
                    <button class="like active">
                        <i class="fa fa-thumbs-up"></i>
                        <span class="count">{{ \App\Helpers\Str::numberFormat($page->votes_like) }}</span>
                    </button>
                    <button class="dislike">
                        <i class="fa fa-thumbs-o-down"></i>
                        <span class="count">{{ \App\Helpers\Str::numberFormat($page->votes_dislike) }}</span>
                    </button>
                </div>
                <div class="percentage">
                    <div class="value percentage-like" style="width: 99.5%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-info">
        @if($page->user)
            <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                <a href="profile.html" itemprop="url">
                    <img src="/img/uploads/ivan.jpg" class="avatar micro" title="" alt=""><span class="login" itemprop="name">{{ $page->user->login }}</span>
                </a>
            </div>
        @endif
        <div class="date">
            <i class="fa fa-calendar-o"></i>
            <time datetime="2013-03-17T19:55" itemprop="datePublished">{{ \App\Helpers\Date::format($page->created_at, true, true) }}</time>
        </div>
        <div class="views" title="Количество просмотров">
            <i class="fa fa-eye"></i>
            <span>{{ \App\Helpers\Str::numberFormat($page->views) }}</span>
        </div>
        <div class="comments-count" title="Количество комментариев">
            <a href="page.html#comments">
                <i class="fa fa-comments-o"></i><span class="count" itemprop="commentCount">{{ \App\Helpers\Str::numberFormat(count($page->comments)) }}</span>
            </a>
        </div>
        <div class="saved-count active" title="Сколько пользователей сохранили">
            <i class="fa fa-heart"></i>
            <span>{{ \App\Helpers\Str::numberFormat(count($page->whoSaved)) }}</span>
        </div>
    </div>
    @if($page->content)
        <div class="text page-text">
            {!! $page->content !!}
        </div>
    @endif
    <div class="tags">
        <a href="#">
            <span>Daewoo Lanos</span>
            <span class="count">234</span>
        </a>
        <a href="#">
            <span>Замена колеса</span>
            <span class="count">34</span>
        </a>
        <a href="#">
            <span>Колесные диски</span>
            <span class="count">4</span>
        </a>
        <a href="#">
            <span>Ремонт</span>
            <span class="count">67</span>
        </a>
    </div>
    <div id="social-buttons-widget" class="widget">
        <div class="text help-text pull-left">
            Понравилась статья? Поделись ею на своей странице!
        </div>
        <div class="social-buttons pull-left">
            <!--Yandex Блок "Поделиться"-->
            <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,evernote,lj,pocket,viber,whatsapp,skype,telegram"></div>
            <!--Yandex Блок "Поделиться"-->
        </div>
    </div>

    <!--Читайте также-->
    <section id="related-pages" class="widget widget-related">
        <h3>Читайте также:</h3>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6 full-xxs">
                <a href="page.html" class="item">
                    <img src="/img/uploads/articles/statya-1.jpg" alt="" title="" class="item-image">
                    <span class="title text">
                                        Ремонт ключа трещотки своими руками
                                    </span>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 full-xxs">
                <a href="page.html" class="item">
                    <img src="/img/uploads/articles/statya-2.jpg" alt="" title="" class="item-image">
                    <span class="title text">
                                        Замена рычага передней подвески на автомобиле Daewoo Lanos,
                                        Daewoo Nexia, Chevrolet Lanos, Daewoo Sens
                                    </span>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 full-xxs">
                <a href="page.html" class="item">
                    <img src="/img/uploads/articles/statya-3.jpg" alt="" title="" class="item-image">
                    <span class="title text">
                                        Устраняем люфт и дребезжание ручки переключения
                                        передач или замена уплотняющего...
                        <!--кольца рычага-->
                        <!--кпп на автомобилях Daewoo Lanos, Daewoo Nexia,-->
                        <!--Chevrolet Lanos, Daewoo Sens-->
                                    </span>
                </a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 full-xxs">
                <a href="page.html" class="item">
                    <img src="/img/uploads/articles/statya-1.jpg" alt="" title="" class="item-image">
                    <span class="title text">
                                        Ремонт ключа трещотки своими руками
                                    </span>
                </a>
            </div>
        </div>
    </section>

    {!! $areaWidget->contentMiddle() !!}

    <!--Комментарии-->
    <section id="comments">
        <h3>Комментарии (<span class="count">30</span>)</h3>
        <div class="comments-list">
            <div class="comment" id="comment-1">
                <div class="comment-content">
                    <div class="comment-left-side">
                        <a href="#" class="user">
                            <img src="/img/uploads/avatar-1.jpg" class="avatar mini" />
                            <span class="login visible-xs">Muph1984</span>
                        </a>
                        <div class="like-dislike">
                            <div class="buttons">
                                <button class="like active">
                                    <i class="fa fa-thumbs-up"></i>
                                </button>
                                <div class="total-count success"><span class="count">32</span></div>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="comment-right-side comment-container">
                        <div class="container-header">
                            <a href="#" class="user hidden-xs">
                                <span class="login">Muph1984</span>
                            </a>
                            <div class="date">
                                <time>17 октября в 13:14</time>
                            </div>
                            <a href="#" class="active"><i class="fa fa-hashtag"></i></a>

                            <div class="buttons pull-right">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <button><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="container-body comment-text">
                            <p>
                                Здравствуете, Иван. Меня зовут Сергей
                                у меня део нексия, последнее время она
                                стала плохо заводиться, а когда заведется,
                                пахнет бензином что надо делать?
                            </p>
                            <button class="reply active">
                                <i class="fa fa-reply fa-flip-horizontal"></i>
                                <span>Ответить</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="comments-list">
                    <div class="comment" id="comment-3">
                        <div class="comment-content">
                            <div class="comment-left-side">
                                <a href="#" class="user">
                                    <img src="/img/uploads/default-avatar.png" class="avatar mini" />
                                    <span class="login visible-xs">Ivan</span>
                                </a>
                                <div class="like-dislike">
                                    <div class="buttons">
                                        <button class="like active">
                                            <i class="fa fa-thumbs-up"></i>
                                        </button>
                                        <div class="total-count"><span class="count">0</span></div>
                                        <button class="dislike">
                                            <i class="fa fa-thumbs-o-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-right-side comment-container">
                                <div class="container-header">
                                    <a href="#" class="user hidden-xs">
                                        <span class="login">Ivan</span>
                                    </a>
                                    <div class="date">
                                        <time>18 октября в 9:57</time>
                                    </div>
                                    <a href="#" class="active"><i class="fa fa-hashtag"></i></a>

                                    <div class="buttons pull-right">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <button><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="container-body comment-text">
                                    <p>
                                        Для начала могу посоветовать промыть
                                        дроссельную заслонку и почистить ДХХ
                                        (датчик холостого хода). Это можно сделать
                                        самостоятельно, предварительно прочитав вот
                                        эту статью. После чего, следует проверить
                                        и промыть!
                                    </p>
                                    <button class="reply active">
                                        <i class="fa fa-reply fa-flip-horizontal"></i>
                                        <span>Ответить</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment" id="comment-4">
                        <div class="comment-content">
                            <div class="comment-left-side">
                                <a href="#" class="user">
                                    <img src="/img/uploads/default-avatar.png" class="avatar mini" />
                                    <span class="login visible-xs">Пользователь</span>
                                </a>
                                <div class="like-dislike">
                                    <div class="buttons">
                                        <button class="like active">
                                            <i class="fa fa-thumbs-up"></i>
                                        </button>
                                        <div class="total-count"><span class="count">0</span></div>
                                        <button class="dislike">
                                            <i class="fa fa-thumbs-o-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-right-side comment-container">
                                <div class="container-header">
                                    <div class="user hidden-xs">
                                        <span class="login">Пользователь</span>
                                    </div>
                                    <div class="date">
                                        <time>19 октября в 0:02</time>
                                    </div>
                                    <a href="#" class="active"><i class="fa fa-hashtag"></i></a>

                                    <div class="buttons pull-right">
                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                        <button><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                                <div class="container-body comment-text">
                                    <p>
                                        У меня была точно такая проблема.
                                    </p>
                                    <p>
                                        Спасибо автору за решение!
                                        <br>
                                        Помогло.
                                    </p>
                                    <button class="reply active">
                                        <i class="fa fa-reply fa-flip-horizontal"></i>
                                        <span>Ответить</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment" id="comment-2">
                <div class="comment-content">
                    <div class="comment-left-side">
                        <a href="#" class="user">
                            <img src="/img/uploads/default-avatar.png" class="avatar mini" />
                            <span class="login visible-xs">Василий</span>
                        </a>
                        <div class="like-dislike">
                            <div class="buttons">
                                <button class="like active">
                                    <i class="fa fa-thumbs-up"></i>
                                </button>
                                <div class="total-count danger"><span class="count">-2</span></div>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="comment-right-side comment-container">
                        <div class="container-header">
                            <a href="#" class="user hidden-xs">
                                <span class="login">Василий</span>
                            </a>
                            <div class="date">
                                <time>13 мая в 12:53</time>
                            </div>
                            <a href="#" class="active"><i class="fa fa-hashtag"></i></a>

                            <div class="buttons pull-right">
                                <a href="#"><i class="fa fa-pencil"></i></a>
                                <button><i class="fa fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="container-body comment-text">
                            <p>
                                Здравствуете, Иван. Меня зовут Василий,
                                у меня нет машины.
                            </p>
                            <button class="reply active">
                                <i class="fa fa-reply fa-flip-horizontal"></i>
                                <span>Ответить</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3>Оставить комментарий (незарегистриров. польз.)</h3>
                <div class="small-description">
                    Если у Вас возникли вопросы - оставьте комментарий,
                    и мы постараемся ответить на него как можно быстрее.
                </div>
                <form action="#" id="comment-form">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group" title="Имя *">
                                <input name="name" type="text" placeholder="Имя *">
                            </div>
                            <div class="form-group" title="Email *">
                                <input name="email" type="text" placeholder="Email *">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="form-group" title="Текст комментария *">
                                <textarea name="text" rows="3" placeholder="Текст комментария *"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-4 col-sm-5 col-sm-offset-4 col-xs-8 full-xxs">
                            <div class="form-group input-group">
                                <div class="fixed">
                                    <input name="send-copy" id="send-copy" type="checkbox" value="1" checked>
                                </div>
                                <label for="send-copy">
                                    Уведомить об ответе на email
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-4 full-xxs">
                            <button class="button accent-button pull-right" type="button">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3>Оставить комментарий (зарегистриров. польз.)</h3>
                <div class="small-description">
                    Если у Вас возникли вопросы - оставьте комментарий,
                    и мы постараемся ответить на него как можно быстрее.
                </div>
                <form action="#" id="comment-form-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a href="#" class="user-info">
                                <img src="/img/uploads/ivan.jpg" class="avatar micro" title="" alt="">
                                <span class="login">Ivan</span>
                            </a>
                            <div class="form-group" title="Имя *">
                                <input name="name" type="text" placeholder="Имя *" value="Ivan" disabled>
                            </div>
                            <div class="form-group" title="Email *">
                                <input name="email" type="text" placeholder="Email *" value="ivan@email.com" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="form-group" title="Текст комментария *">
                                <textarea name="text" rows="3" placeholder="Текст комментария *"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-4 col-sm-5 col-sm-offset-4 col-xs-8 full-xxs">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-4 full-xxs">
                            <button class="button accent-button pull-right" type="button">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {!! $areaWidget->contentBottom() !!}
@endsection
