@extends('layouts.general')

@section('meta-description', 'Specialized technology, consulting and IT solutions providers for the healthcare industry. Reconnaissance Technologies provides specialized healthcare IT solutions and support services to enterprises. Contact us today for the best medical IT solutions & services.')
@section('meta-keywords', 'healthcare it solutions provider company Nigeria, specialized healthcare it solutions company, medical software, healthcare software, telemedicine software')
@section('robots', 'index, follow')
@section('og-title', 'Specialized IT Solutions for Healthcare Industry, Medical IT Solutions & Services - Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.healthcare') }}")
@section('og-description', 'Specialized technology, consulting and IT solutions providers for the healthcare industry. Reconnaissance Technologies provides specialized healthcare IT solutions and support services to enterprises. Contact us today for the best medical IT solutions & services.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Specialized IT Solutions for Healthcare Industry, Medical IT Solutions & Services - Reconnaissance Technologies')

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
                    Healthcare Technology Solutions Provider
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Healthcare technology solutions & services to improve the patient care from hospital to home. All round hospital and healthcare management solutions.
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
                <img src="{{ asset('assets/img/telehealth.png') }}"
                    class="object-contain" alt="Healtcare - Reconnaissance Technologies">
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
                        Reconnaissance Technologies expertise in new technology in healthcare ranges from mobile devices, to connected care solutions and remote consultation.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/projects-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        20+ Projects 
                    </h1>

                    <p>
                        Record of successful healthcare projects delivered globally
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/patients-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        14k+ Patients Data
                    </h1>
                    
                    <p>
                        Patients information & data processed and securely stored
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/telecall-icon.png') }}" class="object-contain"
                            alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        20k+ Tele Calls
                    </h1>
                    
                    <p>
                        Real-time virtual consultations between doctors and patients
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/appointment-icon.png') }}" class="object-contain" alt="">
                    </div>
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        30k+ Appointments
                    </h1>

                    <p>
                        Scheduling and connecting good doctors and patient virtually and on-site.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Healthcare Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Technology Solutions for Healthcare Industry
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Healthcare solutions encompassing business consulting, application development & maintenance, testing, mobility, analytics for improved Patient outcomes & healthcare delivery.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-violet-600 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Hospital Management System
                    </h1>

                    <p>
                        Hospital Management System is robust system that facilitates hospitals to manage and control their day to day activities with patient medical history. Capable of performing multiple functions at a time
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-900">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Pharmacy Solutions
                    </h1>
                    
                    <p>
                        Online Pharmacy solution for customers to avail easy medicine delivery. Complete one stop solution for pharmacies looking to target both website and mobile application platforms.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-slate-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Health & Fitness
                    </h1>
                    
                    <p>
                        Achieve your fitness resolutions with your favorite health and wellness communities. Trainers can either live stream or upload pre-recorded videos to inspire your next fitness journey.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-lime-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Laboratory Tech Solutions
                    </h1>

                    <p>
                        A platform that enables patients to take hospital based diagnostic tests for ABPM, Sleep study, Holter, and CGM at the comfort of their home
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Healthcare Solutions Section -->
</main>
@endsection