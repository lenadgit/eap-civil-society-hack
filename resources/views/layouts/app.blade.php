<!DOCTYPE html>
<head>
    @include('layouts.metas')

    <title>Местная власть под прицелом | Регистрация</title>

    @include('layouts.links')
</head>
<body>

<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{ asset('/front/images/logo/logo.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

@include('inc.header')

@yield('content')

@include('inc.footer')

@include('layouts.scripts')

</body>
