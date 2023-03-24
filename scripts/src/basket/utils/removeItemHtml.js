export function removeItemHtml(id) {
    const items = document.querySelectorAll('.item');
    for (let i = 0; i < items.length; i++) {
        if (+items[i].getAttribute('data-id') === id)
            return items[i].remove();
    }
}
//# sourceMappingURL=removeItemHtml.js.map