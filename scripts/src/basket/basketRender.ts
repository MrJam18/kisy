import {Basket} from "../../Classes/Basket.js";
import {addQuantity, subtractQuantity} from "./changeItemQuantity.js";
import {HtmlHelper} from "../../Classes/Helpers/HtmlHelper.js";
import {removeItem} from "./removeItem.js";
import {HTMLEvent} from "../../Types/HTMLEvent.js";
import {removeAll} from "./removeAll.js";

export function basketRender(basket: Basket) {
    if(!basket.isEmpty()) {
        let totalQuantity = 0;
        let totalSum = 0;
        const htmlList = document.querySelector('#items-list') as Element;
        htmlList.innerHTML = '';
        let discountSum = 0;
        basket.getItems().forEach((el) => {
            totalQuantity += el.quantity;
            totalSum += el.quantity * el.price;
            discountSum += el.discount;
            const itemEl = document.createElement('div');
            itemEl.className = 'item';
            itemEl.setAttribute('data-id', String(el.id));
            itemEl.innerHTML =
                `<div class="item__image-container">
                    <img src="${el.imageURL}" class="item__image" alt="item">
                </div>
                <div class="item__data-container">
                    <div class="item__name-container">
                        <p class="item__type">${el.type}</p>
                        <p class="item__name">${el.name}</p>
                    </div>
                    <div class="item__counted">
                        <div class="item__prices">
                            <div class="item__price-without-discount">${el.fullPrice}<span class="rouble-sign">₽</span></div>
                            <div class="item__price">${el.price}<span class="rouble-sign">₽</span></div>
                        </div>
                        <div class="item__controls" data-id="${el.id}">
                            <div class="item__quantity-controls">
                                <button class="item__add-button item__button"><span class="item__button-content">+</span></button>
                                <span class="item__quantity">${el.quantity}</span>
                                <button class="item__subtract-button item__button"><span class="item__button-content">-</span></button>
                            </div>
                            <button class="item__delete-button">
                                <img src="./img/x-mark.svg" alt="x-mark" class="delete-button-img">
                            </button>
                        </div>
                    </div>
                </div>`;
            htmlList.append(itemEl);
            itemEl.querySelector('.item__add-button').addEventListener('click', (ev) => addQuantity(ev as HTMLEvent, basket));
            itemEl.querySelector('.item__subtract-button').addEventListener('click', (ev) => subtractQuantity(ev as HTMLEvent, basket));
            itemEl.querySelector('.item__delete-button').addEventListener('click', (ev) => removeItem(ev as HTMLEvent, basket));
        });
        HtmlHelper.innerHTML('#total-quantity', totalQuantity);
        HtmlHelper.innerHTML('#total-sum', totalSum);
        HtmlHelper.innerHTML('#total-discount', Math.round(discountSum / basket.getItems().length));
        const removeAllButton = HtmlHelper.createAndInsertElement('#items-container', 'prepend', 'button');
        removeAllButton.innerHTML = 'Удалить все';
        removeAllButton.className = 'items__remove-all-button';
        removeAllButton.id = 'remove-all';
        removeAllButton.addEventListener('click', () => removeAll(basket));
        HtmlHelper.removeClass('#basket-header', 'basket-header__empty');
        HtmlHelper.removeClass('#right-container', 'basket__right-container_empty');
        HtmlHelper.removeClass('#to-main', 'basket__add-items-button_empty');
        HtmlHelper.removeClass('#to-main-text', 'basket__add-items-button-text_empty');
        HtmlHelper.innerHTML('#to-main-text', 'добавить покупки');
    }
}