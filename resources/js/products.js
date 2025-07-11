let currentSlide = 0;
const slides = document.querySelectorAll('.product__slide');
const slidesToShow = 4;

function showSlide(index) {
    const start = index * slidesToShow;
    const end = start + slidesToShow;
    slides.forEach((slide, i) => {
        slide.style.display = (i >= start && i < end) ? 'block' : 'none';
    });
}

document.getElementById('prevBtn').addEventListener('click', () => {
    currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1;
    showSlide(currentSlide);
});

document.getElementById('nextBtn').addEventListener('click', () => {
    currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
    showSlide(currentSlide);
});

document.addEventListener('DOMContentLoaded', () => {
    showSlide(currentSlide); 
    });