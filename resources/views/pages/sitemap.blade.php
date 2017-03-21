@extends('layouts.main')

@section('content')
    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="home-page" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="index.html" itemprop="item"><span itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1">
        </li>
    </ul>

    <h2 class="responsive-block">{{ $page->title }}</h2>

    <div class="text page-text">
        <p>
            Есть вопросы, советы и предложения по работе сайта?
            Есть предложения коммерческого характера и взаимовыгодного
            сотрудничества? Хотите связаться с администрацией интернет-проекта
            «<strong>Школа авторемонта</strong>»? Если да, то Вы находитесь
            «правильной» странице. Раздел «<strong>Контакты</strong>» как раз
            и создан для более быстрой и удобной связи с администрацией сайта.
            Заполните ниже форму «<strong>Обратной связи</strong>» и отправьте
            своё сообщение. И могу Вас уверить, письмо будет получено и прочитано!
            Так как для нас очень важно знать Ваши впечатления от посещения нашего
            сайта, не менее важно услышать Ваши советы, критику, предложения и
            пожелания по улучшению работы и дальнейшему его развитию.
        </p>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ul id="sitemap" class="tree">
                @foreach($sitemapItems as $item)
                    <li>
                        <a href="{{ $item->getUrl() }}">
                            @if($item->type == \App\Models\Page::TYPE_QUESTION)
                                <i class="fa fa-question"></i>
                            @endif
                            <span>{{ $item->getTitle() }}</span>
                        </a>
                        {{ \App\Helpers\View::getChildrenPages($item, $item->getUrl()) }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="delimiter indent m-t-30"></div>

    <div class="text page-text">
        <p>
            Есть вопросы, советы и предложения по работе сайта?
            Есть предложения коммерческого характера и взаимовыгодного
            сотрудничества? Хотите связаться с администрацией интернет-проекта
            «<strong>Школа авторемонта</strong>»? Если да, то Вы находитесь
            «правильной» странице. Раздел «<strong>Контакты</strong>» как раз
            и создан для более быстрой и удобной связи с администрацией сайта.
            Заполните ниже форму «<strong>Обратной связи</strong>» и отправьте
            своё сообщение. И могу Вас уверить, письмо будет получено и прочитано!
            Так как для нас очень важно знать Ваши впечатления от посещения нашего
            сайта, не менее важно услышать Ваши советы, критику, предложения и
            пожелания по улучшению работы и дальнейшему его развитию.
        </p>
    </div>
@endsection