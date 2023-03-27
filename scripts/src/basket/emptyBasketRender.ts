import {HtmlHelper} from "../../Classes/Helpers/HtmlHelper.js";

export function emptyBasketRender () {
    HtmlHelper.innerHTML('#items-list', '<div class="items-empty-text">Ваша корзина пуста.</div>');
    document.querySelector('#right-container').classList.add('basket__right-container_empty');
    HtmlHelper.remove('#remove-all');
    HtmlHelper.innerHTML('#to-main-text', 'перейти к покупкам');
    document.querySelector('#basket-header').classList.add('basket-header__empty');
    HtmlHelper.addClass('#to-main', 'basket__add-items-button_empty');
    HtmlHelper.addClass('#to-main-text', 'basket__add-items-button-text_empty');
}