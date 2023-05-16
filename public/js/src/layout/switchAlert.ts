import {HtmlHelper} from "../../Classes/Helpers/HtmlHelper.js";
const alertsList = document.querySelector('.alerts-list') as HTMLElement;
let alertHeight = 0;
let alertStep = 60;
const phoneMediaQuery = window.matchMedia("(max-width: 600px)");
if (phoneMediaQuery.matches) {
    alertStep = 38;
}
phoneMediaQuery.addEventListener('change', (ev)=> {
    if(ev.matches) alertStep = 38;
})
export function showAlert (message: string, delay: number = 4500): HTMLElement {
    const alert = HtmlHelper.createAndInsertElement('.alerts-list', 'prepend');
    if(alertsList.childElementCount === 1) {
        alertsList.lastElementChild.setAttribute('data-last', '');
    }
    alert.classList.add('alert__container');
    alert.insertAdjacentHTML('afterbegin', `
    <div class="alert">
        <div class="alert__message">${message}</div>
        <button type="button" class="alert__close-button" data-dismiss="alert" aria-label="Close">
            <img src="./img/x-mark.svg" alt="x" class="alert__button-img">
        </button>
    </div>
    <div class="alert__margin"></div>
        `);
    setTimeout(()=> {
        alert.style.transform = 'translate(-100%, 0)';
    });
    alertHeight += alertStep;
    alertsList.style.height = alertHeight + 'px';
    setTimeout(()=> {
        hideAlert(alert);
    }, delay);
    alert.querySelector('.alert__close-button').addEventListener('click', ()=> hideAlert(alert));
    return alert;
}

export function hideAlert(alert: HTMLElement): HTMLElement {
    if(alert.hasAttribute('data-last')) {
        const alerts = document.querySelectorAll('.alert__container');
        const prevAlert = alerts[alerts.length - 2];
        if(prevAlert) {
            prevAlert.setAttribute('data-last', '')
        }
        alertsList.style.transition = 'none';
    }
    else alertsList.style.transition = 'height 250ms';
    alert.style.transform = 'translate(0)';
    setTimeout(() => {
        alertHeight -= alertStep;
        alertsList.style.height = alertHeight + 'px';
        alert.remove();
    }, 250);
    return alert
}