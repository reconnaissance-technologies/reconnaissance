@extends('layouts.general')

@section('meta-description', 'Contact us for your web and mobile app development requirements. You can also contact us for any of your software projects.')
@section('meta-keywords', 'contact us, contact us Email, contact Reconnaissance Technologies')
@section('robots', 'index, follow')
@section('og-title', 'Contact Us to Build Your Web, Mobile Application, and General Software | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('contact-us') }}")
@section('og-description', 'Contact us for your web and mobile app development requirements. You can also contact us for any of your software projects.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Contact Us to Build Your Web, Mobile Application, and General Software - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="bg-gradient-to-tr from-violet-200 to-slate-700 px-16">
        <!-- hero section content goes here -->
        <div class="w-full lg:flex justify-between items-center">
            <div class="w-full lg:w-1/2 md:w1/2 lg:pt-32 my-16">
                <!-- hero section description goes here -->
                <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">
                    Get a Quote
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Committed to serving clients with the best solutions across markets with international ventures
                    <br>
                    Please fill in the form and our representative will get back to you.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-6 text-rt-primary hover:text-white hover:bg-rt-primary border border-rt-primary rounded-md">
                        <p class="py-4 text-5xl font-bold text-center">Availability</p>
                        <hr class="bg-rt-primary h-1">
                        <p class="py-4 font-bold text-center">Available to respond to you in the shortest possible time.</p>
                    </div>
                    <div class="p-6 text-rt-primary border hover:text-white border-rt-primary hover:bg-rt-primary rounded-md">
                        <p class="py-4 text-5xl font-bold text-center">6+ Awards</p>
                        <hr class="bg-rt-primary h-1">
                        <p class="py-4 font-bold text-center">Awards that epitomize quality and dedication</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 mx-10 mt-48 mb-24">
                <div class="absolute lg:w-[600px] xl:w-[600px] 2xl:w-[600px] top-44 p-4 bg-white border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    @include('inc.get-a-quote-form')
                </div>
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Contact Overflow Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <div class="w-1/2 grid grid-cols-2 gap-4">
                <div>
                    <h3 class="text-rt-primary text-xl uppercase font-semibold">Nigeria</h3>
                    <p class="font-bold">
                        Work and Connect Building, <br>
                        No 50, Ebitu Ukiwe Street, <br>
                        Jabi, Abuja - 900108 <br><br>
                        
                    </p>
                </div>
                <div>
                    <h3 class="text-rt-primary text-xl uppercase font-semibold">Quick Contact</h3>
                    <p class="font-bold">
                        +234 708 063 9008<br>
                        {{-- No 50, Ebitu Ukiwe Street, <br>
                        Jabi, Abuja - 900108 <br><br> --}}
                        
                    </p>
                </div>
                <div>
                    <h3 class="text-rt-primary text-xl uppercase font-semibold">Career Opportunities</h3>
                    <p class="font-bold">
                        <a href="mailto:hr@reconnaissancetechnologies.com">hr@reconnaissancetechnologies.com</a>
                    </p>
                </div>
                <div>
                    <h3 class="text-rt-primary text-xl uppercase font-semibold">General Enquiries</h3>
                    <p class="font-bold">
                        <a href="mailto:enquiries@reconnaissancetechnologies.com">enquiries@reconnaissancetechnologies.com</a>    
                    </p>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/2 py-8 p-6">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contact Overflow Section -->

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

    <!-- Here to Help Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                We Commit to Delivering The Best
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        We listen and analyze your requirements, and suggest the best approach to a successful execution of your project.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black lg:text-xl">
                        Share Your Requirement
                    </h1>
                    
                    <p>
                        We keenly analyze your requirements from the beginning for a seamless development process.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black lg:text-xl lg:w-50">
                        Non-Disclosure Agreement (NDA)
                    </h1>

                    <p>
                        To give you the confidence that your business ideas are safe with us, we sign and assure our confidentiality with an NDA
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black lg:text-xl">
                        Deep Dive Into Your Requirement
                    </h1>
                    
                    <p>
                    With you requirement in our possession, our team of experts is allocated for consultation and best approach possible towards the delivery of your project.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Here to Help Section -->
</main>
@endsection