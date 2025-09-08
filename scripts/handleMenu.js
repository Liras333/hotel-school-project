const menuIcon = document.querySelector('.menu-icon');
const mobileNavigation = document.querySelector('.mobile-navigation');

menuIcon.addEventListener('click', function () {
    mobileNavigation.classList.toggle('mobile-show');
})