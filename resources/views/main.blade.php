
@extends('layout')
@push('css')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endpush
@push('script')
    <script defer type="module" src="{{asset('js//main.js')}}"></script>
@endpush
@section('content')
<div id="hair" class="top">
    <div class="top__left">
        <div class="top__header">
            <div class="top__header-text">
                Маска для волос
            </div>
            <div class="top__header-border"></div>
            <div class=" top__header-text top__header-text__bottom">Питательная</div>
            <div class="top__header-border"></div>
        </div>
        <div class="top__left-text">
            Воск в составе маски питает и восстанавливает волосы. Пантенол увлажняет и облегчает расчесывание. Протеины шелка и комплекс из аминокислот делают волосы более плотными, укрепляют волосяные фолликулы, предотвращают выпадение волос.
        </div>
        <button id="buy-button" class="top__buy-button">Купить</button>
    </div>
    <div class="top__left-mobile-padding"></div>
    <div class="top__right">
        <div class="container top__right-phone-container">
        <img src="{{asset('./img/kiss-my-hair.svg')}}" alt="kiss my hair" class="top__kiss-my-hair-img">
        <img src="{{asset('./img/bottle.png')}}" alt="bottle" class="top__bottle-img">
        <div class="top__arrows">
            <button class="top__arrow-button"><img src="{{asset('./img/arrow-left.svg')}}" alt="left" class="top__arrow-img"></button>
            <button class="top__arrow-button"><img src="{{asset('./img/arrow-right.svg')}}" alt="left" class="top__arrow-img"></button>
        </div>
            <div class="top__phone-kisses">
                <div class="kiss__red top__right-top-kiss"></div>
                <div class="kiss__red top__right-bottom-kiss"></div>
                <div class="kiss__red top__left-kiss"></div>
            </div>
        </div>
    </div>

</div>
<div id="about" class="about__background">
    <div class="container">
        <div class="about__top-border"></div>
        <div class="about">
            <div class="about__photo">
                    <div class="about__photo-label-container">
                        <picture>
                            <source srcset="{{asset('img/null.svg')}}" media="{{config('media.table')}}">
                            <img src="{{asset('img/about-label-pc-first.png')}}" alt="Этот бренд создан" class="about__photo-label about__photo-label_first">
                        </picture>
                        <picture>
                            <source srcset="{{asset('img/search-icon')}}"   media="{{config('media.table')}}">
                            <img src="{{asset('img/about-label-pc-second.png')}}" alt="для тебя" class="about__photo-label about__photo-label_second">
                        </picture>
                        <picture>
                            <source srcset="{{asset('img/about-label.png')}}" media="{{config('media.table')}}">
                            <img src="{{asset('img/null.svg')}}" alt="ЭТОТ БРЕНД СОЗДАН ДЛЯ ТЕБЯ" class="about__photo-label-mobile">
                        </picture>
                    </div>
            </div>
            <div class="about__content">
                <h3 class="about__header">О НАС</h3>
                <div class="about__header-underline"></div>
                <div class="about__text">
                    Мы с командой работали более полугода, перепробовали десятки формул и наконец пришли к успеху, теперь и ты можешь опробовать нашу продукцию на себе.
                </div>
            </div>
            <div class="about__left-kisses_pc">
                <div class="kiss__white about__pc-top-kiss"></div>
                <div class="kiss__white about__pc-second-top-kiss"></div>
            </div>
            <div class="about__pc-black-kiss kiss__black"></div>
            <div class="about__pc-right-kisses">
                <div class="kiss__white about__pc-right-first-kiss"></div>
                <div class="kiss__white about__pc-right-second-kiss"></div>
                <div class="kiss__white about__pc-right-third-kiss"></div>
            </div>
        </div>
    </div>
</div>
<div id="face" class="soon">
    <div class="container">
        <div class="soon__content">
            <div class="soon__header-container">
                <h3 class="soon__header">Средства <span class="soon__header_bold">ДЛЯ Лица</span> </h3>
                <div class="soon__header-underline"></div>
            </div>
            <div class="soon__header-container_mobile">
                <h3 class="soon__header">Средства</h3>
                <div class="soon__header-underline"></div>
                <h3 class="soon__header">Для лица</h3>
                <div class="soon__header-underline"></div>
            </div>
            <div class="soon__text">Уже скоро в продаже косметика для лица: <br/>
            мицелярная вода, тоники и многое другое.
            </div>
            <div class="soon__kisses">
                <div class="kiss__red soon__middle-kiss"></div>
                <div class="kiss__red soon__right-top-kiss"></div>
                <div class="kiss__red soon__right-bottom-kiss"></div>
            </div>
        </div>
    </div>
</div>
<div class="cards container">
    <div class="card__wrapper">
        <div class="card card__first">
            <img src="{{asset('img/card1.png')}}" class="card__img" alt="1">
            <div class="card__button_flex"><button data-imageURL="{{asset('img/test-item.png')}}" data-id="271187" data-price="2022" data-name="kisy color" data-type="Маска для волос" data-fullPrice="3000" data-discount="20" class="card__button">COOMING SOON</button>
            </div>
        </div>
        <div class="card">
            <img src="{{asset('img/card2.png')}}" class="card__img" alt="2">
            <div class="card__button_flex"><button data-imageURL="{{asset('img/test-item.png')}}" data-id="271185" data-price="1000" data-name="kisy gel" data-type="Гель для лица" data-fullPrice="2000" data-discount="10" class="card__button">COOMING SOON</button></div>
        </div>
        <div class="card card__last">
            <img src="{{asset('img/card3.png')}}" class="card__img" alt="3">
            <div class="card__button_flex"><button class="card__button">COOMING SOON</button></div>
        </div>
        <div class="kiss__red card__phone-kiss"></div>
    </div>
</div>
<div class="container bottom-padding">
</div>
    @push('modals')
        <div id="buy-chooses-modal" class="buy-chooses modal none">
            <button class="modal__close-button"><img src="{{asset('img/x-mark.svg')}}" alt="x" class="modal__close-button-img"></button>
            <h3 class="buy-chooses__header">Магазин</h3>
            <div class="buy-chooses__buttons-container">
                <button data-imageURL="{{asset('img/test-item.png')}}" data-id="271188" data-price="3000" data-name="kisy mask" data-type="Маска для волос" data-fullPrice="3000" data-discount="20" class="buy-chooses__button buy-chooses__site-button">Купить на сайте</button>
                <a href="https://www.ozon.ru/search/?deny_category_prediction=true&from_global=true&text=%D0%9C%D0%B0%D1%81%D0%BA%D0%B0+%D0%B4%D0%BB%D1%8F+%D0%B2%D0%BE%D0%BB%D0%BE%D1%81&product_id=932251614" class="buy-chooses__button buy-chooses__ozon-button">Купить на Ozon</a>
                <a href="https://www.wildberries.ru/catalog/156518567/detail.aspx?targetUrl=MS&size=261099886" class="buy-chooses__button buy-chooses__wildberries-button">Купить на Wildberries</a>
            </div>
        </div>
    @endpush
@endsection
