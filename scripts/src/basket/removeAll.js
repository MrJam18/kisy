import { emptyBasketRender } from "./emptyBasketRender.js";
export function removeAll(basket) {
    basket.removeAll();
    emptyBasketRender();
    basket.saveInStorage();
}
//# sourceMappingURL=removeAll.js.map