const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector(".menu-menu-glowne-container");

const toggle = () => {
    hamburger.classList.toggle('is-active');
    nav.classList.toggle('menu__active');
}

hamburger.addEventListener('click', () => {
    toggle();
});

nav.addEventListener('click', () => {
    toggle();
});