export const initSaleSlider = () => {
    const generalSlider = document.querySelector('.new-items-1');

    if (generalSlider) {

        const swiper = new Swiper(generalSlider, {
            slidesPerView: 2,
            spaceBetween: 15,
            speed: 1200,
            navigation: {
                nextEl: '.next-new--item-1',
                prevEl: '.prev-new--item-1',
            },

            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 15
                },
                460: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                767: {
                    slidesPerView: 4,
                    spaceBetween: 15
                }
            }
        });
    }
}