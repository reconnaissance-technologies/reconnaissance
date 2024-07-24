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

/** Technology Stack Tabs Implementation */
const tsTabsElement = document.getElementById('ts-section')

// create an array of objects with the id, trigger element (eg. button), and the content element
const tsTabElements = [
    {
        id: 'web-tech',
        triggerEl: document.querySelector('#web-tech-tab'),
        targetEl: document.querySelector('#web-tech-tab-content'),
    },
    {
        id: 'backend',
        triggerEl: document.querySelector('#backend-tab'),
        targetEl: document.querySelector('#backend-content'),
    },
];

// technology stack tabs options with default values
const tsTabsOptions = {
    defaultTabId: 'web-tech',
    activeClasses: 'text-bold',
    inactiveClasses: '',
    onShow: () => {},
};

// technoloy stack tabs instance options with default values
const tsTabsInstanceOptions = {
    id: 'ts-section',
    override: true
};

/*
 * tsTabElements: array of tab objects
 * tsTabsOptions: optional
 * tsTabsInstanceOptions: optional
 */
new Tabs(tsTabsElement, tsTabElements, tsTabsOptions, tsTabsInstanceOptions);
/** End of Technology Stack Tabs Implementation */

/** What We Do Tabs Implementation */
// const wwdTabsElement = document.getElementById('wwd-tab');

// create an array of objects with the id, trigger element (eg. button), and the content element
// const wwdTabElements = [{
//         id: 'experience',
//         triggerEl: document.querySelector('#experience-tab'),
//         targetEl: document.querySelector('#experience-tab-content'),
//     },
//     {
//         id: 'architecture',
//         triggerEl: document.querySelector('#architecture-tab'),
//         targetEl: document.querySelector('#architecture-tab-content'),
//     },
//     {
//         id: 'cloud',
//         triggerEl: document.querySelector('#cloud-tab'),
//         targetEl: document.querySelector('#cloud-tab-content'),
//     },
//     {
//         id: 'perfomance-insights',
//         triggerEl: document.querySelector('#performance-insights-tab'),
//         targetEl: document.querySelector('#performance-insights-tab-content'),
//     },
//     {
//         id: 'process',
//         triggerEl: document.querySelector('#process-tab'),
//         targetEl: document.querySelector('#process-tab-content'),
//     },
//     {
//         id: 'security',
//         triggerEl: document.querySelector('#security-tab'),
//         targetEl: document.querySelector('#security-tab-content'),
//     },
//     {
//         id: 'legal',
//         triggerEl: document.querySelector('#legal-tab'),
//         targetEl: document.querySelector('#legal-tab-content'),
//     },
//     {
//         id: 'compliance',
//         triggerEl: document.querySelector('#compliance-tab'),
//         targetEl: document.querySelector('#compliance-tab-content'),
//     },
//     {
//         id: 'innovation',
//         triggerEl: document.querySelector('#innovation-tab'),
//         targetEl: document.querySelector('#innovation-tab-content'),
//     },
// ];

// what we deliver tabs options with default values
// const wwdTabsOptions = {
//     defaultTabId: 'experience',
//     activeClasses: 'text-bold',
//     inactiveClasses: '',
//     onShow: () => {},
// };

// what we deliver tabs instance options with default values
// const wwdTabsInstanceOptions = {
//     id: 'wwd-tab',
//     override: true
// };

/*
 * wwdTabElements: array of tab objects
 * wwdTabsOptions: optional
 * wwdTabsInstanceOptions: optional
 */
// const wwdTabs = new Tabs(wwdTabsElement, wwdTabElements, wwdTabsOptions, wwdTabsInstanceOptions);
/** End of What We Deliver Tabs Implementation */

/** Clients and Testimonials Slider Implementation */
/** End of Clients and Testimonials Slider Implementation */
