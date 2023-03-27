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
    static createAndInsertElement(selector: string, position: 'append' | 'prepend' = 'append', tag: string = 'div'): Element
    {
        const element = document.createElement(tag);
        if(position === 'append') document.querySelector(selector).append(element);
        else document.querySelector(selector).prepend(element);
        return element;
    }
    static remove(selector: string)
    {
        document.querySelector(selector).remove();
    }
    static removeClass(selector: string, className: string) {
        document.querySelector(selector).classList.remove(className);
    }
    static addClass(selector: string, className: string) {
        document.querySelector(selector).classList.add(className);
    }
}