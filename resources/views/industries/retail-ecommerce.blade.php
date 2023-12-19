@extends('layouts.general')

@section('meta-description', 'We offer best retail IT solutions for integrated retailers, supermarket chains & distributions to reduce cost and getting better business performance. Contact Us Now for Affordable Retail Industry Technology Solutions and Services!')
@section('meta-keywords', 'Modernize the in-store experience, Digital Store of the Future, Retail Practice Solutions, customer engagement through mobility for Retail, Mobile Inventory Management, retail enterprise collaboration, integrated retail planning')
@section('robots', 'index, follow')
@section('og-title', 'Retail IT Solutions | Retail Industry Technology Solutions & Services | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.retail-ecommerce') }}")
@section('og-description', 'We offer best retail IT solutions for integrated retailers, supermarket chains & distributions to reduce cost and getting better business performance. Contact Us Now for Affordable Retail Industry Technology Solutions and Services!')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Retail IT Solutions | Retail Industry Technology Solutions & Services - Reconnaissance Technologies')

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
                    Retail & e-Commerce Solution
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Retail industry IT solutions to create an omnichannel ecosystem aimed at increasing conversions and improving user engagement.
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
                <img src="{{ asset('assets/img/retail-ecommerce-image.webp') }}"
                    class="object-fill" alt="Retail & eCommerce - Reconnaissance Technologies">
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
                        End-to-end Retail technology solutions to transform shopping experience based on customer expectations and buying preferences.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700 w-[500]">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/payments-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        20+ Payment Gateways
                    </h1>

                    <p>
                        Secure payment solutions for online transactions
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/customers-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        10M+ Customers
                    </h1>
                    
                    <p>
                        Customers reached across the globe
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/countries-icon.png') }}" class="object-contain"
                            alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        40+ Countries
                    </h1>
                    
                    <p>
                        Retail solution delivered across countries
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/deliveries-icon.png') }}" class="object-contain" alt="">
                    </div>
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        30M+ Deliveries
                    </h1>

                    <p>
                        Solution for seamless product delivery
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Retail and eCommerce Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Retail & e-Commerce Software Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        We are a retail solutions provider offering holistic support to retailers and organizations around the world to deliver excellent user experience and operate more effectively.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-violet-600 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        B2C e-commerce Platform
                    </h1>

                    <p>
                        Our online women-centric website with the option to purchase apparel, Shoes, Handbags, Sunglasses, Jewelry, etc.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-900">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Multi-vendor Marketplace
                    </h1>
                    
                    <p>
                        Our solution provides a user-friendly platform to the customer to place an online order for a range of the products available in multiple categories.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-slate-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Food Delivery Solution
                    </h1>
                    
                    <p>
                        Our solution provides an easy to use platform for the food lovers to place an online order from the nearby restaurants.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-lime-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Retail ERP Software
                    </h1>

                    <p>
                        ERP is a Business Management Solution to integrate all data and business processes across the organization to collect, manage store data from different business activities.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Retail and eCommerce Solutions Section -->
</main>
@endsection