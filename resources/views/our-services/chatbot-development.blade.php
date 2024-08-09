@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies\' Chatbots development expertise will take the business to the next level. Contact Us now to create your own Chatbot for instant conversation. Our Chatbot app development team in Nigeria build interactive experiences for all major platforms.')
@section('meta-keywords', 'chatbot, virtual assistant ai, Chatbot Development Services Provider Company in Nigeria')
@section('robots', 'index, follow')
@section('og-title', 'Chatbot App Development Services | Chatbot Development Company in Nigeria | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.chatbot-development') }}")
@section('og-description', 'Reconnaissance Technologies\' Chatbots development expertise will take the business to the next level. Contact Us now to create your own Chatbot for instant conversation. Our Chatbot app development team in Nigeria build interactive experiences for all major platforms.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Chatbot App Development Services | Chatbot Development Company in Nigeria - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="bg-gradient-to-tr from-violet-200 to-slate-700 px-16">
        <!-- hero section content goes here -->
        <div class="w-full lg:flex items-center">
            <div class="w-full lg:w-1/2 md:w1/2 lg:pt-32 my-8">
                <!-- hero section description goes here -->
                <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">
                    Chatbot Development
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Custom chatbot to build highly sophisticated and intelligent chatbot development solutions for all major platforms.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->

            </div>
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('assets/img/chatbot-image.png') }}" class="object-fill" alt="Chatbot Development - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What We Offer Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">We Offer</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Custom Chatbot Development to Revolutionize Customer Interactions.
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Empowered with AI, NLP, and Machine Learning technologies, we offer complete chatbot development services for Facebook, Twitter, Slack, Kik, Microsoft and much more. Whether you are looking to build your own chatbots, conversation bots, IVR bots, online chat bots, text bots or messaging bots, we provide differentiated services exactly tailored to meet your needs.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-2 py-8">
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-red-700">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Rule-Based Chatbots
                    </h1>

                    <p>
                        <b>Description:</b> Rule-based chatbots, also known as decision tree chatbots, operate on predefined rules and patterns. These bots follow a set of programmed instructions and trigger specific responses based on keywords or predetermined pathways. They are effective for simple and structured interactions but may lack flexibility in handling complex queries.
                        <br>
                        <b>Use Case:</b> Customer service inquiries, FAQ bots on websites
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-orange-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        AI-Powered Chatbots
                    </h1>

                    <p>
                        <b>Description:</b> AI-powered chatbots leverage artificial intelligence and natural language processing (NLP) to understand user intent and context. These bots learn from interactions, improving their responses over time. They can handle more complex queries and offer a more human-like conversational experience.
                        <br>
                        <b>Use Case:</b> Virtual assistants, personalized customer support, complex query handling.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border-b-8 border-b-yellow-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Hybrid Chatbots
                    </h1>

                    <p>
                        <b>Description:</b> Hybrid chatbots combine both rule-based and AI-powered approaches. They utilize predefined rules for structured tasks but incorporate AI and machine learning elements for handling more complex and varied interactions. This approach aims to balance reliability and flexibility in conversation.
                        <br>
                        <b>Use Case:</b> Customer support bots that handle both routine and complex inquiries.
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
                Ready to Automate?
            </h1>
            <p>
                Experience the Transformational Impact of Chatbot Solutions for Next-Level Business Success!
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
                        Our experts specialize in frameworks for bot development services.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/microsoft-chatbot-icon.png') }}" alt="Microsoft Chatbot - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Microsoft Chatbot
                    </h1>

                    <p>
                        We specialize in Azure Bot to build, test, deploy and manage intelligent bots by providing an environment for bot development with Microsoft Bot Framework. Our team creates bots that provide speech, language understanding, Q&A.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/ibm-watson-chatbot-icon.png') }}" alt="IBM Watson Chatbot - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        IBM Watson Chatbot
                    </h1>

                    <p>
                        Our team can help build, deploy and optimize advanced Chatbots with Watson Assistant. Watson offers data discovery, automated predictive analytics and cognitive capabilities such as natural language dialogue to create a chatbot.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/dialogflow-chatbot-icon.png') }}" alt="Dialogflow Chatbot - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Dialogflow Chatbot
                    </h1>

                    <p>
                        Reconnaissance Technologies specializes in Dialogflow- an end-to-end development suite to build conversational interfaces for web, mobile apps, messaging platforms and IoT devices. Dialogflow Enterprise Edition users can access Google Cloud Support and SLA.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/amazon-lex-chatbot-icon.png') }}" alt="Amazon Lex - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Amazon Lex
                    </h1>

                    <p>
                        Our team is exploring chatbot development with Amazon Lex to build conversational interfaces into application with deep learning functionalities and natural language understanding (NLU).
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/chatfuel-chatbot-icon.png') }}" alt="Chatfuel - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Chatfuel
                    </h1>

                    <p>
                        Reconnaissance Technologies is exploring Chatfuel which allows users to create their own bots on Facebook Messenger without coding. With Chatfuel development, businesses can experience higher engagement and retention rates.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <img src="{{ asset('assets/img/our-services/facebook-chatbot-icon.png') }}" alt="Facebook Bot - Reconnaissance Technologies">

                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Facebook Bot
                    </h1>

                    <p>
                        The Messenger Platform allows organizations to build rich and personalized experiences in Messenger. With Facebook Messenger, we help add controls to improve the user experience in the bots and implement business logic
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
                Automate Your Customer Care
            </h1>
            <p>
                Experience the Transformational Impact of Chatbot Solutions for Next-Level Business Success!
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
                        Explore our proven track record of delivering Chatbot solutions to diverse customer segments ranging from startups to large enterprises. Discover how we can assist you in achieving your business goals.
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
                        We have partnered with product-focused businesses, assisting them in developing and enhancing their Chatbot solutions requirements. Services to meet market demands and stay ahead of the competition.
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
                        Our extensive experience working with large enterprises enables us to provide Chatbot solutions for their use cases, ensuring optimal performance.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Visionary Partners Section -->

    <!-- Locations & Enquiry Section -->
    <section class="w-[1440px] h-[684px] pl-[50px] pr-[104px] py-[91px] bg-[#EDEDF8] justify-start items-center inline-flex">
        <div class="py-6">
            <div class="px-16 ">
                <h2 class="text-[#424d57] text-xl pb-5 uppercase font-semibold">GET IN TOUCH</h2>
                <h1 class="w-3/4 text-xl lg:text-2xl font-bold mt-2 mb-2 lg:mb-3 text-[#292D32] whitespace-nowrap">
                    Let's build something magical <br> together!
                </h1>
            </div>
            <div class="relative h-96 py-6 bg-center bg-no-repeat bg-blend-multiply">
                <p class="pl-16 text-md text-[#424d57] font-normal ">Do you have an app idea and need to get it validated? Let us give you <br> our honest opinion</p>
                <div class="flex pt-6 pl-16 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <div class="pl-3 text-[#424d57]">
                        <p class="text-xl font-medium whitespace-nowrap">
                            No 50, Ebitu Ukiwe Street, Jabi, Abuja - 900108, FCT
                        </p>
                    </div>
                </div>

                <div class="flex py-3 text-[#424d57] pl-16">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <div class="pl-3 ">
                        <p class="text-xl font-medium">
                            <a href="tel:+2342013309246" title="Call Reconnaissance Technologies Nigeria">+234 201 330 9246</a>
                        </p>
                    </div>
                </div>

                <div class="flex text-[#424d57] pl-16 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <div class="pl-3 ">
                        <p class="text-xl font-medium">
                            <a href="mailto:enquiries@reconnaissancetechnologies.com" title="Email Reconnaissance Technologies for enquiries">enquiries@reconnaissancetechnologies.com</a>
                        </p>
                    </div>
                </div>

                <div class="absolute lg:w-[500px] xl:w-[500px] 2xl:w-[500px] left-[650px] -top-28 p-4 bg-rt-primary border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8">
                    <!-- <h3 class="text-black mb-6 text-xl font-semibold">Hola :)</h3> -->
                    @include('inc.get-a-quote-form')
                </div>
            </div>
        </div>
    </section>
    <!-- End of Locations & Enquiry Section -->
</main>
@endsection