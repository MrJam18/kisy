import {Total} from "../../../Classes/Total.js";
import {HtmlHelper} from "../../../Classes/Helpers/HtmlHelper.js";

export function updateTotalQuantityHtml(total: Total): void {
    HtmlHelper.innerHTML('#total-sum', total.sum);
    HtmlHelper.innerHTML('#total-quantity', total.quantity);
}