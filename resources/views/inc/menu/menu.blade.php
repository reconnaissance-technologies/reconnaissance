<nav class="px-16 fixed w-full z-20 top-0 start-0 text-white">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto py-1">
        <!-- Logo Section -->
        <div class="relative block lg:w-52 md:w-40 sm:w-32">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/img/logo-mixed.svg') }}" class="logo-mixed object-contain" alt="Reconnaissance Technologies Logo" title="Reconnaissance Technologies Logo">
                <img src="{{ asset('assets/img/logo-dark.svg') }}" class="logo-dark hidden object-contain" alt="Reconnaissance Technologies Logo" title="Reconnaissance Technologies Logo">
            </a>
        </div>
        <!-- End of Logo Section -->

        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <!-- CTA Button -->
            <a href="{{ route('contact-us') }}" class="bg-white hover:bg-rt-primary text-rt-primary hover:text-rt-white font-bold py-2 px-4 rounded inline-flex items-center">
                <span>Get In Touch</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 rot">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>                      
            </a>
            <!-- End of CTA Button -->

            <!-- Hamburger Menu -->
            <button data-collapse-toggle="mega-menu" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
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
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 rtl:space-x-reverse">
                <!-- Services Menu -->
                @include('inc.menu.services')
                <!-- End of Services Menu Section -->

                <!-- Our Solutions Menu -->
                <li  class="hover:border-b-2 hover:border-b-rt-white">
                    <a href="{{ route('our-solutions') }}" class="relative block lg:p-6 text-sm lg:text-base font-bold">
                        Solutions
                    </a>
                </li>
                <!-- End of Our Solutions Menu -->
                
                <!-- Company Menu -->
                @include('inc.menu.company')
                <!-- End of Company Menu -->

                <!-- Industries Menu -->
                <li  class="hover:border-b-2 hover:border-b-rt-white">
                    <a href="{{ route('our-solutions') }}" class="relative block lg:p-6 text-sm lg:text-base font-bold">
                        Industries
                    </a>
                </li>
                <!-- End of Industries Menu -->

                <!-- Our Technologies Menu -->
                <li  class="hoverable hover:border-b-2 hover:border-b-rt-white">
                    <a href="{{ route('our-solutions') }}" class="relative block lg:p-6 text-sm lg:text-base font-bold">
                        Technologies
                    </a>
                </li>
                <!-- End of Our Technologies Menu -->

                <!-- Our Blog Menu -->
                <li  class="hoverable hover:border-b-2 hover:border-b-rt-white">
                    <a href="{{ route('our-solutions') }}" class="relative block lg:p-6 text-sm lg:text-base font-bold">
                        Blog
                    </a>
                </li>
                <!-- End of Our Blog Menu -->
            </ul>
        </div>
        <!-- End of Mega Menu Section -->
    </div>
</nav>