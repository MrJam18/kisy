export class Item {
    id: number;
    imageURL: string;
    type: string;
    name: string;
    quantity: number;
    price: number;
    discount: number;
    fullPrice: number;

    constructor(data = null) {
        if(data) {
            Item.checkNull(data.imageURL);
            Item.checkNull(data.type);
            Item.checkNull(data.name);
            Item.checkNull(data.quantity);
            Item.checkNull(data.price);
            Item.checkNull(data.discount);
            Item.checkNull(data.id);
            Item.checkNull(data.fullPrice);
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
    private static checkNull(data): void
    {
        if(data === null || data === undefined) {
            throw new Error('data is empty');
        }
    }
    static buildFromElement(el: Element): Item
    {
        const data: Record<any, any> = {};
        data.discount = el.getAttribute('data-discount');
        data.price = el.getAttribute('data-price');
        data.type = el.getAttribute('data-type');
        data.name = el.getAttribute('data-name');
        data.fullPrice = el.getAttribute('data-fullPrice');
        data.quantity = 1;
        data.imageURL = el.getAttribute('data-imageURL');
        data.id = Number(el.getAttribute('data-id'));
        return new this(data);
    }
}