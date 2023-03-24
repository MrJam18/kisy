export const menuScroll = (ev)=> {
    const menuEl = ev.currentTarget;
    const className = menuEl.className;
    const animationTime = 700;
    $(`.${className}`).off('click');
    const destination = $((menuEl.getAttribute('href')));
    $('html').animate({
        scrollTop: destination.offset().top
    }, {
        duration: animationTime,
        specialEasing: {
            width: "linear",
            height: "easeOutBounce"
        }});
    setTimeout(()=> {
        document.querySelector(`.${className}`).addEventListener('click', menuScroll);
    }, animationTime);
}
