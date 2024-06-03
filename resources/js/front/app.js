import { initializeSwipers } from "./slider.js";
import { burgerMenu } from "./burger.js";
import { createLeedForm } from "./leed.js";

document.addEventListener("DOMContentLoaded", () => {
    initializeSwipers();
    burgerMenu();
    createLeedForm();
});
