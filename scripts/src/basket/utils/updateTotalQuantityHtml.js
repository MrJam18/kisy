import { HtmlHelper } from "../../../Classes/Helpers/HtmlHelper.js";
export function updateTotalQuantityHtml(total) {
    HtmlHelper.innerHTML('#total-sum', total.sum);
    HtmlHelper.innerHTML('#total-quantity', total.quantity);
}
//# sourceMappingURL=updateTotalQuantityHtml.js.map