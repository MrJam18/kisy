export function buildFormData(form: HTMLFormElement): object {
    const elements = form.elements;
    const data = {};
    for (let i = 0; i < elements.length; i++) {
        const el = elements[i] as HTMLInputElement;
        const name = el.name;
        if(name) data[name] = el.value;
    }
    return data;
}