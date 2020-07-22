@extends('layouts.app')

@section('content')
    {{--    TOP OF INDEX--}}
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">Веб сервис</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Все ремонтные работы и их финансирование<br>на карте города</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">Отслеживайте финансирование ремонтных работ с возможностью связаться с ответственными людьми напрямую!</p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="{{ route('map') }}"
                                       class="btn radius-btn">Перейти на карту</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                 data-delay="1s">
                                <img src="{{ asset('front/images/hero/hero_right.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 col-md-9 ">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur
                                    adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.</p>
                                <!-- Slider btn -->
                                <div class="slider-btns">
                                    <!-- Hero-btn -->
                                    <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html"
                                       class="btn radius-btn">Download</a>
                                    <!-- Video Btn -->
                                    <a data-animation="fadeInRight" data-delay="1.0s"
                                       class="popup-video video-btn ani-btn"
                                       href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i
                                            class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight"
                                 data-delay="1s">
                                <img src="{{ asset('front/img/hero/hero_right.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    HOW IT WORKS--}}
    <section class="best-features-area section-padd4">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-8 col-lg-10">
                    <!-- Section Tittle -->
                    <div class="row">
                        <div class="col-lg-10 col-md-10">
                            <div class="section-tittle">
                                <h2>Применение сервиса</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Section caption -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Отслеживание объектов</h3>
                                    <p>Объекты по которым проводяться ремонтные работы</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Ответственные лица</h3>
                                    <p>Возможность просмотра финансирования и ответсвенных лиц</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Вовлеченность граждан</h3>
                                    <p>Возможность обсуждения пользователями качества по ходу выполнения работ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single-features mb-70">
                                <div class="features-icon">
                                    <span class="flaticon-support"></span>
                                </div>
                                <div class="features-caption">
                                    <h3>Информирование</h3>
                                    <p>Возможность пользователям добавлять на карту объекты требующие ремонта</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shpe -->
        <div class="features-shpae d-none d-lg-block">
            <img src="{{ asset('front/images/shape/best-features.png') }}" alt="">
        </div>
    </section>
    {{--    НАШИ ПАРТНЕРЫ--}}
    <section class="service-area sky-blue section-padding2">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="section-tittle text-center">
                        <h2>Наши партнеры</h2>
                    </div>
                </div>
            </div>
            <!-- Section caption -->
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-businessman"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="https://eapcivilsociety.eu/ru/">Eastern Partnership Civil Society Facility</a></h4>
                            <p>Организатор хакатона и главный спонсор</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption active text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-pay"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="https://en.wikipedia.org/wiki/European_Union">European Union</a></h4>
                            <p>Медиа партнер</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-caption text-center mb-30">
                        <div class="service-icon">
                            <span class="flaticon-plane"></span>
                        </div>
                        <div class="service-cap">
                            <h4><a href="https://www.gdsi.ie/">GDSI</a></h4>
                            <p>Поддержка развития</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    ОТЗЫВЫ--}}
    <div class="our-customer section-padd-top30">
        <div class="container-fluid">
            <div class="our-customer-wrapper">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-tittle text-center">
                            <h2>Клиенты которые <br>уже используют сервис</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="customar-active dot-style d-flex dot-style">
                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="{{ asset('front/images/shape/man1.png') }}" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Чиновники ближе к народу!</a></h4>
                                    <p>Оставил жалобу с помощью этого сайта, и через 5 дней получил детальный ответ о происходящем!</p>
                                </div>
                            </div>

                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="{{ asset('front/images/shape/man2.png') }}" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Ответ от чиновника лично на почту!</a></h4>
                                    <p>Первый раз в жизни получил ответ на жалобу от чиновника лично.</p>
                                </div>
                            </div>

                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="{{ asset('front/images/shape/man3.png') }}" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Быстро реагируют</a></h4>
                                    <p>Удивлена, как быстро отреагировали на мою жалобу. Раньше приходилось бы собираться под городским советом толпой народа.</p>
                                </div>
                            </div>

                            <div class="single-customer mb-100">
                                <div class="what-img">
                                    <img src="{{ asset('front/images/shape/man2.png') }}" alt="">
                                </div>
                                <div class="what-cap">
                                    <h4><a href="#">Отслеживаю ремонтные работы возле дома</a></h4>
                                    <p>Смотрю что как и когда финансируеться на моей улице не выходя из дома.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    ПЛЕЙСТОР--}}
    <div class="available-app-area">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="app-caption">
                        <div class="section-tittle section-tittle3">
                            <h2>Подробное описание и правила использования сервиса</h2>
                            <p>Прочитать подробнеее как это работает, можно перейдя по ссылке</p>
                            <div class="app-btn">
                                <a href="#" class="app-btn1"><img src="{{ asset('front/images/shape/app_btn1.png') }}"
                                                                  alt=""></a>
                                <a href="#" class="app-btn2"><img src="{{ asset('front/images/shape/app_btn2.png') }}"
                                                                  alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="app-img">
                        <img src="{{ asset('front/images/shape/available-app.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="app-shape">
            <img src="{{ asset('front/images/shape/app-shape-top.png') }}" alt=""
                 class="app-shape-top heartbeat d-none d-lg-block">
            <img src="{{ asset('front/images/shape/app-shape-left.png') }}" alt=""
                 class="app-shape-left d-none d-xl-block">
            <!-- <img src="assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
        </div>
    </div>
    {{--    CONTACT--}}
    <div class="say-something-aera pt-90 pb-90 fix">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                    <div class="say-something-cap">
                        <h2>Остались вопросы?</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="say-btn">
                        <a href="#" class="btn radius-btn">Напишите нам!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- shape -->
        <div class="say-shape">
            <img src="{{ asset('front/images/shape/say-shape-left.png') }}" alt=""
                 class="say-shape1 rotateme d-none d-xl-block">
            <img src="{{ asset('front/images/shape/say-shape-right.png') }}" alt=""
                 class="say-shape2 d-none d-lg-block">
        </div>
    </div>
@endsection



