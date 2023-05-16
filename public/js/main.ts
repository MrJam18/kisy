import {Modal} from "./Classes/Modal.js";
import {layoutLogic} from "./src/layout/layoutLogic.js";
import {menuScroll} from "./src/main/menuScroll.js";
import {addItem} from "./src/main/addItem.js";
import {Basket} from "./Classes/Basket.js";
import {HtmlHelper} from "./Classes/Helpers/HtmlHelper.js";

const basket = Basket.fromStorage();
const buyChoosesModal = new Modal('#buy-chooses-modal');
// HtmlHelper.foreach('.link', (el)=>el.addEventListener('click', menuScroll));
HtmlHelper.foreach('.card__button', (el)=>el.addEventListener('click', (ev)=>  addItem(ev, basket)));
HtmlHelper.addClickEvent('#buy-button', ()=> {
    buyChoosesModal.show();
});
HtmlHelper.addClickEvent('.buy-chooses__site-button', (ev)=> {
    addItem(ev, basket);
    buyChoosesModal.hide();
})
layoutLogic();
