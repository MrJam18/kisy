import { basketMapping } from "./basketMapping.js";
export function removeAll(basket) {
    basket.removeAll();
    basketMapping(basket);
    basket.saveInStorage();
}
//# sourceMappingURL=removeAll.js.map