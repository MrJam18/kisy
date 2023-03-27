import {menuScroll} from "./src/main/menuScroll.js";
import {addItem} from "./src/main/addItem.js";
import {Basket} from "./Classes/Basket.js";
import {layoutLogic} from "./src/layout/layoutLogic.js";

const basket = Basket.fromStorage();
document.querySelectorAll('.link').forEach((el)=>el.addEventListener('click', menuScroll));
document.querySelectorAll('.card__button').forEach((el)=>el.addEventListener('click', (ev)=>  addItem(ev, basket)));
layoutLogic();
document.ontouchmove = function (e) {
    e.preventDefault();
}
