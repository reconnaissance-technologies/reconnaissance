<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Reconnaissance Technologies is a trusted web, mobile application & software development and IT consulting service provider headquartered in Nigeria. 10+ Expert Developers, 3+ industry awards. Let's Talk" />
    <meta name="keywords"
        content="software development company, software development company Nigeria, software company, offshore software development, mobile app development company, app development company, app developers Nigeria, web development company, web application development company, web design company, enterprise business solution, enterprise web & mobile app development company, enterprise services company, software product development solutions" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#0067FF" />
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Web, Mobile Application & Software Development Company | IT Solutions Provider">
    <meta property="og:site_name" content="Reconnaissance Technologies">
    <meta property="og:url" content="{{ route('index') }}">
    <meta property="og:description"
        content="Reconnaissance Technologies is an award-winning web, mobile application and software development company in Nigeria. 3+ Yrs. Exp. in IT Services & Solutions, 20+ Worldwide Clients, 10+ Experts. Contact Us Now!">
    <meta property="og:type" content="website">
    <meta property="og:phone_number" content="+234-708-063-9008">
    <meta property="og:email" content="enquiries@reconnaissancetechnologies.com">
    <meta property="og:image" content="{{ asset('assets/img/logo-dark.png') }}">
    <meta name="fb:admins" content="168384391200">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@recontech_ng" />

    {{-- <meta name="google-site-verification" content="2EpKrukJzFrF4jBZBFQ65qIgekegRS83dYp2sUARVbc" />
    <meta name="google-site-verification" content="qcgtG-7Y55KHuZxwMzFDXka3gDF9TBj6tf5dLujbKdQ" />

    <meta name="msvalidate.01" content="58965EC2D7CA845C816AC90D8375727A" />
    <meta name="author" content="Vishal Chhawchharia" />
    <meta name="language" content="english" />
    <meta http-equiv="content-language" content="en-us">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="p:domain_verify" content="0e507a464331c0206e2d5179cb65c6d8" /> --}}

    <base href="{{ route('index') }}">

    <title>#1 Web, Mobile Application & Software Development Company in Nigeria - Reconnaissance Technologies</title>

    <link rel="manifest" href="{{ asset('assets/manifest.json') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/icons/icon-192x192.png') }}">
    <link rel="canonical" href="{{ route('index') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css','resources/js/app.js'])
        <style>
            .bg-award-leaf {
                background-image: url("/assets/img/awrd-leaf.png");
            }

            .logo-dark {
                background-image: url("/assets/img/logo-dark.svg");
            }

            .logo-mixed {
                background-image: url("/assets/img/logo-mixed.svg")
            }

        </style>

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window
                    .matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
</head>

<body class="text-black antialiased bg-white dark:bg-gray-800">
    <header>
        <nav class="px-16 fixed w-full z-20 top-0 start-0 shadow-lg text-white">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
                <!-- Logo will come here -->
                <div class="relative block lg:w-52 md:w-40 sm:w-32">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/img/logo-mixed.svg') }}"
                            class="hidden dark:block logo-mixed object-contain"
                            alt="Reconnaissance Technologies Logo" title="Reconnaissance Technologies Logo">
                        <img src="{{ asset('assets/img/logo-dark.svg') }}"
                            class="logo-dark dark:hidden object-contain"
                            alt="Reconnaissance Technologies Logo" title="Reconnaissance Technologies Logo">
                    </a>
                </div>

                <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <!-- Dark Mode Toggle Switch -->
                    <button id="theme-toggle" type="button" class="px-3 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                    <!-- End of Dark Mode Toggle Switch -->

                    <!-- CTA Button -->
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get in Touch</a>
                    <!-- End of CTA Button -->

                    <!-- Hamburger Menu -->
                    <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <!-- End of Hamburger Menu -->
                </div>

                <!-- Mega Menu -->
                <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Services
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="mega-menu-dropdown" class="relative z-10 grid hidden w-full grid-cols-2 text-sm bg-white border border-gray-100  shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Solutions
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="mega-menu-dropdown" class="relative z-10 grid hidden w-full grid-cols-2 text-sm bg-white border border-gray-100  shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Our Work 
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="mega-menu-dropdown" class="relative z-10 grid hidden w-full grid-cols-2 text-sm bg-white border border-gray-100  shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                                Company 
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="mega-menu-dropdown" class="relative z-10 grid hidden w-full grid-cols-2 text-sm bg-white border border-gray-100  shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Library
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Resources
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Pro Version
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Newsletter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Playground
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                License
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-4">
                                    <ul class="space-y-4">
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Support Center
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                                Terms
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End of Mega Menu -->
            </div>
        </nav>
    </header>

    <main class="w-full bg-black py-10">
        <!-- Hero Section -->
        <section class="px-16">
            <!-- hero section content goes here -->
            <div class="w-full lg:flex items-center">
                <div class="w-full lg:w-1/2">
                    <!-- hero section description goes here -->
                    <h2 class="text-md lg:text-3xl text-white">Forward-Focused</h2>
                    <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">Software
                        Development Company</h1>
                    <p class="text-md lg:text-xl text-white mb-8">Leveraging the power
                        of technology to build smart software systems and intelligent solutions</p>

                    <div class="w-full flex py-6">
                        <div class="flex items-center justify-between">
                            <a href="javascript://" class="px-6 object-contain w-36" title="Clutch.co 2023 Top Health &  Wellness App Developer, Nigeria">
                                <img src="{{ asset('assets/img/recognition/clutch-health-wellness-app-developers-nigeria-2023.png') }}" alt="Clutch.co 2023 Top Health &  Wellness App Developer, Nigeria Badge">
                            </a>
                            <a href="javascript://" class="px-6 object-contain w-36" title="Tech Behomoth Top Cyber Security Company in Nigeria Awards 2022">
                                <img class="dark:hidden" src="{{ asset('assets/img/recognition/tb-cyber-security-dark.png') }}" alt="Tech Behomoth Top Cyber Security Company in Nigeria Awards 2022 Badge">
                                <img class="hidden dark:block" src="{{ asset('assets/img/recognition/tb-cyber-security.png') }}" alt="Tech Behomoth Top Cyber Security Company in Nigeria Awards 2022 Badge">
                            </a>
                            <a href="javascript://" class="px-6 object-contain w-36" title="Tech Behomoth Top Custom Software Development Company in Nigeria Awards 2022"><img src="{{ asset('assets/img/recognition/tb-custom-dev.png') }}" alt="Tech Behomoth Top Custom Software Development Company in Nigeria Awards 2022 Badge"></a>
                        </div>                           
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <img src="{{ asset('assets/img/3.7-Emerging-Tech-1.png') }}" class="object-fill"
                        alt="Reconnaissance Technologies Emerging Technology Image">
                </div>
            </div>
        </section>
        <!-- End of Hero Section -->

        <!-- About Us Section -->
        <section class="px-16 bg-white dark:bg-gray-800 flex justify-between">
            <div class="lg:w-1/2 py-6">
                <h3 class="text-rt-primary text-xl uppercase font-semibold">Reconnaissance Technologies</h3>
                <h1 class="w-3/4 text-xl lg:text-4xl dark:text-white font-bold mt-2 mb-2 lg:mb-6">
                    An End-to-End Software Solutions Company
                </h1>
                <p class="dark:text-white">
                    Hidden Brains is a CMMI Level 3 software development company with decades of experience in steering clients through digital transformation. We are a team of innovators and technologists offering futuristic software product development services to enterprises. As one of the leading software development companies, we have a proven track record of success and strive to stay ahead of the curve by constantly innovating and embracing the latest advancements in technology.
                </p>
                <p class="pt-6 dark:text-white">  
                    We are dedicated to helping businesses thrive in today's rapidly evolving markets by empowering them with software development & enterprise technology solutions that deliver measurable results.
                </p>

                <div class="pt-6">
                    <a href="{{ route('contact-us') }}" class="flex justify-between items-center lg:w-44 py-3 px-6 border border-transparent hover:border-rt-primary rounded-lg bg-rt-primary hover:bg-transparent hover:text-rt-primary text-white text-lg">
                        Know More

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="lg:w-1/2 py-6 flex justify-between">
                <div class="px-3 lg:w-80">
                    <div class="card drop-shadow-lg border-b-8 border-b-rt-primary hover:scale-90">
                        <h3 class="py-3 font-semibold text-rt-primary">Y E A R S</h3>
                        <h1 class="py-3 font-semibold text-black lg:text-6xl">3+</h1>
                        <p class="py-3">Extensive experience in delivering IT solutions & services.</p>
                    </div>
                    <div class="card mt-10 drop-shadow-lg border-b-8 border-b-green-950 hover:scale-90">
                        <h3 class="py-3 font-semibold text-rt-primary">E X P E R T S</h3>
                        <h1 class="py-3 font-semibold text-black lg:text-6xl">10+</h1>
                        <p class="py-3">Team of qualified, skilled and committed professionals.</p>
                    </div>
                </div>
                <div class="px-3 py-12 lg:w-80">
                    <div class="card drop-shadow-lg border-b-8 border-b-red-700 hover:scale-90">
                        <h3 class="py-3 font-semibold text-rt-primary">A W A R D S</h3>
                        <h1 class="py-3 font-semibold text-black lg:text-6xl">5+</h1>
                        <p class="py-3">Industry prestigious awards for excellence and innovation.</p>
                    </div>
                    <div class="card mt-10 drop-shadow-lg border-b-8 border-b-rt-secondary hover:scale-90">
                        <h3 class="py-3 font-semibold text-rt-primary">C L I E N T S</h3>
                        <h1 class="py-3 font-semibold text-black lg:text-6xl">12+</h1>
                        <p class="py-3">Clients across the globe testifying our quality & processes.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of About Us Section -->

        <!-- Our Services Section -->
        <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
            <div class="w-full py-6">
                <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Services</h3>
                <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                    Accelerate technology innovation with software development services
                </h1>
                <div class="w-full lg:w-full flex justify-between items-center">
                    <div class="lg:w-3/4">
                        <p>
                            Whether you require complex enterprise software development or seamless software integration, we will take your business to the next level of success with IT consulting services & software development.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('our-services') }}" class="p-4 border-2 border-rt-primary rounded-lg hover:bg-rt-primary text-rt-primary hover:text-white">
                            View More Services
                        </a>
                    </div>
                </div>

                <div class="flex justify-between py-8">
                    <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700">
                        <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                            </svg>
                        </div>
                        <a href=""><h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50 hover:animate-bounce">Frontend Development</h1></a>
                        <p class="py-3">
                            Hidden Brains expertise in frontend development ensures quick time to market and user-driven outcomes. We use modern frameworks to enable faster development of elements, powerful features, responsive websites, mobility and layouts.
                        </p>
                        <div class="flex justify-end hover:animate-bounce">
                            <a href="" class="text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                        <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>                              
                        </div>
                        <a href=""><h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl hover:animate-bounce">Application Development</h1></a>
                        <p class="py-3">
                            Hidden Brains expertise in frontend development ensures quick time to market and user-driven outcomes. We use modern frameworks to enable faster development of elements, powerful features, responsive websites, mobility and layouts.
                        </p>
                        <div class="flex justify-end hover:animate-bounce">
                            <a href="" class="text-orange-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                        <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                            <img src="{{ asset('assets/img/ui-ux.webp') }}" class="object-contain" alt="">
                        </div>
                        <a href=""><h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl hover:animate-bounce">Product Design</h1></a>
                        <p class="py-3">
                            Hidden Brains expertise in frontend development ensures quick time to market and user-driven outcomes. We use modern frameworks to enable faster development of elements, powerful features, responsive websites, mobility and layouts.
                        </p>
                        <div class="flex justify-end hover:animate-bounce">
                            <a href="" class="text-yellow-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                        <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                            </svg>
                        </div>
                        <a href=""><h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl hover:animate-bounce">Chatbot Development</h1></a>
                        <p class="py-3">
                            Hidden Brains expertise in frontend development ensures quick time to market and user-driven outcomes. We use modern frameworks to enable faster development of elements, powerful features, responsive websites, mobility and layouts.
                        </p>
                        <div class="flex justify-end hover:animate-bounce">
                            <a href="" class="text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Our Services Section -->

        <!-- Technology Stack Section -->
        <section class="px-16 bg-white flex justify-between">
            <div class="w-full py-6">
                <h3 class="text-rt-primary text-xl uppercase font-semibold">Technology Stack</h3>
                <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                    Elevating software development with a robust technology stack
                </h1>
                <div class="w-full lg:w-full flex justify-between items-center">
                    <p>
                        Our technology stack includes the latest programming languages and frameworks to deliver custom software development services & solutions. As a top software development company, we use agile methodologies to ensure rapid development and scalable solutions.
                    </p>
                </div>

                <div class="py-6 flex">
                    <div>
                        <ul class="flex-column text-md font-semibold text-black dark:text-gray-400 md:me-4 mb-4 md:mb-0 w-48" id="technology-stack-tab" role="tablist">
                            <li id="ai-ml-tab"  class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="ai-ml-tab-content" aria-selected="false">
                                    AI / ML
                                </button>
                            </li>
                            <li id="backend-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="backend-tab-content" aria-selected="false">
                                    Backend
                                </button>
                            </li>
                            <li id="cloud-devops-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="cloud-devops-tab-content" aria-selected="false">
                                    Cloud / Devops
                                </button>
                            </li>
                            <li id="cms-ecommerce-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="cms-ecommerce-tab-content" aria-selected="false">
                                    CMS / Ecommerce
                                </button>
                            </li>
                            <li id="database-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="database-tab-content" aria-selected="false">
                                    Database
                                </button>
                            </li>
                            <li id="frameworks-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="frameworks-tab-content" aria-selected="false">
                                    Frameworks
                                </button>
                            </li>
                            <li id="frontend-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="frontend-tab-content" aria-selected="false">
                                    Frontend
                                </button>
                            </li>
                            <li id="hi-tech-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="hi-tech-tab-content" aria-selected="false">
                                    Hi-Tech
                                </button>
                            </li>
                            <li id="mobile-tab"  class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="mobile-tab-content" aria-selected="false">
                                    Mobile
                                </button>
                            </li>
                            <li id="qa-tab" class=" " role="presentation">
                                <button class="inline-block p-4 w-full text-left" type="button" role="tab" aria-controls="qa-tab-content" aria-selected="false">
                                    Quality Assurance
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div id="technology-stack-tab-content" class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                        <div class="hidden" id="ai-ml-tab-content" role="tabpanel" aria-labelledby="ai-ml-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">AI / ML Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Chatbot">
                                    <img src="{{ asset('assets/img/technologies/chatbot.svg') }}" class="object-contain" alt="Chatbot Logo">
                                    <p>Chatbot</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="ChatGPT">
                                    <img src="{{ asset('assets/img/technologies/chatgpt.png') }}" class="object-contain" alt="ChatGPT Logo">
                                    <p>ChatGPT</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Computer Vision">
                                    <img src="{{ asset('assets/img/technologies/computer-vision.png') }}" class="object-contain" alt="Computer Vision Logo">
                                    <p>Computer Vision</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Convolutional Neural Network">
                                    <img src="{{ asset('assets/img/technologies/convolutional-neural-network.png') }}" class="object-contain" alt="Convolutional Neural Network Logo">
                                    <p>Convolutional Neural Network</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Deep Learning">
                                    <img src="{{ asset('assets/img/technologies/deep-learning.png') }}" class="object-contain" alt="Deep Learning Logo">
                                    <p>Deep Learning</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Generative AI">
                                    <img src="{{ asset('assets/img/technologies/generative-ai.svg') }}" class="object-contain" alt="Generative AI Logo">
                                    <p>Generative AI</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Linear Regression">
                                    <img src="{{ asset('assets/img/technologies/linear-regression.svg') }}" class="object-contain" alt="Linear Regression Logo">
                                    <p>Linear Regression</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Logistic Regression">
                                    <img src="{{ asset('assets/img/technologies/logistic-regression.png') }}" class="object-contain" alt="Logistic Regression Logo">
                                    <p>Logistic Regression</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="NLP">
                                    <img src="{{ asset('assets/img/technologies/nlp.png') }}" class="object-contain" alt="NLP Logo">
                                    <p>NLP</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="backend-tab-content" role="tabpanel" aria-labelledby="backend-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Backend Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title=".NET">
                                    <img src="{{ asset('assets/img/technologies/dot-net.svg') }}" class="object-contain" alt=".NET Logo">
                                    <p>.NET</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title=".NET Core">
                                    <img src="{{ asset('assets/img/technologies/dot-net-core.png') }}" class="object-contain" alt=".NET Core Logo">
                                    <p>.NET Core</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Java">
                                    <img src="{{ asset('assets/img/technologies/java.png') }}" class="object-contain" alt="Java Logo">
                                    <p>Java</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="NodeJs">
                                    <img src="{{ asset('assets/img/technologies/nodejs.png') }}" class="object-contain" alt="NodeJs Logo">
                                    <p>NodeJs</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="PHP">
                                    <img src="{{ asset('assets/img/technologies/php.png') }}" class="object-contain" alt="PHP Logo">
                                    <p>PHP</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Python">
                                    <img src="{{ asset('assets/img/technologies/python.png') }}" class="object-contain" alt="Python Logo">
                                    <p>Python</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Ruby">
                                    <img src="{{ asset('assets/img/technologies/ruby.png') }}" class="object-contain" alt="Ruby Logo">
                                    <p>Ruby</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="cloud-devops-tab-content" role="tabpanel" aria-labelledby="cloud-devops-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Cloud / Devops Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="AWS">
                                    <img src="{{ asset('assets/img/technologies/aws.png') }}" class="object-contain" alt="AWS Logo">
                                    <p>AWS</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Azure">
                                    <img src="{{ asset('assets/img/technologies/azure.png') }}" class="object-contain" alt="Azure Logo">
                                    <p>Azure</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Docker">
                                    <img src="{{ asset('assets/img/technologies/docker.png') }}" class="object-contain" alt="Docker Logo">
                                    <p>Docker</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Google Cloud">
                                    <img src="{{ asset('assets/img/technologies/google-cloud.png') }}" class="object-contain" alt="Google Cloud Logo">
                                    <p>Google Cloud</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Jenkins">
                                    <img src="{{ asset('assets/img/technologies/jenkins.png') }}" class="object-contain" alt="Jenkins Logo">
                                    <p>Jenkins</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Kubernetes">
                                    <img src="{{ asset('assets/img/technologies/kubernetes.svg') }}" class="object-contain" alt="Kubernetes Logo">
                                    <p>Kubernetes</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Maven">
                                    <img src="{{ asset('assets/img/technologies/maven.png') }}" class="object-contain" alt="Maven Logo">
                                    <p>Maven</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Openshift">
                                    <img src="{{ asset('assets/img/technologies/openshift.png') }}" class="object-contain" alt="Openshift Logo">
                                    <p>Openshift</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Oracle Cloud">
                                    <img src="{{ asset('assets/img/technologies/oracle-cloud.png') }}" class="object-contain" alt="Oracle Cloud Logo">
                                    <p>Oracle Cloud</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="cms-ecommerce-tab-content" role="tabpanel" aria-labelledby="cms-ecommerce-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">CMS / Ecommerce Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Drupal">
                                    <img src="{{ asset('assets/img/technologies/drupal.png') }}" class="object-contain" alt="Drupal Logo">
                                    <p>Drupal</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Magento">
                                    <img src="{{ asset('assets/img/technologies/magento-logo.png') }}" class="object-contain" alt="Magento Logo">
                                    <p>Magento</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Shopify">
                                    <img src="{{ asset('assets/img/technologies/shopify.png') }}" class="object-contain" alt="Shopify Logo">
                                    <p>Shopify</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Sitecore">
                                    <img src="{{ asset('assets/img/technologies/sitecore.webp') }}" class="object-contain" alt="Sitecore Logo">
                                    <p>Sitecore</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Strapi">
                                    <img src="{{ asset('assets/img/technologies/strapi.png') }}" class="object-contain" alt="Strapi Logo">
                                    <p>Strapi</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="WooCommerce">
                                    <img src="{{ asset('assets/img/technologies/woocommerce.png') }}" class="object-contain" alt="WooCommerce Logo">
                                    <p>WooCommerce</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Wordpress">
                                    <img src="{{ asset('assets/img/technologies/wordpress.png') }}" class="object-contain" alt="Wordpress Logo">
                                    <p>Wordpress</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="database-tab-content" role="tabpanel" aria-labelledby="database-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Database Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Dynamo DB">
                                    <img src="{{ asset('assets/img/technologies/dynamodb.png') }}" class="object-contain" alt="Dynamo DB Logo">
                                    <p>Dynamo DB</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="IBM DB2">
                                    <img src="{{ asset('assets/img/technologies/ibm-db2.png') }}" class="object-contain" alt="IBM DB2 Logo">
                                    <p>IBM DB2</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Maria DB">
                                    <img src="{{ asset('assets/img/technologies/mariadb.png') }}" class="object-contain" alt="Maria DB Logo">
                                    <p>Maria DB</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Mongo DB">
                                    <img src="{{ asset('assets/img/technologies/mongodb.png') }}" class="object-contain" alt="Mongo DB Logo">
                                    <p>Mongo DB</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="MySQL">
                                    <img src="{{ asset('assets/img/technologies/mysql.png') }}" class="object-contain" alt="MySQL Logo">
                                    <p>MySQL</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Oracle DB">
                                    <img src="{{ asset('assets/img/technologies/oracle-db.png') }}" class="object-contain" alt="Oracle DB Logo">
                                    <p>Oracle DB</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="PostgreSQL">
                                    <img src="{{ asset('assets/img/technologies/postgresql.png') }}" class="object-contain" alt="PostgreSQL Logo">
                                    <p>PostgreSQL</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="SQLite">
                                    <img src="{{ asset('assets/img/technologies/sqlite.png') }}" class="object-contain" alt="SQLite Logo">
                                    <p>SQLite</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Sybase">
                                    <img src="{{ asset('assets/img/technologies/sybase.png') }}" class="object-contain" alt="Sybase Logo">
                                    <p>Sybase</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="frameworks-tab-content" role="tabpanel" aria-labelledby="frameworks-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Frameworks Technologies We use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Codeigniter">
                                    <img src="{{ asset('assets/img/technologies/codeigniter.png') }}" class="object-contain" alt="Codeigniter Logo">
                                    <p>Codeigniter</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Django">
                                    <img src="{{ asset('assets/img/technologies/django.webp') }}" class="object-contain" alt="Django Logo">
                                    <p>Django</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title=".NET Core">
                                    <img src="{{ asset('assets/img/technologies/dot-net-core.png') }}" class="object-contain" alt=".NET Core Logo">
                                    <p>.NET Core</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title=".NET MVC">
                                    <img src="{{ asset('assets/img/technologies/dot-net-mvc.png') }}" class="object-contain" alt=".NET MVC Logo">
                                    <p>.NET MVC</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Express Js">
                                    <img src="{{ asset('assets/img/technologies/expressjs.png') }}" class="object-contain" alt="Express Js Logo">
                                    <p>Express Js</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Flask">
                                    <img src="{{ asset('assets/img/technologies/flask.svg') }}" class="object-contain" alt="Flask Logo">
                                    <p>Flask</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Hibernate">
                                    <img src="{{ asset('assets/img/technologies/hibernate.svg') }}" class="object-contain" alt="Hibernate Logo">
                                    <p>Hibernate</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Laravel">
                                    <img src="{{ asset('assets/img/technologies/laravel.png') }}" class="object-contain" alt="Laravel Logo">
                                    <p>Laravel</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Spring Boot">
                                    <img src="{{ asset('assets/img/technologies/spring-boot.png') }}" class="object-contain" alt="Spring Boot Logo">
                                    <p>Spring Boot</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Spring Cloud">
                                    <img src="{{ asset('assets/img/technologies/spring-cloud.png') }}" class="object-contain" alt="Spring Cloud Logo">
                                    <p>Spring Cloud</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="frontend-tab-content" role="tabpanel" aria-labelledby="frontend-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Frontend Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Angular">
                                    <img src="{{ asset('assets/img/technologies/angular.png') }}" class="object-contain" alt="Angular Logo">
                                    <p>Angular</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Backbone.Js">
                                    <img src="{{ asset('assets/img/technologies/backbonejs.png') }}" class="object-contain" alt="Backbone.Js Logo">
                                    <p>Backbone.Js</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Bootstrap">
                                    <img src="{{ asset('assets/img/technologies/bootstrap.png') }}" class="object-contain" alt="Bootstrap Logo">
                                    <p>Bootstrap</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="CSS3">
                                    <img src="{{ asset('assets/img/technologies/css3.png') }}" class="object-contain" alt="CSS3 Logo">
                                    <p>CSS3</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="D3 Js">
                                    <img src="{{ asset('assets/img/technologies/d3js.png') }}" class="object-contain" alt="D3 Js Logo">
                                    <p>D3 Js</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="HTML5">
                                    <img src="{{ asset('assets/img/technologies/html5.png') }}" class="object-contain" alt="HTML5 Logo">
                                    <p>HTML5</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Javascripts">
                                    <img src="{{ asset('assets/img/technologies/javascript.png') }}" class="object-contain" alt="Javascript Logo">
                                    <p>Javascript</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Jquery">
                                    <img src="{{ asset('assets/img/technologies/jquery.gif') }}" class="object-contain" alt="Jquery Logo">
                                    <p>Jquery</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Knockout Js">
                                    <img src="{{ asset('assets/img/technologies/knockoutjs.png') }}" class="object-contain" alt="KnockoutJs Logo">
                                    <p>KnockoutJs</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Next Js">
                                    <img src="{{ asset('assets/img/technologies/nextjs.png') }}" class="object-contain" alt="D3 Js Logo">
                                    <p>NextJs</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="NuxtJs">
                                    <img src="{{ asset('assets/img/technologies/nuxtjs.svg') }}" class="object-contain" alt="NuxtJs Logo">
                                    <p>NuxtJs</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="React">
                                    <img src="{{ asset('assets/img/technologies/reactjs.png') }}" class="object-contain" alt="React Logo">
                                    <p>React</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Tailwind CSS">
                                    <img src="{{ asset('assets/img/technologies/tailwind-css.png') }}" class="object-contain" alt="Tailwind CSS Logo">
                                    <p>Tailwind CSS</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Typescript">
                                    <img src="{{ asset('assets/img/technologies/typescript.webp') }}" class="object-contain" alt="Typescript Logo">
                                    <p>Typescript</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="VueJs">
                                    <img src="{{ asset('assets/img/technologies/vuejs.png') }}" class="object-contain" alt="VueJs Logo">
                                    <p>VueJs</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="hi-tech-tab-content" role="tabpanel" aria-labelledby="hi-tech-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Hi-Tech Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="AR / VR">
                                    <img src="{{ asset('assets/img/technologies/ar-vr.svg') }}" class="object-contain" alt="AR / VR Logo">
                                    <p>AR / VR</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Blockchain">
                                    <img src="{{ asset('assets/img/technologies/blockchain.png') }}" class="object-contain" alt="Blockchain Logo">
                                    <p>Blockchain</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Elastic Search">
                                    <img src="{{ asset('assets/img/technologies/elasticsearch.png') }}" class="object-contain" alt="Elastic Search Logo">
                                    <p>Elastic Search</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Event-driven Architecture">
                                    <img src="{{ asset('assets/img/technologies/eventdriven.svg') }}" class="object-contain" alt="Event-driven Architecture Logo">
                                    <p>Event-driven Architecture</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Kafka">
                                    <img src="{{ asset('assets/img/technologies/kafka.png') }}" class="object-contain" alt="Kafka Logo">
                                    <p>Kafka</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Metaverse">
                                    <img src="{{ asset('assets/img/technologies/metaverse.png') }}" class="object-contain" alt="Meta Logo">
                                    <p>Metaverse</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Microfrontend Architecture">
                                    <img src="{{ asset('assets/img/technologies/microfrontend.png') }}" class="object-contain" alt="Microfrontend Architecture Logo">
                                    <p>Microfrontend Architecture</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Microservices Architecture">
                                    <img src="{{ asset('assets/img/technologies/microservices.png') }}" class="object-contain" alt="Microservices Architecture Logo">
                                    <p>Microservices Architecture</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="PWA">
                                    <img src="{{ asset('assets/img/technologies/pwa.png') }}" class="object-contain" alt="PWA Logo">
                                    <p>PWA</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Rabbit MQ">
                                    <img src="{{ asset('assets/img/technologies/rabbitmq.png') }}" class="object-contain" alt="Rabbit MQ Logo">
                                    <p>Rabbit MQ</p>
                                </div>
                            </div>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Serverless Architecture">
                                    <img src="{{ asset('assets/img/technologies/serverless.png') }}" class="object-contain" alt="Serverless Architecture Logo">
                                    <p>Serverless Architecture</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="mobile-tab-content" role="tabpanel" aria-labelledby="mobile-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Mobile Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Flutter">
                                    <img src="{{ asset('assets/img/technologies/flutter.png') }}" class="object-contain" alt="Flutter Logo">
                                    <p>Flutter</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Kotlin">
                                    <img src="{{ asset('assets/img/technologies/kotlin.png') }}" class="object-contain" alt="Kotlin Logo">
                                    <p>Kotlin</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="React Native">
                                    <img src="{{ asset('assets/img/technologies/react-native.png') }}" class="object-contain" alt="React Native Logo">
                                    <p>React Native</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Swift">
                                    <img src="{{ asset('assets/img/technologies/swift.png') }}" class="object-contain" alt="Swift Logo">
                                    <p>Swift</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Unity 3D">
                                    <img src="{{ asset('assets/img/technologies/unity-3d.png') }}" class="object-contain" alt="Unity 3D Logo">
                                    <p>Unity 3D</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="qa-tab-content" role="tabpanel" aria-labelledby="qa-tab">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Quality Assurance Technologies We Use</h3>
                            <div class="lg:w-full flex justify-between mb-12">
                                <div class="text-center dark:text-white font-semibold w-24" title="Circle CI">
                                    <img src="{{ asset('assets/img/technologies/circle-ci.png') }}" class="object-contain" alt="Circle CI Logo">
                                    <p>Circle CI</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Gradle">
                                    <img src="{{ asset('assets/img/technologies/gradle.png') }}" class="object-contain" alt="Gradle Logo">
                                    <p>Gradle</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Maven">
                                    <img src="{{ asset('assets/img/technologies/maven.png') }}" class="object-contain" alt="Maven Logo">
                                    <p>Maven</p>
                                </div>
                                <div class="text-center dark:text-white font-semibold w-24" title="Selenuim">
                                    <img src="{{ asset('assets/img/technologies/selenium.jpg') }}" class="object-contain" alt="Selenium Logo">
                                    <p>Selenium</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Technology Stack Section -->
    </main>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>
