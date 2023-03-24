export class HtmlHelper
{
    static innerHTML(selector: string, html: string | number): void
    {
        if(typeof html === 'number') html = String(html);
        const element = document.querySelector(selector);
        if(element instanceof Element) element.innerHTML = html;
        else throw new Error(`can't find element with selector ${selector}.`);
    }
    static foreach(selector: string, callback: CallableFunction)
    {
        // @ts-ignore
        document.querySelectorAll(selector).forEach(callback)
    }
    static addClickEvent(selector: string, callback: Function) {
        // @ts-ignore
        document.querySelector(selector).addEventListener('click', callback)
    }
}