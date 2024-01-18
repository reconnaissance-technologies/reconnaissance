@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies has partnered with microsoft, Google, AWS and other top development programs. We are commited to provide top IT services and enterprise solutions that enable our clients to address their IT challenges.')
@section('meta-keywords', 'partner, alliances, partnering, partners, alliance partners, technology alliance, technology alliance partner')
@section('robots', 'index, follow')
@section('og-title', 'Technology Partners, Alliances | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('partnerships') }}")
@section('og-description', 'Reconnaissance Technologies has partnered with microsoft, Google, AWS and other top development programs. We are commited to provide top IT services and enterprise solutions that enable our clients to address their IT challenges.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Technology Partners, Alliances - Reconnaissance Technologies')

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
                    Technology Partnerships
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Partnering for Technical Excellence & Innovation to Unlock New Era of Possibilities
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->
            </div>
            <div class="w-full lg:w-1/2 my-32">
                <img src="{{ asset('assets/img/partnerships-image.webp') }}"
                    class="object-fill" alt="Partnerships - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Our Partnership Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Technology Partnerships to Generate Sustainable Business Value
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Our alliances provide access to a wealth of diverse tools and resources to develop high-quality solutions that align with client needs, ultimately resulting in business success.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-4 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/partnerships/android.jpeg') }}" alt="">
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/partnerships/aws.png') }}" alt="">
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/partnerships/google.png') }}" alt="">
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/partnerships/google.webp') }}" alt="">
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/partnerships/microsoft.png') }}" alt="">
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/partnerships/ios.png') }}" alt="">
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/partnerships/laravel.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Partnership Section -->
</main>
@endsection