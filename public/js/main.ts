import {menuScroll} from "./src/main/menuScroll.js";
import {addItem} from "./src/main/addItem.js";
import {Basket} from "./Classes/Basket.js";
import {layoutLogic} from "./src/layout/layoutLogic.js";
import {HtmlHelper} from "./Classes/Helpers/HtmlHelper.js";

const basket = Basket.fromStorage();
HtmlHelper.foreach('.link', (el)=>el.addEventListener('click', menuScroll));
HtmlHelper.foreach('.card__button', (el)=>el.addEventListener('click', (ev)=>  addItem(ev, basket)));
layoutLogic();
