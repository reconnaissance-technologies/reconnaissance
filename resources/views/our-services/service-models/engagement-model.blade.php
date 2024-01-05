@extends('layouts.general')

@section('meta-description', 'Get the pricing details for your project according to your requirements. Reconnaissance Technologies\' custom made pricing models will surely satisfy your project needs and budget.')
@section('meta-keywords', 'time and material pricing model, pricing, software pricing,fixed pricing model, pricing model solutions, pricing model services')
@section('robots', 'index, follow')
@section('og-title', 'Transparent Pricing Models to Provide you Flexible Pricing Options | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('sm.engagement') }}")
@section('og-description', 'Get the pricing details for your project according to your requirements. Reconnaissance Technologies\' custom made pricing models will surely satisfy your project needs and budget.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Transparent Pricing Models to Provide you Flexible Pricing Options - Reconnaissance Technologies')

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
                    Engagement Model
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Engagement Models provides prudent and realistic pricing models for delivering complete value for money. 
                    To support our clients, we have a set of transparent pricing strategies coupled with the combination of ‘right’ elements that are at par with the industry standards.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->

            </div>
            <div class="w-full lg:w-1/2 my-32">
                <img src="{{ asset('assets/img/engagement-model.png') }}"
                    class="object-fill" alt="Engagement Model - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What We Offer Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">We Offer</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Engagement Model to meet your business needs
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Reconnaissance Technologies offers flexible engagement models as we believe in delivering complete value for money to our clients & their specific needs and our pricing models are crafted keeping mutual interests in mind.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Transparency
                    </h1>

                    <p>
                        Get in all our workflows, processes, interactions and delivery updates.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Flexibility
                    </h1>
                    
                    <p>
                        We tweak our engagement models to suit and fix your business needs.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Cost Effective
                    </h1>
                    
                    <p>
                        Blending optimized costing with an extended managed team for pricing effectiveness.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Quality
                    </h1>

                    <p>
                        Key element to provide utmost attention to every stage of the process of delivery.
                    </p>
                </div>
            </div>

            <div class="w-full flex pt-10 pb-5">
                <div class="w-1/2">
                    <img src="{{ asset('assets/img/fixed-price-image.png') }}" alt="Fixed Price Model - Reconnaissance Technologies">
                </div>
                <div class="w-1/2 gap-3">
                    <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                        Fixed Price Model
                    </h1>
                    <p class="pb-6">
                        Fixed price model is the best choice for projects with well-defined scope and requirements. In this model, all project requirements are predefined right from the beginning of the development process. This model works the best for small businesses and medium projects with limited or fixed budgets. Along with the time and cost, the core objectives and deliverables for the project are also pre-defined.
                    </p>

                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            The fixed model has exact budget defined in advance
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            Billing is based on milestones completed
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            Change in scope needs client approval, ensuring budget never exceeds
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            Low risk or risk-free model for service provider and client as cost and the timeline are fixed before the project is initiated
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full flex  pt-5 pb-5">
                <div class="w-1/2 gap-3">
                    <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                        Time and Material Model
                    </h1>
                    <p class="pb-6">
                        This model is best suited for projects where scope is not clearly defined and requirements are dynamic and constantly changing. 
                        The Time & Material model works if it is not possible to implement specifics or divide a project into several smaller stages. 
                        This option allows an hourly, daily, weekly or monthly rate for the amount of work, tasks, resources, or other expenses in the development process. 
                        Time and material offers the flexibility to modify project specifications, explore new activity and make changes to the number of project resources depending upon the client’s evolving lifecycle.
                    </p>

                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            Best option when the project scope is constantly changing
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            Option for client to make hourly, daily, weekly or monthly payment
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            Flexible model, allowing client to experiment with new activity and requirements
                        </p>
                    </div>
                    <div class="py-1">
                        <p class="p-4 shadow-lg rounded-md border border-gray-500">
                            Change project resources based on the proj ect's evolving lifecycle.
                        </p>
                    </div>
                </div>
                <div class="w-1/2">
                    <img src="{{ asset('assets/img/time-and-material-image.png') }}" alt="Time and Material Model - Reconnaissance Technologies">
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