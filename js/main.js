import { initNav } from "./module/nav.js";
import { initScrollToTop } from "./module/scroll-to-top.js";
import { initScroll } from "./module/scroll.js";
import { initObserver } from "./module/observer.js";
import { initPopup } from "./module/popup.js";
import { initMenuSLider } from "./module/menuSlider.js";
import { initDropList } from "./module/dropList.js";
import { initSaleSlider } from "./module/saleSlider.js";
import { initDistance } from './module/distance.js';
import { initNavModal } from "./module/modal.js"
import { initTab } from "./module/tab.js";
import { initLk } from "./module/lk.js";

window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initNav();
    initScrollToTop();
    initScroll();
    baguetteBox.run('.gallery-wrapper');
    initObserver();
    initPopup();
    initMenuSLider();
    initDropList();
    initSaleSlider();
    initNavModal();
    initDistance();
    initTab();
    initLk();

    const swiperSlidesSale = document.querySelectorAll('.swiper-slide-sale');

    if (swiperSlidesSale) {

        swiperSlidesSale.forEach(slide => {
            const radioInputs = slide.querySelectorAll('.pa_color-input');
            radioInputs.forEach(function (radioInput) {
                radioInput.addEventListener('change', function () {
                    slide.querySelectorAll('.pa_color-label').forEach(function (label) {
                        label.classList.remove('checked');
                    });

                    let selectedLabel = this.parentElement;
                    if (selectedLabel) {
                        selectedLabel.classList.add('checked');
                    }
                });
            });

            const radioLabels = slide.querySelectorAll('.pa_amount-input');
            radioLabels.forEach(function (radioLabel) {
                radioLabel.addEventListener('change', function () {
                    slide.querySelectorAll('.pa_amount-label').forEach(function (label) {
                        label.classList.remove('checked');
                    });

                    let selectedLabel = this.parentElement;
                    if (selectedLabel) {
                        selectedLabel.classList.add('checked');
                    }
                });
            });
        });
    }

    

});
