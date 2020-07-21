<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('front/images/logo/logo.png') }}"
                                                               alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li class="active"><a href="{{ route('home') }}"> Главная</a></li>
                                    <li><a href="{{ route('map') }}">Карта</a></li>
                                    <li><a href="services.html">О проекте</a></li>
                                    <li><a href="pricing.html">Связь</a></li>
                                    @if(! Auth::check())
                                        <li><a href="{{ route('login') }}">Вход</a></li>
                                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                                    @else
                                        <li><a href="{{ route('logout') }}">Выйти</a></li>
                                    @endif

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
