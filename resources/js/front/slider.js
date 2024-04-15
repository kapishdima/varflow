import Swiper from "swiper"
import {Autoplay} from "swiper/modules"
import "swiper/css"
import "swiper/css/autoplay"

export function initializeSwipers() {
  let swiper = new Swiper("#js-carousel", {
    modules: [Autoplay],

    spaceBetween: 30,
    slidesPerView: 3,

    speed: 5000,
    loop: true,
    allowTouchMove: false,
    autoplay: {
      delay: 1,
      disableOnInteraction: true,
      waitForTransition: true,
    },
    breakpoints: {
      1417: {
        slidesPerView: 10,
        spaceBetween: 65,
      },
      768: {
        slidesPerView: 5,
        spaceBetween: 65,
      },
    },
  })
  let swiper2 = new Swiper("#js-reviews", {
    direction: "horizontal",
    modules: [Autoplay],
    spaceBetween: 30,
    slidesPerView: 1,
    speed: 10000,

    grabCursor: true,
    allowTouchMove: true,

    breakpoints: {
      768: {
        slidesPerView: 2.4,
        spaceBetween: 30,
      },
    },
  })
  let swiper3 = new Swiper("#js-cards", {
    direction: "horizontal",
    modules: [Autoplay],
    spaceBetween: 10,
    slidesPerView: 1.1,
    speed: 10000,

    grabCursor: true,
    allowTouchMove: true,

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 50,
      },
    },
  })

  //CASE SECTION SLIDER--------------------------------

  let CaseTopSlider = new Swiper("#case-top", {
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
      reverseDirection: true,
    },
  })

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
    },
  })

  let CaseBottomSlider = new Swiper("#case-bottom", {
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
      reverseDirection: true,
    },
  })

  let CaseMobileSlider = new Swiper("#case-mobile", {
    direction: "horizontal",
    modules: [Autoplay],
    spaceBetween: 30,
    slidesPerView: 1,
    speed: 10000,

    grabCursor: true,
    allowTouchMove: true,

    breakpoints: {
      768: {
        slidesPerView: 2.4,
        spaceBetween: 30,
      },
    },
  })
}
