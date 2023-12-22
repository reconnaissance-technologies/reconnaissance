@extends('layouts.general')

@section('meta-description', 'Best IT solutions for travel & hospitality industry form top travel & hospitality development company. Get in touch for your travel, tourism & hotel app development services.')
@section('meta-keywords', 'hospitality it solutions, hospitality solutions company, hotel and travel solutions, Hospitality Solutions Enhance Hotel, Travel and Hospitality Industry Solutions, smart hotel solutions')
@section('robots', 'index, follow')
@section('og-title', 'Travel & Hospitality Industry IT Solutions & Services | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.travel-hospitality') }}")
@section('og-description', 'Best IT solutions for travel & hospitality industry form top travel & hospitality development company. Get in touch for your travel, tourism & hotel app development services.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Travel & Hospitality Industry IT Solutions & Services - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="bg-gradient-to-tr from-violet-200 to-slate-700 px-16">
        <!-- hero section content goes here -->
        <div class="w-full lg:flex items-center">
            <div class="w-full lg:w-1/2 md:w1/2 lg:pt-32 my-24">
                <!-- hero section description goes here -->
                <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">
                    Travel & Hospitality Solutions
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Aiding travel agencies, hospitality providers, travellers and airlines by leveraging on advanced technology solutions.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->

            </div>
            <div class="w-full lg:w-1/2 pt-28">
                <img src="{{ asset('assets/img/travel-hospitality-image.png') }}"
                    class="object-fill" alt="Travel & Hospitality - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Significant Achievements Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">What We've Achieved</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Our Significant achievements in this industry
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Cutting-edge technologies revolutionizing the travel and hospitality industry
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700 w-[500]">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/flight-bookings-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        2k+ Booked Flights
                    </h1>

                    <p>
                        Fully integrated solutions with top-tier flight booking service providers
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/travel-service-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        150k+ Service Bookings
                    </h1>
                    
                    <p>
                        Onine bookings to find preferential travel services and providers
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/domain-experts-icon.png') }}" class="object-contain"
                            alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        42+ Domain Experts
                    </h1>
                    
                    <p>
                        Experts with trechnology expertise in the travel domain
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/travel-projects-icon.png') }}" class="object-contain" alt="">
                    </div>
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        30+ Travel Projects
                    </h1>

                    <p>
                        Proven track record of successfully delivering fully functional travel solutions
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Travel and Hospitality Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Travel and Hospitality Software Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Travel application development for the Travel & Hospitality industry including Air Transport, Hotel Car Rental, Travel Management & Services all over the world
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-violet-600 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Hotel Booking Portal
                    </h1>

                    <p>
                        Custom hotel booking app providing real-time availability of rooms, comparison between hotels and checkout options.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-900">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Flight Booking Portal
                    </h1>
                    
                    <p>
                        Flight Booking Engine B2B and B2C travel portal with complete, comparative Airline information and fares of all flights with quick payment option.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-slate-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Taxi Booking Application
                    </h1>
                    
                    <p>
                        On demand taxi booking application for iOS and Android with a host of features such as in-app calling, carpooling, time & cost estimate and more.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-lime-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Places of Interest Apps
                    </h1>

                    <p>
                        Attraction / Shops / Restaurant / Club Directory bifurcated in Categories
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Travel and Hospitality Solutions Section -->
</main>
@endsection