import {Basket} from "../../Classes/Basket.js";
import {basketMapping} from "./basketMapping.js";

export function removeAll (basket: Basket) {
    basket.removeAll();
    basketMapping(basket);
    basket.saveInStorage();
}