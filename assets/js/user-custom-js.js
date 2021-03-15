const menuIcon = document.querySelector
('.hamburger-menu');

const menuIconText = document.querySelector
('.hamburger-menu-text');

const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click' , () => {
navbar.classList.toggle("change");
});

menuIconText.addEventListener('click' , () => {
    navbar.classList.toggle("change");
});