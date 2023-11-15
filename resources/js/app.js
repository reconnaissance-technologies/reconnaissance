import './bootstrap';
import 'flowbite';

// JavaScript to handle the transparent navbar on scroll
window.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    const logoMixed = document.querySelector(".logo-mixed");
    const logoDark = document.querySelector(".logo-dark");
    if (window.scrollY > 50) {
        navbar.classList.add("bg-white");
        navbar.classList.add("text-black")
        navbar.classList.remove("text-white")
        logoMixed.classList.add("hidden")
        logoDark.classList.remove("hidden")
    } else {
        navbar.classList.remove("bg-white");
        navbar.classList.remove("text-black")
        navbar.classList.add("text-white")
        logoMixed.classList.remove("hidden")
        logoDark.classList.add("hidden")
    }
});
