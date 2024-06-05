import {initializeSwipers} from "./slider.js"
import {burgerMenu} from "./burger.js"
import {micromodalInit} from "./modal.js"
document.addEventListener("DOMContentLoaded", function () {
  initializeSwipers()
  burgerMenu()
  micromodalInit()
  consoleEffect()
})
