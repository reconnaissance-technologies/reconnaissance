@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies offers custom mobile app development services to clients worldwide. We have successfully delivered 20+ mobile applications.')
@section('meta-keywords', 'mobile app development company, mobile application development services, mobile app development company Nigeria, mobile app developers, best mobile app developers Nigeria')
@section('robots', 'index, follow')
@section('og-title', 'Custom Mobile App Development Services | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.mobile-app') }}")
@section('og-description', 'Reconnaissance Technologies offers custom mobile app development services to clients worldwide. We have successfully delivered 20+ mobile applications.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Custom Mobile App Development Services - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="relative  text-center justify-center py-5 ">
        <!-- Video Background -->
        <video class="absolute top-0 left-0 w-full h-full object-cover z-[-1]" autoplay muted loop playsinline>
            <source src="https://s3-figma-videos-production-sig.figma.com/video/1134555079227565548/TEAM/2a6e/0c4e/-2cf8-4720-9f26-d61c4b7d6edd?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ax1Y1NVZh9aQEN2A1SlsYrCvKTlAd5MSZgJuBmFPeo-JDEBculMuCNtC3bI3y7kTzb6wyuGZHVKwPbe2Ze1ugZ3DE3AlMXnhfY9DWvxmI1Ovp0-SsjD0IJKfZxbLXbYZHLlSK1PsY-EFy62FQhgDUTcEygWqKeAlUbsvWqyHc5rtMRgfROAet864v1e3AyezdzIqzUVaqCUV93w2J55rp4u5wJ0VSJ2Qhz5I8uG~CIrrtsLxDcGhRwRd28uZerPKdz6qH-X7H61BfN8TkSuC8cMU37Z9ojcYWLO3CMnbTT2Mm6~2PauXtXyOIvoq8weKN1QKJ9BPA9TDK4KEKOhuhQ__" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- hero section content goes here -->
        <div class="relative w-full lg:flex items-center justify-center">
            <div class="w-full md:pt-40 lg:pt-48 z-10 text-center text-white">
                <!-- hero section description goes here -->
                <h2 class="text-center justify-center text-white text-2xl md:text-4xl py-2 font-bold">
                    Crafting Mobile Experiences that Captivate and Connect
                </h2>
                <p class="text-sm md:text-md mb-4">
                    From concept to deployment, we specialize in developing intuitive and impactful mobile apps tailored to your vision and your users' needs
                </p>

                <!-- CTA Button -->
                <div class="flex justify-center mx-3">
                    <a href="#" class="border border-rt-white px-8 py-3.5 text-base font-medium text-white inline-flex items-center hover:font-bold  hover:bg-white hover:text-rt-primary hover:border-white focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center mr-10">
                        Case Studies
                    </a>

                    <a href="#" class="px-8 py-3.5 text-base font-medium text-black inline-flex items-center bg-rt-white hover:text-rt-primary hover:font-bold focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center">
                        Start a Project
                        <img class="px-2 w-8" src="{{ asset('assets/icons/send.svg') }}" alt="">
                    </a>
                </div>
                <!-- End of CTA Button -->
            </div>
        </div>

        <!-- Awards section -->
        <div class="relative w-full flex justify-end pr-6">
            <div class="flex items-center gap-4">
                <a href="https://clutch.co/profile/reconnaissance-technologies" target="_blank" class="w-20 h-auto" title="Clutch.co 2023 Top Health &  Wellness App Developer, Nigeria">
                    <img src="{{ asset('assets/img/recognition/clutch-health-wellness-app-developers-nigeria-2023.png') }}" alt="Clutch.co 2023 Top Health &  Wellness App Developer, Nigeria Badge">
                </a>
                <a href="https://techbehemoths.com/awards-2023/cybersecurity/nigeria#view=60717" target="_blank" class="w-20 h-auto" title="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023">
                    <img class="" src="{{ asset('assets/img/recognition/banner-award-2023-white-winner-alt (2).png') }}" alt="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023 Badge">
                    <img class="hidden" src="{{ asset('assets/img/recognition/tb-cyber-security.png') }}" alt="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023 Badge">
                </a>
                <a href="https://techbehemoths.com/awards-2023/custom-software-development/nigeria#view=60717" target="_blank" class="w-20 h-auto" title="TechBehemoths Top Custom Software Development Company in Nigeria Awards 2023">
                    <img src="{{ asset('assets/img/recognition/banner-award-2023-white-winner-alt (1).png') }}" alt="TechBehemoths Top Custom Software Development Company in Nigeria Awards 2023 Badge">
                </a>
            </div>
        </div>

        <!-- Image section -->
        <div class="w-full flex justify-center mt-20">
            <div class="w-full max-w-screen-xl flex justify-between items-center">
                <img class="w-[60px] h-auto" src="{{ asset('assets/img/testimonials/deepblue.png') }}" />
                <img class="w-[90px] h-auto" src="{{ asset('assets/img/testimonials/carvfit.png') }}" />
                <img class="w-[90px] h-auto" src="{{ asset('assets/img/testimonials/how-tech-ltd.png') }}" />
                <img class="w-[63px] h-auto" src="{{ asset('assets/img/testimonials/celestina.png') }}" />
                <img class="w-[66px] h-auto" src="{{ asset('assets/img/testimonials/ultrashot.png') }}" />
                <img class="w-[28px] h-auto" src="{{ asset('assets/img/testimonials/Explorer.png') }}" />
                <img class="w-[76px] h-auto" src="{{ asset('assets/img/testimonials/carvfit-white.png') }}" />
            </div>
        </div>
    </section>

    <!-- End of Hero Section -->

    <!-- What makes us different -->

    <div class="w-[1440px] h-[567px] pl-[103px] pr-[172px] pt-2 pb-[7px] bg-[#f7f7fc] justify-start items-center gap-[100px] inline-flex">
        <div class=" flex-col gap-[50px] inline-flex">
            <div class="flex-col justify-start items-start gap-2.5 flex">
                <div class="flex-col justify-start items-start gap-2.5 flex">
                    <h4 class="text-[#194587] text-base font-medium">WHAT MAKES US DIFFERENT</h4>
                    <h3 class="text-[#17191c] text-2xl font-semibold">Why We Should Create Your Mobile Application?</h3>
                </div>
                <p class="w-[529px] text-[#3b4454] text-[15px] font-normal">We serve as your dedicated partners throughout the entire mobile app development process, guiding you from ideation to implementation, leveraging cloud infrastructure and automation to ensure efficient delivery and a remarkable user experience that drives your success.</p>
            </div>
            <div class="">
                <a href="#" class="px-20 py-4 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">Let’s talk</a>
            </div>
        </div>
        <img class="w-[400px] h-[552px] rotate-360" src="{{ asset('assets/img/Develop-an-Android-App.svg') }}" />
    </div>
    <!-- End of What makes us different -->

    <!-- Our Strength Section -->
    <div class="w-full relative">
        <div class="flex justify-between items-start">
            <!-- Text Section -->
            <div class="flex flex-col justify-start items-start gap-4 px-20 pt-32">
                <h2 class="text-[#194587] font-semibold">OUR STRENGTH</h2>
                <p class="w-[423px] text-black text-lg font-semibold">
                    What We Do that Makes Us Stand Out Against Other Mobile Application Development Companies
                </p>
            </div>
            <!-- Image Section -->
            <img class="w-[650px] h-[450px] right-0 mt-4" src="{{ asset('assets/img/our-services/Ourmobservices.svg') }}" />
        </div>

        <!-- Content Below Image -->
        <div class="flex flex-col gap-8 px-20 mt-0">
            <!-- First Block -->
            <div class="flex gap-4 items-start">
                <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                <div>
                    <h3 class="text-[#194587] text-base font-semibold">Free Consultation</h3>
                    <p class="w-[500px] text-[#292d32] text-sm font-normal">
                        Unlike our competitors, we offer you the chance to take the first step into bringing your app idea to life with our free Consultation session.
                    </p>
                </div>
            </div>

            <!-- Second Block with Grid Layout -->
            <div class="grid grid-cols-2 gap-8">
                <!-- Second Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Seamless Integration Across Platforms</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Our app seamlessly integrates across multiple platforms, offering a consistent and cohesive experience whether users access it on their mobile devices, tablets, or desktops.
                        </p>
                    </div>
                </div>

                <!-- Third Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Mobile Application Development Solutions for Diverse Industries</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            We partner closely with our clients to grasp their challenges and goals, crafting bespoke software solutions that are both powerful and adaptable across industries.
                        </p>
                    </div>
                </div>

                <!-- Fourth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">MVP App Development</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            We empower your journey to success with our MVP App Development, guiding you to validate your idea swiftly, accelerate time to market, and make informed decisions for iterative improvements.
                        </p>
                    </div>
                </div>

                <!-- Fifth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Mobile App Maintenance & Robust Security Measures</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Security is paramount in today's digital landscape. Our app integrates state-of-the-art security measures, including encryption, authentication, and secure data storage.
                        </p>
                    </div>
                </div>

                <!-- Sixth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Native App Development Services</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            As a premier mobile application development agency, we specialize in crafting bespoke, cutting-edge native apps meticulously tailored for singular platforms.
                        </p>
                    </div>
                </div>

                <!-- Seventh Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Intuitive User Experience (UX)</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Our app prioritizes user-centric design, offering a seamless and intuitive experience from the moment users launch the app.
                        </p>
                    </div>
                </div>

                <!-- Eighth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Our Partners are Visionary Businesses and Diverse Clientele</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            By partnering with visionary businesses and a diverse clientele, we ensure that our solutions are finely tuned to meet the unique needs and challenges of various industries.
                        </p>
                    </div>
                </div>

                <!-- Ninth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Enterprise Mobility</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            We elevate your business operations with our Enterprise Mobility solutions, enabling effortless access to critical data and applications.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Centered Button -->
            <div class="max-w-[933px] mx-auto flex flex-col justify-start items-center gap-[53px] text-center mt-10">
                <a href="#" class="px-9 py-3 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">
                    See Case Studies
                </a>
            </div>
        </div>
    </div>
    <!-- End of Our Strength Section -->


    <!-- Visionary Partners Section -->
    <section class="px-16 pt-8 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Partners Are</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Visionary Businesses and Diverse Clientele
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Explore our proven track record of delivering mobile app development services to diverse customer segments ranging from startups to large enterprises. Discover how we can assist you in achieving your business goals.
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
                        We have partnered with product-focused businesses, assisting them in developing and enhancing their mobile app design & development. Services to meet market demands and stay ahead of the competition.
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
                        Our extensive experience working with large enterprises enables us to provide scalable mobile applications that handle high volumes of traffic, large data sets, and complex business processes, ensuring optimal performance.
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
                Mobile Application Development Solutions for Diverse Industries
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

    <!-- Locations & Enquiry Section -->
    <section class="w-[1440px] h-[684px] pl-[50px] pr-[104px] py-[91px] bg-[#EDEDF8] justify-start items-center inline-flex">
        <div class="py-6">
            <div class="px-16 ">
                <h2 class="text-[#424d57] text-xl pb-5 uppercase font-semibold">GET IN TOUCH</h2>
                <h1 class="w-3/4 text-xl lg:text-2xl font-bold mt-2 mb-2 lg:mb-3 text-[#292D32] whitespace-nowrap">
                    Let's build something magical <br> together!
                </h1>
            </div>
            <div class="relative h-96 py-6 bg-center bg-no-repeat bg-blend-multiply">
                <p class="pl-16 text-md text-[#424d57] font-normal ">Do you have an app idea and need to get it validated? Let us give you <br> our honest opinion</p>
                <div class="flex pt-6 pl-16 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <div class="pl-3 text-[#424d57]">
                        <p class="text-xl font-medium whitespace-nowrap">
                            No 50, Ebitu Ukiwe Street, Jabi, Abuja - 900108, FCT
                        </p>
                    </div>
                </div>

                <div class="flex py-3 text-[#424d57] pl-16">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <div class="pl-3 ">
                        <p class="text-xl font-medium">
                            <a href="tel:+2342013309246" title="Call Reconnaissance Technologies Nigeria">+234 201 330 9246</a>
                        </p>
                    </div>
                </div>

                <div class="flex text-[#424d57] pl-16 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <div class="pl-3 ">
                        <p class="text-xl font-medium">
                            <a href="mailto:enquiries@reconnaissancetechnologies.com" title="Email Reconnaissance Technologies for enquiries">enquiries@reconnaissancetechnologies.com</a>
                        </p>
                    </div>
                </div>

                <div class="absolute lg:w-[500px] xl:w-[500px] 2xl:w-[500px] left-[650px] -top-28 p-4 bg-rt-primary border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8">
                    <!-- <h3 class="text-black mb-6 text-xl font-semibold">Hola :)</h3> -->
                    @include('inc.get-a-quote-form')
                </div>
            </div>
        </div>
    </section>
    <!-- End of Locations & Enquiry Section -->
</main>
@endsection