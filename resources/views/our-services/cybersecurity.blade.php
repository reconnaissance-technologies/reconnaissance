@extends('layouts.general')

@section('meta-description', 'Secure your business with Enterprise IT Security services from Reconnaissance Technologies. Expert solutions in cybersecurity, protecting data and assets against all threats.')
@section('meta-keywords', 'Corporate Cybersecurity Solutions, Advanced Enterprise Security Systems, IT Security Services for Businesses, Enterprise Network Security Management, Corporate Data Protection Strategies, Enterprise-Level Cyber Threat Defense, IT Security Compliance for Corporations, Integrated Security Technologies for Enterprises')
@section('robots', 'index, follow')
@section('og-title', 'Enterprise IT Security Solutions | Cyber Security Services | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.cybersecurity') }}")
@section('og-description', 'Secure your business with Enterprise IT Security services from Reconnaissance Technologies. Expert solutions in cybersecurity, protecting data and assets against all threats.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Enterprise IT Security Solutions | Cyber Security Services - Reconnaissance Technologies')

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
                    Cybersecurity & Enterprise IT Security Solutions
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    With our deep industry knowledge and innovative approach, we transform your security challenges into opportunities for growth and resilience. Let us be your trusted partner in navigating the ever-evolving world of IT security, ensuring your enterprise stays secure, compliant, and ahead of potential threats
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
                <img src="{{ asset('assets/img/cybersecurity-image.png') }}" class="object-fill" alt="Cybersecurity - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What Makes Us Different Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">What Makes Us Different</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Our Robust IT Security Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Our services are uniquely tailored to address the complex challenges faced by modern enterprises.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Advanced Threat Detection
                    </h1>

                    <p>
                        Utilizing cutting-edge technologies for real-time monitoring and early detection of potential security breaches.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Customized Security Frameworks
                    </h1>

                    <p>
                        Designing tailored security architectures that align with your specific business needs and regulatory requirements.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Expertise in Emerging Technologies
                    </h1>

                    <p>
                        Proficient in the latest cybersecurity technologies, including AI and machine learning, to provide forward-thinking solutions.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Incident Response and Recovery
                    </h1>

                    <p>
                        Offering rapid response services to minimize the impact of security incidents and ensure swift disaster recovery management.
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
                Secure Your Business
            </h1>
            <p>
                Elevate your enterprise's defense with our IT Security services, trusted by companies worldwide, safeguarding terabytes of critical data.
            </p>
        </div>

        <a href="{{ route('contact-us') }}" class="text-white border bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
            Speak with an Expert
        </a>
    </section>
    <!-- End of Banner CTA Section -->

    <!-- Cybersecurity Expertise Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Our Expertise in Enterprise IT Security
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Reconnaissance Technologies specializes in offering a spectrum of top-tier Enterprise IT Security services, each designed to transform and fortify your business's digital landscape. Our commitment to excellence in these areas is unparalleled, ensuring your enterprise is not just protected but also primed for sustainable growth and innovation.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-8 py-8">
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Vulnerability Assessment & Penetration Testing
                    </h1>

                    <p>
                    <ol>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Thorough vulnerability assessments for identifying security gaps
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Penetration testing to simulate cyber attacks and assess defences
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Network security measures including firewalls and intrusion detection
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Regualar security updates and patch management
                        </li>
                    </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Identity & Access Management
                    </h1>

                    <p>
                    <ol>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Comprehensive user identity verification & management
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Advanced multi-factor authentication
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Real-time monitoring of user activities and access privilges
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Streamlined access control for improved operational efficiency
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Robust protection against unauthorized data access
                        </li>
                    </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Application Security & DevSecOps
                    </h1>

                    <p>
                    <ol>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Integration of security into software development lifecycle
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Continuous security testing in development and operational phases
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Enhanced protection for applications against cyber threats
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Streamlined DevSecOps processes for faster, safer deployment
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Automated vulnerability scanning and remediation
                        </li>
                    </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Threats Monitoring & Incidence Response
                    </h1>

                    <p>
                    <ol>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Proactive detection of emerging cyber threats
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Rapid response and mitigation of security incidents
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Advanced analytics for threat intelligence and risk assessment
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Minimized downtime and operational disruption post-incident
                        </li>
                    </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Gorvernance, Risk & Compliance
                    </h1>

                    <p>
                    <ol>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Alignment with international compliance and regulatory standards
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Strategic risk management and mitigation planning
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Governance frameworks for sustainable cybersecurity practices
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Risk-aware culture fostering across the organization
                        </li>
                    </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Data Security
                    </h1>

                    <p>
                    <ol>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Advanced encryption techniques for data at rest and in transit
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Secure data storage and management practices
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Protection against data breaches and leaks
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Compliance with data protection regulations
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Secure data sharing and transfer protocol
                        </li>
                    </ol>
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black border border-blue-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Cloud Security
                    </h1>

                    <p>
                    <ol>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Comprehensive security for cloud-based infrastructure and applications
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Secure cloud migration and deployment strategies
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Protection against cloid-specific vulnerabilities and threats
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Cloud access and identity management
                        </li>
                        <li class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Encryption and security controls for cloud data
                        </li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Cybersecurity Expertise Section -->

    <!-- Banner CTA Section -->
    <section class=" h-80 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Secure Your Future!
            </h1>
            <p>
                Elevate your enterprise's security with Reconnaissance technologies, defending against cyber threats daily. Let's fortify your digital world together!
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
                Visionary Businesses and Diverse Clientele: Tailoring IT Security to Various Sectors
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        These use cases illustrate Reconnaissance Technologies’ capability to provide specialized IT security solutions, tailored to meet the distinct challenges of various industries, thus ensuring robust protection and enhanced performance in their specific operational landscapes.
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
                        We have partnered with product-focused businesses, assisting them in developing and enhancing their cloud requirements. Services to meet market demands and stay ahead of the competition.
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
                        Our extensive experience working with large enterprises enables us to provide cloud solutions for applications that handle high volumes of traffic, large data sets, and complex business processes, ensuring optimal performance.
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