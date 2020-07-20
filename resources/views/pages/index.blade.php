@extends('layouts.app')

@section('content')

    <div class="wrapper-header" >
        <div class="header-content">
            <h1 class="lead-text">Все ремонтные работы на карте города</h1>
            <p>Отслеживайте финансирование ремонтных работ с возможностью связаться с ответственными людьми
                напрямую!</p>
            <ul>
                <li>> объекты по которым проводяться ремонтные работы</li>
                <li>> возможность просмотра фигнансирования и ответсвенных лиц</li>
                <li>> возможность обсуждать пользователями качество по ходу выполнения работ</li>
                <li>> возможность добавлять на карту объекты требующие ремонта</li>
            </ul>

            <a href="{{ route('map') }}">
                <button class="btnheader-download">Перейти на карту</button>
            </a>

        </div>
        <div class="header-picture">
            <img alt="" src="{{ asset('front/images/master-rem.png') }}">
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="first-block">
        <h2 class="heading-2">Мы в СМИ</h2>
        <div class="headingpic"><img alt="" src="{{ asset("front/images/headingpic.png") }}"></div>
        <div class="first-block-wrapper">
            <p class="first-block-text">
                Следите за нами в новостях
            </p>
            <div class="first-inner-wrapper">
                <article class="art">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
            </div>
            <div class="first-inner-wrapper phone-picture">
                <img src="{{ asset("front/images/phone.png") }}" alt="phone" class="main-phone-pic">
            </div>
            <div class="first-inner-wrapper">
                <article class="art">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
            </div>
        </div>
    </div>

    <div class="second-block">
        <div class="second-block-wrapper">
            <div class="second-inner">
                <h3 class="second-heading-3">Как это работает</h3>
                <p class="second-text">Вы заходите на сайт, на глвной странице переходите по ссылке "Перейти на карту".
                    На странице карты вибираете город из списка, информация о котором вас интересует. Карту можно
                    увеличивать и уменьшать. На карте города появляются иконки-метки, по которым можно кликнуть. Каждая
                    метка - это объект на который были выделены деньги на его ремонт. Если кликнуть на метку -
                    появляеться окошко с информацией: сколько денег было выделено и когда, а также вид ремонтных работ.
                    Кроме того там указаны данные чиновника, который несет ответственность за этот объект: его ФИО и
                    контактные данные: номер телефона администрации и эмейл. Благодаря этой информации можно следить за
                    выполнением ремонтных работ и при необходимости или некачесвенном выполнени можно сразу же
                    контактировать с ответственными людьми. Демонстрацию фунционала сайта можно посмотреть в кратком
                    видеообзоре.</p>
            </div>
            <div class="second-inner center">
                <iframe src="https://player.vimeo.com/video/198442959" width="90%" height="300" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen class="border-video"></iframe>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="third-block">
        <h2 class="heading-2">Стать волонтером</h2>
        <div class="headingpic"><img alt="" src="{{ asset('front/images/headingpic.png') }}"></div>
        <div class="first-block-wrapper">
            <p class="first-block-text">
                Наша команда состоит из волонтерского сообщества - гражданских активистов, которым не безразлична судьба
                страны и оно могут повлиять на события. Вы можете также стать волонтером: принимать участие в
                отслеживании информации, которая поступает на сайт, корректировать ее, совместно вести соцсети, общаться
                в сообществе.
            </p>
        </div>

        <div class="button-alignment">
            <a href="map.html">
                <button class="btnheader-download">Присоединиться к команде</button>
            </a>
        </div>
    </div>

    <div class = "fourth-block">
        <h2 class = "heading-2">Мы в соцсетях </h2>
        <div class="headingpic"><img alt="" src = "{{ asset("front/images/headingpic.png") }}"></div>
        <div class = "first-block-wrapper">
            <p class = "first-block-text">
                Мы активно обсуждаем жизнь города, где каждый подписчик может выразить свое мнение, а мы можем его поддержать.
            </p>
            <div class = "second-icons">
                <div class = "second-icon"><a href = "" ><img src = "{{ asset("front/images/icon-ios.png") }}" alt = "icon ios" class = "second-icon-pic"></a></div>
                <div class = "second-icon"><a href = "" ><img src = "{{ asset("front/images/icon-android.png") }}" alt = "icon ios" class = "second-icon-pic"></a></div>
                <div class = "second-icon"><a href = "" ><img src = "{{ asset("front/images/icon-win.png") }}" alt = "icon ios" class = "second-icon-pic"></a></div>
            </div>
        </div>
    </div>

    <div class = "third-block">
        <h2 class = "heading-2">Наши партнеры</h2>
        <div class="headingpic"><img alt="" src = "{{ asset("front/images/headingpic.png") }}"></div>
        <div class = "first-block-wrapper">
            <p class = "first-block-text">
                Проект разработан при поддержке Eastern Partnership Civil Society Facility
            </p>
        </div>
        <center><div class = "team-wrapper">
                <div class = "team-inner-wrapper">

                    <div class = "team-member one">
                        <div class = "team-text text-one"><h4 class = "heading-4">Eastern Partnership Civil Society Facility</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione voluptatem.
                            <div class = "member-social">
                                <a href = ""><img src = "{{ asset("front/images/soc-twitter.jpg") }}" alt = "icon"></a>
                                <a href = ""><img src = "{{ asset("front/images/soc-facebook.jpg") }}" alt = "icon"></a>
                                <a href = ""><img src = "{{ asset("front/images/soc-google.jpg") }}" alt = "icon"></a>
                            </div>
                        </div>
                        <div class = "member-picture-1 picture-1"></div>
                        <figcaption class = "member-name-1">Eastern Partnership Civil Society Facility</figcaption><br><span class = "team-figcaption">Short description here</span></div>
                    <div class = "team-member two">
                        <div class = "team-text text-two"><h4 class = "heading-4">Aenean ut suscipit urna. Donec efficitur</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione voluptatem.
                            <div class = "member-social">
                                <a href = ""><img src = "{{ asset("front/images/soc-twitter.jpg") }}" alt = "icon"></a>
                                <a href = ""><img src = "{{ asset("front/images/soc-facebook.jpg") }}" alt = "icon"></a>
                                <a href = ""><img src = "{{ asset("front/images/soc-google.jpg") }}" alt = "icon"></a>
                            </div>
                        </div>
                        <div class = "member-picture-2 picture-2"></div>
                        <figcaption class = "member-name-2">European Union</figcaption><br><span class = "team-figcaption">short description</span></div>

                </div>
                <div class = "team-inner-wrapper">
                    <div class = "team-member three">
                        <div class = "team-text text-three"><h4 class = "heading-4">Aenean ut suscipit urna. Donec efficitur</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione voluptatem.
                            <div class = "member-social">
                                <a href = ""><img src = "img/soc-twitter.jpg" alt = "icon"></a>
                                <a href = ""><img src = "img/soc-facebook.jpg" alt = "icon"></a>
                                <a href = ""><img src = "img/soc-google.jpg" alt = "icon"></a>
                            </div>
                        </div>

                        <div class = "member-picture-3 picture-3"></div>
                        <!--   <img src = "img/member-1.jpg" alt = "" class = "member-picture">  -->
                        <figcaption class = "member-name-3">GDSI</figcaption><br><span class = "team-figcaption">Short descr</span></div>
                    <div class = "team-member four">
                        <div class = "team-text text-four"><h4 class = "heading-4">Aenean ut suscipit urna. Donec efficitur</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione voluptatem.
                            <div class = "member-social">
                                <a href = ""><img src = "img/soc-twitter.jpg" alt = "icon"></a>
                                <a href = ""><img src = "img/soc-facebook.jpg" alt = "icon"></a>
                                <a href = ""><img src = "img/soc-google.jpg" alt = "icon"></a>
                            </div>
                        </div>
                        <div class = "member-picture-4 picture-4"></div>
                        <figcaption class = "member-name-4">YouVote</figcaption><br><span class = "team-figcaption">Short descript</span></div>

                </div>
            </div></center>
    </div>


    <div class="contact-index">
        <h2 class="footer-heading">Связь с нами</h2>
        <div class="headingpic"><img alt="" src="{{ asset("front/images/footerheading.png") }}"></div>
        <div class="footer-wrapper">
            <div class="footer-inner">
                <h3 class="heading-3">Связь с нами</h3>
                <p class="footer-text">Nunc urna est, tristique et varius at, pharetra nec enim. Quisque rhoncus lacus
                    fringilla nulla sollicitudin tristique.</p>
                <div class="footer-social">
                    <a href=""><img src="{{ asset("front/images/footer-facebook.png") }}" alt="icon"></a>
                    <a href=""><img src="{{ asset("front/images/footer-twitter.png") }}" alt="icon"></a>
                    <a href=""><img src="{{ asset("front/images/footer-google.png") }}" alt="icon"></a>
                </div>
                <p class="footer-text ">
                    <a href="tel: +XX-XXXX-XXX" class="footer-link">XX-XXXX-XXX</a><br>
                    <a href="mailto: businessname@gmail.com" class="footer-link">Businessname@gmail.com</a>
                </p>
            </div>
            <div class="footer-inner">
                <form name="contact-form">
                    <input type="text" class="form-input input-left" placeholder="Name" required>
                    <input type="email" class="form-input input-right" placeholder="E-Mail" required>
                    <div class="clearfix"></div>
                    <textarea class="footer-textarea" rows="10">Message</textarea>
                    <input type="submit" value="Submit" class="submit">
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(".one").mouseover(function () {
            $(".text-one").css('visibility', 'visible');
            //$(".one").css({ 'opacity': 0.6, 'z-index': 2,});
            $(".member-picture-1").css({'opacity': 0.5, 'z-index': 0, 'background': "#1ab798"});
            $(".member-name-1").css('color', '#1ab798');
        });
        $(".one").mouseleave(function () {
            $(".text-one").css('visibility', 'hidden');
            //$(".one").css({ 'opacity': 1, 'z-index': 2,});
            $(".member-picture-1").css({'opacity': 1, 'z-index': 2, 'background': "url('./img/member-1.jpg')"});
            $(".member-name-1").css('color', '#000000');
        });

        $(".two").mouseover(function () {
            $(".text-two").css('visibility', 'visible');
            //$(".two").css({ 'opacity': 0.6, 'z-index': 2,});
            $(".member-picture-2").css({'opacity': 0.5, 'z-index': 0, 'background': "#1ab798"});
            $(".member-name-2").css('color', '#1ab798');
        });
        $(".two").mouseleave(function () {
            $(".text-two").css('visibility', 'hidden');
            //$(".two").css({ 'opacity': 1, 'z-index': 2,});
            $(".member-picture-2").css({'opacity': 1, 'z-index': 2, 'background': "url('./img/member-2.jpg')"});
            $(".member-name-2").css('color', '#000000');
        });

        $(".three").mouseover(function () {
            $(".text-three").css('visibility', 'visible');
            //$(".three").css({ 'opacity': 0.6, 'z-index': 2,});
            $(".member-picture-3").css({'opacity': 0.5, 'z-index': 0, 'background': "#1ab798"});
            $(".member-name-3").css('color', '#1ab798');
        });
        $(".three").mouseleave(function () {
            $(".text-three").css('visibility', 'hidden');
            //$(".three").css({ 'opacity': 1, 'z-index': 2,});
            $(".member-picture-3").css({'opacity': 1, 'z-index': 2, 'background': "url('./img/member-3.jpg')"});
            $(".member-name-3").css('color', '#000000');
        });

        $(".four").mouseover(function () {
            $(".text-four").css('visibility', 'visible');
            //$(".four").css({ 'opacity': 0.6, 'z-index': 2,});
            $(".member-picture-4").css({'opacity': 0.5, 'z-index': 0, 'background': "#1ab798"});
            $(".member-name-4").css('color', '#1ab798');
        });
        $(".four").mouseleave(function () {
            $(".text-four").css('visibility', 'hidden');
            //$(".four").css({ 'opacity': 1, 'z-index': 2,});
            $(".member-picture-4").css({'opacity': 1, 'z-index': 2, 'background': "url('./img/member-4.jpg')"});
            $(".member-name-4").css('color', '#000000');
        });
    </script>
    <script>
        $('#slider1').bxSlider({
            mode: 'fade',
            auto: true,
            autoControls: true,
            pause: 2000
        });
    </script>
@endpush

