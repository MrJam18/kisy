import {HtmlHelper} from "../../Classes/Helpers/HtmlHelper.js";

const request = document.querySelector('#request');
const bodyStyle = document.querySelector('body').style;
const requestBox = document.querySelector('#request-box') as HTMLElement;
export function hideRequest() {
    request.classList.remove('request__background_open');
    requestBox.style.display = 'none';
    setTimeout(()=> {
        request.classList.remove('flex');
        request.classList.add('none');
    }, 200);
    bodyStyle.overflow = 'auto';
}
export function showRequest() {
    request.classList.remove('none');
    request.classList.add('flex');
    bodyStyle.overflow = 'hidden';
    requestBox.style.display = 'block';
    setTimeout(()=> {
        request.classList.add('request__background_open');
    }, 0);
}