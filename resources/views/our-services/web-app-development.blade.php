@extends('layouts.general')

@section('meta-description', 'Best Web Application Development Company for all your business needs. Get Custom web application development services Now!')
@section('meta-keywords', 'Web Application Development Company, Web Application Development Services, Web App Development, Web Development Company Nigeria')
@section('robots', 'index, follow')
@section('og-title', 'Web Application Development Services | Web Development Company | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.web-app') }}")
@section('og-description', 'Best Web Application Development Company for all your business needs. Get Custom web application development services Now!')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Web Application Development Services | Web Development Company - Reconnaissance Technologies')

@section('custom-styles')
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
                    Web Application Development
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Our website development expertise spans across latest frameworks, modern programming languages, and agile methodologies, setting a new benchmark in custom web app development.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->

            </div>
            <div class="w-full lg:w-1/2 pt-20">
                <img src="{{ asset('assets/img/web-application-development.png') }}"
                    class="object-fill" alt="Web Application Development - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What We Offer Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">What We Offer</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                End-to-End Web Development
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        With our bespoke web development approach, we ensure that every aspect of the web application, from the user interface to the backend functionality, is optimized to steer your business forward.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-red-700">
                    <img src="{{ asset('assets/img/our-services/custom-web-app-icon.svg') }}" alt="Custom Web Application - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Custom Web App Development
                    </h1>

                    <p>
                        Get the power of tailored custom web application development services for your business needs. Our web consultants utilize proven methodologies to develop custom web solutions.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-orange-500">
                    <img src="{{ asset('assets/img/our-services/fullstack-dev-icon.svg') }}" alt="Full Stack Development - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Fullstack Development Services
                    </h1>
                    
                    <p>
                        Comprehensive full-stack development services, delivering high-quality, scalable solutions with cutting-edge technologies. Our full-stack services ensure exceptional restilts.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-yellow-500">
                    <img src="{{ asset('assets/img/our-services/cms-icon.svg') }}" alt="Content Management System - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Content Management Systems (CMS)
                    </h1>
                    
                    <p>
                        Our CMS development services offer tailored content management solutions, enabling effective website updates and seamless content organization for your business.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-green-500">
                    <img src="{{ asset('assets/img/our-services/enterprise-web-app-icon.svg') }}" alt="Enterprise Web Application - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Enterprise Web Application
                    </h1>

                    <p>
                        We specialize in building complex, scalable, and secure web applications that caterto enterprise clients, Our experienced developers leverage cutting-edge technologies and industry best practices
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-blue-500">
                    <img src="{{ asset('assets/img/our-services/spa-icon.svg') }}" alt="Single Page Applications - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Single Page Applications (SPAs)
                    </h1>

                    <p>
                        Building a single-page application to deliver fluid web apps as well as create dynamic, fast, and interactive user experiences with Single Page Applications.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-indigo-500">
                    <img src="{{ asset('assets/img/our-services/modernization-icon.svg') }}" alt="Integration, Upgrade & Migration - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Integration, Upgrades & Migration
                    </h1>

                    <p>
                        Effortlessly upgrade your website or migrate to new platform with our seamless services. Minimize disruptions, downtime and enhance performance for improved user engagement.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-violet-500">
                    <img src="{{ asset('assets/img/our-services/ui-ux-icon.svg') }}" alt="UI/UX Modernization - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        UI/UX Modernization
                    </h1>

                    <p>
                        Revitalize your user interface with our UI/UX Modernization services. Our team specializes in transforming outdated interfaces into sleek, intuitive, and visually appealing designs.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-green-900">
                    <img src="{{ asset('assets/img/our-services/pwa-icon.svg') }}" alt="Progressive Web Application (PWA)- Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Progressive Web App Development (PWA)
                    </h1>

                    <p>
                        Unlock the power of progressive web apps with our advanced web app development services. Create fast, engaging, and seamless user experiences across devices for your business.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-fuchsia-950">
                    <img src="{{ asset('assets/img/our-services/web-maintenance-icon.svg') }}" alt="Web Maintenance - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Website Support & Maintenance
                    </h1>

                    <p>
                        We provide comprehensive website support and maintenance services, ensuring your web applications run smoothly, stay up-to- date with the latest trends, and remain gltch-free.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of What We Offer Section -->

    <!-- Have a Request CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Do you have a web development idea?
            </h1>
            <p>
                We have a team of experienced web experts to transform your vision into reality.
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white border bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Have a Request CTA Section -->

    <!-- Visionary Partners Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Partners Are</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Visionary Businesses and Diverse Clientele
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Explore our proven track record of delivering web design & development services to diverse customer segments ranging from startups to large enterprises. Discover how we can assist you in achieving your business goals.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Startups
                    </h1>

                    <p>
                        From ambitious entrepreneurs to VC funded ventures, we have supported startups in their technological journey, helping them transform ideas into reality.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Product Companies
                    </h1>
                    
                    <p>
                        We have partnered with product-focused  businesses, assisting them in developing and enhancing their web design & development. Services to meet market demands and stay ahead of the competition. 
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Agencies
                    </h1>
                    
                    <p>
                        Collaborating with digital agencies, we have contributed to the creation of captivating digital experiences, leveraging our expertise to deliver innovative and impactful solutions that engage and inspire. 
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Enterprises
                    </h1>

                    <p>
                        Our extensive experience working with large enterprises enables us to provide  scalable web applications that handle high volumes of traffic, large data sets, and  complex business processes, ensuring  optimal performance. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Visionary Partners Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Experience Your Business Grow Exponentially with Us!
            </h1>
            <p>
                Experience a guaranteed 30% increase in efficiency with our expert software development.
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white border bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Banner CTA Section -->

    <!-- Industry Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Web Application Development Solutions for Diverse Industries
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Our team of software development experts collaborates with clients to understand their roadblocks and objectives,enabling us to develop custom software development solutions that are efficient and scalable for diverse industries. 
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-violet-600">
                    <a href="{{ route('industries.media-and-entertainment') }}">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                            Media & Entertainment
                        </h1>

                        <p>
                            <ol>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Music Streaming Application
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Video Streaming Application
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Social Networking Platform
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    News Portal
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Event Booking Platform
                                </li>
                            </ol>
                        </p>
                    </a>
                </div>
                
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-purple-900">
                    <a href="{{ route('industries.healthcare') }}">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Healthcare
                        </h1>
                        
                        <p>
                            <ol>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Hospital Management System
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Laboratory Service
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Telemedicine Solution
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Clinical Communication System
                                </li>
                            </ol>
                        </p>
                    </a>
                </div>
                
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-slate-800">
                    <a href="{{ route('industries.education') }}">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Education / eLearning
                        </h1>
                        
                        <p>
                            <ol>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    School Management System
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Learning Management System
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Virtual Classroom
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Student's Portal
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Quizzes and Exams Portal
                                </li>
                            </ol>
                        </p>
                    </a>
                </div>

                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-red-800">
                    <a href="{{ route('industries.retail-ecommerce') }}">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Retail / eCommerce
                        </h1>
                        
                        <p>
                            <ol>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Multi vendor eCommerce Platform
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Warehouse Solutions
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Delivery Solutions
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Retail ERP Software
                                </li>
                            </ol>
                        </p>
                    </a>
                </div>

                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-yellow-800">
                    <a href="{{ route('industries.real-estate') }}">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Real Estate
                        </h1>
                        
                        <p>
                            <ol>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Property Marketplace
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    ERP Solutions
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    AR/VR Property Solution
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Estate Management Solution
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Property Auction Portal
                                </li>
                            </ol>
                        </p>
                    </a>
                </div>
                
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-green-800">
                    <a href="{{ route('industries.fintech') }}">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        FinTech
                        </h1>
                        
                        <p>
                            <ol>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Inventory Management System
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Loan Management System
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    On-demand Delivery Solutions
                                </li>
                                <li class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    Accounts Management Solution
                                </li>
                            </ol>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Industry Solutions Section -->
</main>
@endsection