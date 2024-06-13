import { initializeSwipers } from "./slider.js";
import { burgerMenu } from "./burger.js";
import { micromodalInit } from "./modal.js";
import { consoleEffect } from "./console.js";
import { createLeedForm } from "./leed.js";
import { initPhoneMask } from "./mask.js";

document.addEventListener("DOMContentLoaded", function () {
    initializeSwipers();
    burgerMenu();
    micromodalInit();
    consoleEffect();
    createLeedForm();
    initPhoneMask();
});
