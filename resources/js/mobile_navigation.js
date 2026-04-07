function showMenu(isVisible) {
    const menuMobile = document.getElementById('mobile-menu-layout');

    if (isVisible) {
        menuMobile.classList.remove('hidden');
    } else {
        menuMobile.classList.add('hidden')
    }
}

window.showMenu = showMenu;