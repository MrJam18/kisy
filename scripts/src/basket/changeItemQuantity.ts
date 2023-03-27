import {Basket} from "../../Classes/Basket.js";
import {HTMLEvent} from "../../Types/HTMLEvent.js";
import {updateTotalQuantityHtml} from "./utils/updateTotalQuantityHtml.js";
import {removeItemHtml} from "./utils/removeItemHtml.js";
import {emptyBasketRender} from "./emptyBasketRender.js";

export function addQuantity (ev: HTMLEvent, basket: Basket) {
    const id = getId(ev);
    const item = basket.findById(id);
    basket.addItemQuantity(item);
    changeQuantityHtml(item.quantity, ev.currentTarget);
    updateTotalQuantityHtml(basket.total);
    basket.saveInStorage();
}
export function subtractQuantity (ev: HTMLEvent, basket: Basket) {
    const item = basket.findById(getId(ev));
    if(basket.subtractItemQuantity(item)) {
        if(basket.isEmpty()) emptyBasketRender();
        else removeItemHtml(item.id);
    }
    else changeQuantityHtml(item.quantity, ev.currentTarget);
    updateTotalQuantityHtml(basket.total);
    basket.saveInStorage();
}

function changeQuantityHtml(quantity: number, button: Element) {
    const parentElement = button.parentNode;
    if(parentElement instanceof Element) {
        parentElement.querySelector('.item__quantity').innerHTML = String(quantity);
    }
}
function getId (ev: HTMLEvent) {
        const idElement = ev.currentTarget.parentNode.parentNode as Element;
        return Number(idElement.getAttribute('data-id'));
}




