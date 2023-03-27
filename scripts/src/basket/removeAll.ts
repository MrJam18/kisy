import {Basket} from "../../Classes/Basket.js";
import {emptyBasketRender} from "./emptyBasketRender.js";

export function removeAll (basket: Basket) {
    basket.removeAll();
    emptyBasketRender();
    basket.saveInStorage();
}