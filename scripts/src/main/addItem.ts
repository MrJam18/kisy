import {Basket} from "../../Classes/Basket.js";
import {Item} from "../../Classes/Item.js";


export function addItem (ev: Event, basket: Basket) {
    const button: EventTarget = ev.currentTarget;
    if(button instanceof Element) {
        const id = Number(button.getAttribute('data-id'));
        const itemInBasket = basket.findById(id);
        if(!itemInBasket) basket.add(Item.buildFromElement(button));
        else basket.addItemQuantity(itemInBasket);
        basket.saveInStorage();
    }
}