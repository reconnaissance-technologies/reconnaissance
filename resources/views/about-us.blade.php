@extends('layouts.general')

@section('meta-description', 'About Reconnaissance Technologies: We are a Trusted Web &amp; Mobile App Development Company in Nigeria that help businesses build top-notch software and create their success through technology.')
@section('meta-keywords', 'Reconnaissance Technologies, Company Overview, Why Reconnaissance Technologies, Top Software company in Nigeria, Best app development company in Nigeria, Nigeria software company')
@section('robots', 'index, follow')
@section('og-title', 'About Reconnaissance Technologies | Web and Mobile App Development Company')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('about-us') }}")
@section('og-description', 'About Reconnaissance Technologies: We are a Trusted Web &amp; Mobile App Development Company in Nigeria that help businesses build top-notch software and create their success through technology.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'About Reconnaissance Technologies | Web and Mobile App Development Company')

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
                    Company Overview
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Reconnaissance Technologies, a company creating new capabilities and responding to technology needs of tomorrow, today
                </p>
            </div>
            <div class="w-full lg:w-1/2 mt-[350px] right-0">
                <img src="{{ asset('assets/img/company-overview.png') }}"
                    class="object-fill scale-x-150" alt="Company Overview - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Overview Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Overview</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Leveraging Technology to Empower Individuals, Businesses & Governments
            </h1>
            <div class="flex justify-between">
                <div class="w-1/2 py-8 p-6 text-2xl">
                    <p class="border-l-8 border-l-rt-primary">
                        Reconnaissance Technologies propels businesses to the summit of success through innovative technology solutions.
                    </p>
                </div>
                <div class="w-1/2 py-8 p-6">
                    <h1 class="text-xl font-bold mt-2 mb-2">
                        Paving the Way for a New Era in Digital Transformation
                    </h1>
                    <p class="pb-8">
                        Established in 2020, Reconnaissance Technologies has experienced remarkable growth, serving clients in 10 countries. Our comprehensive suite of IT services and industry-tailored solutions extends to over 39 domains globally. Catering to SMEs, MSMEs, and large enterprises, Reconnaissance Technologies empowers organizations to expedite growth and unlock untapped potential. Leveraging profound industry insights and advanced technical capabilities, we concentrate on delivering tangible value through digital transformation. Our proficiency in emerging technologies positions us to guide diverse industries through crucial advancements.
                    </p>

                    <!-- CTA Button -->
                    <a href="{{ route('contact-us') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-4 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Get in Touch
                    </a>
                <!-- End of CTA Button -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Overview Section -->

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

    <!-- Our Commitment Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Our Commitment & Dedication
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        We are deeply committed to the responsible development and deployment technologies according to ethical and societal considerations.
                    </p>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-1/2 py-8 p-6">
                    <h1 class="text-xl font-bold mt-2 mb-2">
                        Our Vision
                    </h1>
                    <p class="pb-8">
                        To be a globally recognized leader in software development, driving technological excellence, and transforming businesses through innovation
                    </p>
                </div>
                <div class="w-1/2 py-8 p-6">
                    <h1 class="text-xl font-bold mt-2 mb-2">
                        Our Mission
                    </h1>
                    <p class="pb-8">
                        At Reconnaissance Technologies, our mission is to create value for our clients by delivering superior software solutions that enhance efficiency, elevate user experiences, and contribute to the overall success of our partners. We are dedicated to fostering a culture of creativity, collaboration, and continuous learning within our team
                    </p>
                </div>
            </div>

            <h3 class="text-rt-primary text-xl uppercase font-semibold text-center">Core Values</h3>
            <h1 class="w-full text-center text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Inspire Trust and Foster an Ethical Culture to Thrive.
            </h1>

            <div class="grid grid-cols-4 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Innovation
                    </h1>
                    
                    <p>
                        We strive for continuous improvement and embrace creative solutions to meet the evolving needs of our clients.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Integrity
                    </h1>

                    <p>
                        We conduct our business with the highest ethical standards, ensuring transparency and trust in all our interactions.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Excellence
                    </h1>
                    
                    <p>
                        We are committed to delivering exceptional quality in every project, setting the benchmark for industry standards.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Collaboration
                    </h1>
                    
                    <p>
                        We value teamwork, encouraging open communication and collaboration to achieve collective success.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Commitment Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Transform Your Business
            </h1>
            <p>
                Experience the Transformational Impact of AI & ML Partner with Reconnaissance Technologies for Next-Level Business Success!
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white border bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Banner CTA Section -->

    <!-- Our Goals Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold text-center">Our Goals</h3>
            <h1 class="w-full text-center text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Setting Standards and Culture worth Emulating
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Reconnaissance Technologies is committed to maintaining ethical culture and conducting business in a transparent and ethical manner. Our values are the foundation for achieving the highest standards of quality, always promoting collaborative relationships based on trust and mutual respect.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Client Satisfaction
                    </h1>
                    
                    <p>
                        Achieve and maintain a client satisfaction rate of over 90% by delivering high-quality, innovative solutions that meet or exceed client expectations.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Employee Development
                    </h1>
                    
                    <p>
                        Foster a culture of continuous learning and development, ensuring that our team is equipped with the latest skills and knowledge in the rapidly evolving field of technology.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Market Leadership
                    </h1>

                    <p>
                        Establish Reconnaissance Technologies as a market leader by staying at the forefront of technological advancements and consistently delivering cutting-edge solutions.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Global Expansion
                    </h1>
                    
                    <p>
                        Strategically expand our presence in international markets, building a diverse portfolio of clients and projects.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Social Responsibility
                    </h1>
                    
                    <p>
                        Contribute positively to society by engaging in ethical business practices, promoting environmental sustainability, and actively participating in community initiatives.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Goals Section -->
</main>
@endsection