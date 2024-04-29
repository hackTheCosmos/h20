//burger menu
const burgerIcon = document.querySelector(".fa-bars-staggered")
const exitIcon = document.querySelector(".exit__nav")
const mobileNav = document.querySelector(".mobile__nav")

burgerIcon.addEventListener("click", () => {
    mobileNav.classList.toggle("display__mobile__nav");
})

exitIcon.addEventListener("click", () => {
    mobileNav.classList.toggle("display__mobile__nav");
})

