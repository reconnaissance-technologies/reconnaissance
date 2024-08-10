import './bootstrap';
import { Tabs } from 'flowbite';

// JavaScript to handle the transparent navbar on scroll
window.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    const logoMixed = document.querySelector(".logo-mixed");
    const logoDark = document.querySelector(".logo-dark");
    const scrollToTop = document.querySelector("#scroll-to-top");

    if (window.scrollY > 50) {
        navbar.classList.add("bg-white");
        navbar.classList.add("text-black")
        navbar.classList.add("shadow-lg")
        navbar.classList.remove("text-white")
        logoMixed.classList.add("hidden")
        logoDark.classList.remove("hidden")
    } else {
        navbar.classList.remove("bg-white");
        navbar.classList.remove("text-black")
        navbar.classList.remove("shadow-lg")
        navbar.classList.add("text-white")
        logoMixed.classList.remove("hidden")
        logoDark.classList.add("hidden")
    }
    

    if (window.scrollY > 500) {
        scrollToTop.classList.remove("hidden")
    } else {
        scrollToTop.classList.add("hidden")
    }
});
