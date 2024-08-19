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
<style>
    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .animate-marquee {
        animation: marquee 45s linear infinite;
    }
</style>
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col justify-between text-center" style="background-image: url('{{ asset('assets/img/webdevhero.png') }}'); background-size: cover; background-position: center;">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-50 z-0"></div>

        <!-- Hero section content goes here -->
        <div class="relative w-full lg:flex items-center justify-center z-10">
            <div class="w-full md:pt-40 lg:pt-48 px-4 text-center text-white">
                <!-- Hero section description goes here -->
                <h2 class="text-white text-2xl md:text-4xl lg:text-5xl font-bold py-2">
                    Crafting Digital Experiences that Inspire, Engage, and Empower Users
                </h2>
                <p class="text-sm md:text-lg mb-4">
                    Transforming Ideas into Seamless Web Solutions with Innovative Design and Precision Development.
                </p>

                <!-- CTA Button -->
                <div class="flex justify-center mx-3">
                    <a href="#" class="border border-rt-white px-8 py-3.5 text-base font-medium text-white inline-flex items-center hover:font-bold hover:bg-white hover:text-rt-primary hover:border-white focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center mr-10">
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

        <!-- Image section -->
        <div class="w-full flex justify-center mb-5 z-10">
            <div class="h-10 justify-start items-center gap-10 inline-flex animate-marquee">
                {{-- <div class="w-full max-w-screen-xl flex gap-4 justify-between items-center animate-marquee"> --}}
                <img class="w-48" src="{{ asset('assets/img/clients/blue-sea-travels.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/africasiaconnect.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/ultrashot-nigeria.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/how-tech.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/celestina-adams-care-foundation.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/africasiaconnect.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/ultrashot-nigeria.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/how-tech.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/celestina-adams-care-foundation.png') }}" />
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->



    <!-- Premium WebDev Section -->
    <section class="w-[1440px] h-[630px] relative justify-start px-20 pt-14">
        <div class="gap-[43px]">
            <div class="flex flex-col justify-start">
                <h3 class="text-[#194587] text-md font-semibold pb-5">WE ARE A PREMIUM WEB DEVELOPMENT COMPANY</h3>
                <div class=" gap-2.5">
                    <h2 class="text-[#17191c] text-xl font-bold pb-3">
                        And We Can Help You Unleash Your Brand’s Potential
                    </h2>
                    <p class="w-[37%] text-[#292d32] font-normal">
                        From Inception to Mid-project, Our Team of Skilled Developers Stands Ready to Expedite Your App Development Journey With Professional Expertise.
                    </p>
                </div>
            </div>
            <div class="mt-8">
                <a href="{{ route('contact-us') }}" class=" px-12 py-3 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">
                    Let's Talk
                </a>
            </div>
        </div>

        <div class="flex px-14 gap-[30px] mt-10">
            <!-- Web Development Card -->
            <div class="pl-3 pr-[10px] pt-[49px] pb-12 bg-white rounded-lg border border-[#f0f0f0] flex-col justify-center items-center relative">
                <div class="flex-col justify-start items-start">
                    <h3 class="text-[#17191c] text-base font-semibold pb-6">Web Development</h3>
                    <p class="w-[204px] text-[#17191c] text-[15px] font-normal">
                        Utilize advanced platforms and tools to construct a compelling and resilient online presence, incorporating the latest technology for a vibrant and impactful web experience.
                    </p>
                </div>
                <a href="#" class="absolute bottom-4 right-4">
                    <img src="{{ asset('assets/img/arrow-left.svg') }}" alt="Arrow">
                </a>
            </div>

            <!-- E-commerce Development Card -->
            <div class="pl-4 pr-[15px] py-[48.50px] bg-white rounded-lg border border-[#f0f0f0] flex-col justify-center items-center relative">
                <div class="flex-col justify-start items-start">
                    <h3 class="text-[#17191c] text-base font-semibold pb-6">E-commerce Development</h3>
                    <p class="w-[204px] text-[#17191c] text-[15px] font-normal">
                        Empower your brand's growth with sophisticated e-commerce tools, enabling seamless online trading from inception to expansion.
                    </p>
                </div>
                <a href="#" class="absolute bottom-4 right-4">
                    <img src="{{ asset('assets/img/arrow-left.svg') }}" alt="Arrow">
                </a>
            </div>

            <!-- Content Management Card -->
            <div class="pl-4 pr-[15px] py-[48.50px] bg-white rounded-lg border border-[#f0f0f0] flex-col justify-center items-center relative">
                <div class="flex-col justify-start items-start">
                    <h3 class="text-[#17191c] text-base font-semibold pb-6">Content Management</h3>
                    <p class="w-[204px] text-[#17191c] text-[15px] font-normal">
                        Effortlessly manage textual, visual, and multimedia content through intuitive administrative controls, enabling seamless customization and optimization.
                    </p>
                </div>
                <a href="#" class="absolute bottom-4 right-4">
                    <img src="{{ asset('assets/img/arrow-left.svg') }}" alt="Arrow">
                </a>
            </div>

            <!-- Custom Development Card -->
            <div class="pl-4 pr-[15px] py-[48.50px] bg-white rounded-lg border border-[#f0f0f0] flex-col justify-center items-center relative">
                <div class="flex-col justify-start items-start">
                    <h3 class="text-[#17191c] text-base font-semibold pb-6">Custom Development</h3>
                    <p class="w-[204px] text-[#17191c] text-[15px] font-normal">
                        Craft bespoke web solutions precisely tuned to your unique requirements and brand essence, ensuring seamless alignment with your vision and identity.
                    </p>
                </div>
                <a href="#" class="absolute bottom-4 right-4">
                    <img src="{{ asset('assets/img/arrow-left.svg') }}" alt="Arrow">
                </a>
            </div>
        </div>
    </section>
    <!-- End of Premium WebDev Section -->


    <!-- Have a Request CTA Section -->
    <div class="w-[1440px] h-[671px] relative bg-[#f8f8fc] flex-col justify-start items-start inline-flex">
        <div class="flex-col justify-center items-start gap-2.5 inline-flex">
            <div class="flex-col justify-center items-start gap-2.5 flex">
                <div class="text-[#194587] text-base font-medium font-['Inter'] leading-normal">OUR SERVICES</div>
                <div class="w-[1093px] text-[#17191c] text-lg font-semibold font-['Inter'] leading-relaxed">Explore Our Comprehensive Range of Bespoke Web Application Development Solutions tailored to meet your unique business needs.</div>
            </div>
            <div class="w-[918px] text-[#17191c] text-[15px] font-normal font-['Inter'] leading-snug">"Elevate your digital presence with our expertly crafted solutions designed for seamless performance and unmatched user experience."</div>
        </div>
        <div class="justify-start items-start gap-[30px] inline-flex">
            <div class="justify-start items-start gap-1.5 flex">
                <div class="w-6 h-6 justify-center items-center flex">
                    <div class="w-6 h-6 relative">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#194587] text-[17px] font-medium font-['Inter'] leading-normal">Mobile Application Development</div>
                    <div class="w-[576px] text-[#292d32] text-sm font-normal font-['Inter'] leading-tight">Our seasoned team of custom web app developers excels in crafting seamless native, hybrid, and cross-platform applications, delivering impeccably secure, scalable, and polished mobile solutions.</div>
                </div>
            </div>
            <div class="justify-start items-start gap-1.5 flex">
                <div class="w-6 h-6 justify-center items-center flex">
                    <div class="w-6 h-6 relative">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#194587] text-[17px] font-medium font-['Inter'] leading-normal">Desktop Custom Software Development</div>
                    <div class="w-[576px] text-[#292d32] text-sm font-normal font-['Inter'] leading-tight">Enhance your business efficiency with tailor-made desktop applications designed for seamless integration across all major operating systems, including Windows, MacOS, and Linux.</div>
                </div>
            </div>
        </div>
        <div class="justify-start items-start gap-[30px] inline-flex">
            <div class="justify-start items-start gap-1.5 flex">
                <div class="w-6 h-6 justify-center items-center flex">
                    <div class="w-6 h-6 relative">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#194587] text-[17px] font-medium font-['Inter'] leading-normal">DevOps Services</div>
                    <div class="w-[576px] text-[#292d32] text-sm font-normal font-['Inter'] leading-tight">Leveraging DevOps services, we're optimizing development and operations for enhanced speed, reliability, and cost-effectiveness.</div>
                </div>
            </div>
            <div class="justify-start items-start gap-1.5 flex">
                <div class="w-6 h-6 justify-center items-center flex">
                    <div class="w-6 h-6 relative">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#194587] text-[17px] font-medium font-['Inter'] leading-normal">Front-end Web Application Development</div>
                    <div class="w-[576px] text-[#292d32] text-sm font-normal font-['Inter'] leading-tight">Through meticulous strategic planning and custom web app development, we craft a compelling front-end tailored precisely to elevate your web applications.</div>
                </div>
            </div>
        </div>
        <div class="justify-start items-start gap-[30px] inline-flex">
            <div class="justify-start items-start gap-1.5 flex">
                <div class="w-6 h-6 justify-center items-center flex">
                    <div class="w-6 h-6 relative">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#194587] text-[17px] font-medium font-['Inter'] leading-normal">Custom We Application Development</div>
                    <div class="w-[576px] text-[#292d32] text-sm font-normal font-['Inter'] leading-tight">Elevate your online presence with our tailored web applications—crafted to deliver robust functionality, fortified security, scalability, and beyond.</div>
                </div>
            </div>
            <div class="justify-start items-start gap-1.5 flex">
                <div class="w-6 h-6 justify-center items-center flex">
                    <div class="w-6 h-6 relative">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <div class="text-[#194587] text-[17px] font-medium font-['Inter'] leading-normal">IT Staff Augmentation Service</div>
                    <div class="w-[576px] text-[#292d32] text-sm font-normal font-['Inter'] leading-tight">Do you need some extra help with your development projects? If yes then worry no more as our custom web app development company have got your back covered.</div>
                </div>
            </div>
        </div>
    </div>
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
                        We have partnered with product-focused businesses, assisting them in developing and enhancing their web design & development. Services to meet market demands and stay ahead of the competition.
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
                        Our extensive experience working with large enterprises enables us to provide scalable web applications that handle high volumes of traffic, large data sets, and complex business processes, ensuring optimal performance.
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