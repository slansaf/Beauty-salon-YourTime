const reviewsActive = document.querySelector('.reviews__main');
const button = document.querySelector('.reviews__button');
const cross = document.querySelector('.reviews__close');

const menuActive = document.querySelector('.header__menu');
const burger = document.querySelector('.header__burger');
const menuClose = document.querySelector('.header__cross');

function toggleMenu() {
    menuActive.classList.toggle('hidden');
}
 
function toggleReviews() {
    reviewsActive.classList.toggle('hidden');
}

burger.addEventListener('click', toggleMenu);
menuClose.addEventListener('click', toggleMenu);

button.addEventListener('click', toggleReviews);
cross.addEventListener('click', toggleReviews);