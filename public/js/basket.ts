import {basketRender} from "./src/basket/basketRender.js";
import {Basket} from "./Classes/Basket.js";
import {hideRequest, showRequest} from "./src/basket/switchRequest.js";
import {HtmlHelper} from "./Classes/Helpers/HtmlHelper.js";
import {stopPropagation} from "./utils/stopPropagation.js";
import {layoutLogic} from "./src/layout/layoutLogic.js";
import {submitRequest} from "./src/basket/submitRequest.js";

const basket = Basket.fromStorage();
layoutLogic();
basketRender(basket);
HtmlHelper.addClickEvent('#buy-button', showRequest);
HtmlHelper.addClickEvent('#request-close-button', hideRequest);
HtmlHelper.addClickEvent('#request', hideRequest);
HtmlHelper.addClickEvent('#request-box', stopPropagation);
document.querySelector('#request__form').addEventListener('submit', (ev: SubmitEvent)=> submitRequest(ev, basket));