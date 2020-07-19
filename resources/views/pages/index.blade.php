@extends('layouts.app')

@section('content')

    <div class="wrapper-header">
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
        <h2 class="heading-2">Key Features</h2>
        <div class="headingpic"><img alt="" src="{{ asset("front/images/headingpic.png") }}"></div>
        <div class="first-block-wrapper">
            <p class="first-block-text">
                Nunc vulputate nibh sed congue facilisis. Curabitur posuere scelerisque neque. In sit amet lectus non
                lacus sollicitudin cursus a vitae felis. Praesent luctus mi quis nisi interdum eleifend.
            </p>
            <div class="first-inner-wrapper">
                <article class="art">
                    <img src="{{ asset("front/images/art-pic-1.png") }}" alt="" class="art-pic">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <img src="{{ asset("front/images/art-pic-2.png") }}" alt="" class="art-pic">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <img src="{{ asset("front/images/art-pic-3.png") }}" alt="" class="art-pic">
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
                    <img src="{{ asset("front/images/art-pic-4.png") }}" alt="" class="art-pic">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <img src="{{ asset("front/images/art-pic-5.png") }}" alt="" class="art-pic">
                    <h3 class="first-heading-3">Amet Varius</h3>
                    <p class="float-image">Donec posuere augue venenatis, aliquet ligula ut, tempus quam. Vivamus diam a
                        iaculis malesuada</p>
                </article>
                <article class="art">
                    <img src="{{ asset("front/images/art-pic-6.png") }}" alt="" class="art-pic">
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
                <h3 class="second-heading-3">Watch the video</h3>
                <p class="second-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
                <div class="second-icons">
                    <div class="second-icon"><a href=""><img src="{{ asset("front/images/icon-ios.png") }}"
                                                             alt="icon ios"
                                                             class="second-icon-pic"></a></div>
                    <div class="second-icon"><a href=""><img src="{{ asset("front/images/icon-android.png") }}"
                                                             alt="icon ios"
                                                             class="second-icon-pic"></a></div>
                    <div class="second-icon"><a href=""><img src="{{ asset("front/images/icon-win.png") }}"
                                                             alt="icon ios"
                                                             class="second-icon-pic"></a></div>
                </div>
            </div>
            <div class="second-inner center">
                <iframe src="https://player.vimeo.com/video/198442959" width="90%" height="300" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen class="border-video"></iframe>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="third-block">
        <h2 class="heading-2">Our team</h2>
        <div class="headingpic"><img alt="" src="{{ asset("front/images/headingpic.png") }}"></div>
        <div class="first-block-wrapper">
            <p class="first-block-text">
                Nunc vulputate nibh sed congue facilisis. Curabitur posuere scelerisque neque. In sit amet lectus non
                lacus sollicitudin cursus a vitae felis. Praesent luctus mi quis nisi interdum eleifend.
            </p>
        </div>
        <center>
            <div class="team-wrapper">
                <div class="team-inner-wrapper">
                    <div class="team-member one">
                        <div class="team-text text-one"><h4 class="heading-4">Aenean ut suscipit urna. Donec
                                efficitur</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione
                            voluptatem.
                            <div class="member-social">
                                <a href=""><img src="{{ asset("front/images/soc-twitter.jpg") }}" alt="icon"></a>
                                <a href=""><img src="{{ asset("front/images/soc-facebook.jpg") }}" alt="icon"></a>
                                <a href=""><img src="img/soc-google.jpg" alt="icon"></a>
                            </div>
                        </div>
                        <div class="member-picture-1 picture-1"></div>
                        <figcaption class="member-name-1">John Doe</figcaption>
                        <br><span class="team-figcaption">Marketing Director</span></div>
                    <div class="team-member two">
                        <div class="team-text text-two"><h4 class="heading-4">Aenean ut suscipit urna. Donec
                                efficitur</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione
                            voluptatem.
                            <div class="member-social">
                                <a href=""><img src="{{ asset("front/images/soc-twitter.jpg") }}" alt="icon"></a>
                                <a href=""><img src="{{ asset("front/images/soc-facebook.jpg") }}" alt="icon"></a>
                                <a href=""><img src="{{ asset("front/images/soc-google.jpg") }}" alt="icon"></a>
                            </div>
                        </div>
                        <div class="member-picture-2 picture-2"></div>
                        <figcaption class="member-name-2">John Doe</figcaption>
                        <br><span class="team-figcaption">Lead Designer</span></div>
                </div>
                <div class="team-inner-wrapper">
                    <div class="team-member three">
                        <div class="team-text text-three"><h4 class="heading-4">Aenean ut suscipit urna. Donec
                                efficitur</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione
                            voluptatem.
                            <div class="member-social">
                                <a href=""><img src="{{ asset("front/images/soc-twitter.jpg") }}" alt="icon"></a>
                                <a href=""><img src="{{ asset("front/images/soc-facebook.jpg") }}" alt="icon"></a>
                                <a href=""><img src="{{ asset("front/images/soc-google.jpg") }}" alt="icon"></a>
                            </div>
                        </div>

                        <div class="member-picture-3 picture-3"></div>
                        <!--   <img src = "img/member-1.jpg" alt = "" class = "member-picture">  -->
                        <figcaption class="member-name-3">John Doe</figcaption>
                        <br><span class="team-figcaption">Lead Developer</span></div>
                    <div class="team-member four">
                        <div class="team-text text-four"><h4 class="heading-4">Aenean ut suscipit urna. Donec
                                efficitur</h4>
                            sit aspernatur aut odit aut fugit, sed quia conceuuntur magni dolores eos qui ratione
                            voluptatem.
                            <div class="member-social">
                                <a href=""><img src="{{ asset("front/images/soc-twitter.jpg") }}" alt="icon"></a>
                                <a href=""><img src="{{ asset("front/images/soc-facebook.jpg") }}" alt="icon"></a>
                                <a href=""><img src="{{ asset("front/images/soc-google.jpg") }}" alt="icon"></a>
                            </div>
                        </div>
                        <div class="member-picture-4 picture-4"></div>
                        <figcaption class="member-name-4">John Doe</figcaption>
                        <br><span class="team-figcaption">Sr. UI Designer</span></div>
                </div>
            </div>
        </center>
    </div>

    <div class="fourth-block">
        <h2 class="heading-2">What our customers say</h2>
        <div class="headingpic"><img alt="" src="{{ asset("front/images/headingpic.png") }}"></div>
        <div class="first-block-wrapper">
            <p class="first-block-text">
                Nunc vulputate nibh sed congue facilisis. Curabitur posuere scelerisque neque. In sit amet lectus non
                lacus sollicitudin cursus a vitae felis. Praesent luctus mi quis nisi interdum eleifend.
            </p>
            <div class="slider">
                <ul id="slider1">
                    <li>
                        <center><img src="{{ asset("front/images/slider-1.png") }}" alt="image-1" class="slider-image">
                            <figcaption class="slider-figcaption">Jon Doe<br><span
                                    class="figcaption-decs">Company Inc.</span></figcaption>
                            <br></center>
                        <p class="slider-text"><img src="{{ asset("front/images/quote.png") }}" class="quote">Lorem
                            ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                    <li>
                        <center><img src="{{ asset("front/images/slider-2.png") }}" alt="image-2" class="slider-image">
                            <figcaption class="slider-figcaption">Symon Lee<br><span class="figcaption-decs">Company Inc.</span>
                            </figcaption>
                            <br></center>
                        <p class="slider-text"><img alt="" src="{{ asset("front/images/quote.png") }}" class="quote">Duis
                            aute irure dolor in
                            reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                    <li>
                        <center><img src="{{ asset("front/images/slider-3.png") }}" alt="image-3" class="slider-image">
                            <figcaption class="slider-figcaption">Anna Mur<br><span
                                    class="figcaption-decs">Company Inc.</span></figcaption>
                            <br></center>
                        <p class="slider-text"><img alt="" src="{{ asset("front/images/quote.png") }}" class="quote">Ut
                            enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="contact-index">
        <h2 class="footer-heading">Contact Us</h2>
        <div class="headingpic"><img alt="" src="{{ asset("front/images/footerheading.png") }}"></div>
        <div class="footer-wrapper">
            <div class="footer-inner">
                <h3 class="heading-3">Get in touch with us</h3>
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

