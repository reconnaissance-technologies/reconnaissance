<nav class="px-16 fixed w-full z-20 top-0 start-0 text-white">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto py-1">
        <!-- Logo Section -->
        <div class="relative block lg:w-52 md:w-40 sm:w-32">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/img/logo-mixed.svg') }}"
                    class="hidden dark:block logo-mixed object-contain" alt="Reconnaissance Technologies Logo"
                    title="Reconnaissance Technologies Logo">
                <img src="{{ asset('assets/img/logo-dark.svg') }}"
                    class="logo-dark dark:hidden object-contain" alt="Reconnaissance Technologies Logo"
                    title="Reconnaissance Technologies Logo">
            </a>
        </div>
        <!-- End of Logo Section -->

        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <!-- Dark Mode Toggle Switch -->
            <button id="theme-toggle" type="button"
                class="px-3 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
            <!-- End of Dark Mode Toggle Switch -->

            <!-- CTA Button -->
            <a href="{{ route('contact-us') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get
                in Touch</a>
            <!-- End of CTA Button -->

            <!-- Hamburger Menu -->
            <button data-collapse-toggle="mega-menu" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <!-- End of Hamburger Menu -->
        </div>

        <!-- Mega Menu Section -->
        <div id="mega-menu" class="pt-4 items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <!-- Services Menu -->
                <li  class="hoverable hover:border-t-2 hover:border-t-rt-primary">
                    <a href="javascript://" class="relative block lg:p-6 text-sm lg:text-base font-bold uppercase">
                        Services
                    </a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl text-black  bg-white">
                        <div class="container w-full flex flex-wrap justify-between mx-2">
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Offering</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="{{ route('services.product-design') }}" class="hover:border-b-rt-primary hover:border-b-2">Product Design</a></li>
                                        <li class="py-1"><a href="{{ route('services.software-devlopment') }}" class="hover:border-b-rt-primary hover:border-b-2">Software Development</a></li>
                                        <li class="py-1"><a href="{{ route('services.web-app') }}" class="hover:border-b-rt-primary hover:border-b-2">Web Application Development</a></li>
                                        <li class="py-1"><a href="{{ route('services.mobile-app') }}" class="hover:border-b-rt-primary hover:border-b-2">Mobile App Development</a></li>
                                        <li class="py-1"><a href="{{ route('services.frontend-development') }}" class="hover:border-b-rt-primary hover:border-b-2">Frontend Development</a></li>
                                        <li class="py-1"><a href="{{ route('services.cloud-infrastructure') }}" class="hover:border-b-rt-primary hover:border-b-2">Cloud & Infrastructure</a></li>
                                        <li class="py-1"><a href="{{ route('services.cybersecurity') }}" class="hover:border-b-rt-primary hover:border-b-2">Cybersecurity</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Trending Services</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="{{ route('services.ar-vr-development') }}" class="hover:border-b-rt-primary hover:border-b-2">AR/VR Development</a></li>
                                        <li class="py-1"><a href="{{ route('services.ai-ml-development') }}" class="hover:border-b-rt-primary hover:border-b-2">AI/ML Development</a></li>
                                        <li class="py-1"><a href="{{ route('services.iot-development') }}" class="hover:border-b-rt-primary hover:border-b-2">IOT Development</a></li>
                                        <li class="py-1"><a href="{{ route('services.chatbot-development') }}" class="hover:border-b-rt-primary hover:border-b-2">Chatbot Development</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Industries We Serve</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="{{ route('industries.media-and-entertainment') }}" class="hover:border-b-rt-primary hover:border-b-2">Media & Enterntainment</a></li>
                                        <li class="py-1"><a href="{{ route('industries.education') }}" class="hover:border-b-rt-primary hover:border-b-2">Education</a></li>
                                        <li class="py-1"><a href="{{ route('industries.healthcare') }}" class="hover:border-b-rt-primary hover:border-b-2">Healthcare</a></li>
                                        <li class="py-1"><a href="{{ route('industries.hi-tech') }}" class="hover:border-b-rt-primary hover:border-b-2">Hi-Tech</a></li>
                                        <li class="py-1"><a href="{{ route('industries.logistics') }}" class="hover:border-b-rt-primary hover:border-b-2">Logistics</a></li>
                                        <li class="py-1"><a href="{{ route('industries.real-estate') }}" class="hover:border-b-rt-primary hover:border-b-2">Real Estate & Construction</a></li>
                                        <li class="py-1"><a href="{{ route('industries.retail-ecommerce') }}" class="hover:border-b-rt-primary hover:border-b-2">Retail & eCommerce</a></li>
                                        <li class="py-1"><a href="{{ route('industries.travel-hospitality') }}" class="hover:border-b-rt-primary hover:border-b-2">Travel & Hospitality</a></li>
                                        {{-- <li class="py-1"><a href="{{ route('industries.utilities') }}" class="hover:border-b-rt-primary hover:border-b-2">Utilities & On-Demand</a></li> --}}
                                        {{-- <li class="py-1"><a href="{{ route('industries.fintech') }}" class="hover:border-b-rt-primary hover:border-b-2">FinTech</a></li> --}}
                                        {{-- <li class="py-1"><a href="{{ route('industries.automotive') }}" class="hover:border-b-rt-primary hover:border-b-2">Automotive</a></li> --}}
                                        {{-- <li class="py-1"><a href="{{ route('industries.mining-agriculture') }}" class="hover:border-b-rt-primary hover:border-b-2">Mining & Agriculture</a></li> --}}
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="lg:pb-12">
                                    <div class="flex items-center">
                                        <h3 class="font-bold text-lg text-bold mb-2 uppercase">Service Models</h3>
                                    </div>
                                    <p class="text-sm">
                                        <ul>
                                            <li class="py-1"><a href="{{ route('sm.delivery') }}" class="hover:border-b-rt-primary hover:border-b-2">Global Delivery Model</a></li>
                                            <li class="py-1"><a href="{{ route('sm.engagement') }}" class="hover:border-b-rt-primary hover:border-b-2">Engagement Model</a></li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="flex-col pt-12 justify-between">
                                    <div class="flex items-center">
                                        <h3 class="font-bold text-lg text-bold mb-2 uppercase">Talk to an Expert</h3>
                                    </div>
                                    <p class="text-sm">
                                        One of our experts would love to respond to your queries
                                    </p>
                                    <p class="py-6">
                                        <!-- CTA Button -->
                                        <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                            Speak to an Expert
                                        </a>
                                        <!-- End of CTA Button -->
                                    </p>
                                </div>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- End of Services Menu Section -->

                <!-- Our Solutions Menu -->
                <li  class="hoverable hover:border-t-2 hover:border-t-rt-primary">
                    <a href="javascript://" class="relative block lg:p-6 text-sm lg:text-base font-bold uppercase">
                        Solutions
                    </a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl text-black bg-white">
                        <div class="container w-full flex flex-wrap justify-between mx-2">
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Product Offerings</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="{{ route('po.expresso-ai') }}" class="hover:border-b-rt-primary hover:border-b-2">Expresso AI</a></li>
                                        <li class="py-1"><a href="{{ route('po.buzzforge') }}" class="hover:border-b-rt-primary hover:border-b-2">BuzzForge</a></li>
                                        <li class="py-1"><a href="{{ route('po.inventify-plus') }}" class="hover:border-b-rt-primary hover:border-b-2">Inventify Plus</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Solutions</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">ERP Software</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Hospital Management</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Multi-vendor eCommerce Solution</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Real Estate Management</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Warehouse & Logistics Solution</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/2 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Products & Solutions Overview</h3>
                                </div>
                                <p class="text-sm">
                                    
                                </p>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- End of Our Solutions Menu -->

                <!-- Our Work Menu -->
                <li  class="hoverable hover:border-t-2 hover:border-t-rt-primary">
                    <a href="javascript://" class="relative block lg:p-6 text-sm lg:text-base font-bold uppercase">
                        Our Work
                    </a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl text-black  bg-white">
                        <div class="container w-full flex flex-wrap justify-between mx-2">
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Testimonials</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Product Design</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Software Development</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Web Application Development</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Frontend Development</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Cloud & Infrastructure</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Penetration Testing & Cybersecurity</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Case Studies</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">AR/VR Development</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">AI/ML Development</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">IOT Development</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Chatbot Development</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Portfolio</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Media & Enterntainment</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Education</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Healthcare</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Hi-Tech</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Logistics</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Manufacturing</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Real Estate & Construction</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Retail & eCommerce</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Travel & Hospitality</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Utilities & On-Demand</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">FinTech</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Automotive</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Mining & Agriculture</a></li>
                                    </ul>
                                </p>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- End of Our Work Menu -->
                
                <!-- Who We Are Menu -->
                <li  class="hoverable hover:border-t-2 hover:border-t-rt-primary">
                    <a href="javascript://" class="relative block lg:p-6 text-sm lg:text-base font-bold uppercase">
                        Who We Are
                    </a>
                    <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl text-black  bg-white">
                        <div class="container w-full flex flex-wrap justify-between mx-2">
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Overview</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">About Us</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Our Infrastructure</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Our Team</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Development Methodology</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Certifications</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Alliances</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Career Overview</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Contact Us</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Insights</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Awards</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Media Coverage</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Events & Celebrations</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">C S R</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">FAQs</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Blogs</a></li>
                                        <li class="py-1"><a href="" class="hover:border-b-rt-primary hover:border-b-2">Webinar</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/2 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase"></h3>
                                </div>
                                <p class="text-sm">
                                    <img class="rounded-xl" src="{{ asset('assets/img/festives/happy-holidays.jpg') }}" alt="Happy Holidays" title="Thank You & Happy Holidays">
                                </p>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- End of Who We Are Menu -->
            </ul>
        </div>
        <!-- End of Mega Menu Section -->
    </div>
</nav>