let isOpen = false;
export const menuSwitcher = (ev)=> {
    ev.preventDefault();
    isOpen = !isOpen;
    const menuContainerStyle = document.querySelector('#menu__container').style;
    const menuPhoneStyle  = document.querySelector('#menu-phone').style;
    if(isOpen) {
        menuPhoneStyle.display = 'flex';
        menuPhoneStyle.transform = 'translate(0, 0)';
        menuContainerStyle.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        menuPhoneStyle.opacity = '1';


    }
    else {
        document.querySelector('#menu-phone').style.display = 'none';
        document.querySelector('#menu__container').style.backgroundColor = 'unset';
        menuPhoneStyle.transform = 'translate(0, -35px)';
    }
}