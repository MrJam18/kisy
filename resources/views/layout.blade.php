<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2e2e30">
    <meta content="width=device-width" name="viewport" id="viewport">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
    @stack('css')
    <title>KISY</title>
</head>
<body>
<div class="background">
<div id="loading-screen"     class="loading-screen">
    <div class="loader"></div>
</div>
<div class="alerts-list">
</div>
    <div class="header__container">
        <header>
            <div id="menu__container" class="menu__container">
                <div class="container header__flex">
                    <div class="header__menu-switcher-container">
                        <div id="menu-switcher" class="header__menu-switcher">
                            <div class="header__menu-switcher-line"></div>
                            <div class="header__menu-switcher-line"></div>
                            <div class="header__menu-switcher-line"></div>
                        </div>
                    </div>
                    <div class="header__logo-container">
                        <a class="header__logo" href="{{route('main')}}">
                            <img src="{{asset('img/logo.svg')}}" class="header__logo-img" alt="logo">
                        </a>
                    </div>
                        <div class="header__links">
                            <a href="{{route('main')}}#hair" class="header__link header__link_first">KISS MY HAIR</a>
                            <a href="{{route('main')}}#face" class="header__link">KISS MY FACE</a>
                            <a href="#" class="header__link">KISS MY BODY</a>
                            <a href="{{route('main')}}#about" class="header__link">О НАС</a>
                        </div>
                    <div class="header__navbar">
                        <button class="header__nav-icon-button">
                            <img src="{{asset('img/search-icon.svg')}}" alt="search" class="header__nav-icon">
                        </button>
                        <button class="header__nav-icon-button">
                            <img src="{{asset('img/profile-icon.svg')}}" alt="profile" class="header__nav-icon">
                        </button>
                        <a href="{{route('basket')}}" class="header__nav-icon-button">
                            <img src="{{asset('img/basket-icon.svg')}}" alt="basket" class="header__nav-icon">
                        </a>
                    </div>
                </div>
            </div>
        </header>
    <div id="menu-phone" class="menu__elements-phone">
        <div class="container menu__phone-wrapper">
            <a href="{{route('main')}}#hair" class="header__link header__link_first">KISS MY HAIR</a>
            <a href="{{route('main')}}#face" class="header__link">KISS MY FACE</a>
            <a href="#" class="header__link">KISS MY BODY</a>
            <a href="{{route('main')}}#about" class="header__link">О НАС</a>
        </div>
    </div>
    </div>
    <div class="header__padding">
        <div class="header__inner-padding-border"></div>
    </div>
@yield('content')
<div class="footer__top-padding">
    <div class="footer__inner-top-padding"></div>
</div>
<footer class="footer">
    <div class="container footer__borders">
        <div class="footer__content">
            <div class="footer__items">
                <div class="footer__item-group">
                    <a href="{{route('public-offer')}}" class="footer__href">Публичная оферта</a>
                    <a href="{{route('confidential')}}" class="footer__href footer__href_last">Политика конфиденциальности</a>
                </div>
                <div class="footer__item-group">
                    <a href="{{route('user-agreement')}}" class="footer__href">Пользовательское соглашение</a>
                    <a href="{{route('personal-data-processing')}}" class="footer__href footer__href_last">Обработка данных</a>
                </div>
                <div class="footer__item-group">
                    <a href="" class="footer__href">Cookies</a>
                    <p class="footer__href footer__href_last">KISY 2023</p>
                </div>
            </div>
            <div class="footer__items footer__items_phone">
                <div class="footer__item-group">
                    <a href="{{route('public-offer')}}" class="footer__href">Публичная оферта</a>
                    <a href="{{route('user-agreement')}}" class="footer__href">Пользовательское соглашение</a>
                    <a href="{{route('confidential')}}" class="footer__href footer__href_last">Политика конфиденциальности</a>
                </div>
                <div class="footer__item-group">
                    <a href="{{route('personal-data-processing')}}" class="footer__href">Обработка данных</a>
                    <a href="" class="footer__href">Cookies</a>
                    <p class="footer__href footer__href_last">KISY 2023</p>
                </div>
            </div>
            <div class="footer__messengers">
                <a class="footer__messenger-box" href="#">
                    <img src="{{asset('img/telegram.svg')}}" alt="telegram" class="footer__messenger">
                </a>
            </div>
            <div class="kiss__red footer__kiss"></div>
        </div>
    </div>
</footer>
</div>
@stack('modals')
@stack('script')
</body>
</html>