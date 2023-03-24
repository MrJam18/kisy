import { removeItemHtml } from "./utils/removeItemHtml.js";
import { updateTotalQuantityHtml } from "./utils/updateTotalQuantityHtml.js";
export function removeItemListener(ev, basket) {
    const parentNode = ev.currentTarget.parentNode;
    const id = +parentNode.getAttribute('data-id');
    const item = basket.findById(id);
    basket.total.quantity -= item.quantity;
    basket.total.sum -= item.price * item.quantity;
    basket.removeItem(id);
    removeItemHtml(id);
    updateTotalQuantityHtml(basket.total);
    basket.saveInStorage();
}
//# sourceMappingURL=removeItemListener.js.map