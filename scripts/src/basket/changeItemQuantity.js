import { updateTotalQuantityHtml } from "./utils/updateTotalQuantityHtml.js";
import { removeItemHtml } from "./utils/removeItemHtml.js";
export function addQuantity(ev, basket) {
    const id = getId(ev);
    const item = basket.findById(id);
    basket.addItemQuantity(item);
    changeQuantityHtml(item.quantity, ev.currentTarget);
    updateTotalQuantityHtml(basket.total);
    basket.saveInStorage();
}
export function subtractQuantity(ev, basket) {
    const item = basket.findById(getId(ev));
    if (basket.subtractItemQuantity(item))
        removeItemHtml(item.id);
    else
        changeQuantityHtml(item.quantity, ev.currentTarget);
    updateTotalQuantityHtml(basket.total);
    basket.saveInStorage();
}
function changeQuantityHtml(quantity, button) {
    const parentElement = button.parentNode;
    if (parentElement instanceof Element) {
        parentElement.querySelector('.item__quantity').innerHTML = String(quantity);
    }
}
function getId(ev) {
    const idElement = ev.currentTarget.parentNode.parentNode;
    return Number(idElement.getAttribute('data-id'));
}
//# sourceMappingURL=changeItemQuantity.js.map