@extends('layouts.general')

@section('meta-description', 'Get custom Software Product Development from Reconnaissance Technologies and bring your ideas to life. Achieve business excellence with bespoke software product solutions.')
@section('meta-keywords', 'Custom Software Product Development Services, Agile Software Product Engineering, End-to-End Software Product Development Solutions, Enterprise Software Application Development, Innovative Software Product Design and Development, Full-Stack Software Product Creation, Mobile and Web Application Development Services, Software Prototype and MVP Development')
@section('robots', 'index, follow')
@section('og-title', 'Software Product Development | Product Development Company | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.software-devlopment') }}")
@section('og-description', 'Get custom Software Product Development from Reconnaissance Technologies and bring your ideas to life. Achieve business excellence with bespoke software product solutions.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Software Product Development | Product Development Company - Reconnaissance Technologies')

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
                    Software Product Development
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Reconnaissance Technologies specializes in turning your vision into exceptional, market-leading software products. Leveraging cuting-edge technologies and deep industry expertise we address your unique challenges ensuring a seamless and impactful journey towards digital excellence.
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
                <img src="{{ asset('assets/img/software-product-development-image.png') }}"
                    class="object-fill" alt="Software Product Development - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What Makes Us Different Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">What Makes Us Different</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                We Transform Ideas into Innovative Software Products
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        We stand apart in software product development by offering bespoke solutions meticulously designed to meet your unique needs and challenges. Our commitment to excellence is reflected in these key differentiators
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Bespoke Solutions
                    </h1>

                    <p>
                        Tailor-made software development solution to meet the unique needs of each client, ensuring a perfect fit for your business model and objectives.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        User-Centric Design
                    </h1>
                    
                    <p>
                        Focusing on intuitive and engaging user interfaces, enhancing user experience to drive customer satisfaction and loyalty.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Robust Security Measures
                    </h1>
                    
                    <p>
                        Implementing top-notch security protocols to protect sensitive data and ensure compliance with global standards.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Scalability & Flexibility
                    </h1>

                    <p>
                        Building software with the foresight for growth, ensuring easy adaptability and scalability to meet evolving business needs.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of What Makes Us Different Section -->

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

    <!-- Software Development Expertise Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Our Expertise in Software Product Development
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Reconnaissance Technologies specializes in crafting bespoke software solutions that drive innovation and growth. Our comprehensive range of services is designed to meet every technological need, empowering businesses to thrive in the digital era.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-violet-600 w-[500]">
                    <img src="{{ asset('assets/img/our-services/web-app-icon.png') }}" class="w-20 h-20" alt="Web App Development - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Web App Development
                    </h1>

                    <p>
                        <ol>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Customized user interfaces for enhanced user experience.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Scalable architecture to support business growth.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Advanced security protocols to safeguard user data.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Integration capabilities with existing business systems.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Optimization for high performance and speed.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Responsive design for cross-platform compatibility.
                            </li>
                        </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-purple-900">
                    <img src="{{ asset('assets/img/our-services/mobile-app-icon.webp') }}" class="w-20 h-20" alt="Mobile App Development - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Mobile App Development
                    </h1>
                    
                    <p>
                        <ol>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                User-centric designs for increased engagements.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Cross-platform development for wider reach.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Performance optimization for seamless functionality.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Robust security features for data protection.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Integration with advanced technologies like AR/VR.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Continuous updates for evolving user needs.
                            </li>
                        </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-slate-800">
                    <img src="{{ asset('assets/img/our-services/frontend-dev-icon.png') }}" class="w-20 h-20" alt="Frontend Development - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                    Frontend Development
                    </h1>
                    
                    <p>
                        <ol>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Modern, intuitive designs for user engagements.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Responsive layouts for all devices and browsers.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Fast load times for improvd user experience.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Accessibility compliance for wider user inclusivity.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Interactive elements for dynamic user interfaces.
                            </li>
                            <li class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                Consistent branding across all digital touchpoints.
                            </li>
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Software Development Expertise Section -->

    <!-- Elevate Your Business CTA Section -->
    <section class="lg:h-96 pr-16 bg-[#1994b3] text-white flex justify-between items-center">
        <div class="left-0 py-6">
            <img src="{{ asset('assets/img/elevate-your-business.jpg') }}" class=" h-96" alt="">
        </div>

        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 lg:mb-6">
                Elevate Your Business Today!
            </h1>
            <p>
                Join our 25+ satisfied Clients in Transforming Your Ideas into Market-leading Software Solutions
            </p>
            <div class="py-6">
                <a href="{{ route('contact-us') }}" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                    Let's discuss your Requirement
                </a>
            </div>
        </div>
    </section>
    <!-- End of Elevate Your Business CTA Section -->

    <!-- Our Capabilities Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Capabilities</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                What We deliver at Reconnaissance Technologies
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        We deliver cutting-edge enterprise software solutions, leveraging advanced technologies and agile methodologies and combining innovations for scalable, secure, and bespoke products tailored to your business needs.
                    </p>
                </div>
            </div>

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap justify-between w-full -mb-px text-sm font-medium text-center" id="wwd-tab" data-tabs-toggle="#wwd-tab-content" role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="experience-tab" data-tabs-target="#experience" type="button" role="tab" aria-controls="experience" aria-selected="false">Experience</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="architecture-tab" data-tabs-target="#architecture" type="button" role="tab" aria-controls="architecture" aria-selected="false">Architecture</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="cloud-tab" data-tabs-target="#cloud" type="button" role="tab" aria-controls="cloud" aria-selected="false">Cloud</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="performance-insights-tab" data-tabs-target="#performance-insights" type="button" role="tab" aria-controls="performance-insights" aria-selected="false">Performance Insights</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="process-tab" data-tabs-target="#process" type="button" role="tab" aria-controls="process" aria-selected="false">Process</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="security-tab" data-tabs-target="#security" type="button" role="tab" aria-controls="security" aria-selected="false">Security</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="legal-tab" data-tabs-target="#legal" type="button" role="tab" aria-controls="legal" aria-selected="false">Legal</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="compliance-tab" data-tabs-target="#compliance" type="button" role="tab" aria-controls="compliance" aria-selected="false">Compliance</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-rt-primary hover:border-rt-primary dark:hover:text-rt-primary" id="innovation-tab" data-tabs-target="#innovation" type="button" role="tab" aria-controls="innovation" aria-selected="false">Innovation</button>
                    </li>
                </ul>
            </div>
            <div id="wwd-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/user-satisfaction-image.webp') }}" class="rounded-lg object-contain" alt="User Satisfaction - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc">
                                <li class="py-3">Customer Experience (CX)</li>
                                <li class="py-3">Brand Experience (BX)</li>
                                <li class="py-3">Learning Experience (LX)</li>
                                <li class="py-3">Product Experience (PX)</li>
                            </ul>
                            <ul class="list-disc">
                                <li class="py-3">User Interface (UI) Experience</li>
                                <li class="py-3">Information Experience (IX)</li>
                                <li class="py-3">User Experience (UX)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="architecture" role="tabpanel" aria-labelledby="architecture-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/software-architecture-image.png') }}" class="rounded-lg object-contain" alt="Software Architecture - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc w-80">
                                <li class="py-3">Microservices</li>
                                <li class="py-3">Serverless</li>
                                <li class="py-3">Micro Frontend</li>
                                <li class="py-3">Event Driven</li>
                                <li class="py-3">Lambda Architecture</li>    
                                <li class="py-3">Service-Oriented Architecture (SOA)</li>   
                            </ul>
                            <ul class="list-disc"> 
                                <li class="py-3">Big Data Architectures</li>
                                <li class="py-3">Client-Server Architecture</li>   
                                <li class="py-3">Layered Architecture</li>
                                <li class="py-3">Peer-to-Peer (P2P) Architecture</li>    
                                <li class="py-3">Distributed Systems</li>
                                <li class="py-3">Containerization</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="cloud" role="tabpanel" aria-labelledby="cloud-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/cloud-image.webp') }}" class="rounded-lg object-contain" alt="Cloud Solutions - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc w-96">
                                <li class="py-3">Cloud Service Models</li>
                                <li class="py-3">Infrastructure as a Service (IaaS)</li>
                                <li class="py-3">Platform as a Service (PaaS)</li>
                                <li class="py-3">Software as a Service (SaaS)</li>
                                <li class="py-3">Cloud Deployment Models</li>
                            </ul>
                            <ul class="list-disc"> 
                                <li class="py-3">Private Cloud</li>
                                <li class="py-3">Public Cloud</li>
                                <li class="py-3">Hybrid Cloud</li>
                                <li class="py-3">Multi-Cloud </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="performance-insights" role="tabpanel" aria-labelledby="performance-insights-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/performance-insights-image.webp') }}" class="rounded-lg object-contain" alt="Performance Insights - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc">
                                <li class="py-3">DevOps Research and Assessment Matrix (Dora Matrics)</li>
                                <li class="py-3">Application Performance Monitoring (APM)</li>
                                <li class="py-3">Network Performance Monitoring (NPM)</li>
                                <li class="py-3">Server Performance Monitoring</li>
                                <li class="py-3">Load Testing and Stress Testing</li>
                                <li class="py-3">Performance Profiling</li>
                            </ul>
                            <ul class="list-disc">
                                <li class="py-3">User Experience Monitoring (UEM)</li>
                                <li class="py-3">Application Profiling and Tracing</li>
                                <li class="py-3">Real User Monitoring (RUM)</li>
                                <li class="py-3">Container Orchestration Insights</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="process" role="tabpanel" aria-labelledby="process-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/software-process-image.png') }}" class="rounded-lg object-contain" alt="Software Process - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc">
                                <li class="py-3">Test-Driven Development (TDD)</li>
                                <li class="py-3">Scrum</li>
                                <li class="py-3">Kanban</li>
                                <li class="py-3">Continuous Improvement</li>
                                <li class="py-3">Devops & DecSecOps</li>
                                <li class="py-3">Rapid Application Development (RAD)</li>
                            </ul>
                            <ul class="list-disc">
                                <li class="py-3">Extreme Programming (XP)</li>
                                <li class="py-3">ITIL (Information Technology Infrastructure Library)</li>
                                <li class="py-3">CMMI (Capability Maturity Model Integration)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="security" role="tabpanel" aria-labelledby="security-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/software-security-image.jpeg') }}" class="rounded-lg object-contain" alt="Software Security - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc">
                                <li class="py-3">Network Layer Security</li>
                                <li class="py-3">Cloud Security</li>
                                <li class="py-3">Application Layer Security</li>
                                <li class="py-3">Security Information and Event Management (SIEM)</li>
                            </ul>
                            <ul class="list-disc">
                                <li class="py-3">Security Policies and Compliance</li>
                                <li class="py-3">Security Assessments and Audits</li>
                                <li class="py-3">Physical Security</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="legal" role="tabpanel" aria-labelledby="legal-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/software-legal-image.jpeg') }}" class="rounded-lg object-contain" alt="Legal Process - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc">
                                <li class="py-3">Non Disclosure</li>
                                <li class="py-3">IP Rights Transfer</li>
                                <li class="py-3">Software Licensing Agreements</li>
                                <li class="py-3">Copyright Protection</li>
                                <li class="py-3">Trademark Registration</li>
                            </ul>
                            <ul class="list-disc">
                                <li class="py-3">Patent Protection</li>
                                <li class="py-3">End-User License Agreements (EULAs)</li>
                                <li class="py-3">Data Privacy and Compliance</li>
                                <li class="py-3">Software Development Contracts</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="compliance" role="tabpanel" aria-labelledby="compliance-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/software-compliance-image.jpeg') }}" class="rounded-lg object-contain" alt="Software Compliance - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc">
                                <li class="py-3">Non Disclosure</li>
                                <li class="py-3">SOC 2 Audit (Service Organization Control 2)</li>
                                <li class="py-3">ISMS 27001 (Information Security Management System)</li>
                                <li class="py-3">NIST Cybersecurity Framework</li>
                            </ul>
                            <ul class="list-disc">
                                <li class="py-3">GDPR (General Data Protection Regulation)</li>
                                <li class="py-3">HIPAA (Health Insurance Portability and Accountability Act)</li>
                                <li class="py-3">PCI DSS (Payment Card Industry Data Security Standard)</li>
                                <li class="py-3">Accessibility Compliance (e.g., WCAG)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="innovation" role="tabpanel" aria-labelledby="innovation-tab">
                    <div class="flex justfy-between">
                        <div class="w-1/2">
                            <img src="{{ asset('assets/img/software-innovation-image.jpeg') }}" class="rounded-lg object-contain" alt="Software Innovation - Reconnaissance Technologies">
                        </div>
                        <div class="pl-8 flex justify-between w-1/2">
                            <ul class="list-disc">
                                <li class="py-3">AI/ML</li>
                                <li class="py-3">Edge Computing</li>
                                <li class="py-3">Augmented Reality (AR) and Virtual Reality (VR)</li>
                            </ul>
                            <ul class="list-disc">
                                <li class="py-3">Internet of Things (IoT)</li>
                                <li class="py-3">Low-Code and No-Code Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Capabilities Section -->

    <!-- Our Commitment Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Commitment To</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Legal and Ethical Software Product Development Practices
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Reconnaissance Technologies understands the importance of adhering to relevant laws and compliance standards in software product development. Our ‘commitment to legal integrity and ethical practices ensures that our solutions not only meet but exceed the required legal and regulatory frameworks.
                    </p>
                </div>
                <div>
                    <a href="{{ route('contact-us') }}"
                        class="p-4 border-2 border-rt-primary rounded-lg hover:bg-rt-primary text-rt-primary hover:text-white">
                        Speak to an Expert
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-violet-600 ">
                    <div class="flex items-end">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                            Data Protection and Privacy Laws
                        </h1>
                    </div>

                    <p class="py-8">
                        Strict adherence to NDPR, GDPR, CCPA, and other global data protection regulations, ensuring the highest standards of data privacy and security for user information.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-purple-900">
                    <div class="flex items-end">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Healthcare Compliance
                        </h1>
                    </div>
                    
                    <p class="py-8">
                        Adherence to HIPAA and HITECH regulations for healthcare-related software, safe guarding patient data and ensuring confidentiality and integrity.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-slate-800">
                    <div class="flex items-end">
                        <img src="{{ asset('assets/img/our-services/scalability-icon.svg') }}" class="w-20 h-20" alt="Design Scalability Solution - Reconnaissance Technologies">

                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Scalability
                        </h1>
                    </div>
                    
                    <p>
                        We utilize cloud-based arcitectures and scalable database solutions to accommodate the dynamic growth of your data infrastructure to ensure the freedom of business expansion.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-lime-500">
                    <div class="flex items-end">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Financial Regulations
                        </h1>
                    </div>

                    <p class="py-8">
                        Compliance with financial industry standards such as PCI DSS and Sarbanes-Oxley Act, ensuring secure and reliable financial transactions and data handling
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-lime-900">
                    <div class="flex items-end">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Quality and Safety Standards
                        </h1>
                    </div>

                    <p class="py-8">
                        Following ISO standards and other quality control measures to deliver safe, reliable, and high-quality software products.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-lime-900">
                    <div class="flex items-end">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Accessibility Standards
                        </h1>
                    </div>

                    <p class="py-8">
                        Commitment to WCAG and ADA standards, ensuring our software products are accessible to all users, including those with disabilties.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-lime-900">
                    <div class="flex items-end">
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Intellectual Property Rights (IPR)
                        </h1>
                    </div>

                    <p class="py-8">
                        Rigorous compliance with IPR laws, respecting and protecting the intellectual property rights of clients and third parties.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Commitment Section -->
</main>
@endsection