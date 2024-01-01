@extends('layouts.general')

@section('meta-description', 'The best Internet of Things application development services company offers the best IoT software solutions to improve operational efficiencies.')
@section('meta-keywords', 'internet of things solutions, IoT Solutions, IoT services provider, Internet of things services, Internet of things applications, Internet of things solutions provider, Internet of things services provider, Mobile Enabled IOT Solutions, IoT Applications Development Services, Enterprise IoT Solutions')
@section('robots', 'index, follow')
@section('og-title', 'IoT App Development Services | IoT Solutions Provider | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.iot-development') }}")
@section('og-description', 'The best Internet of Things application development services company offers the best IoT software solutions to improve operational efficiencies.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'IoT App Development Services | IoT Solutions Provider - Reconnaissance Technologies')

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
                    IoT Application Development
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Experience connected and smart living with IoT solutions with right infrastructure and IoT platform.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->

            </div>
            <div class="w-full lg:w-1/2 my-10">
                <img src="{{ asset('assets/img/iot-image.png') }}"
                    class="object-fill" alt="IoT Application Development - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What We Offer Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">We Offer</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Innovation with Internet of Things (IoT) Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Businesses can capitalize on our IoT solutions and Services to improve operational efficiencies, enhance user experiences and create a digital business by connecting people, process and information together
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-2 py-8">
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-red-700">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Smart Cities
                    </h1>

                    <p>
                        Smart City IoT Solutions to empower cities and citizens to deliver innovative digital services. Leveraging the technology of the Internet of Things (IoT) and increased usage of smart devices, it is possible to gather accurate and near real-time information about people, their behavior, traffic and other utilities.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-orange-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Home Automation
                    </h1>
                    
                    <p>
                        IoT based home automation solution to help users to control lights, air conditioners and other appliances. Our IoT based home automation solutions enable clients to operate systems for music, video, lights, climate and security through smartphone, tablet, touch panel or keypad. We aim to give clients complete peace of mind by building solutions that enhance their comfort and security at home.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-yellow-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Smart Energy Monitoring
                    </h1>
                    
                    <p>
                        Smart energy monitoring IoT solutions to eliminate waste, reduce and control current level of energy uses for optimum utilization of resources. Hidden Brains is focused on offering solutions to provide companies with data, insights and systems to drive energy monitoring and sustainability.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-green-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Infrastructure Automation
                    </h1>

                    <p>
                        Our infrastructure automation solutions using IoT resolve infrastructure and cities related problems such as street lighting, traffic control, surveillance and congestion. We offer a comprehensive range of robust and proven infrastructure automation services and solutions to deliver strategic value for our customer’s business.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of What We Offer Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Ready to start your dream project?
            </h1>
            <p>
                We can get you there.
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-4 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Banner CTA Section -->

    <!-- Frameworks We Use Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Frameworks We Use
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        IoT expertise to improve operational efficiencies, enhance user experiences and create a digital business by connecting people, process and information together.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/ibm-watson-icon.png') }}" alt="IBM Watson IoT - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        IBM Watson IoT
                    </h1>
                    
                    <p>
                        We offer strong background in IBM Watson IoT platform, a managed, cloud-hosted service designed to simplify to your IoT project
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/google-cloud-icon.png') }}" alt="Google Cloud IoT - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Google Cloud IoT
                    </h1>

                    <p>
                        Our team will help you to add the power of Google Cloud IoT to securely connect and manage IoT devices ranging to millions.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/aws-iot-core-icon.png') }}" alt="AWS IoT Core - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        AWS IoT Core
                    </h1>
                    
                    <p>
                        Expertise in AWS IoT Core managed cloud service to connect devices easily and securely with cloud applications and other devices.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/thingworx-icon.png') }}" alt="Thingworx IoT - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        ThingWorx
                    </h1>
                    
                    <p>
                        We specialise in ThingWorx, an IoT platform to build and scale mission critical IoT systems in a secure manner.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/ge-icon.png') }}" alt="GE Predix IoT - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        GE Predix
                    </h1>
                    
                    <p>
                        Reconnaissance Technologies offers a background in GE Predix to build apps that connect people with industrial machines for business outcomes.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/losant-icon.png') }}" alt="Losant IoT - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Losant
                    </h1>
                    
                    <p>
                        We use Losant, an easy-to-use and powerful Enterprise IoT Platform to build scalable, secure and real-time connected solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Frameworks We Use Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Transform Your Business
            </h1>
            <p>
                Experience the Transformational Impact of IoT Solutions for Next-Level Business Success!
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-4 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Banner CTA Section -->

    <!-- Visionary Partners Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Partners Are</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Visionary Businesses and Diverse Clientele
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Explore our proven track record of delivering IoT application solutions to diverse customer segments ranging from startups to large enterprises. Discover how we can assist you in achieving your business goals.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Startups
                    </h1>

                    <p>
                        From ambitious entrepreneurs to VC funded ventures, we have supported startups in their technological journey, helping them transform ideas into reality.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Product Companies
                    </h1>
                    
                    <p>
                        We have partnered with product-focused  businesses, assisting them in developing and enhancing their IoT solutions requirements. Services to meet market demands and stay ahead of the competition. 
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Agencies
                    </h1>
                    
                    <p>
                        Collaborating with digital agencies, we have contributed to the creation of captivating digital experiences, leveraging our expertise to deliver innovative and impactful solutions that engage and inspire. 
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Enterprises
                    </h1>

                    <p>
                        Our extensive experience working with large enterprises enables us to provide IoT solutions for their use cases, ensuring  optimal performance. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Visionary Partners Section -->
</main>
@endsection