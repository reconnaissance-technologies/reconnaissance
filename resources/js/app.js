import './bootstrap';
import 'flowbite';

// JavaScript to handle the transparent navbar on scroll
window.addEventListener("scroll", function () {
    const navbar = document.querySelector("nav");
    const logoMixed = document.querySelector(".logo-mixed");
    const logoDark = document.querySelector(".logo-dark");
    const scrollToTop = document.querySelector("#scroll-to-top");

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

    if (window.scrollY > 500) {
        scrollToTop.classList.remove("hidden")
    } else {
        scrollToTop.classList.add("hidden")
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

themeToggleBtn.addEventListener('click', function () {

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

/** Technology Stack Tabs Implementation */
const tsTabsElement = document.getElementById('technology-stack-tab');

// create an array of objects with the id, trigger element (eg. button), and the content element
const tsTabElements = [{
        id: 'frontend',
        triggerEl: document.querySelector('#frontend-tab'),
        targetEl: document.querySelector('#frontend-tab-content'),
    },
    {
        id: 'backend',
        triggerEl: document.querySelector('#backend-tab'),
        targetEl: document.querySelector('#backend-tab-content'),
    },
    {
        id: 'mobile',
        triggerEl: document.querySelector('#mobile-tab'),
        targetEl: document.querySelector('#mobile-tab-content'),
    },
    {
        id: 'database',
        triggerEl: document.querySelector('#database-tab'),
        targetEl: document.querySelector('#database-tab-content'),
    },
    {
        id: 'cloud-devops',
        triggerEl: document.querySelector('#cloud-devops-tab'),
        targetEl: document.querySelector('#cloud-devops-tab-content'),
    },
    {
        id: 'hi-tech',
        triggerEl: document.querySelector('#hi-tech-tab'),
        targetEl: document.querySelector('#hi-tech-tab-content'),
    },
    {
        id: 'ai-ml',
        triggerEl: document.querySelector('#ai-ml-tab'),
        targetEl: document.querySelector('#ai-ml-tab-content'),
    },
    {
        id: 'frameworks',
        triggerEl: document.querySelector('#frameworks-tab'),
        targetEl: document.querySelector('#frameworks-tab-content'),
    },
    {
        id: 'cms-ecommerce',
        triggerEl: document.querySelector('#cms-ecommerce-tab'),
        targetEl: document.querySelector('#cms-ecommerce-tab-content'),
    },
    {
        id: 'qa',
        triggerEl: document.querySelector('#qa-tab'),
        targetEl: document.querySelector('#qa-tab-content'),
    },
];

// technology stack tabs options with default values
const tsTabsOptions = {
    defaultTabId: 'ai-ml',
    activeClasses: 'text-rt-primary hover:text-rt-primary border-r-2 border-rt-primary first:rounded-t-lg last:rounded-b-lg dark:text-rt-primary dark:border-rt-primary',
    inactiveClasses: 'text-gray-500 hover:text-rt-primary dark:text-gray-400 hover:border-rt-primary dark:hover:text-rt-primary',
    onShow: () => {},
};

// technoloy stack tabs instance options with default values
const tsTabsInstanceOptions = {
    id: 'technology-stack-tab',
    override: true
};

/*
 * tsTabElements: array of tab objects
 * tsTabsOptions: optional
 * tsTabsInstanceOptions: optional
 */
const tabs = new Tabs(tsTabsElement, tsTabElements, tsTabsOptions, tsTabsInstanceOptions);
/** End of Technology Stack Tabs Implementation */

/** Clients and Testimonials Slider Implementation */
/** End of Clients and Testimonials Slider Implementation */
