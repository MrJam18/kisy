export class Item {
    constructor(data = null) {
        if (data) {
            Item.checkNull(data.imageURL);
            Item.checkNull(data.type);
            Item.checkNull(data.name);
            Item.checkNull(data.quantity);
            Item.checkNull(data.price);
            Item.checkNull(data.discount);
            Item.checkNull(data.id);
            this.imageURL = data.imageURL;
            this.type = data.type;
            this.name = data.name;
            this.quantity = +data.quantity;
            this.price = +data.price;
            this.discount = +data.discount;
            this.fullPrice = +data.fullPrice;
            this.id = data.id;
        }
    }
    static checkNull(data) {
        if (data === null || data === undefined) {
            throw new Error('data is empty');
        }
    }
    static buildFromElement(el) {
        const data = {};
        data.discount = el.getAttribute('data-discount');
        data.price = el.getAttribute('data-price');
        data.type = el.getAttribute('data-type');
        data.name = el.getAttribute('data-name');
        data.fullPrce = el.getAttribute('data-fullPrice');
        data.quantity = 1;
        data.imageURL = el.getAttribute('data-imageURL');
        data.id = Number(el.getAttribute('data-id'));
        return new this(data);
    }
}
//# sourceMappingURL=Item.js.map