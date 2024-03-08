@extends('layouts.general')

@section('meta-description', 'We understand the need of your business to deliver you with the best performance and ROI with the use of our different global delivery models. We offer off-site, on-site, off-site/on-site, offshore, hybrid and Global delivery models.')
@section('meta-keywords', 'it service delivery model, business strategy model, integrated service delivery model, onsite offshore model, offshore development model')
@section('robots', 'index, follow')
@section('og-title', 'Reconnaissance Technologies\' Global Business Delivery Model | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('sm.delivery') }}")
@section('og-description', 'We understand the need of your business to deliver you with the best performance and ROI with the use of our different global delivery models. We offer off-site, on-site, off-site/on-site, offshore, hybrid and Global delivery models.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Reconnaissance Technologies\' Global Business Delivery Model - Reconnaissance Technologies')

@section('custom-styles')
<style>
    .logo-dark {
        background-image: url("/assets/img/logo-dark.svg");
    }

    .logo-mixed {
        background-image: url("/assets/img/logo-mixed.svg")
    }
</style>
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="bg-gradient-to-tr from-violet-200 to-slate-700 px-16">
        <!-- hero section content goes here -->
        <div class="w-full lg:flex items-center">
            <div class="w-full lg:w-1/2 md:w1/2 lg:pt-32 my-16">
                <!-- hero section description goes here -->
                <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">
                    Our Services
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                Elevate your business with our cutting-edge IT solutions. From software development to cybersecurity, we've got you covered at Reconnaissance Technologies.
                </p>
            </div>
            <div class="w-full lg:w-1/2 mt-[350px] right-0">
                <img src="{{ asset('assets/img/company-overview.png') }}"
                    class="object-fill scale-x-150" alt="Company Overview - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Offerings</h3>
            <h1 class="w-3/4 text-xl lg:text-3xl font-bold mt-2 mb-2 lg:mb-6">
                We offer professional IT Services
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-8">
            <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-600">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-red-600 lg:w-20 lg:h-20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
            </div>
            <a href="{{ route('services.frontend-development') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Frontend
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.frontend-development') }}" class="text-red-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-amber-600">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-amber-600 lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/softcoding.svg') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.software-devlopment') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Software
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.software-devlopment') }}" class="text-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                        </svg>
            </div>
            <a href="{{ route('services.mobile-app') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Mobile Application
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.mobile-app') }}" class="text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-[#0284c7]">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-[#0284c7] lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/webdev.svg') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.web-app') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Web Application
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.web-app') }}" class="text-[#0284c7]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-amber-500">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-amber-500 lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/ui-ux.webp') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.product-design') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Product
                    Design</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.product-design') }}" class="text-amber-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-blue-300">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-blue-300 lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/cloud-ui-ux.svg.svg') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.cloud-infrastructure') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Cloud &
                    Infrastructure</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.cloud-infrastructure') }}" class="text-blue-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-blue-600">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-blue-600 lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/cybersec1.svg') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.cybersecurity') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Cybersecurity
                    </h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.cybersecurity') }}" class="text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-500">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-purple-500 lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/ar&vr.svg') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.ar-vr-development') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">AR/VR
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.ar-vr-development') }}" class="text-purple-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-gray-500">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-gray-500 lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/AI&ML.svg') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.ai-ml-development') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">AI/ML
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.ai-ml-development') }}" class="text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
            <img src="{{ asset('assets/img/iot.svg') }}" class="object-contain"
                            alt="">
            </div>
            <a href="{{ route('services.iot-development') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">IOT
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.iot-development') }}" class="text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
            <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
            </div>
            <a href="{{ route('services.chatbot-development') }}">
                <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">Chatbot 
                    Development</h1>
            </a>

            <div class="flex justify-end hover:animate-bounce">
                <a href="{{ route('services.chatbot-development') }}" class="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            
                    </svg>
                </a>
            </div>
        </div>             
            </div>      
        </div>
    </section>
