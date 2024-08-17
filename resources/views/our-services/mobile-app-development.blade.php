@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies offers custom mobile app development services to clients worldwide. We have successfully delivered 20+ mobile applications.')
@section('meta-keywords', 'mobile app development company, mobile application development services, mobile app development company Nigeria, mobile app developers, best mobile app developers Nigeria')
@section('robots', 'index, follow')
@section('og-title', 'Custom Mobile App Development Services | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.mobile-app') }}")
@section('og-description', 'Reconnaissance Technologies offers custom mobile app development services to clients worldwide. We have successfully delivered 20+ mobile applications.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Custom Mobile App Development Services - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="relative  text-center justify-center py-5 ">
        <!-- Video Background -->
        <video class="absolute top-0 left-0 w-full h-full object-cover z-[-1]" autoplay muted loop playsinline>
            <source src="https://s3-figma-videos-production-sig.figma.com/video/1134555079227565548/TEAM/2a6e/0c4e/-2cf8-4720-9f26-d61c4b7d6edd?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ax1Y1NVZh9aQEN2A1SlsYrCvKTlAd5MSZgJuBmFPeo-JDEBculMuCNtC3bI3y7kTzb6wyuGZHVKwPbe2Ze1ugZ3DE3AlMXnhfY9DWvxmI1Ovp0-SsjD0IJKfZxbLXbYZHLlSK1PsY-EFy62FQhgDUTcEygWqKeAlUbsvWqyHc5rtMRgfROAet864v1e3AyezdzIqzUVaqCUV93w2J55rp4u5wJ0VSJ2Qhz5I8uG~CIrrtsLxDcGhRwRd28uZerPKdz6qH-X7H61BfN8TkSuC8cMU37Z9ojcYWLO3CMnbTT2Mm6~2PauXtXyOIvoq8weKN1QKJ9BPA9TDK4KEKOhuhQ__" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- hero section content goes here -->
        <div class="relative w-full lg:flex items-center justify-center">
            <div class="w-full md:pt-40 lg:pt-48 z-10 text-center text-white">
                <!-- hero section description goes here -->
                <h2 class="text-center justify-center text-white text-2xl md:text-4xl py-2 font-bold">
                    Crafting Mobile Experiences that Captivate and Connect
                </h2>
                <p class="text-sm md:text-md mb-4">
                    From concept to deployment, we specialize in developing intuitive and impactful mobile apps tailored to your vision and your users' needs
                </p>

                <!-- CTA Button -->
                <div class="flex justify-center mx-3">
                    <a href="#" class="border border-rt-white px-8 py-3.5 text-base font-medium text-white inline-flex items-center hover:font-bold  hover:bg-white hover:text-rt-primary hover:border-white focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center mr-10">
                        Case Studies
                    </a>

                    <a href="#" class="px-8 py-3.5 text-base font-medium text-black inline-flex items-center bg-rt-white hover:text-rt-primary hover:font-bold focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center">
                        Start a Project
                        <img class="px-2 w-8" src="{{ asset('assets/icons/send.svg') }}" alt="">
                    </a>
                </div>
                <!-- End of CTA Button -->
            </div>
        </div>

        <!-- Awards section -->
        <div class="relative w-full flex justify-end pr-6">
            <div class="flex items-center gap-4">
                <a href="https://clutch.co/profile/reconnaissance-technologies" target="_blank" class="w-20 h-auto" title="Clutch.co 2023 Top Health &  Wellness App Developer, Nigeria">
                    <img src="{{ asset('assets/img/recognition/clutch-health-wellness-app-developers-nigeria-2023.png') }}" alt="Clutch.co 2023 Top Health &  Wellness App Developer, Nigeria Badge">
                </a>
                <a href="https://techbehemoths.com/awards-2023/cybersecurity/nigeria#view=60717" target="_blank" class="w-20 h-auto" title="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023">
                    <img class="" src="{{ asset('assets/img/recognition/banner-award-2023-white-winner-alt (2).png') }}" alt="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023 Badge">
                    <img class="hidden" src="{{ asset('assets/img/recognition/tb-cyber-security.png') }}" alt="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023 Badge">
                </a>
                <a href="https://techbehemoths.com/awards-2023/custom-software-development/nigeria#view=60717" target="_blank" class="w-20 h-auto" title="TechBehemoths Top Custom Software Development Company in Nigeria Awards 2023">
                    <img src="{{ asset('assets/img/recognition/banner-award-2023-white-winner-alt (1).png') }}" alt="TechBehemoths Top Custom Software Development Company in Nigeria Awards 2023 Badge">
                </a>
            </div>
        </div>

        <!-- Image section -->
        <div class="w-full flex justify-center mt-20">
            <div class="w-full max-w-screen-xl flex justify-between items-center">
                <img class="w-[60px] h-auto" src="{{ asset('assets/img/testimonials/deepblue.png') }}" />
                <img class="w-[90px] h-auto" src="{{ asset('assets/img/testimonials/carvfit.png') }}" />
                <img class="w-[90px] h-auto" src="{{ asset('assets/img/testimonials/how-tech-ltd.png') }}" />
                <img class="w-[63px] h-auto" src="{{ asset('assets/img/testimonials/celestina.png') }}" />
                <img class="w-[66px] h-auto" src="{{ asset('assets/img/testimonials/ultrashot.png') }}" />
                <img class="w-[28px] h-auto" src="{{ asset('assets/img/testimonials/Explorer.png') }}" />
                <img class="w-[76px] h-auto" src="{{ asset('assets/img/testimonials/carvfit-white.png') }}" />
            </div>
        </div>
    </section>

    <!-- End of Hero Section -->

    <!-- What makes us different -->

    <div class="w-[1440px] h-[567px] pl-[103px] pr-[172px] pt-2 pb-[7px] bg-[#f7f7fc] justify-start items-center gap-[100px] inline-flex">
        <div class=" flex-col gap-[50px] inline-flex">
            <div class="flex-col justify-start items-start gap-2.5 flex">
                <div class="flex-col justify-start items-start gap-2.5 flex">
                    <h4 class="text-[#194587] text-base font-medium">WHAT MAKES US DIFFERENT</h4>
                    <h3 class="text-[#17191c] text-2xl font-semibold">Why We Should Create Your Mobile Application?</h3>
                </div>
                <p class="w-[529px] text-[#3b4454] text-[15px] font-normal">We serve as your dedicated partners throughout the entire mobile app development process, guiding you from ideation to implementation, leveraging cloud infrastructure and automation to ensure efficient delivery and a remarkable user experience that drives your success.</p>
            </div>
            <div class="">
                <a href="#" class="px-20 py-4 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">Let’s talk</a>
            </div>
        </div>
        <img class="w-[400px] h-[552px] rotate-360" src="{{ asset('assets/img/Develop-an-Android-App.svg') }}" />
    </div>
    <!-- End of What makes us different -->

    <!-- Our Strength Section -->
    <div class="w-full relative">
        <div class="flex justify-between items-start">
            <!-- Text Section -->
            <div class="flex flex-col justify-start items-start gap-4 px-20 pt-32">
                <h2 class="text-[#194587] font-semibold">OUR STRENGTH</h2>
                <p class="w-[423px] text-black text-lg font-semibold">
                    What We Do that Makes Us Stand Out Against Other Mobile Application Development Companies
                </p>
            </div>
            <!-- Image Section -->
            <img class="w-[650px] h-[450px] right-0 mt-4" src="{{ asset('assets/img/our-services/Ourmobservices.svg') }}" />
        </div>

        <!-- Content Below Image -->
        <div class="flex flex-col gap-8 px-20 mt-0">
            <!-- First Block -->
            <div class="flex gap-4 items-start">
                <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                <div>
                    <h3 class="text-[#194587] text-base font-semibold">Free Consultation</h3>
                    <p class="w-[500px] text-[#292d32] text-sm font-normal">
                        Unlike our competitors, we offer you the chance to take the first step into bringing your app idea to life with our free Consultation session.
                    </p>
                </div>
            </div>

            <!-- Second Block with Grid Layout -->
            <div class="grid grid-cols-2 gap-8">
                <!-- Second Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Seamless Integration Across Platforms</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Our app seamlessly integrates across multiple platforms, offering a consistent and cohesive experience whether users access it on their mobile devices, tablets, or desktops.
                        </p>
                    </div>
                </div>

                <!-- Third Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Mobile Application Development Solutions for Diverse Industries</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            We partner closely with our clients to grasp their challenges and goals, crafting bespoke software solutions that are both powerful and adaptable across industries.
                        </p>
                    </div>
                </div>

                <!-- Fourth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">MVP App Development</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            We empower your journey to success with our MVP App Development, guiding you to validate your idea swiftly, accelerate time to market, and make informed decisions for iterative improvements.
                        </p>
                    </div>
                </div>

                <!-- Fifth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Mobile App Maintenance & Robust Security Measures</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Security is paramount in today's digital landscape. Our app integrates state-of-the-art security measures, including encryption, authentication, and secure data storage.
                        </p>
                    </div>
                </div>

                <!-- Sixth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Native App Development Services</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            As a premier mobile application development agency, we specialize in crafting bespoke, cutting-edge native apps meticulously tailored for singular platforms.
                        </p>
                    </div>
                </div>

                <!-- Seventh Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Intuitive User Experience (UX)</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            Our app prioritizes user-centric design, offering a seamless and intuitive experience from the moment users launch the app.
                        </p>
                    </div>
                </div>

                <!-- Eighth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Our Partners are Visionary Businesses and Diverse Clientele</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            By partnering with visionary businesses and a diverse clientele, we ensure that our solutions are finely tuned to meet the unique needs and challenges of various industries.
                        </p>
                    </div>
                </div>

                <!-- Ninth Block -->
                <div class="flex gap-4 items-start">
                    <img class="w-6 h-6" src="{{ asset('assets/img/our-services/codesymbol.svg') }}" alt="Icon" />
                    <div>
                        <h3 class="text-[#194587] text-base font-semibold">Enterprise Mobility</h3>
                        <p class="w-[500px] text-[#292d32] text-sm font-normal">
                            We elevate your business operations with our Enterprise Mobility solutions, enabling effortless access to critical data and applications.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Centered Button -->
            <div class="max-w-[933px] mx-auto flex flex-col justify-start items-center gap-[53px] text-center mt-10 pb-10">
                <a href="#" class="px-9 py-3 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">
                    See Case Studies
                </a>
            </div>
        </div>
    </div>
    <!-- End of Our Strength Section -->


    <!-- Project Stages and Flow Section -->
    <section class="relative w-full h-[1460px] bg-cover bg-center" style="background-image: url('{{ asset('assets/img/our-services/ProjectStagesImg.png') }}')">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 w-full h-full flex flex-col justify-start items-start gap-[50px] px-[50px] py-[46px] text-white">
            <div class="flex flex-col justify-start items-start gap-[30px]">
                <h2 class="text-2xl font-medium">Project Stages & Flow</h2>
                <p class="w-[676px] text-[15px] font-medium leading-snug">
                    Tailored to your project's phase, we'll present an optimized strategy to meet your goals, aligning seamlessly with your timeline and budget constraints.
                </p>
                <a href="#" class="w-[198px] px-[65px] py-[18px] bg-[#143669] rounded-lg text-base font-medium text-center">Let’s talk</a>
            </div>
            <p class="text-[#ffd90f] text-base font-medium">Our typical project flow includes the following phases:</p>

            <!-- Phase Blocks Wrapper -->
            <div class="w-full flex justify-center">
                <div class="max-w-[1200px] w-full flex flex-col gap-8 items-center">
                    <!-- First Row -->
                    <div class="flex justify-center items-center gap-8 w-full">
                        <div class="px-[15px] pt-10 pb-[50px] bg-[#06042d]/40 flex items-center">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="text-[#ffd90f] text-2xl font-semibold">01</div>
                                    <div class="text-[#f8f8fc] text-[17px] font-semibold">Discovery Phase:</div>
                                </div>
                                <div class="w-[552px] text-white text-[15px] font-normal">
                                    This stage involves defining the project's purpose and scope. It includes conducting market research, user interviews, and competitor analysis to gather insights, Identifying project objectives, target audience, key performance indicators (KPIs), and also developing profiles representing different user types and their needs.
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] pt-10 pb-[50px] bg-[#06042d]/40 flex items-center">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="text-[#ffd90f] text-2xl font-semibold">02</div>
                                    <div class="text-[#f8f8fc] text-[17px] font-semibold">Planning Phase:</div>
                                </div>
                                <div class="w-[552px] text-white text-[15px] font-normal">
                                    During this stage, detailed planning is carried out to determine the core features and functionality of the mobile app. Low-fidelity wireframes are created to outline the app's layout and navigation. A User Flow is designed to map out the user journey and interactions within the app. Additionally, a project plan is developed, outlining how the project will be executed, monitored, and controlled.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Row -->
                    <div class="flex justify-center items-center gap-8 w-full">
                        <div class="px-[15px] pt-10 pb-[50px] bg-[#06042d]/40 flex items-center">
                            <div class="flex flex-col gap-2.5">
                                <div class="flex flex-col gap-2">
                                    <div class="text-[#ffd90f] text-2xl font-semibold">03</div>
                                    <div class="text-[#f8f8fc] text-[17px] font-semibold">Design Phase:</div>
                                </div>
                                <div class="w-[552px] text-white text-[15px] font-normal">
                                    In this stage, the project plan is put into action. Tasks are executed according to the schedule, resources are allocated, and communication among team members is facilitated. High-fidelity designs are created, including UI elements, color schemes, typography, and imagery. Interactive prototypes are built to simulate the app's functionality and user experience. Feedback is gathered from stakeholders and users, and designs are iterated based on insights.
                                </div>
                            </div>
                        </div>
                        <div class="px-[15px] pt-10 pb-[90px] bg-[#06042d]/40 flex items-center">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="text-[#ffd90f] text-2xl font-semibold">04</div>
                                    <div class="text-[#f8f8fc] text-[17px] font-semibold">Development Phase:</div>
                                </div>
                                <div class="w-[552px] text-white text-[15px] font-normal">
                                    In this stage, the project plan is put into action. Tasks are executed according to the schedule, resources are allocated, and communication among team members is facilitated. The project manager oversees the implementation of activities to ensure they align with the project objectives.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Third Row - Centered -->
                    <div class="flex justify-center mt-8 w-full">
                        <div class="w-[604px] px-[26px] pt-10 pb-[81px] bg-black/50 rounded-lg flex items-center">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div class="text-[#ffd90f] text-2xl font-semibold">05</div>
                                    <div class="text-[#f8f8fc] text-[17px] font-semibold">Monitoring and Controlling</div>
                                </div>
                                <div class="w-[552px] text-white text-[15px] font-normal">
                                    Throughout the project, progress is monitored, and performance is measured against the project plan. Any variances from the plan are identified, and corrective actions are taken as needed to keep the project on track. This stage also involves managing risks, resolving issues, and ensuring quality standards are met.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Project Stages and Flow Section -->






    <!-- Banner CTA Section -->
    <div class="w-full h-[405px] px-[75px] py-[55px] flex justify-center items-center bg-white">
        <div class="max-w-screen-xl w-full bg-[#07062e] p-[38px] rounded-lg flex flex-col items-center gap-[42px]">
            <div class="text-center flex flex-col gap-[15px]">
                <div class="text-[#e0bd00] text-2xl font-medium">Q: Already have a PRD, wireframe, or initial design?</div>
                <div class="text-white text-[15px] font-normal">Not to worry, we’ve got you covered</div>
                <div class="text-white text-[15px] font-normal w-full mx-auto max-w-[1200px]">Our design and engineering team will analyze your project to determine the remaining scope of work and suggest a vision for the next stages of development.</div>
            </div>
            <a href="#" class="w-[259px] py-[18px] bg-white rounded-lg flex justify-center items-center text-[#143669] text-base font-medium text-center">
                Let’s talk
            </a>
        </div>
    </div>
    <!-- End of Banner CTA Section -->




    <!-- What We Offer Section -->
    <div class=" mx-auto px-4 py-12">
        <div class="px-14 mb-8">
            <h2 class="text-[#17191c] text-2xl font-semibold">
                Here’s Our Toolkit Used for Mobile App Development Services
            </h2>
            <p class="text-[#143669] text-[13px] font-medium mt-4">
                Our Mobile App Development Services are Driven by Cutting-edge Technologies and Platforms, Ensuring Unparalleled Performance and Innovation.
            </p>
        </div>
        <div class="flex justify-center px-14 pb-2">
            <!-- Libraries Section -->
            <div class="w-full mx-auto py-4 px-10 mr-1 rounded-lg border border-[#e6e6e6]">
                <div class="flex flex-col text-left gap-4">
                    <div class="w-12 h-12 mb-4">
                        <img src="{{ asset('assets/img/our-services/NewcodeIcon.svg') }}" alt="">
                    </div>
                    <div class="text-[#17191c] text-md font-semibold">Libraries</div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mt-2">
                        <!-- First Row: 4 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Firebase
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            NativeScript
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Isolator
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            FixHava
                        </div>
                        <!-- Second Row: 4 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Google SDK
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Flutter
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Swift (for iOS development)
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            MvvmCross
                        </div>
                        <!-- Third Row: 3 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Xamarin
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Ionic
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            AppsFlyer
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tools and Frameworks Section -->
            <div class="w-full mx-auto py-4 px-10 ml-1 rounded-lg border border-[#e6e6e6]">
                <div class="flex flex-col text-left gap-4">
                    <div class="w-12 h-12 mb-4">
                        <img src="{{ asset('assets/img/our-services/SecondNewcodeIcon.svg') }}" alt="">
                    </div>
                    <div class="text-[#17191c] text-lg font-semibold">Tools and Frameworks</div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mt-4">
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Xamarin
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Swift (for iOS)
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Ionic
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            React Script
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            NativeScript
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Flutter
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center px-14 pb-2">
            <!-- IDEs Section -->
            <div class="w-full mx-auto py-4 px-10 mr-1 rounded-lg border border-[#e6e6e6]">
                <div class="flex flex-col text-left gap-4">
                    <div class="w-12 h-12 mb-4">
                        <img src="{{ asset('assets/img/our-services/SecondNewcodeIcon.svg') }}" alt="">
                    </div>
                    <div class="text-[#17191c] text-lg font-semibold">IDEs</div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-4">
                        <!-- First Row: 3 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Android Studio
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Flutter/DartPad
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Xcode (for iOS)
                        </div>
                        <!-- Second Row: 3 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            React Native CLI
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Xamarin
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            IntelliJ IDEA
                        </div>
                    </div>
                </div>
            </div>
            <!-- ORMs Section -->
            <div class="w-full mx-auto py-4 px-10 ml-1 rounded-lg border border-[#e6e6e6]">
                <div class="flex flex-col text-left gap-4">
                    <div class="w-12 h-12 mb-4">
                        <img src="{{ asset('assets/img/our-services/NewcodeIcon.svg') }}" alt="">
                    </div>
                    <div class="text-[#17191c] text-lg font-semibold">ORMs</div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mt-4">
                        <!-- First Row: 4 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Core Data (iOS)
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            ObjectBox
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Firebase
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Realm
                        </div>
                        <!-- Second Row: 1 Item -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            SQLite-Net
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-start flex-col items-start inline-flex px-14">
            <!-- Design Patterns Section -->
            <div class="w-full mx-auto py-4 px-10 mr-6 rounded-lg border border-[#e6e6e6]">
                <div class="flex flex-col text-left gap-4">
                    <div class="w-12 h-12 mb-4">
                        <img src="{{ asset('assets/img/our-services/NewcodeIcon.svg') }}" alt="">
                    </div>
                    <div class="text-[#17191c] text-lg font-semibold">Design Patterns</div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-4">
                        <!-- First Row: 3 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            MVVM
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Repository Pattern
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            BLoC
                        </div>
                        <!-- Second Row: 3 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Riverpod
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-3 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            MVC
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Dependency Injection
                        </div>
                        <!-- Third Row: 2 Items -->
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Clean Architecture
                        </div>
                        <div class="col-span-2 md:col-span-1 px-3 py-1 bg-[#eff2f4] rounded-full text-[#292d32] text-sm font-normal font-['Inter'] leading-tight text-center">
                            Observer
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 flex justify-center">
            <a href="#" class="px-8 py-4 bg-[#143669] rounded-lg text-white text-base font-normal font-['Inter']">
                Request a Free 15mins Consultation
            </a>
        </div>
    </div>
    <!-- End of What We Offer Section -->


    <!-- Pricing Section -->
    <section class="pricing-section container w-full max-w-[1440px] h-auto relative bg-gray-50 p-6">
        <div class="flex flex-col justify-start pl-16 gap-2.5">
            <h2 class="text-[#17191C] text-xl font-bold">OUR FLEXIBLE PAYMENT PLANS</h2>
            <p class="text-[#292D32] text-[15px] font-normal">We provide flexible models to meet your budgets and business objectives.</p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-8 mt-8">
            <div class="flex flex-col p-6 w-[350px] h-[250px] rounded-md border border-[#008080] relative">
                <img src="{{ asset('assets/img/our-services/dollar-circle.png') }}" alt="icon" class="w-10 h-10 absolute top-4 left-4">
                <h3 class="mt-14 text-center text-[#008080] text-lg font-medium">Fixed Price Model</h3>
                <p class="text-center whitespace-nowrap text-[#008080] text-[15px] font-normal">
                    As a software development company, when <br> your project objectives are clearly defined, you <br> have the option to choose a fixed-price model, <br> offering a predetermined production cost, <br> contingent upon the maintenance of the <br> original scope.
                </p>
            </div>
            <div class="flex flex-col p-6 w-[350px] h-[250px] rounded-md border border-[#FFA500] relative">
                <img src="{{ asset('assets/img/our-services/watchIcon.png') }}" alt="icon" class="w-10 h-10 absolute top-4 left-4">
                <h3 class="mt-14 text-center text-[#FFA500] text-lg font-medium">Phased Payment Structure</h3>
                <p class="text-center whitespace-nowrap text-[#FFA500] text-[15px] font-normal mt-2">
                    Tailored for progressive development <br> initiatives, this model ensures enhanced <br> adaptability, with payments synchronized to <br> the achievement of predefined project <br> milestones.
                </p>
            </div>
            <div class="flex flex-col p-6 w-[350px] h-[250px] rounded-md border border-[#444444] relative">
                <img src="{{ asset('assets/img/our-services/peopleIcon.png') }}" alt="icon" class="w-10 h-10 absolute top-4 left-4">
                <h3 class="mt-14 text-center text-[#444444] text-lg font-medium">Leverage Elite Expertise</h3>
                <p class="text-center whitespace-nowrap text-[#444444] text-[15px] font-normal mt-2">
                    Access our onshore and offshore teams of top- <br> tier professionals to bolster your bespoke <br> product development.
                </p>
            </div>
        </div>
        <div class="flex justify-center items-center mt-8">
            <a href="{{ route('contact-us') }}" class=" px-12 py-3 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">
                Start a Project
            </a>
        </div>
    </section>
    <!-- End of Pricing Section -->


    <!-- Frequently Asked Question Section -->
    <section class="bg-[#f5f5fb] px-16 py-12 flex justify-center items-center">
        <div class="w-full max-w-4xl">
            <div class="text-center text-[#17191C] text-2xl font-semibold mb-8">FAQs</div>
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        What platforms do you develop apps for?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>We develop apps for a variety of platforms, including iOS, Android, and cross-platform solutions using frameworks such as React Native and Flutter. This ensures your app can reach a broad audience across different devices.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        How long does it take to develop a mobile app?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>The time to develop a mobile app can vary greatly depending on the complexity and features required. Generally, a standard mobile app can take anywhere from 3 to 6 months, including design, development, testing, and deployment.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        How much does it cost to develop a mobile app?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>The cost of developing a mobile app depends on various factors, including the app's complexity, platform, design, and additional features. On average, the cost can range from $10,000 to $100,000. We provide detailed estimates based on your specific requirements.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        Do you provide maintenance and support after the app is launched?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>Yes, we offer ongoing maintenance and support services post-launch to ensure your app continues to function smoothly. This includes updates, bug fixes, performance enhancements, and new feature development as needed.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        Will my app be compatible with different devices and screen sizes?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>Yes, we design and develop apps with responsiveness in mind, ensuring compatibility across various devices and screen sizes. Whether it's a smartphone, tablet, or wearable device, your app will provide a seamless user experience.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        What steps are involved in the app development process?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>The app development process typically involves several key steps: requirement gathering, design, development, testing, and deployment. We work closely with you at each stage to ensure the final product aligns with your vision and business goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Frequently Asked Question Section -->


    <script>
        function toggleFAQ(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('span');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>



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