@extends('layouts.main')

@section('content')
    {!! $areaWidget->contentTop() !!}

    <div class="blog">
        <div class="list">
            <div class="item article full fixed">
                <span class="fixed-right help-text small">Реклама</span>
                <h3>
                    <a href="page.html">Рекламный пост, закрепленный в самом верху страницы</a>
                </h3>
                <div class="item-image">
                    <img src="img/uploads/articles/fixed-article-1.png" alt="">
                </div>
                <div class="text item-text">
                    <p>
                        В 2013 году открылся специализированный автоцентр «Мастер Сервис»
                        по диагностике и ремонту стартеров, генераторов, турбин и кондиционеров
                        автомобилей в Харькове.
                        <br>
                        Именно для этих целей мы построили просторную ремонтную зону,
                        используем современное диагностическое оборудование и специнструмент,
                        а персонал ежегодно повышает квалификацию за рубежом. Автосервис
                        обслуживает частных лиц, АТП, различные предприятия с собственным
                        автопарком легковых и коммерческих автомобилей.
                        <br>
                        Мы вкладываем максимум знаний и труда в процесс реставрации
                        электрооборудования...
                        <a href="page.html" class="read-more">Читать далее</a>
                    </p>
                </div>
            </div>
            <div class="item article">
                <div class="item-title">
                    <ul class="category breadcrumbs">
                        <li><a href="category.html">Статьи</a></li>
                        <li><a href="category.html">Daewoo Lanos, Nexia, Matiz, Sens</a></li>
                    </ul>
                    <h3>
                        <a href="page.html">
                            Устраняем люфт и дребезжание ручки переключения передач
                            или замена уплотняющего кольца рычага кпп на автомобилях Daewoo Lanos,
                            Daewoo Nexia, Chevrolet Lanos, Daewoo Sens
                        </a>
                    </h3>
                </div>
                <div class="item-image">
                    <a href="page.html">
                        <img src="img/uploads/articles/statya-3.jpg" alt="">
                    </a>
                </div>
                <div class="text item-text">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <img src="img/uploads/ivan.jpg" class="avatar micro" title="" alt="">
                                <span class="login" itemprop="name">IvanIvanIvanIvan</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-06-01T22:17" itemprop="datePublished">1 июня 2013 в 22:17</time>
                        </div>
                    </div>
                    <p>
                        Эта  статья-фотоотчёт, можно сказать, плавно вытекает из
                        материала, ранее опубликованного на сайте. А, именно, из
                        статьи по замене рычага передней подвески на автомобилях
                        Дэу Ланос, Нексия, Сенс и Шевроле Ланос. Так как чаще всего
                        рычаг снимают с автомобиля не для замены на новый, а для
                        замены переднего сайлентблока. А этот самый сайлентблок не
                        так прост, как его напарник - задний сайлентблок (задняя
                        подушка рычага). Те автолюбители, которые уже имели счастье
                        своими руками монтировать передний сайлентблок, думаю,
                        согласятся со мной, если я скажу, что эта работа может отнять...
                    </p>
                </div>
                <div class="delimiter delimiter-dashed">
                    <div class="link">
                        <a href="page.html">
                            <span>Читать далее</span>
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="item-info">
                    <div class="page-info">
                        <div class="views" title="Количество просмотров">
                            <i class="fa fa-eye"></i>
                            <span>2 123 122</span>
                        </div>
                        <div class="comments-count" title="Количество комментариев">
                            <a href="page.html#comments">
                                <i class="fa fa-comment"></i>
                                <span class="count" itemprop="commentCount">12 222</span>
                            </a>
                        </div>
                        <div class="saved-count active" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart"></i>
                            <span>122 222</span>
                        </div>

                        <div class="like-dislike-widget pull-right">
                            <div class="buttons">
                                <button class="like">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="count">345 333</span>
                                </button>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                    <span class="count">20 222</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>
            <div class="item article">
                <div class="item-title">
                    <ul class="category breadcrumbs">
                        <li><a href="category.html">Статьи</a></li>
                        <li><a href="category.html">Daewoo Lanos, Nexia, Matiz, Sens</a></li>
                    </ul>
                    <h3>
                        <a href="page.html">
                            Замена рычага передней подвески на автомобиле Daewoo Lanos,
                            Daewoo Nexia, Chevrolet Lanos, Daewoo Sens
                        </a>
                    </h3>
                </div>
                <div class="item-image">
                    <a href="page.html">
                        <img src="img/uploads/articles/statya-2.jpg" alt="">
                    </a>
                </div>
                <div class="text item-text">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <img src="img/uploads/ivan.jpg" class="avatar micro" title="" alt=""><span class="login" itemprop="name">Ivan</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-03-25T10:20" itemprop="datePublished">25 марта 2013 в 10:20</time>
                        </div>
                    </div>
                    <p>
                        Уважаемые Ланосоводы и Нексияведы, не проходите мимо!
                        Приглашаю Вас ознакомиться и оценить мой фотоотчёт по
                        снятию и замене рычага передней подвески автомобилей
                        Daewoo Lanos (Дэу Ланос), Daewoo Nexia (Дэу Нексия),
                        Chevrolet Lanos (Шевроле Ланос), Daewoo Sens (Дэу Сенс).
                        Надеюсь, что этот материал будет Вам интересен. Так как
                        в нём описывается не только сам процесс замены рычага,
                        но и даны советы по выбору качественных запчастей. А в
                        наше время это немало важно, так как покупка рычага низкого
                        качества влечёт за собой довольно большие проблемы. Но,
                        обо всём по порядку...
                    </p>
                </div>
                <div class="delimiter delimiter-dashed">
                    <div class="link">
                        <a href="page.html">
                            <span>Читать далее</span>
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="item-info">
                    <div class="page-info">
                        <div class="views" title="Количество просмотров">
                            <i class="fa fa-eye"></i>
                            <span>13 122</span>
                        </div>
                        <div class="comments-count" title="Количество комментариев">
                            <a href="page.html#comments">
                                <i class="fa fa-comment"></i><span class="count" itemprop="commentCount">12</span>
                            </a>
                        </div>
                        <div class="saved-count" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart"></i>
                            <span>1</span>
                        </div>

                        <div class="like-dislike-widget pull-right">
                            <div class="buttons">
                                <button class="like active">
                                    <i class="fa fa-thumbs-up"></i>
                                    <span class="count">1 121</span>
                                </button>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                    <span class="count">1</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item article">
                <div class="item-title">
                    <ul class="category breadcrumbs">
                        <li><a href="category.html">Статьи</a></li>
                        <li><a href="category.html">Daewoo Lanos, Nexia, Matiz, Sens</a></li>
                    </ul>
                    <h3>
                        <a href="page.html">Ремонт ключа трещотки своими руками</a>
                    </h3>
                </div>
                <div class="item-image">
                    <a href="page.html">
                        <img src="img/uploads/articles/statya-1.jpg" alt="">
                    </a>
                </div>
                <div class="text item-text">
                    <div class="page-info">
                        <div class="user" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <a href="profile.html" itemprop="url">
                                <img src="img/uploads/ivan.jpg" class="avatar micro" title="" alt=""><span class="login" itemprop="name">Ivan</span>
                            </a>
                        </div>
                        <div class="date">
                            <i class="fa fa-calendar-o"></i>
                            <time datetime="2013-03-17T19:55" itemprop="datePublished">17 марта 2013 в 19:55</time>
                        </div>
                    </div>
                    <p>
                        Я думаю, что у каждого автолюбителя, автомастера,
                        электрика, сантехника есть свой любимый инструмент,
                        который сделан именно под его руку и безотказно
                        служит уже не один год. Когда такой инструмент (ключ,
                        отвёртка, пассатижи, молоток и т.д.) ломается, приходит
                        в негодность, то настроение от такого события резко
                        ухудшается. Тут тебе и потеря верного соратника, и
                        дополнительные финансовые траты... Знакомо? Так, например,
                        было и со мной. В один прекрасный день, любимый ключ
                        трещотка фирмы TOPTUL сломался. По началу, правда, думал,
                        что ничего серьёзного. Так как ключ не первый день...
                    </p>
                </div>
                <div class="delimiter delimiter-dashed">
                    <div class="link">
                        <a href="page.html">
                            <span>Читать далее</span>
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="item-info">
                    <div class="page-info">
                        <div class="views" title="Количество просмотров">
                            <i class="fa fa-eye"></i>
                            <span>13 122</span>
                        </div>
                        <div class="comments-count" title="Количество комментариев">
                            <a href="page.html#comments">
                                <i class="fa fa-comment-o"></i><span class="count" itemprop="commentCount">0</span>
                            </a>
                        </div>
                        <div class="saved-count" title="Сколько пользователей сохранили">
                            <i class="fa fa-heart-o"></i>
                            <span>0</span>
                        </div>

                        <div class="like-dislike-widget pull-right">
                            <div class="buttons">
                                <button class="like">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <span class="count">5 466</span>
                                </button>
                                <button class="dislike">
                                    <i class="fa fa-thumbs-o-down"></i>
                                    <span class="count">32</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination">
            <ul>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="next" title="Следующая">
                    <a href="#">
                        <span>следующая</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
                <li class="last">
                    <a href="#" title="Последняя">
                        <span>последняя</span>
                        <i class="fa fa-angle-double-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="delimiter indent"></div>

    {!! $areaWidget->contentMiddle() !!}

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
                    <div class="value percentage-like" style="width: 90%"></div>
                </div>
            </div>
        </div>
    </div>

    @if($page->content)
        <div class="text page-text">
            {!! $page->content !!}
        </div>
    @endif

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

    {!! $areaWidget->contentBottom() !!}
@endsection
