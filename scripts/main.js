import { menuScroll } from "./src/main/menuScroll.js";
import { menuSwitcher } from './src/main/menuSwitcher.js';
import { addItem } from "./src/main/addItem.js";
import { Basket } from "./Classes/Basket.js";
const basket = Basket.fromStorage();
document.querySelectorAll('.link').forEach((el) => el.addEventListener('click', menuScroll));
document.querySelector('#menu-switcher').addEventListener('click', menuSwitcher);
document.querySelectorAll('.card__button').forEach((el) => el.addEventListener('click', (ev) => addItem(ev, basket)));
//# sourceMappingURL=main.js.map