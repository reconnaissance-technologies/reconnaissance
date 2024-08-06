@extends('layouts.general')

@section('meta-description', 'Careers at Reconnaissance Technologies - the best IT company that will take your career to the next level. Looking for career opportunities to work with us. Apply Now!')
@section('meta-keywords', 'Career Opportunities at Reconnaissance Technologies, Web Development Jobs, Web Design Jobs, It Career, It Jobs India, Career in Software Development, Job Openings at Reconnaissance Technologies')
@section('robots', 'index, follow')
@section('og-title', 'Taking your Career to New Heights | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('career-overview') }}")
@section('og-description', 'Careers at Reconnaissance Technologies - the best IT company that will take your career to the next level. Looking for career opportunities to work with us. Apply Now!')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Taking your Career to New Heights - Reconnaissance Technologies')

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
                    Career Overview
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Explore opportunities with Reconnaissance Technologies that are both challenging and rewarding. Experience collaborative and rewarding environment.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Apply Now
                    </a>
                </div>
                <!-- End of CTA Button -->
            </div>
            <div class="w-full lg:w-1/2 my-36">
                <img src="{{ asset('assets/img/career-overview.png') }}" class="object-fill" alt="Career Overview - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Overview Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Join Our Family</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Our strength comes from our people.
            </h1>
            <div class="flex justify-between">
                <div class="w-1/2 py-8 p-6 text-2xl">
                    <p class="border-l-8 border-l-rt-primary">
                        Here, It's all about exploring new ideas and believing in dreams.
                    </p>
                </div>
                <div class="w-1/2 py-8 p-6">
                    <p class="pb-8">
                        We achieve the impossible, innovate and make meaningful difference for our clients, people and the society. Together, we take bold steps, support each other, work together, and achieve shared vision. Our culture drives us and our values define us. We are driven by people to strive relentlessly and constantly innovate, improve our teams and our services to become the best
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Overview Section -->

    <!-- Watch word Section -->
    <section class=" h-48 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-full py-6">
            <p class="text-lg font-bold">
                Charting a Path to Success
            </p>
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Navigating Challenges, Seizing Opportunities, and Achieving Excellence
            </h1>
        </div>
    </section>
    <!-- End of Watch word Section -->

    <!-- Openings Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Current Openings</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Join Reconnaissance Technologies
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        We are always looking to work with talented people with an entrepreneurial outlook, a drive to succeed and the confidence to change the world with technology.
                    </p>
                </div>
                <div>
                    <a href="{{ route('our-services') }}" class="p-4 border-2 border-rt-primary rounded-lg hover:bg-rt-primary text-rt-primary hover:text-white">
                        View All Openings
                    </a>
                </div>
            </div>

            <div class="flex justify-center items-center py-8">
                <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                    No Openings Avaliable at This Time
                </h1>
            </div>
        </div>
    </section>
    <!-- End of Openings Section -->

    <!-- Our Hiring Process Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl text-center uppercase font-semibold">How We Hire</h3>
            <h1 class="w-full text-xl lg:text-4xl text-center font-bold mt-2 mb-2 lg:mb-6">
                Our Hiring Process
            </h1>
            <div class="w-full lg:w-full">
                <div class="text-center">
                    <p>
                        Come discover Hidden Brains - the best platform to take your career to new heights.
                    </p>
                </div>
            </div>

            <div class="flex justify-center items-center py-8">
                <img src="{{ asset('assets/img/hiring-process.png') }}" alt="Hiring Process - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Our Hiring Process Section -->

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