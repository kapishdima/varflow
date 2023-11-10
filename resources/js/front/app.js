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
})
