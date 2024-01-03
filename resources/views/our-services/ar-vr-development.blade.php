@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies\' AR/VR development expertise will take your business to the next level. Contact Us now to integrate an AR/VR solution in your project. Our AR/VR development team in Nigeria build interactive experiences.')
@section('meta-keywords', 'ar, vr, augmented reality development, AR/VR Development Services Provider Company in Nigeria')
@section('robots', 'index, follow')
@section('og-title', 'AR/VR Development Services | AR/VR Development Company in Nigeria | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.ar-vr-development') }}")
@section('og-description', 'Reconnaissance Technologies\' AR/VR development expertise will take your business to the next level. Contact Us now to integrate an AR/VR solution in your project. Our AR/VR development team in Nigeria build interactive experiences.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'AR/VR Development Services | AR/VR Development Company in Nigeria - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="bg-gradient-to-tr from-violet-200 to-slate-700 px-16">
        <!-- hero section content goes here -->
        <div class="w-full lg:flex items-center">
            <div class="w-full lg:w-1/2 md:w1/2 lg:pt-32 my-10">
                <!-- hero section description goes here -->
                <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">
                    AR/VR App Development
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Reconnaissance Technologies AR/VR solutions create immersive experiences, transforming the way your interact with you customers.
                    Whether it's for training, marketing, or product visualization, these technologies offer a new dimension of engagement
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->

            </div>
            <div class="w-full lg:w-1/2 my-24">
                <img src="{{ asset('assets/img/ar-vr-image.webp') }}"
                    class="object-fill" alt="AR/VR Development - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Industry Application Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Industry Application</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Industry Use Cases for Our AR/VR Development Solution
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Our expert team in Augmented Reality (AR) and Virtual Reality (VR) technologies delivers various solutions across different industries and applications
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Training and Education
                    </h1>
                    
                    <p>
                        Our expertise in creating immersive training simulations for various fields like healthcare (surgical training), aviation (flight simulations), military training, and more. It's also employed in education for interactive learning experiences
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Gaming and Entertainment
                    </h1>

                    <p>
                        Gaining  significant traction, our VR solution offers immersive gaming experiences. Also, blending the virtual world with the real one, in gaming apps such as Pokémon GO
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Healthcare
                    </h1>
                    
                    <p>
                        These technologies assist in medical training, patient care, pain management, and therapies. For instance, utilizing VR for exposure therapy in treating phobias or PTSD
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Marketing and Advertising
                    </h1>
                    
                    <p>
                        AR solution for marketing campaigns to create interactive experiences for consumers. For instance, AR filters on social media platforms or AR-enabled catalogs allowing users to visualize products in their environment before purchasing
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Tourism and Hospitality
                    </h1>
                    
                    <p>
                        VR solution for virtual tours of destinations or hotel rooms, allowing potential travelers to explore and experience places remotely.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Remote Collaboration and Communication
                    </h1>
                    
                    <p>
                        VR solution that enables remote teams to collaborate in virtual environments, fostering teamwork and reducing the need for physical presence
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Industry Application Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                AR/VR Integration and Development to Revolutionize Customer Interactions
            </h1>
            <p>
                We offer complete AR/VR development services for various industries and much more. Whether you are looking to build your own AR/VR enabled games, integrating AR/VR in your software products, we provide differentiated services exactly tailored to meet your needs.
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
                        Our experts specialize in frameworks for AR/VR development services.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/arcore-icon.png') }}" width="50" alt="ARCore - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        ARCore
                    </h1>
                    
                    <p>
                        By utilizing ARCore's capabilities, Reconnaissance Technologies' compelling AR solutions ranges from AR-based navigation, gaming, educational tools, interior design apps, to industrial training simulations and more, offering innovative and engaging experiences to your users
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/unreal-engine-icon.png') }}" width="50" alt="Unreal Engine - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Unreal Engine
                    </h1>

                    <p>
                        Reconnaissance Technologies leverages Unreal Engine's powerful capabilities to develop augmented reality (AR) solutions. Unreal Engine is renowned for its robustness in creating immersive experiences and its suitability for AR/VR applications due to its high-fidelity rendering and versatile toolset
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/vuforia-icon.png') }}" width="50" alt="Vuforia - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Vuforia
                    </h1>
                    
                    <p>
                        By leveraging Vuforia's tools and expertise in AR development, Reconnaissance Technologies creates innovative and tailored solutions that meet your specific needs, enhancing various aspects of your businesses or user experiences through augmented reality
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/arkit-icon.png') }}" width="50" height="50" alt="Apple's ARKit - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Apple's ARKit
                    </h1>
                    
                    <p>
                        By leveraging these features and functionalities provided by ARKit, Reconnaissance Technologies crafts innovative AR solutions for various purposes, such as gaming, education, retail, navigation, and more
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
                Elevate Your Business with AR/VR
            </h1>
            <p>
                Experience the Transformational Impact of AR/VR Solutions for Next-Level Business Success!
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
                        Explore our proven track record of delivering AR/VR solutions to diverse customer segments ranging from startups to large enterprises. Discover how we can assist you in achieving your business goals.
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
                        We have partnered with product-focused  businesses, assisting them in developing AR/VR solutions and services to meet market demands and stay ahead of the competition. 
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
                        Our extensive experience working with large enterprises enables us to provide AR/VR solutions for their use cases, ensuring  optimal performance. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Visionary Partners Section -->
</main>
@endsection