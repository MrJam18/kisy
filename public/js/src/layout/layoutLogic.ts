import {HtmlHelper} from "../../Classes/Helpers/HtmlHelper.js";
import {searchButtonClickHandler} from "./searchButtonClickHandler.js";
import {menuSwitcher} from "./menuSwitcher.js";
import {hideLoading} from "./hideLoading.js";

export function layoutLogic() {
    // HtmlHelper.addClickEvent('#search-button', searchButtonClickHandler);
    HtmlHelper.addClickEvent('#menu-switcher', menuSwitcher);
    // document.querySelector('.search-input').addEventListener('blur', () => {
    //     HtmlHelper.removeClass('.search-input', 'search-input_focus');
    // });
    window.onload = hideLoading;
}
