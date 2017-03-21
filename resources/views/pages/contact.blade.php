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
        <p>
            Мы услышим всех и постараемся, ответим всем, кто в этом нуждается!
        </p>
        <p>
            В последнее время, нам поступают одинаковые или похожие друг на
            друга вопросы, на которые приходится отвечать по определенному шаблону.
            Вроде и нет ничего сложного в этом деле, но время приходится тратить.
            Поэтому, для экономии нашего и Вашего времени, был добавлен
            раздел «ЧаВо» - часто задаваемые вопросы. Перед тем, как задать вопрос,
            посетите, пожалуйста, раздел
            «<a href="http://www.avtorem.info/otvety-na-chasto-zadavaemye-voprosy.html" rel="nofollow" target="_blank">ЧаВо</a>».
        </p>
        <p>
            Вопросы, которые касаются поломок, диагностики неисправностей, ремонта
            автомобилей в этом разделе просьба не задавать. Они будут проигнорированы.
            Так как для подобных вопросов на сайте есть специальный раздел
            «<strong><a title="Раздел сайта Вопрос-Ответ" href="http://www.avtorem.info/vopros-otvet" rel="nofollow" target="_blank">Вопрос-Ответ</a></strong>».
            Где Вы без проблем сможете детально описать проблему с Вашим автомобилем и
            получить советы, рекомендации по её решению от пользователей нашего&nbsp; сайта.
        </p>
    </div>

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
