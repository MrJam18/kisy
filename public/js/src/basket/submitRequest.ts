import {buildFormData} from "../../utils/buildFormData.js";
import {getCSRF} from "../../utils/getCSRF.js";
import {Basket} from "../../Classes/Basket.js";
import {Item} from "../../Classes/Item.js";
import {showAlert} from "../layout/switchAlert.js";
import {hideRequest} from "./switchRequest.js";
import {emptyBasketRender} from "./emptyBasketRender.js";

export async function submitRequest(ev: SubmitEvent, basket: Basket): Promise<void> {
    ev.preventDefault();
    const form = ev.currentTarget as HTMLFormElement;
    const data: any = buildFormData(form);
    data.products = [];
    basket.getItems().forEach((item: Item)=> {
        data.products.push({id: item.id, quantity: item.quantity});
    });
    try {
        const response = await fetch('/api/addLead', {
            method: 'post',
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': getCSRF()
            }
        });
        if(response.ok) {
            showAlert('Ваш заказ поступил в обработку.');
            hideRequest();
            basket.setEmpty();
            basket.saveInStorage();
            emptyBasketRender();
        }
    } catch (error) {
        console.log(error.message);
    }
}
