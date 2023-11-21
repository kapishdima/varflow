import Swiper from "swiper"
import {Autoplay} from "swiper/modules"

import "swiper/css"
import "swiper/css/autoplay"
document.addEventListener("DOMContentLoaded", function () {
  const dropdownMenu = document.querySelector(".dropdown-menu")
  const dropdownToggle = document.querySelector(".dropdown-toggle")
  const selectedValueInput = document.getElementById("selectedValue")

  dropdownToggle.addEventListener("click", function () {
    dropdownMenu.classList.toggle("show")
  })

  dropdownMenu.addEventListener("click", function (event) {
    const selectedOption = event.target.closest(".dropdown-item")
    if (selectedOption) {
      const value = selectedOption.getAttribute("data-value")
      const textContent = selectedOption.textContent.trim()

      dropdownToggle.textContent = textContent
      selectedValueInput.value = value

      dropdownMenu.classList.remove("show")
    }
  })

  const menuButton = document.querySelector("[data-action='toggle-menu']")
  const menu = document.querySelector("[data-menu='menu']")
  const closeButton = document.querySelector("[data-action='close-menu']")
  const menuLinks = document.querySelectorAll(".menu__list--item")

  menuButton.addEventListener("click", function () {
    menu.style.left = menu.style.left === "0px" ? "-700px" : "0px"
  })

  closeButton.addEventListener("click", function () {
    menu.style.left = "-900px"
  })

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
})
