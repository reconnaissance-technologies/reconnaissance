@extends('layouts.general')

@section('meta-description', 'About Reconnaissance Technologies: We are a Trusted Web &amp; Mobile App Development Company in Nigeria that help businesses build top-notch software and create their success through technology.')
@section('meta-keywords', 'Reconnaissance Technologies, Company Overview, Why Reconnaissance Technologies, Top Software company in Nigeria, Best app development company in Nigeria, Nigeria software company')
@section('robots', 'index, follow')
@section('og-title', 'About Reconnaissance Technologies | Web and Mobile App Development Company')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('about-us') }}")
@section('og-description', 'About Reconnaissance Technologies: We are a Trusted Web &amp; Mobile App Development Company in Nigeria that help businesses build top-notch software and create their success through technology.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'About Reconnaissance Technologies | Web and Mobile App Development Company')

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
                    Company Overview
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Reconnaissance Technologies, a company creating new capabilities and responding to technology needs of tomorrow, today
                </p>
            </div>
            <div class="w-full lg:w-1/2 mt-[350px] right-0">
                <img src="{{ asset('assets/img/company-overview.png') }}"
                    class="object-fill scale-x-150" alt="Company Overview - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Overview Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Overview</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Leveraging Technology to Empower Individuals, Businesses & Governments
            </h1>
            <div class="flex justify-between">
                <div class="w-1/2 py-8 p-6 text-2xl">
                    <p class="border-l-8 border-l-rt-primary">
                        Reconnaissance Technologies propels businesses to the summit of success through innovative technology solutions.
                    </p>
                </div>
                <div class="w-1/2 py-8 p-6">
                    <h1 class="text-xl font-bold mt-2 mb-2">
                        Paving the Way for a New Era in Digital Transformation
                    </h1>
                    <p class="pb-8">
                        Established in 2020, Reconnaissance Technologies has experienced remarkable growth, serving clients in 10 countries. Our comprehensive suite of IT services and industry-tailored solutions extends to over 39 domains globally. Catering to SMEs, MSMEs, and large enterprises, Reconnaissance Technologies empowers organizations to expedite growth and unlock untapped potential. Leveraging profound industry insights and advanced technical capabilities, we concentrate on delivering tangible value through digital transformation. Our proficiency in emerging technologies positions us to guide diverse industries through crucial advancements.
                    </p>

                    <!-- CTA Button -->
                    <a href="{{ route('contact-us') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-4 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Get in Touch
                    </a>
                <!-- End of CTA Button -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Overview Section -->

    <!-- Watch word Section -->
    <section class=" h-48 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <p class="text-lg font-bold">
                Our Watch Word
            </p>
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Innovation, Integrity, Excellence, Collaboration
            </h1>
        </div>
    </section>
    <!-- End of Watch word Section -->

    <!-- Our Team Section -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Management Team</h2>
                <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
            </div> 
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <div class="w-full items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-1/2">
                        <a href="javascript:;">
                            <img class="w-64 rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ asset('assets/img/team/Timmy.jpg') }}" alt="Timmy Iwoni">
                        </a>
                    </div>
                    <div class="w-1/2 p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="javascript:;">Timmy Iwoni</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CEO & CTO</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                            With a keen eye for emerging trends and a passion for pushing boundaries, Timmy ensures Reconnaissance Technologies remains at the forefront.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="https://www.facebook.com/tbone4pd/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/codemaverick69" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <path id="Logo_00000038394049246713568260000012923108920998390947_" d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/timmy-iwoni-b4727a42/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262"/>
                                            <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463"/>
                                            <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
                <div class="w-full items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-1/2">
                        <a href="javascript:;">
                            <img class="w-64 rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ asset('assets/img/team/Favour.jpg') }}" alt="Favour Iwoni">
                        </a>
                    </div>
                    <div class="w-1/2 p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Favour Iwoni</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CISO</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                            With a focus on safeguarding sensitive information and mitigating cybersecurity threats, Favour leads the charge in developing and implementing robust security measures.
                        </p>
                        <ul class="flex space-x-4 sm:mt-0">
                            {{-- <li>
                                <a href="https://www.facebook.com/tbone4pd/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/codemaverick69" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <path id="Logo_00000038394049246713568260000012923108920998390947_" d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z"/>
                                    </svg>
                                </a>
                            </li> --}}
                            <li>
                                <a href="https://www.linkedin.com/in/favour-iwoni-181693112" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262"/>
                                            <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463"/>
                                            <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
                <div class="w-full items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-1/2">
                        <a href="javascript:;">
                            <img class="w-64 rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{ asset('assets/img/team/Oshione.jpg') }}" alt="Oshione Iwoni">
                        </a>
                    </div>
                    <div class="w-1/2 p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Oshione Iwoni</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CFO</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">
                            With a strategic approach to financial management, Oshione oversees the company's fiscal operations, ensuring financial stability, driving growth initiatives, and maximizing profitability while maintaining fiscal responsibility.
                        </p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="https://www.facebook.com/tbone4pd/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/codemaverick69" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <path id="Logo_00000038394049246713568260000012923108920998390947_" d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/timmy-iwoni-b4727a42/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262"/>
                                            <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463"/>
                                            <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-96 rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
                    </a>
                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">Lana Byrd</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Lana drives the technical strategy of the flowbite platform and brand.</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a href="https://www.facebook.com/tbone4pd/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path d="M24,12.073c0,5.989-4.394,10.954-10.13,11.855v-8.363h2.789l0.531-3.46H13.87V9.86c0-0.947,0.464-1.869,1.95-1.869h1.509   V5.045c0,0-1.37-0.234-2.679-0.234c-2.734,0-4.52,1.657-4.52,4.656v2.637H7.091v3.46h3.039v8.363C4.395,23.025,0,18.061,0,12.073   c0-6.627,5.373-12,12-12S24,5.445,24,12.073z"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/codemaverick69" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <path id="Logo_00000038394049246713568260000012923108920998390947_" d="M21.543,7.104c0.014,0.211,0.014,0.423,0.014,0.636  c0,6.507-4.954,14.01-14.01,14.01v-0.004C4.872,21.75,2.252,20.984,0,19.539c0.389,0.047,0.78,0.07,1.172,0.071  c2.218,0.002,4.372-0.742,6.115-2.112c-2.107-0.04-3.955-1.414-4.6-3.42c0.738,0.142,1.498,0.113,2.223-0.084  c-2.298-0.464-3.95-2.483-3.95-4.827c0-0.021,0-0.042,0-0.062c0.685,0.382,1.451,0.593,2.235,0.616  C1.031,8.276,0.363,5.398,1.67,3.148c2.5,3.076,6.189,4.946,10.148,5.145c-0.397-1.71,0.146-3.502,1.424-4.705  c1.983-1.865,5.102-1.769,6.967,0.214c1.103-0.217,2.16-0.622,3.127-1.195c-0.368,1.14-1.137,2.108-2.165,2.724  C22.148,5.214,23.101,4.953,24,4.555C23.339,5.544,22.507,6.407,21.543,7.104z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/timmy-iwoni-b4727a42/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" class="w-5 h-5" xml:space="preserve">
                                        <g>
                                            <path id="Path_2525" d="M23.002,21.584h0.227l-0.435-0.658l0,0c0.266,0,0.407-0.169,0.409-0.376c0-0.008,0-0.017-0.001-0.025   c0-0.282-0.17-0.417-0.519-0.417h-0.564v1.476h0.212v-0.643h0.261L23.002,21.584z M22.577,20.774h-0.246v-0.499h0.312   c0.161,0,0.345,0.026,0.345,0.237c0,0.242-0.186,0.262-0.412,0.262"/>
                                            <path id="Path_2520" d="M17.291,19.073h-3.007v-4.709c0-1.123-0.02-2.568-1.564-2.568c-1.566,0-1.806,1.223-1.806,2.487v4.79H7.908   V9.389h2.887v1.323h0.04c0.589-1.006,1.683-1.607,2.848-1.564c3.048,0,3.609,2.005,3.609,4.612L17.291,19.073z M4.515,8.065   c-0.964,0-1.745-0.781-1.745-1.745c0-0.964,0.781-1.745,1.745-1.745c0.964,0,1.745,0.781,1.745,1.745   C6.26,7.284,5.479,8.065,4.515,8.065L4.515,8.065 M6.018,19.073h-3.01V9.389h3.01V19.073z M18.79,1.783H1.497   C0.68,1.774,0.01,2.429,0,3.246V20.61c0.01,0.818,0.68,1.473,1.497,1.464H18.79c0.819,0.01,1.492-0.645,1.503-1.464V3.245   c-0.012-0.819-0.685-1.474-1.503-1.463"/>
                                            <path id="Path_2526" d="M22.603,19.451c-0.764,0.007-1.378,0.633-1.37,1.397c0.007,0.764,0.633,1.378,1.397,1.37   c0.764-0.007,1.378-0.633,1.37-1.397c-0.007-0.754-0.617-1.363-1.37-1.37H22.603 M22.635,22.059   c-0.67,0.011-1.254-0.522-1.265-1.192c-0.011-0.67,0.523-1.222,1.193-1.233c0.67-0.011,1.222,0.523,1.233,1.193   c0,0.007,0,0.013,0,0.02C23.81,21.502,23.29,22.045,22.635,22.059h-0.031"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>  
        </div>
    </section>
    <!-- End of Our Team Section -->
    
    <!-- Our Commitment Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Our Commitment & Dedication
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        We are deeply committed to the responsible development and deployment technologies according to ethical and societal considerations.
                    </p>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-1/2 py-8 p-6">
                    <h1 class="text-xl font-bold mt-2 mb-2">
                        Our Vision
                    </h1>
                    <p class="pb-8">
                        To be a globally recognized leader in software development, driving technological excellence, and transforming businesses through innovation
                    </p>
                </div>
                <div class="w-1/2 py-8 p-6">
                    <h1 class="text-xl font-bold mt-2 mb-2">
                        Our Mission
                    </h1>
                    <p class="pb-8">
                        At Reconnaissance Technologies, our mission is to create value for our clients by delivering superior software solutions that enhance efficiency, elevate user experiences, and contribute to the overall success of our partners. We are dedicated to fostering a culture of creativity, collaboration, and continuous learning within our team
                    </p>
                </div>
            </div>

            <h3 class="text-rt-primary text-xl uppercase font-semibold text-center">Core Values</h3>
            <h1 class="w-full text-center text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Inspire Trust and Foster an Ethical Culture to Thrive.
            </h1>

            <div class="grid grid-cols-4 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Innovation
                    </h1>
                    
                    <p>
                        We strive for continuous improvement and embrace creative solutions to meet the evolving needs of our clients.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Integrity
                    </h1>

                    <p>
                        We conduct our business with the highest ethical standards, ensuring transparency and trust in all our interactions.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Excellence
                    </h1>
                    
                    <p>
                        We are committed to delivering exceptional quality in every project, setting the benchmark for industry standards.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Collaboration
                    </h1>
                    
                    <p>
                        We value teamwork, encouraging open communication and collaboration to achieve collective success.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Commitment Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Transform Your Business
            </h1>
            <p>
                Experience the Transformational Impact of AI & ML Partner with Reconnaissance Technologies for Next-Level Business Success!
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white border bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Banner CTA Section -->

    <!-- Our Goals Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold text-center">Our Goals</h3>
            <h1 class="w-full text-center text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Setting Standards and Culture worth Emulating
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Reconnaissance Technologies is committed to maintaining ethical culture and conducting business in a transparent and ethical manner. Our values are the foundation for achieving the highest standards of quality, always promoting collaborative relationships based on trust and mutual respect.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Client Satisfaction
                    </h1>
                    
                    <p>
                        Achieve and maintain a client satisfaction rate of over 90% by delivering high-quality, innovative solutions that meet or exceed client expectations.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Employee Development
                    </h1>
                    
                    <p>
                        Foster a culture of continuous learning and development, ensuring that our team is equipped with the latest skills and knowledge in the rapidly evolving field of technology.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Market Leadership
                    </h1>

                    <p>
                        Establish Reconnaissance Technologies as a market leader by staying at the forefront of technological advancements and consistently delivering cutting-edge solutions.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Global Expansion
                    </h1>
                    
                    <p>
                        Strategically expand our presence in international markets, building a diverse portfolio of clients and projects.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Social Responsibility
                    </h1>
                    
                    <p>
                        Contribute positively to society by engaging in ethical business practices, promoting environmental sustainability, and actively participating in community initiatives.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Goals Section -->
</main>
@endsection