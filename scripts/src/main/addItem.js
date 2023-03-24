import { Item } from "../../Classes/Item.js";
export function addItem(ev, basket) {
    const button = ev.currentTarget;
    if (button instanceof Element) {
        const id = Number(button.getAttribute('data-id'));
        const itemInBasket = basket.findById(id);
        if (!itemInBasket)
            basket.add(Item.buildFromElement(button));
        else
            basket.addItemQuantity(itemInBasket);
        basket.saveInStorage();
    }
}
//# sourceMappingURL=addItem.js.map