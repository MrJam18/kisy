import {menuScroll} from "./menuScroll.js";
import {menuSwitcher} from './menuSwitcher.js';

document.querySelectorAll('.link').forEach((el)=>el.addEventListener('click', menuScroll));
document.querySelector('#menu-switcher').addEventListener('click', menuSwitcher);