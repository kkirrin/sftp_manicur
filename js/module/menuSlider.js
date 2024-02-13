export const initMenuSLider = () => {
    // слайдер "меню"
    const exclusiveSlider = document.querySelector('.menu-swiper');
    if (exclusiveSlider) {
        const sliderItems = document.querySelectorAll('.menu-slide');
        console.log(window.innerWidth)
        if (window.innerWidth < 1097) {
            console.log('f')
            sliderItems.forEach((slide) => {
                slide.classList.add('swiper-slide');
            });

            console.log('количество items', sliderItems);
        }

        let breakpoint = window.matchMedia('(min-width:1023px)');
        let swiper;

        const breakpointChecker = function () {
            if (breakpoint.matches === true) {

                if (swiper !== undefined) {
                    swiper.destroy(true, true);
                } return;

            } else if (breakpoint.matches === false) {
                // eslint-disable-next-line consistent-return
                return exclusiveSliderInit();
            }
        };

        const exclusiveSliderInit = function () {
            swiper = new Swiper(exclusiveSlider, {
                loop: true,
                spaceBetween: 10,
                init: true,
                slidesPerView: 1,
                speed: 1500,
                breakpoints: {
                    420: {
                        slidesPerView: 2,
                        spaceBetween: 5,
                    },
                    767: {
                        slidesPerView: 7,
                        spaceBetween: 10,
                    },
                },

            });
        };

        breakpoint.addEventListener('change', breakpointChecker);
        breakpointChecker();
    }
}