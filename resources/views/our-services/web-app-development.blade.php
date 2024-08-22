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
    <section class="relative h-screen flex flex-col justify-between text-center" style="background-image: url('{{ asset('assets/img/webdevhero.png') }}')">
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


    <!-- Our Service Section -->
    <section class="w-[1440px] h-[630px] relative justify-start px-20 pt-14">
        <div class="gap-[43px]">
            <div class="flex-col">
                <h2 class="text-[#194587] text-base font-semibold pb-4">OUR SERVICES</h2>
                <h3 class="w-[1000px] text-[#17191c] text-md font-semibold pb-4">Explore Our Comprehensive Range of Bespoke Web Application Development Solutions tailored to meet your unique business needs.</h3>
            </div>
            <p class="w-[890px] text-[#17191c] text-[15px] font-normal pb-7">"Elevate your digital presence with our expertly crafted solutions designed for seamless performance and unmatched user experience."</p>
        </div>
        <div>
            <div class="flex gap-8 py-4">
                <!-- First Block -->
                <div class="flex gap-2 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Mobile Application Development</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Our seasoned team of custom web app developers excels in crafting seamless native, hybrid, and cross-platform applications, delivering impeccably secure, scalable, and polished mobile solutions.
                        </p>
                    </div>
                </div>
                <!-- Second Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Desktop Custom Software Development</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Enhance your business efficiency with tailor-made desktop applications designed for seamless integration across all major operating systems, including Windows, MacOS, and Linux.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex gap-6 py-4">
                <!-- Third Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">DevOps Services</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Leveraging DevOps services, we're optimizing development and operations for enhanced speed, reliability, and cost-effectiveness.
                        </p>
                    </div>
                </div>
                <!-- Fourth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Front-end Web Application Development</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Through meticulous strategic planning and custom web app development, we craft a compelling front-end tailored precisely to elevate your web applications.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex gap-6 py-4">
                <!-- Fifth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Custom We Application Development</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Elevate your online presence with our tailored web applications—crafted to deliver robust functionality, fortified security, scalability, and beyond.
                        </p>
                    </div>
                </div>
                <!-- Sixth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">IT Staff Augmentation Service</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Do you need some extra help with your development projects? If yes then worry no more as our custom web app development company have got your back covered.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Service Section -->

    <!-- Our Process Section -->
    <section class="py-12 bg-white">
        <div class="px-20">
            <!-- Section Title -->
            <div class="mb-12">
                <h2 class="text-[#194587] text-base font-semibold uppercase">Our Process</h2>
                <p class="text-[#17191c] text-md font-bold mt-4">
                    Empowering Your Digital Presence Through Our Meticulous and Innovative Web Application Development Process.
                </p>
            </div>

            <!-- Process Steps -->
            <div class="flex flex-wrap justify-center gap-8 py-4">
                <!-- First Block -->
                <div class="relative flex flex-col items-start max-w-xs p-6 bg-white rounded-lg shadow-sm">
                    <span class="absolute -top-7 left-0 text-[100px] text-[#143669] opacity-10 font-['Crimson Text'] leading-none">01</span>
                    <div class="flex items-start gap-2 z-10">
                        <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                        <div>
                            <h3 class="text-[#143669] text-base font-semibold">Requirements Gathering and Analysis</h3>
                            <p class="text-gray-600 text-sm">
                                Thoroughly understanding the client's needs and objectives, gathering requirements, and analyzing them to define the scope and features of the web application.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Second Block -->
                <div class="relative flex flex-col items-start max-w-xs p-6 bg-white rounded-lg shadow-sm">
                    <span class="absolute -top-7 left-0 text-[100px] text-[#143669] opacity-10 font-['Crimson Text'] leading-none">02</span>
                    <div class="flex items-start gap-2 z-10">
                        <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                        <div>
                            <h3 class="text-[#143669] text-base font-semibold">Design and Prototyping</h3>
                            <p class="text-gray-600 text-sm">
                                Creating wireframes, mockups, and prototypes to visualize the user interface, user experience (UX), and overall design of the web application, ensuring usability and functionality.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Third Block -->
                <div class="relative flex flex-col items-start max-w-xs p-6 bg-white rounded-lg shadow-sm">
                    <span class="absolute -top-7 left-0 text-[100px] text-[#143669] opacity-10 font-['Crimson Text'] leading-none">03</span>
                    <div class="flex items-start gap-2 z-10">
                        <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                        <div>
                            <h3 class="text-[#143669] text-base font-semibold">Development and Coding</h3>
                            <p class="text-gray-600 text-sm">
                                Writing clean, efficient, and scalable code using appropriate technologies and frameworks, following best practices and coding standards to build the core functionality of the web application.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth Block -->
                <div class="relative flex flex-col items-start max-w-xs p-6 bg-white rounded-lg shadow-sm">
                    <span class="absolute -top-7 left-0 text-[100px] text-[#143669] opacity-10 font-['Crimson Text'] leading-none">04</span>
                    <div class="flex items-start gap-2 z-10">
                        <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                        <div>
                            <h3 class="text-[#143669] text-base font-semibold">Testing and Quality Assurance (QA)</h3>
                            <p class="text-gray-600 text-sm">
                                Conducting comprehensive testing at various stages of development, including unit testing, integration testing, and user acceptance testing (UAT), to identify and fix bugs, ensure functionality, performance, and security.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fifth Block -->
                <div class="relative flex flex-col items-start max-w-xs p-6 bg-white rounded-lg shadow-sm">
                    <span class="absolute -top-7 left-0 text-[100px] text-[#143669] opacity-10 font-['Crimson Text'] leading-none">05</span>
                    <div class="flex items-start gap-2 z-10">
                        <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                        <div>
                            <h3 class="text-[#143669] text-base font-semibold">Deployment and Launch</h3>
                            <p class="text-gray-600 text-sm">
                                Deploying the web application to a production environment, configuring servers, databases, and other infrastructure components, and performing final testing before launching it to the public or intended users.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sixth Block -->
                <div class="relative flex flex-col items-start max-w-xs p-6 bg-white rounded-lg shadow-sm">
                    <span class="absolute -top-7 left-0 text-[100px] text-[#143669] opacity-10 font-['Crimson Text'] leading-none">06</span>
                    <div class="flex items-start gap-2 z-10">
                        <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                        <div>
                            <h3 class="text-[#143669] text-base font-semibold">Maintenance and Support</h3>
                            <p class="text-gray-600 text-sm">
                                Providing ongoing maintenance, updates, and support services to ensure the web application remains reliable, secure, and up-to-date, addressing any issues, implementing enhancements, and optimizing performance as needed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call to Action -->
            <div class="max-w-[933px] mx-auto flex flex-col justify-start items-center gap-[53px] text-center mt-10 pb-10">
                <a href="#" class="px-9 py-3 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">
                    Start a Project
                </a>
            </div>
        </div>
    </section>
    <!-- End of Our Process Section -->


    <!-- Our Project Approaches Section -->
    <section class="w-full h-[550px] relative bg-white flex flex-col px-20">
        <h2 class="text-[#17191C] text-xl font-semibold mt-6">Project approaches</h2>

        <div class="mx-auto">
            <!-- Front-end + Back-end Card (Higher Position) -->
            <div class="w-[332px] h-[249px] px-[21px] pt-[53.50px] pb-[52.50px] bg-[#143669] rounded-lg absolute top-[160px] items-center flex flex-col" style="left: 50%; transform: translateX(-50%);">
                <div class="self-stretch justify-start items-start gap-[5px] inline-flex">
                    <div class="w-12 h-12 justify-center items-center flex">
                        <div class="w-12 h-12 relative">
                            <img src="{{ asset('assets/img/projectcodesymbol.svg') }}" alt="codesymbol">
                        </div>
                    </div>
                    <div class="flex-col justify-start items-start gap-2.5 inline-flex">
                        <h3 class="text-white text-base font-semibold">Front-end + Back-end</h3>
                        <p class="w-[230px] text-white text-[15px] font-normal">When you need to develop a back-end solution to support your mobile app, our back-end engineering team is ready to help.</p>
                    </div>
                </div>
            </div>

            <!-- Front-end Card (Aligned Below) -->
            <div class="w-[332px] h-[249px] px-[17.50px] pt-[53.50px] pb-[52.50px] bg-[#143669] rounded-lg absolute top-[222px]" style="left: 22%; transform: translateX(-50%);">
                <div class="self-stretch justify-start items-start gap-[5px] inline-flex">
                    <div class="w-12 h-12 justify-center items-center flex">
                        <div class="w-12 h-12 relative">
                            <img src="{{ asset('assets/img/projectcodesymbol.svg') }}" alt="codesymbol">
                        </div>
                    </div>
                    <div class="flex-col justify-start items-start gap-2.5 inline-flex">
                        <h3 class="text-white text-base font-semibold">Front-end</h3>
                        <p class="w-[244px] text-white text-[15px] font-normal">Our team can develop the front end user inference of your website or web app and integrate it with your existing back-end and API.</p>
                    </div>
                </div>
            </div>

            <!-- Admin Panel Card (Aligned Below) -->
            <div class="w-[332px] h-[249px] px-[26px] pt-[53.50px] pb-[52.50px] bg-[#143669] rounded-lg absolute top-[222px] flex flex-col items-center" style="left: 78%; transform: translateX(-50%);">
                <div class="self-stretch justify-start items-start gap-[5px] inline-flex">
                    <div class="w-12 h-12 justify-center items-center flex">
                        <div class="w-12 h-12 relative">
                            <img src="{{ asset('assets/img/projectcodesymbol.svg') }}" alt="codesymbol">
                        </div>
                    </div>
                    <div class="flex-col justify-start items-start gap-2.5 inline-flex">
                        <h3 class="text-white text-base font-semibold">Admin Panel</h3>
                        <p class="w-[227px] text-white text-[15px] font-normal">We design and develop easy-to-use admin panels for mobile and web apps, using popular UI solutions that are reliable and easy to support and extend.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Project Approaches Section -->

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