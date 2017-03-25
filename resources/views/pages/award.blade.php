@extends('layouts.main')

@section('content')
    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="home-page" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="index.html" itemprop="item"><span itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a href="awards.html" itemprop="item"><span itemprop="name">Награды</span></a>
            <meta itemprop="position" content="2">
        </li>
    </ul>

    @if($page->title)
        <h2 class="responsive-block">{{ $page->title }}</h2>
    @endif

    <div class="text page-text">
        <a class="fancybox pull-left" data-fancybox-group="group-content" href="http://www.avtorem.info/uploads/pages/13/origin_nagradu.jpg">
            <figure itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject"><img src="http://www.avtorem.info/uploads/pages/13/origin_nagradu.jpg" class="img-responsive page-image" itemprop="url contentUrl" title="Награды" alt="Награды"><meta itemprop="width" content="800"><meta itemprop="height" content="450"></figure>
        </a>
        <p style="text-align: justify;">На сайте «<strong>Школа авторемонта – ремонт автомобиля своими руками</strong>» используется несложная система поощрения активных пользователей.&nbsp; Сразу можно добавить, что под словами "поощрения", "призы" и "вознаграждения" подразумеваются разнообразные подарки, которыми будут награждаться посетители веб-проекта Школа авторемонта - сувениры, чашки, кружки, футболки, майки, кепки с символикой сайта. Денежные призы не разыгрываются. И на этой странице Вы сможете подробно ознакомиться с системой начисления баллов, критерием выбора победителя, с перечнем призовых номинаций, наград и с вариантами вознаграждений (призов).</p>
        <p style="text-align: justify;"><strong>1. Кому и за что начисляются баллы?</strong><br>Баллы начисляются только авторизированным пользователем сайта. <br>За полезный комментарий в любом разделе на сайте – <strong>1 балл</strong>. Бессмысленные, односложные и неинформативные, нарушающие правила сайта будут удаляться и начисленные за эти комментарии баллы будут вычтены из общего счёта пользователя.<br>За добавление материала в своём «Бортовом журнале» - <strong>5 баллов</strong>. Статья, заметка, фотоотчёт должен отвечать правилам сайта. В противном случае материал будет снят с публикации, а очки вычтены из общего счёта пользователя.<br>За лучший ответ на вопрос в разделе «Вопрос-Ответ» -<strong> 4 балла</strong>. Лучший ответ – это ответ, который помог пользователю в решение его проблемы. Лучший ответ, может определить и отметить только пользователь, задавший вопрос.</p>
        <p style="text-align: justify;"><strong>2. Призовые номинации.</strong><br>Каждый месяц определяются победители в трёх номинация:<br><strong>Комментатор месяца</strong> – пользователь, набравший больше всех баллов за полезные комментарии.<br><strong>Знаток месяца</strong> – пользователь, набравший больше всех баллов за Лучшие ответы в разделе <strong><a title="Вопрос-ответ - ответы на вопросы по ремонту, диагностике и техническому обслуживанию легковых автомобилей пользователей сайта www.avtorem.info" href="/vopros-otvet">Вопрос-Ответ</a></strong> .<br><strong>Писатель месяца</strong> – пользователь, набравший больше всех баллов за материалы, добавленные в разделе <strong><a title="Бортовой журнал - материалы по ремонту автомобилей от пользователей сайта" href="/bortovoj-zhurnal">Бортовой журнал</a></strong>.</p>
        <p style="text-align: justify;"><strong>3. Награды.</strong><br>После того как пользователь стал победителем в одной или нескольких номинаций, он автоматически получает награду соответствующую номинации. Награды – это значки, которые отображаются в профиле пользователя и на этой странице (меню с левой стороны).</p>
        <p style="text-align: justify;"><strong>4. Как определятся победитель?</strong><br>Пользователь определяется автоматически. Без вмешательства человека. Подсчитывается количество баллов, набранных им каждой номинации за прошедший месяц. Если в определённой номинации пользователь набирает баллов больше, чем любой другой пользователь, то он автоматически определяется, как победитель в этой номинации.</p>
        <p style="text-align: justify;"><strong>5. Призы.</strong><br>Победители, кроме наград получают призы от сайта «Школа авторемонта». На данный момент список призов состоит из: чашек, автокружок и кепок. В будущем этот список будет расширен.</p>
        <p><a href="http://www.avtorem.info/uploads/pages/13/editor/avtokrugka.jpg" class="fancybox" data-fancybox-group="group-content"></a></p><figure itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject"><a href="http://www.avtorem.info/uploads/pages/13/editor/avtokrugka.jpg" class="fancybox" data-fancybox-group="group-content"><img itemprop="image" style="width: 600px; height: 386px; display: block; margin-left: auto; margin-right: auto;" title="Автокружка с символикой сайта Школа авторемонта" src="http://www.avtorem.info/uploads/pages/13/editor/avtokrugka.jpg" alt="Автокружка с символикой сайта Школа авторемонта"><meta itemprop="url" content="http://www.avtorem.info/uploads/pages/13/editor/avtokrugka.jpg"><meta itemprop="width" content="800"><meta itemprop="height" content="515"></a></figure><p></p>
        <p><a href="http://www.avtorem.info/uploads/pages/13/editor/chashka.jpg" class="fancybox" data-fancybox-group="group-content"></a></p><figure itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject"><a href="http://www.avtorem.info/uploads/pages/13/editor/chashka.jpg" class="fancybox" data-fancybox-group="group-content"><img itemprop="image" style="width: 600px; height: 338px; display: block; margin-left: auto; margin-right: auto;" title="Стильная чашка с логотипом сайта Школа авторемонта" src="http://www.avtorem.info/uploads/pages/13/editor/chashka.jpg" alt="Стильная чашка с логотипом сайта Школа авторемонта"><meta itemprop="url" content="http://www.avtorem.info/uploads/pages/13/editor/chashka.jpg"><meta itemprop="width" content="800"><meta itemprop="height" content="450"></a></figure><p></p>
        <p><a href="http://www.avtorem.info/uploads/pages/13/editor/chashka-1.jpg" class="fancybox" data-fancybox-group="group-content"></a></p><figure itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject"><a href="http://www.avtorem.info/uploads/pages/13/editor/chashka-1.jpg" class="fancybox" data-fancybox-group="group-content"><img itemprop="image" style="width: 600px; height: 338px; display: block; margin-left: auto; margin-right: auto;" title="Белая чашка с фирменным логотипом сайта Школа авторемонта" src="http://www.avtorem.info/uploads/pages/13/editor/chashka-1.jpg" alt="Белая чашка с фирменным логотипом сайта Школа авторемонта"><meta itemprop="url" content="http://www.avtorem.info/uploads/pages/13/editor/chashka-1.jpg"><meta itemprop="width" content="800"><meta itemprop="height" content="450"></a></figure><p></p>
        <p style="text-align: justify;"><strong>6. Порядок получения вознаграждений.</strong><br>После того, как в конце месяца пользователь будет определён, как победитель в одной или нескольких номинациях, он должен связаться с администрацией сайта и сообщить свои контакты для почтового отправления. В сообщении должны быть точно указаны такие данные как – страна, область или регион, город, почтовый индекс, улица, дом, номер квартиры, номер мобильного телефона и ФИО пользователя. Администрация <a title="Школа авторемонта - Ремонт автомобиля своими руками, советы по ремонту и техническому обслуживанию легковых автомобилей своими силами" href="http://www.avtorem.info" rel="nofollow" target="_blank"><strong>Школа авторемонта</strong></a> обязуется отправить приз(ы) почтовой службой в кратчайшие сроки. О чём сразу оповестит пользователя.</p>
    </div>

    <div class="col-md-4 sidebar">
        <div class="widget widget-users">
            <h4 class="title">Награды</h4>
            <div class="small-description">
                Награды за достижения...
                <br>
                <a href="#">Как получить награду?</a>
            </div>
            <div class="items">
                <div class="item">
                    <a href="profile.html" class="user-avatar">
                        <img src="img/uploads/awards/kommentator-mesyatsa.png" alt="" class="avatar mini">
                    </a>
                    <div class="user">
                        <a href="profile.html" class="login"><span>Комментатор месяца</span></a>
                        <span class="rank">Краткое описание награды (?)</span>
                    </div>
                </div>
                <div class="item">
                    <a href="profile.html" class="user-avatar">
                        <img src="img/uploads/awards/pisatel-goda.png" alt="" class="avatar mini">
                    </a>
                    <div class="user">
                        <a href="profile.html" class="login"><span>Писатель года</span></a>
                        <span class="rank">...</span>
                    </div>
                </div>
                <div class="item">
                    <a href="profile.html" class="user-avatar">
                        <img src="img/uploads/awards/znatok-goda.png" alt="" class="avatar mini">
                    </a>
                    <div class="user">
                        <a href="profile.html" class="login"><span>Знаток года</span></a>
                        <span class="rank">...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
