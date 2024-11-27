
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.product-slider');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');

    let scrollAmount = 0;

    nextBtn.addEventListener('click', () => {
        slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
        slider.scrollBy({ left: -slider.offsetWidth, behavior: 'smooth' });
    });
});
