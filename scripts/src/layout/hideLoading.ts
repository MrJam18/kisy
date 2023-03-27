export function hideLoading () {
    const loadingScreen = document.querySelector('#loading-screen');
    loadingScreen.classList.add('loading-screen_transparent');
    loadingScreen.querySelector('.loader').classList.add('loader__transparent');
    setTimeout(()=> {
        loadingScreen.classList.add('none');
    }, 300);
}