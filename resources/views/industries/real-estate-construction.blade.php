@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technoogies offers real estate software solutions for Estate planning and wealth preservation. Our real estate software development services are fully flexible with strict regulatory standards essential to the real estate. To get reliable real estate software solutions for streamlining the residential, commercial and other related real estate IT services.')
@section('meta-keywords', 'Enterprise Solutions for Real Estate, property management software solutions, Managed IT Services for Real Estate, Facility &amp; Asset Management, Real Estate Software Implementation, Custom Real Estate Software')
@section('robots', 'index, follow')
@section('og-title', 'Real Estate Software Solutions | IT Solutions for Real Estate Industr | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.real-estate') }}")
@section('og-description', 'Reconnaissance Technoogies offers real estate software solutions for Estate planning and wealth preservation. Our real estate software development services are fully flexible with strict regulatory standards essential to the real estate. To get reliable real estate software solutions for streamlining the residential, commercial and other related real estate IT services.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Real Estate Software Solutions | IT Solutions for Real Estate Industry - Reconnaissance Technologies')

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
                    Real Estate & Construction Software Solutions
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Transforming the Real Estate Industry with technology solutions to streamline real estate process and smarter collaboration between customers, agents, real estate companies and brokers.
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
                <img src="{{ asset('assets/img/real-estate-construction-image.png') }}"
                    class="object-fill" alt="Real Estate & Construction - Reconnaissance Technologies">
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
                        Real estate technology solutions to simplify all transactions, while maintaining accuracy.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700 w-[500]">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/properties-published-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        60k+ Properties Published
                    </h1>

                    <p>
                        Listed and published properties across our solutions
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/properties-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        10k+ Deals Closed
                    </h1>
                    
                    <p>
                        Property deals closed across all solutions
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/brokers-icon.png') }}" class="object-contain"
                            alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        800+ Brokers
                    </h1>
                    
                    <p>
                        Effortless work and management for brokers
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/agreement-icon.png') }}" class="object-contain" alt="">
                    </div>
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        40k+ Agreements Signed
                    </h1>

                    <p>
                        Secure transactions and agreements
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Real Estate and Construction Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Real Estate & Construction Technology Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Cost-effective real estate and property solutions to give your organization a distinct edge and bring about transformation by optimizing results.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-violet-600 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Property Marketplace
                    </h1>

                    <p>
                        Get your real estate property listings in front of interested browsers to buy, sell, and rent residential and commercial properties
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-900">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        AR/VR Property Tool
                    </h1>
                    
                    <p>
                        AR/VR property tools to give clients an immersive and interactive walkthrough of the property, anytime, anywhere.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-slate-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Estate Management Tool
                    </h1>
                    
                    <p>
                        Estate management tool allow for property owners to manage property requests from rental, agreement, security, maintenance, etc.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-lime-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Property Auction Portal
                    </h1>

                    <p>
                        Bidding engine and a common platform to display details of properties to be auctioned online.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Real Estate and Construction Solutions Section -->
</main>
@endsection