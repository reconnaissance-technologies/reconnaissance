@extends('layouts.general')

@section('meta-description', 'Best logistics IT and technology solutions provider in Nigeria. Our transportation & logistic software development services gives a new era to your industry.')
@section('meta-keywords', 'Logistics IT Solutions Company, Transportation &amp; Logistics Technology Solutions, logistics it solutions, logistics management system, Logistics Technology Solutions, Transportation Management Solutions')
@section('robots', 'index, follow')
@section('og-title', 'Logistics IT Solution Company, Transport Logistics IT Solutions | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.logistics') }}")
@section('og-description', 'Best logistics IT and technology solutions provider in Nigeria. Our transportation & logistic software development services gives a new era to your industry.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Logistics IT Solution Company, Transport Logistics IT Solutions - Reconnaissance Technologies')

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
                    Transport & Logistics IT Solutions
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Our expertise in integrated logistics & transport IT solutions avails us the edge to meet clients' needs and add value to their businesses in many ways than one.
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
                <img src="{{ asset('assets/img/logistics-image.webp') }}"
                    class="object-fill" alt="Transport & Logistics IT Solutions - Reconnaissance Technologies">
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
                        Technology solutions in transport & logistics industry to oversee the inward and outward flow of goods from and across various points to the desired destinations.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700 w-[500]">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/logistics-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        15k+ Shipments
                    </h1>

                    <p>
                        Timely shipment of consignments
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/logistics-icon-2.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        5k+ Active Users
                    </h1>
                    
                    <p>
                        Customers satisfaction and dependability.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/logistics-icon-3.png') }}" class="object-contain"
                            alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        420+ Driver Access
                    </h1>
                    
                    <p>
                        Drivers management and tracking solution
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/logistics-icon-4.png') }}" class="object-contain" alt="">
                    </div>
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        30+ Warehouses
                    </h1>

                    <p>
                        Making transportation and product management and inventory super easy.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Transport and Logistics Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Transport & Logistics Solutions Development
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Comprehensive technology solutions to increase real-time visibility, optimize processes, improve productivity and meet delivery benchmarks.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-violet-600 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Courier Delivery Solution
                    </h1>

                    <p>
                        Software solutions for domestic and international courier services to manage and track package delivery.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-900">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Warehouse Management Solution
                    </h1>
                    
                    <p>
                        Inbound and outbound logistics in the field of supply chain management to increase the reliability of distribution networks, as well as reduce transport and storage costs.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-slate-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Fleet Management Solution
                    </h1>
                    
                    <p>
                        Fleet management applications to monitor and manage the performance of commercial motor vehicles such as cars, vans, trucks, specialist vehicles & trailers.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-lime-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Transport Management Solution
                    </h1>

                    <p>
                        Help businesses manage, plan and optimize the physical movement of goods, both incoming and outgoing as well as compliance.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Transport and Logistics Solutions Section -->
</main>
@endsection