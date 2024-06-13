export function burgerMenu() {
    const dropdownMenu = document.querySelector(".dropdown-menu");
    const dropdownToggle = document.querySelector(".dropdown-toggle");
    const selectedValueInput = document.getElementById("work_category");

    if (!selectedValueInput || !dropdownMenu || !dropdownToggle) {
        return;
    }

    dropdownToggle.addEventListener("click", function () {
        dropdownMenu.classList.toggle("show");
    });

    dropdownMenu.addEventListener("click", function (event) {
        const selectedOption = event.target.closest(".dropdown-item");
        if (selectedOption) {
            const value = selectedOption.getAttribute("data-value");
            const textContent = selectedOption.textContent.trim();

            dropdownToggle.textContent = textContent;
            selectedValueInput.value = value;

            dropdownMenu.classList.remove("show");
        }
    });

    const menuButton = document.querySelector("[data-action='toggle-menu']");
    const menu = document.querySelector("[data-menu='menu']");
    const closeButton = document.querySelector("[data-action='close-menu']");
    const menuLinks = document.querySelectorAll(".menu__list--item");

    menuButton.addEventListener("click", function () {
        menu.style.left = menu.style.left === "0px" ? "-700px" : "0px";
    });

    closeButton.addEventListener("click", function () {
        menu.style.left = "-900px";
    });

    menuLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            menu.style.left = "-900px";
        });
    });
}
