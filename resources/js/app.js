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

document.addEventListener("DOMContentLoaded", function() {
    const tabs = document.querySelectorAll("[data-tab]");
    const contents = document.querySelectorAll(".tab-content");

    tabs.forEach((tab, index) => {
        tab.addEventListener("click", function() {
            tabs.forEach((t, i) => {
                t.classList.remove("bg-rt-primary", "text-white", "rounded-l-lg", "rounded-r-lg");
                if (i === 0) {
                    t.classList.add("rounded-l-lg");
                } else if (i === tabs.length - 1) {
                    t.classList.add("rounded-r-lg");
                }
            });
            contents.forEach(c => c.classList.add("hidden"));

            tab.classList.add("bg-rt-primary", "text-white");
            const content = document.querySelector(`[data-content='${tab.dataset.tab}']`);
            content.classList.remove("hidden");
        });
    });

    // Initialize the first and last tab with rounded corners
    if (tabs.length > 0) {
        tabs[0].classList.add("rounded-l-lg");
        tabs[tabs.length - 1].classList.add("rounded-r-lg");
    }
});
