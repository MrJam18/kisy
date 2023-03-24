export class HtmlHelper {
    static innerHTML(selector, html) {
        if (typeof html === 'number')
            html = String(html);
        const element = document.querySelector(selector);
        if (element instanceof Element)
            element.innerHTML = html;
        else
            throw new Error(`can't find element with selector ${selector}.`);
    }
    static foreach(selector, callback) {
        // @ts-ignore
        document.querySelectorAll(selector).forEach(callback);
    }
    static addClickEvent(selector, callback) {
        // @ts-ignore
        document.querySelector(selector).addEventListener('click', callback);
    }
}
//# sourceMappingURL=HtmlHelper.js.map