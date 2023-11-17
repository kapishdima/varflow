import Swiper from "swiper"
import {Autoplay} from "swiper/modules"

import "swiper/css"
import "swiper/css/autoplay"
document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector("[data-action='toggle-menu']")
  const menu = document.querySelector("[data-menu='menu']")
  const closeButton = document.querySelector("[data-action='close-menu']")
  const menuLinks = document.querySelectorAll(".menu__list--item")

  // Toggle menu when the button is clicked
  menuButton.addEventListener("click", function () {
    menu.style.left = menu.style.left === "0px" ? "-700px" : "0px"
  })

  // Close menu when close button is clicked
  closeButton.addEventListener("click", function () {
    menu.style.left = "-900px"
  })

  // Close menu when any link in the menu is clicked
  menuLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      menu.style.left = "-900px"
    })
  })

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
      768: {
        slidesPerView: 10,
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
  let swiper3 = new Swiper("#js-projects", {
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
})
