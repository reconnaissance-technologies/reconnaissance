@extends('layouts.general')

@section('meta-description', 'Get the best Product Design Services from the top firm, Reconnaissance Technologies. Expertise in creating innovative, efficient designs for diverse product design & engineering needs.')
@section('meta-keywords', 'Custom Product Design Solutions, Engineering Product Development Services, Professional Product Design Consultancy,Design Services, Prototype Design and Design Assistance')
@section('robots', 'index, follow')
@section('og-title', 'The Best Product Design Services & Solutions| Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.media-and-entertainment') }}")
@section('og-description', 'Get the best Product Design Services from the top firm, Reconnaissance Technologies. Expertise in creating innovative, efficient designs for diverse product design & engineering needs.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'The Best Product Design Services & Solutions - Reconnaissance Technologies')

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
                    Product Design 
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Reconnaissance Technologies, a company where Innovation is merged with Precision, we redefine design engineering as not just a matter of aesthetics, but as a strategic tool aimed at redefining user experiences, optimizing operational functionality, and driving substantial business growth.
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
                <img src="{{ asset('assets/img/product-design-image.webp') }}"
                    class="object-fill" alt="Product Design - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What Makes Us Different Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">What Makes Us Different</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Our Key Differentiators
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Have a look at some of our key differentiators that make our design engineering services unique and effective for our clients.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Client-centric Collaboration
                    </h1>

                    <p>
                        We believe in a collaborative approach, where your vision is central to our strategy. Our team offers continual support, transforming your vision into a design masterpiece.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Agile & Adaptive Methodology
                    </h1>
                    
                    <p>
                        Our agile and adaptive methodologies enable us to swiftly respond to changing market trends and client feedback, ensuring your project remains relevant and successful.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Customized Design Solutions
                    </h1>
                    
                    <p>
                        Every client is distinct, and so are our solutions. We specialize in creating custom designs that align perfectly with your specific requirements and goals.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Future-ready Design Solution
                    </h1>

                    <p>
                        In an era where sustainability is key, we focus on future-ready design solutions that not only meet current needs but also contribute to a sustainable future.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of What Makes Us Different Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Start Innovation
            </h1>
            <p>
                Launch into the Future with Our Design Solutions — Over 300 Designs Delivered Successfully!
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white border bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Banner CTA Section -->

    <!-- Product Design Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Product Design Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Discover the breadth of our offerings at Hidden Brains, where each service is tailored to revolutionize and enhance your enterprise's digital journey
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-violet-600 w-[500]">
                    <img src="{{ asset('assets/img/our-services/design-thinking-icon.webp') }}" class="w-20 h-20" alt="Design Thinking Solution - Reconnaissance Technologies">
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Design Thinking
                    </h1>

                    <p>
                        Our design thinking expertise stands out by prioritizing real user needs and experiences. It is more than a concept - it's a guiding principle of innovation.
                        We focus deeply on understanding challenges, crafting creative solutions, building prototypes, and refining them to perfection.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-purple-900">
                    <img src="{{ asset('assets/img/our-services/design-research-icon.png') }}" class="w-20 h-20" alt="Design Research Solution - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Design Research
                    </h1>
                    
                    <p>
                        Our design research solution focuses on understanding user behaviour and expectations in-depth. We delve into your audience's needs and desires to develop solutions that truly resonate.
                        With our design research solution, you can gain critical user-centric insights and a strategic edge, empowering your business to excel.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-slate-800">
                    <img src="{{ asset('assets/img/our-services/design-experience-icon.png') }}" class="w-20 h-20" alt="Design Experience Solution - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Design Experience
                    </h1>
                    
                    <p>
                        Our design experience solution aims at building interfaces that are not only beautiful but also user friendly, efficient, and unforgettable. We're dedicated to designing experiences that make a lasting impact and build user loyalty.
                        Our offerings include a range of specialized sub-services, each thoughtfully created to boost both the appeal and functionality of your product.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-lime-500">
                    <img src="{{ asset('assets/img/our-services/design-consulting-icon.webp') }}" class="w-20 h-20" alt="Design Consulting Solution - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Design Consulting
                    </h1>

                    <p>
                        Our approach to design consulting is more than a mere process - it's a guiding tool for navigating the dynamic business landscape.
                        We offer a variety of services, each carefully customized to tackle your specific challenges, ensuring your business excels through innovative and precise solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Product Design Solutions Section -->

    <!-- Business Benefits Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">How We Do It</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Unlock Business Benefits with Reconnaissance Technologies
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        At Reconnaissance Technologeis, we straighten out the complexitites of product design, empowering enterprises to navigate challenges and seize opportunities. Here are a few benefits of collaborating with our team
                    </p>
                </div>
                <div>
                    <a href="{{ route('contact-us') }}"
                        class="p-4 border-2 border-rt-primary rounded-lg hover:bg-rt-primary text-rt-primary hover:text-white">
                        Speak to an Expert
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-violet-600 ">
                    <div class="flex items-end">
                        <img src="{{ asset('assets/img/our-services/consistency-icon.svg') }}" class="w-20 h-20" alt="Design Consistency - Reconnaissance Technologies">
                    
                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                            Consistency
                        </h1>
                    </div>

                    <p class="py-8">
                        We implement standardized data models and integration protocols for enforcing consistency in data sotrage, processing, and retrieval across your enterprise systems.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-purple-900">
                    <div class="flex items-end">
                        <img src="{{ asset('assets/img/our-services/efficiency.svg') }}" class="w-20 h-20" alt="Design Efficiency - Reconnaissance Technologies">

                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Efficiency
                        </h1>
                    </div>
                    
                    <p class="py-8">
                        By employing data cleansing, transformation, and automation techniques to eliminate inefficiencies, we help enhance overall data processing speed and resource utilization.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-slate-800">
                    <div class="flex items-end">
                        <img src="{{ asset('assets/img/our-services/scalability-icon.svg') }}" class="w-20 h-20" alt="Design Scalability Solution - Reconnaissance Technologies">

                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Scalability
                        </h1>
                    </div>
                    
                    <p>
                        We utilize cloud-based arcitectures and scalable database solutions to accommodate the dynamic growth of your data infrastructure to ensure the freedom of business expansion.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-lime-500">
                    <div class="flex items-end">
                        <img src="{{ asset('assets/img/our-services/user-experience-icon.svg') }}" class="w-20 h-20" alt="Improved user Experience - Reconnaissance Technologies">

                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Improved User Experience
                        </h1>
                    </div>

                    <p class="py-8">
                        To transform user interactions and user engagements, we implement advanced data analytics and visualization tools to offer real-time insights, enancing user decision-making and overall experience.
                    </p>
                </div>
                <div class="card hover:drop-shadow-lg dark:text-black hover:border-b-8 hover:border-b-lime-900">
                    <div class="flex items-end">
                        <img src="{{ asset('assets/img/our-services/brand-recognition-icon.svg') }}" class="w-20 h-20" alt="Brand Recognition - Reconnaissance Technologies">

                        <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                            Brand Recognition
                        </h1>
                    </div>

                    <p class="py-8">
                        Elevate your brand presence through Reconnaissance Technologies' product design services, by building a centralized data repository, ensuring accurate and accessible information for better decision-making and brand consistency across touchpoints.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Business Benefits Section -->
</main>
@endsection