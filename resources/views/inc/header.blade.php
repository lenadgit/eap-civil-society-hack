<header class="header">
    <div class="main-wr-menu pb-3">
        <div class="wrapper-menu">
            <div class="logo">Logo</div>
            <div class="menubutton"></div>
            <nav class="menu">
                <ul>
                    <li class="menu-item"><a href="{{ route('home') }}">Главная</a></li>
                    <li class="menu-item"><a href="{{ route('map') }}">Карты</a></li>
                    <li class="menu-item"><a href="">Список жалоб</a></li>
                    <li class="menu-item"><a href="">О проекте</a></li>
                    <li class="menu-item"><a href="">Контакты</a></li>

                    @if (! Auth::check())
                        <li class="menu-item">
                        <span class="auth">
                            <a href="{{ route('login') }}">Войти</a>&nbsp;
                        </span>
                        </li>
                        <li class="menu-item">
                        <span class="auth">
                            <a href="{{ route('register') }}">Регистрация</a>&nbsp;
                        </span>
                        </li>
                    @else
                        <li class="menu-item">
                        <span class="auth">
                            <a href="{{ route('logout') }}">Выйти</a>&nbsp;
                        </span>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</header>
