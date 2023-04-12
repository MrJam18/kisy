<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/basket.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}">
    <title>KISY</title>
</head>
<body>
<div id="loading-screen" class="loading-screen">
    <div class="loader"></div>
</div>
<div class="alerts-list">
</div>
<div class="background-bubbles__container">
    <div class="background-bubbles">
    </div>
</div>
<header>
    <div id="menu__container" class="menu__container">
        <div class="container header__flex">
            <div class="header__one">
                <a class="header__logo" href="{{route('main')}}">
                    <img src="{{asset('img/logo.png')}}" class="logo" alt="logo">
                </a>
                <div id="menu-switcher" class="header__menu-switcher">
                    <div class="header__menu-switcher-line"></div>
                    <div class="header__menu-switcher-line"></div>
                    <div class="header__menu-switcher-line"></div>
                </div>
                <div class="links__header">
                    <div class="linkone">
                        <a class="link" href="{{route('main')}}#hair" >
                            <h1 class="hair__link" >Для волос</h1>
                        </a>
                    </div>
                    <div class="linktwo">
                        <a class="link" href="{{route('main')}}#face" >
                            <h1 class="hair__link" >Для лица</h1>
                        </a>
                    </div>
                    <div class="linkthree">
                        <a class="link" href="{{route('main')}}#about-us" >
                            <h1 class="hair__link" >О нас</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header__two">
                <form class="search-form">
                    <input class="search-input"  type="text"  placeholder="Искать здесь...">
                    <button id="search-button" class="search-button header__button-content" type="button"></button>
                </form>
                <a class="header__item header__basket-box" href="#">
                    <img class="header__basket-logo header__button-content" src="{{asset('img/basket-icon.svg')}}" alt="">
                </a>
            </div>
        </div>
        <div id="menu-phone" class="menu__elements-phone">
            <div class="linkone">
                <a class="link" href="{{route('main')}}#hair" >
                    <h1 class="hair__link" >Для волос</h1>
                </a>
            </div>
            <div class="linktwo">
                <a class="link" href="{{route('main')}}#face" >
                    <h1 class="hair__link" >Для лица</h1>
                </a>
            </div>
            <div class="linkthree">
                <a class="link" href="{{route('main')}}#about-us" >
                    <h1 class="hair__link" >О нас</h1>
                </a>
            </div>
        </div>
    </div>
</header>
<div class="content">
    <div class="basket-content container">
        <h1 id="basket-header" class="basket-header basket-header__empty">КОРЗИНА</h1>
        <div class="basket-flexbox">
            <div class="basket__left-container">
                <div id="items-container" class="items-container">
                    <div class="items-list" id="items-list">
                        <div class="items-empty-text">Ваша корзина пуста. </div>
                    </div>
                </div>
                <a id="to-main" href="{{route('main')}}" class="basket__add-items-button basket__add-items-button_empty">
                    <span id="to-main-text" class="basket__add-items-button-text basket__add-items-button-text_empty">перейти к покупкам</span>
                </a>
            </div>
            <div id="right-container" class="basket__right-container basket__right-container_empty">
                <div class="total-container">
                    <h2 class="total__header">СУММА ЗАКАЗА</h2>
                    <div class="hr total__hr"></div>
                    <div class="total__content">
                        <div class="total__quantity-box flex-between text">
                            <div class="total__quantity-header">Количество товаров</div>
                            <div id="total-quantity" class="total__quantity">4</div>
                        </div>
                        <div class="total__discounts-box flex-between text">
                            <div class="total__quantity-header">Акции и скидки</div>
                            <div class="total__quantity"><span id="total-discount">10</span><span class="total__percent-sign">%</span></div>
                        </div>
                    </div>
                    <div class="hr"></div>
                    <div class="total__sum-box flex-between">
                        <div class="total__sum-header">ИТОГО</div>
                        <div id="total-sum" class="total__sum">6072</div>
                    </div>
                </div>
                <button id="buy-button" class="basket__buy-button">
                    <span class="basket__buy-button-text text">Перейти к ОФОРМЛЕНИЮ</span>
                </button>
            </div>
        </div>
    </div>
    <div class="black-gradient content__gradient"></div>
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
<div id="request" class="request__background">
    <div id="request-box" class="request__content-box-border">
        <div class="request__content-box">
            <button id="request-close-button" class="request__close-button">
                <img src="{{asset('img/request-xmark.svg')}}" alt="x" class="request__close-button-img">
            </button>
            <h3 class="request__header">оформить заявку</h3>
            <form id="request__form">
                <div class="request__inputs-box">
                    <div class="request__input-container request__input-container_top request__input-container_first">
                        <h5 class="request__input-header">telegram</h5>
                        <label>
                            <input name="telegram" type="text" required class="request__input">
                        </label>
                    </div>
                    <div class="request__input-container request__input-container_top">
                        <h5 class="request__input-header">телефон</h5>
                        <label>
                            <input name="phone" type="tel" required class="request__input">
                        </label>
                    </div>
                    <div class="request__input-container">
                        <h5 class="request__input-header">почта</h5>
                        <label>
                            <input name="email" type="email" required class="request__input">
                        </label>
                    </div>
                    <div class="request__input-container">
                        <h5 class="request__input-header">имя</h5>
                        <label>
                            <input name="name" type="text" required class="request__input">
                        </label>
                    </div>
                </div>
                <button class="request__submit-button">
                <span class="request__submit-button-text">
                    далее
                </span>
                </button>
            </form>
        </div>
    </div>
</div>
<!--<script defer src="./build/basket.js" > </script>-->
<script defer type="module" src="{{asset('js/basket.js')}}" > </script>
</body>
</html>
