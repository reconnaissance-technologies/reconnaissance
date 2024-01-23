@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies has garnered splendid achievements in awards, accolades and certificates globally on various occasions. We leverage our perseverance and passion to excel and lead web and mobile application arena.')
@section('meta-keywords', 'Awards &amp; Accolades')
@section('robots', 'index, follow')
@section('og-title', 'Awards and Recognition | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('awards') }}")
@section('og-description', 'Reconnaissance Technologies has garnered splendid achievements in awards, accolades and certificates globally on various occasions. We leverage our perseverance and passion to excel and lead web and mobile application arena.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Awards and Recognition - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="bg-gradient-to-tr from-violet-200 to-slate-700 px-16">
        <!-- hero section content goes here -->
        <div class="w-full lg:flex items-center">
            <div class="w-full lg:w-1/2 md:w1/2 lg:pt-32 my-8">
                <!-- hero section description goes here -->
                <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">
                    Awards & Accolades
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Showcasing our prowess through awards and recognitions garnered from around the globe as leading technology & innovation at the global stage.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->
            </div>
            <div class="w-full lg:w-1/2 mt-16">
                <img src="{{ asset('assets/img/awards.png') }}"
                    class="object-fill" alt="Awards & Accolades - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Overview Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Celebrate With Us</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Awards & Accolades in recognition of our journey of excellence
            </h1>
            <div class="flex justify-between">
                <div class="w-1/2 py-8 text-2xl">
                    <p class="border-l-8 pl-3 border-l-rt-primary">
                        The awards bestowed upon us strengthen our determination to offer high-quality service to the people who matter the most – our clients.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Overview Section -->

    <!-- Awards Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        
    </section>
    <!-- End of Awards Section -->
</main>
@endsection