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
                <img src="{{ asset('assets/img/career-overview.png') }}"
                    class="object-fill" alt="Career Overview - Reconnaissance Technologies">
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
                    <a href="{{ route('our-services') }}"
                        class="p-4 border-2 border-rt-primary rounded-lg hover:bg-rt-primary text-rt-primary hover:text-white">
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
</main>
@endsection