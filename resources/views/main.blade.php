<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2e2e30">
    <meta content="width=device-width" name="viewport" id="viewport">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>KISY</title>
</head>
<body>
<div id="loading-screen" class="loading-screen">
    <div class="loader"></div>
</div>
<div class="alerts-list">
</div>
<!--header -->
<div class="content">
    <div class="top">
        <div id="menu__container" class="menu__container">
            <div class="container header__flex">
                <div class="header__one">
                    <a class="header__logo" href="#">
                        <img src="{{asset('img/logo.png')}}" class="logo" alt="logo">
                    </a>
                    <div id="menu-switcher" class="header__menu-switcher">
                        <div class="header__menu-switcher-line"></div>
                        <div class="header__menu-switcher-line"></div>
                        <div class="header__menu-switcher-line"></div>
                    </div>
                    <div class="links__header">
                        <div class="linkone">
                            <a class="link" href="#hair" >
                                <h1 class="hair__link" >Для волос</h1>
                            </a>
                        </div>
                        <div class="linktwo">
                            <a class="link" href="#face" >
                                <h1 class="hair__link" >Для лица</h1>
                            </a>
                        </div>
                        <div class="linkthree">
                            <a class="link" href="#about-us" >
                                <h1 class="hair__link" >О нас</h1>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header__two">
                    <form class="search-form">
                        <input class="search-input"  type="text"  placeholder="Искать здесь...">
                        <button id="search-button" class="search-button" type="button"></button>
                    </form>
                    <a class="header__item header__basket-box" href="{{route('basket')}}">
                        <img class="header__basket-logo" src="{{asset('img/basket-icon.svg')}}" alt="">
                    </a>
                </div>
            </div>
            <div id="menu-phone" class="menu__elements-phone">
                <div class="linkone">
                    <a class="link" href="#hair" >
                        <h1 class="hair__link" >Для волос</h1>
                    </a>
                </div>
                <div class="linktwo">
                    <a class="link" href="#face" >
                        <h1 class="hair__link" >Для лица</h1>
                    </a>
                </div>
                <div class="linkthree">
                    <a class="link" href="#about-us" >
                        <h1 class="hair__link" >О нас</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="intro__bottle-container">
            <picture>
                <source srcset="{{asset('img/null.svg')}}" media="(min-width: 600px)">
                <img src="{{asset('img/maskbottle_phone.png')}}" alt="маска для волос" class="intro__bottle_phone">
            </picture>
            <picture>
                <source srcset="{{asset('img/null.svg')}}" media="(min-width: 600px)">
                <img src="{{asset('img/bubbles.compressed.png')}}" alt="bubbles" class="intro__bottle-bubbles">
            </picture>
        </div>

        <div class="intro">
            <div class="container intro__wrap">
                <div class="item__title">
                    <h1 class="item__head"><a id="hair"></a>
                        <span class="item__title_phone">ПИТАТЕЛЬНАЯ </span> МАСКА ДЛЯ ВОЛОС</h1>
                    <div class="item__text">
                        Воск в составе маски питает и восстанавливает волосы. Пантенол увлажняет и облегчает расчесывание. Протеины шелка и комплекс из аминокислот делают волосы более плотными, укрепляют волосяные фолликулы, предотвращают выпадение волос.
                    </div>
                    <div class="buttoncard">
                        <button class="buy">КУПИТЬ</button>
                    </div>
                </div>
                <picture>
                    <source srcset="{{asset('img/null.svg')}}" media="(max-width: 600px)" />
                    <img src="{{asset('img/cardspot-converted.compressed.png')}}" alt="card spot" id="card-spot" class="card-spot">
                </picture>
                <picture>
                    <source srcset="{{asset('img/null.svg')}}" media="(max-width: 600px)" />
                    <img alt="маска для волос" src="{{asset('img/maskbottle-converted.png')}}" class="intro__bottle">
                </picture>

            </div>
            <div class="intro__gradient"></div>
            <div class="intro__black"></div>
        </div>

    </div>
    <div class="about__main">
        <div class="about__phone-gradient">
        </div>
        <div class="about__content">
            <div class="main__flex">
                <h1 id="about-us" class="style__about">О НАС</h1>
                <p class="style__about__text">Мы с командой работали более полугода, перебробовали десятки формул и наконец пришли к успеху, теперь и ты можешь опробовать нашу продукцию на себе.</p>
            </div>
            <div class="about__girl-background">
                <div class="about__girl-text">
                    <div class="about__girl-text__this">ЭТОТ</div>
                    <div class="about__girl-text__brand">БРЕНД</div>
                    <div class="about__girl-text__made">СОЗДАН </div>
                    <div class="about__girl-text__for-you">ДЛЯ ТЕБЯ</div>
                </div>
            </div>
            <img src="{{asset('img/spotblock2.compressed.png')}}" alt="spotblock" class="about__girl-background_phone">
            <picture>
                <source srcset="{{asset('img/gerlblock2.compressed.png')}}" media="(max-width: 600px)" />
                <img class="about__girl" src="{{asset('img/gerlblock2.png')}}" alt="girl">
            </picture>
            <!--            <img class="about__girl" src="{{asset('img/gerlblock2.png')}}" alt="girl">-->
        </div>
        <div class="about__phone-gradient_bottom">
        </div>
    </div>
    <div class="text3card">
        <div class="container">
            <h1 class="forface"><a id="face"></a>ДЛЯ ЛИЦА</h1>
            <P class="for-face__text">Уже скоро в продаже косметика для лица:
            </P>
            <p class="for-face__text">мицелярная вода, тоники и многое другое.</p>
        </div>
    </div>


    <div class="cards">
        <img src="{{asset('img/card-background-phone.compressed.png')}}" alt="background" class="cards__background_phone">
        <div class="cards__opacity">
            <div class="container card__wrapper">
                <div class="card">
                    <img src="{{asset('img/spotblock2.compressed.png')}}" alt="background" class="card__background_first card__background">
                    <img src="{{asset('img/card1.png')}}" class="card__img" alt="1">
                    <div class="card__button_flex"><button data-imageURL="{{asset('img/test-item.png')}}" data-id="271187" data-price="2022" data-name="kisy color" data-type="Маска для волос" data-fullPrice="3000" data-discount="20" class="card__button">COOMING SOON</button></div>

                </div>
                <div class="card">
                    <img src="{{asset('img/spotblock2.compressed.png')}}" alt="background" class="card__background_middle card__background">
                    <img src="{{asset('img/card2.png')}}" class="card__img" alt="2">
                    <div class="card__button_flex"><button data-imageURL="{{asset('img/test-item.png')}}" data-id="271185" data-price="1000" data-name="kisy gel" data-type="Гель для лица" data-fullPrice="2000" data-discount="10" class="card__button">COOMING SOON</button></div>
                </div>
                <div class="card">
                    <img src="{{asset('img/spotblock2.compressed.png')}}" alt="background" class="card__background_last card__background">
                    <img src="{{asset('img/card3.png')}}" class="card__img" alt="3">
                    <div class="card__button_flex"><button class="card__button">COOMING SOON</button></div>
                </div>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="hr footer__hr">
        </div>
        <div class="container footer__items">
            <div class="items__footer">
                <a href="" class="footer__href">Публичная оферта</a>
                <a href="" class="footer__href">Политика конфиденцианльности</a>
            </div>
            <div class="items__footer">
                <a href="" class="footer__href">Пользовательское соглашение</a>
                <a href="" class="footer__href">Обработка данных</a>
            </div>
            <div class="items__footer">
                <a href="" class="footer__href">Cookies</a>
                <p>KISY 2023</p>
            </div>
        </div>
        <div class="container footer__messengers">
            <a class="footer__messenger-box" href="#">
                <img src="{{asset('img/telegram.svg')}}" alt="telegram" class="footer__messenger">
            </a>
            <a class="footer__messenger-box" href="#">
                <img src="{{asset('img/instagram.svg')}}" alt="instagram" class="footer__messenger">
            </a>
        </div>
    </footer>
</div>
<script defer src="{{asset('js//jquery.js')}}"></script>
<script defer type="module" src="{{asset('js//main.js')}}"></script>
<!--<script defer src="build/main.js"></script>-->
</body>
</html>
