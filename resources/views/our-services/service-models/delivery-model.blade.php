@extends('layouts.general')

@section('meta-description', 'We understand the need of your business to deliver you with the best performance and ROI with the use of our different global delivery models. We offer off-site, on-site, off-site/on-site, offshore, hybrid and Global delivery models.')
@section('meta-keywords', 'it service delivery model, business strategy model, integrated service delivery model, onsite offshore model, offshore development model')
@section('robots', 'index, follow')
@section('og-title', 'Reconnaissance Technologies\' Global Business Delivery Model | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('sm.delivery') }}")
@section('og-description', 'We understand the need of your business to deliver you with the best performance and ROI with the use of our different global delivery models. We offer off-site, on-site, off-site/on-site, offshore, hybrid and Global delivery models.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Reconnaissance Technologies\' Global Business Delivery Model - Reconnaissance Technologies')

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
                    Global Delivery Model
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Our delivery models are aimed to provide you with utmost flexibility, security and scalability to completely address your business needs and be rest assured to experience consistently high levels of quality.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->

            </div>
            <div class="w-full lg:w-1/2 my-20">
                <img src="{{ asset('assets/img/delivery-model-image.png') }}"
                    class="object-fill" alt="Global Deliver Model - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What We Offer Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">We Offer</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Delivery Model to meet your business needs
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Reconnaissance Technologies believes that different delivery models are a must in this dynamic changing business landscape where each organization has its own set of needs and working methodology. Our pragmatic approach helps to leverage the latest technology for the benefit of your business through varied delivery models.
                    </p>
                </div>
            </div>

            <div class="w-full flex py-10">
                <div class="w-1/2">
                    <img src="{{ asset('assets/img/offshore-delivery-model.png') }}" alt="Offshore Delivery Model - Reconnaissance Technologies">
                </div>
                <div class="w-1/2 gap-3">
                    <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                        Offshore Model
                    </h1>
                    <p class="pb-6">
                        In this delivery model, the project deliverable and milestones are accomplished at our offshore development center. Offshore delivery model allows clients to leverage dedicated or on-demand skilled resources to overcome skills shortage. Our Offshore delivery models allow excellent synchronization between our teams and your in-house team.
                    </p>

                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            <b>Reduced Costs:</b> Low labor costs result in significant reduction of project’s overall cost.
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            <b>Skilled Resources:</b> Get high quality work from experienced, talented offshore resources.
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            <b>No Overhead:</b> Client doesn’t have to expand infrastructure to scale up.
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            <b>Optimal Resources:</b> Clients can have access to the best possible technology, skilled manpower and equipment, depending on budgets.
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            <b>Increased Productivity:</b> Project is not majorly affected by time-zone differences.
                        </p>
                    </div>
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
                Experience the power of our Team's prowess and engage in Next-Level Business Success!
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white border bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
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
                        Explore our proven track record of successfule project delivery to diverse customer segments ranging from startups to large enterprises. Discover how we can assist you in achieving your business goals.
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
                        We have partnered with product-focused  businesses, assisting them in developing and enhancing their products and services to meet market demands and stay ahead of the competition. 
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
                        Our extensive experience working with large enterprises enables us to provide technology solutions that handle high volumes of traffic, large data sets, and  complex business processes, ensuring  optimal performance. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Visionary Partners Section -->
</main>
@endsection