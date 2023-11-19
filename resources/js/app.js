import './bootstrap';
import 'flowbite';

// JavaScript to handle the transparent navbar on scroll
window.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    const logoMixed = document.querySelector(".logo-mixed");
    const logoDark = document.querySelector(".logo-dark");
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        if (window.scrollY > 50) {
            navbar.classList.add("bg-gray-900");
            navbar.classList.add("text-white")
            navbar.classList.remove("text-black")
            logoMixed.classList.add("hidden")
            logoDark.classList.remove("hidden")
        } else {
            navbar.classList.remove("bg-gray-900");
            navbar.classList.remove("text-white")
            navbar.classList.add("text-black")
            logoMixed.classList.remove("hidden")
            logoDark.classList.add("hidden")
        }
    } else {
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
    }
});

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});
