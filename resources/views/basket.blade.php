@extends('layout')
@push('css')
    <link rel="stylesheet" href="{{asset('css/basket.css')}}">
@endpush
@push('script')
    <script defer src="{{asset('js/jquery.js')}}"></script>
    <script defer type="module" src="{{asset('js/basket.js')}}"></script>
@endpush
@section('content')
<div class="content">
    <div class="basket-content container">
        <h1 id="basket-header" class="basket-header">КОРЗИНА</h1>
        <div class="basket-header__underline"></div>
        <div class="basket-flexbox basket-flexbox_empty">
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
                    <h2 class="total__header">Сумма заказа</h2>
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
                <a id="to-main" href="{{route('main')}}" class="basket__add-items-button basket__add-items-button_mobile">
                    добавить покупки
                </a>
                <button id="buy-button" class="basket__buy-button">
                    оформить заказ
                </button>
            </div>
        </div>
    </div>
</div>
<div id="request" class="request__background">
        <div id="request-box" class="request__content-box">
            <button id="request-close-button" class="request__close-button">
                <img src="{{asset('img/x-mark.svg')}}" alt="x" class="request__close-button-img">
            </button>
            <h3 class="request__header">оформить заявку</h3>
            <form id="request__form">
                <div class="request__inputs-box">
                    <div class="request__input-container">
                        <h5 class="request__input-header">имя</h5>
                        <label>
                            <input name="name" type="text" required class="request__input">
                        </label>
                    </div>
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
                </div>
                <button class="request__submit-button">
                    далее
                </button>
            </form>
        </div>
</div>
@endsection
