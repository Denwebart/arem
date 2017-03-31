@extends('layouts.main', ['breadcrumbs' => $page->getBreadcrumbs()])

@section('content')

    <h2 class="responsive-block">{{ $page->title }}</h2>

    @if($page->introtext)
        <div class="text page-text">
        {{--<img src="img/uploads/articles-categories/lada-big.jpg" alt="" class="m-b-20">--}}
        <!--<img src="img/uploads/articles-categories/vaz-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/mitsubishi-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/chery-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/slavuta-big.jpg" alt="">-->
            <!--<img src="img/uploads/articles-categories/daewoo-matiz-big.jpg" alt="">-->
            {!! $page->introtext !!}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h3>Связаться с администрацией сайта</h3>
            <div class="small-description">
                Если у Вас возникли вопросы или есть
                предложения - напишите нам, и мы постараемся
                ответить как можно быстрее.
            </div>
            <form action="#" id="contact-form">
                <div class="form-group" title="Имя *">
                    <input name="name" type="text" placeholder="Имя *">
                </div>
                <div class="form-group" title="Email *">
                    <input name="email" type="text" placeholder="Email *">
                </div>
                <div class="form-group" title="Тема письма">
                    <input name="subject" type="text" placeholder="Тема письма">
                </div>
                <div class="form-group" title="Текст письма *">
                    <textarea name="text" rows="5" placeholder="Текст письма *"></textarea>
                </div>
                <div class="form-group input-group">
                    <div class="fixed">
                        <input name="send-copy" id="send-copy" type="checkbox" value="1" checked>
                    </div>
                    <label for="send-copy">
                        Отправить копию этого сообщения на Ваш адрес e-mail
                    </label>
                </div>
                <button class="button accent-button pull-right" type="button">Отправить</button>
            </form>
        </div>
        <div class="indent indent-xs"></div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h3>Мы в социальных сетях</h3>
            <div class="small-description">
                Подписывайтесь на группы в социальных сетях
                и первыми узнавайте свежие новости, участвуйте
                в конкурсах и многое другое.
            </div>
            <div class="social-links">
                <a href="#">
                    <i class="fa fa-vk"></i>
                    <span>vk.com/avtorem.info</span>
                </a>
                <a href="#">
                    <i class="fa fa-facebook"></i>
                    <span>facebook.com/avtorem.info</span>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                    <span>twitter.com/avtorem.info</span>
                </a>
                <a href="#">
                    <i class="fa fa-odnoklassniki"></i>
                    <span>odnoklassniki.ru/avtorem.info</span>
                </a>
            </div>
        </div>
    </div>

    @if($page->content)
        <div class="delimiter indent m-t-30"></div>
        <div class="text page-text">
            {!! $page->content !!}
        </div>
    @endif
@endsection
