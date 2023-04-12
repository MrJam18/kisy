export function searchButtonClickHandler () {
    const searchInput = document.querySelector('.search-input') as HTMLInputElement;
    searchInput.classList.add('search-input_focus');
    searchInput.focus();
}