import { removeItemHtml } from "./utils/removeItemHtml.js";
import { updateTotalQuantityHtml } from "./utils/updateTotalQuantityHtml.js";
import { emptyBasketRender } from "./emptyBasketRender.js";
export function removeItem(ev, basket) {
    const parentNode = ev.currentTarget.parentNode;
    const id = +parentNode.getAttribute('data-id');
    const item = basket.findById(id);
    basket.total.quantity -= item.quantity;
    basket.total.sum -= item.price * item.quantity;
    basket.removeItem(id);
    if (basket.isEmpty())
        emptyBasketRender();
    else {
        removeItemHtml(id);
        updateTotalQuantityHtml(basket.total);
    }
    basket.saveInStorage();
}
//# sourceMappingURL=removeItem.js.map