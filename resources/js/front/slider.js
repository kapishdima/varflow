import Swiper from "swiper";
import { Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/autoplay";

export function initializeSwipers() {
    let swiper = new Swiper("#ticker-slider", {
        modules: [Autoplay],

        spaceBetween: 0,
        slidesPerView: 2,

        speed: 3000,
        loop: true,
        allowTouchMove: false,
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
        },
        breakpoints: {
            1417: {
                slidesPerView: 6,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        },
    });
    let swiper2 = new Swiper("#js-reviews", {
        modules: [Autoplay],
        spaceBetween: 30,
        slidesPerView: 1.2,
        speed: 500,
        loop: true,
        direction: "horizontal",

        allowTouchMove: true,

        breakpoints: {
            500: {
                slidesPerView: 1.2,
            },
            768: {
                slidesPerView: 2.4,
                spaceBetween: 30,
                allowTouchMove: false,
                speed: 5000,
                autoplay: {
                    delay: 0,
                    pauseOnMouseEnter: true,
                },
            },
        },
    });
    let swiper3 = new Swiper("#js-prices", {
        spaceBetween: 30,
        slidesPerView: 1.2,

        breakpoints: {
            720: {
                slidesPerView: 2,
            },
        },
    });

    //CASE SECTION SLIDER--------------------------------

    let CaseTopSlider = new Swiper("#case-top", {
        direction: "horizontal",
        modules: [Autoplay],
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        allowTouchMove: false,
        effect: "slide",
        speed: 5200,
        autoplay: {
            delay: 0,
            disableOnInteraction: true,
            reverseDirection: true,
        },
    });

    let CaseMiddleSlider = new Swiper("#case-middle", {
        direction: "horizontal",
        modules: [Autoplay],
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        allowTouchMove: false,
        effect: "slide",
        speed: 5000,
        autoplay: {
            delay: 0,
            disableOnInteraction: true,
        },
    });

    let CaseBottomSlider = new Swiper("#case-bottom", {
        direction: "horizontal",
        modules: [Autoplay],
        spaceBetween: 30,
        slidesPerView: 3,
        loop: true,
        allowTouchMove: false,
        effect: "slide",
        speed: 5500,
        autoplay: {
            delay: 0,
            reverseDirection: true,
            disableOnInteraction: true,
        },
    });

    let CaseMobileSlider = new Swiper("#case-mobile", {
        direction: "horizontal",
        spaceBetween: 30,
        slidesPerView: 1.4,

        allowTouchMove: true,
    });
}
