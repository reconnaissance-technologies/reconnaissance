<nav class="px-16 fixed w-full z-20 top-0 start-0 text-white">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto py-1">
        <!-- Logo Section -->
        <div class="relative block lg:w-52 md:w-40 sm:w-32">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/img/logo-mixed.svg') }}" class="dark:block logo-mixed object-contain" alt="Reconnaissance Technologies Logo" title="Reconnaissance Technologies Logo">
                <img src="{{ asset('assets/img/logo-dark.svg') }}" class="logo-dark hidden dark:hidden object-contain" alt="Reconnaissance Technologies Logo" title="Reconnaissance Technologies Logo">
            </a>
        </div>
        <!-- End of Logo Section -->

        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <!-- CTA Button -->
            <a href="{{ route('contact-us') }}" class="bg-white hover:bg-rt-primary text-rt-primary hover:text-rt-white font-bold py-2 px-4 rounded inline-flex items-center">
                <span>Get in Touch</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>                      
            </a>
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
                                        <li class="py-1"><a href="{{ route('po.magico') }}" class="hover:border-b-rt-primary hover:border-b-2">Mágico<sup class="text-red-500 animate-pulse">new</sup></a></li>
                                        <li class="py-1"><a href="{{ route('po.buzzforge') }}" class="hover:border-b-rt-primary hover:border-b-2">BuzzForge<sup class="text-red-500 animate-pulse">new</sup></a></li>
                                        <li class="py-1"><a href="{{ route('po.stoqit') }}" class="hover:border-b-rt-primary hover:border-b-2">Stoqit</a></li>
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
                                <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-60 overflow-hidden rounded-lg md:h-60">
                                        <!-- Item 1 -->
                                        <div class="hidden duration-700 ease-linear" data-carousel-item>
                                            <p class="text-sm font-bold font-italic italic">
                                                Excellent team with superb service delivery and attention to details. Their personalized touch towards project execution made us comfortable.

                                                <br>
                                                <br>
                                                Don Williams,<br/>
                                                BlissTribe Movement,<br/>
                                                Scotland, UK
                                            </p>
                                        </div>
                                        <!-- Item 2 -->
                                        <div class="hidden duration-700 ease-linear" data-carousel-item>
                                            <p class="text-sm font-bold font-italic italic">
                                                Easy to deal with, swift to revert and their approach to our ecommerce website and CRM development is commendable.
                                                <br>
                                                <br>
                                                Deborah Ayigbi,<br/>
                                                Lagos, Nigeria
                                            </p>
                                        </div>
                                        <!-- Item 3 -->
                                        <div class="hidden duration-700 ease-linear" data-carousel-item>
                                            <p class="text-sm font-bold font-italic italic">
                                                Working together with them is simple. thanks to Reconnaissance Technologies. They take a professional approach to their work. They are excellent communicators and constantly keep you up to date on any tasks or new developments.
                                                <br>
                                                <br>
                                                Joan Ewuruje,<br/>
                                                Ultrashot,<br/>
                                                Abuja, Nigeria
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Case Studies</h3>
                                </div>
                                <div class="hover:bg-gray-500 hover:rounded-md p-3">
                                    <a href="{{ route('work.case-studies') }}">
                                        <p class="text-sm hover:rounded-md hover:shadow-round">
                                            <img src="{{ asset('assets/img/case-study.jpg') }}" class="hover:rounded-md" alt="Case Studies - Reconnaissance Technologies">
                                        </p>
                                    </a>
                                </div>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Portfolio</h3>
                                </div>
                                <div class="hover:bg-gray-500 hover:rounded-md p-3">
                                    <a href="{{ route('work.portfolio') }}">
                                        <p class="text-sm hover:rounded-md hover:shadow-round">
                                            <img src="{{ asset('assets/img/portfolio-image.png') }}" class="hover:rounded-md" alt="Case Studies - Reconnaissance Technologies">
                                        </p>
                                    </a>
                                </div>
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
                                        <li class="py-1"><a href="{{ route('about-us') }}" class="hover:border-b-rt-primary hover:border-b-2">About Us</a></li>
                                        <li class="py-1"><a href="{{ route('development-methodology') }}" class="hover:border-b-rt-primary hover:border-b-2">Development Methodology</a></li>
                                        <li class="py-1"><a href="{{ route('certifications') }}" class="hover:border-b-rt-primary hover:border-b-2">Certifications</a></li>
                                        <li class="py-1"><a href="{{ route('partnerships') }}" class="hover:border-b-rt-primary hover:border-b-2">Partnerships</a></li>
                                        <li class="py-1"><a href="{{ route('career-overview') }}" class="hover:border-b-rt-primary hover:border-b-2">Career Overview</a></li>
                                        <li class="py-1"><a href="{{ route('contact-us') }}" class="hover:border-b-rt-primary hover:border-b-2">Contact Us</a></li>
                                    </ul>
                                </p>
                            </ul>
                            <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 pb-6 pt-6 lg:pt-3">
                                <div class="flex items-center">
                                    <h3 class="font-bold text-lg text-bold mb-2 uppercase">Insights</h3>
                                </div>
                                <p class="text-sm">
                                    <ul>
                                        <li class="py-1"><a href="{{ route('awards') }}" class="hover:border-b-rt-primary hover:border-b-2">Awards</a></li>
                                        <li class="py-1"><a href="{{ route('media-coverage') }}" class="hover:border-b-rt-primary hover:border-b-2">Media Coverage</a></li>
                                        <li class="py-1"><a href="{{ route('events') }}" class="hover:border-b-rt-primary hover:border-b-2">Events & Celebrations</a></li>
                                        <li class="py-1"><a href="{{ route('csr') }}" class="hover:border-b-rt-primary hover:border-b-2">C S R</a></li>
                                        <li class="py-1"><a href="{{ route('blog') }}" class="hover:border-b-rt-primary hover:border-b-2">Blogs</a></li>
                                        <li class="py-1"><a href="{{ route('webinars') }}" class="hover:border-b-rt-primary hover:border-b-2">Webinar</a></li>
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