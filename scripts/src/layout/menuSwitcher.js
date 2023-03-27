let isOpen = false;
export const menuSwitcher = (ev)=> {
    ev.preventDefault();
    isOpen = !isOpen;
    const menuContainerStyle = document.querySelector('#menu__container').style;
    const menuPhoneStyle  = document.querySelector('#menu-phone').style;
    if(isOpen) {
        menuPhoneStyle.display = 'flex';
        menuContainerStyle.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        menuPhoneStyle.opacity = '1';
    }
    else {
        menuPhoneStyle.opacity = '0';
        menuContainerStyle.backgroundColor = 'unset';
        setTimeout(() => {
            menuPhoneStyle.display = 'none'
        }, 200);
    }
}