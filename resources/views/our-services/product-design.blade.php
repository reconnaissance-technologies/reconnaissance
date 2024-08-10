@extends('layouts.general')

@section('meta-description', 'Get the best Product Design Services from the top firm, Reconnaissance Technologies. Expertise in creating innovative, efficient designs for diverse product design & engineering needs.')
@section('meta-keywords', 'Custom Product Design Solutions, Engineering Product Development Services, Professional Product Design Consultancy,Design Services, Prototype Design and Design Assistance')
@section('robots', 'index, follow')
@section('og-title', 'The Best Product Design Services & Solutions| Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('services.product-design') }}")
@section('og-description', 'Get the best Product Design Services from the top firm, Reconnaissance Technologies. Expertise in creating innovative, efficient designs for diverse product design & engineering needs.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'The Best Product Design Services & Solutions - Reconnaissance Technologies')

@section('custom-styles')
<style>
    @keyframes marquee {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    .animate-marquee {
        animation: marquee 45s linear infinite;
    }
</style>
@endsection

@section('custom-scripts')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col justify-between text-center">
        <!-- Video Background -->
        <video class="absolute top-0 left-0 w-full h-full object-cover z-[-1]" autoplay muted loop playsinline>
            <source src="https://s3-figma-videos-production-sig.figma.com/video/1134555079227565548/TEAM/7965/521e/-00dd-40be-90b9-bc75a5039931?Expires=1724025600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=crUdFFlxtWl5C5cXzsQxGdSAzDI3snFMl5sjBrVSnJ6V4zNgOqF-aLG2gLkpdUX6LLfrYIrZnqMPRxAVsdWzBZTBmZZuRtJ4GkZ5QXNkADX3Ao3niaVLgZJFNobIvQNrh3ls8gxmy9~j6vXhYtv~xa2cWTrTfR4yALHCfxztfX2cRmPxvcsFU06RXAi7JX6c3~lthy-ZmAyfP7GLvJVtGk-~uXmflHsUGiq2J254NM0TfmJKJLrDtwvVrC6S3awXdwrSln2aaBHdJhGiTu9lXGUWTUoMs2ad7ioA6ky~BaKgCe-cxgvpLE8EX3OKSWCSVzjTU22lQalY2x6xedHFmw__" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- hero section content goes here -->
        <div class="relative w-full lg:flex items-center justify-center">
            <div class="w-full md:pt-40 lg:pt-48 z-10 text-center text-white">
                <!-- hero section description goes here -->
                <h2 class="text-center justify-center text-white text-xl md:text-5xl py-2 font-bold whitespace-nowrap">
                    Designing Products that Delight and Deliver Results 
                </h2>
                <p class="text-sm md:text-lg mb-4">
                    Our Design-led Approach Focuses on Creating Innovative and User-centered Products that Resonate with your <br> Audience and Drive Success in the Market.
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

        <!-- Image section -->
        <div class="w-full flex justify-center mb-5">
            <div class="h-10 justify-start items-center gap-10 inline-flex animate-marquee">
            {{-- <div class="w-full max-w-screen-xl flex gap-4 justify-between items-center animate-marquee"> --}}
                <img class="w-48" src="{{ asset('assets/img/clients/blue-sea-travels.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/africasiaconnect.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/ultrashot-nigeria.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/how-tech.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/celestina-adams-care-foundation.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/africasiaconnect.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/ultrashot-nigeria.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/how-tech.png') }}" />
                <img class="w-48" src="{{ asset('assets/img/clients/celestina-adams-care-foundation.png') }}" />
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- What Makes Us Different Section -->
    <section class="px-16 pt-6 bg-gray-200 flex justify-center items-center">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-lg uppercase font-semibold">What Makes Us Different</h3>
            <h4 class="w-3/4 text-lg lg:text-lg font-bold mt-2 mb-2 lg:mb-6">
                "Unlocking innovation, one design at a time-where creativity meets functionality to shape tomorrow's success." 
            </h4>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-full">
                    <p>
                        Explore our Distinctive Factors that Set Apart Our Design Engineering Services, Ensuring Unparalleled Effectiveness For Our Clients.
                    </p>
                </div>
            </div>

            <!-- New Grid Layout -->
            <div class="grid grid-cols-3 gap-8 py-8">
                <!-- Card 1: Client-centric Collaboration -->
                <div class="relative bg-white rounded-lg p-6 shadow-md flex flex-col justify-center items-center border border-gray-300">
                    <svg class="absolute top-4 left-4 w-24 h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <g fill="#F6F7F9">
                            <path d="m45.79 93.75c2.5 0 6.3749-1.2083 10.083-7.2916l7.3334-11.875c0.7083-1.1667 2.8751-2.2917 4.2084-2.2084l13.917 0.7084c8.3333 0.4167 11.25-3.0417 12.291-5.125 1.0417-2.0834 1.9586-6.5417-3.4581-12.875l-8.2502-9.5833c-0.8333-1-1.2915-3.1668-0.9165-4.4168l4.2083-13.458c2.125-6.75-0.25-10.375-1.8333-11.958-1.5833-1.5834-5.25-3.8751-12-1.6251l-12.292 4.0417c-1.125 0.375-3.2084 0.0417-4.1667-0.625l-12.833-9.25c-5.875-4.25-10.125-3.125-12.083-2.0833-1.9583 1.0417-5.2916 3.875-5.1666 11.125l0.2917 15.792c0.0416 1.1666-0.9167 3.0833-1.8334 3.7917l-10.334 7.8333c-5.625 4.2917-5.8333 8.5833-5.4583 10.792 0.375 2.2083 2.0416 6.2083 8.7916 8.2916l13.458 4.2084c1.25 0.375 2.7917 2 3.125 3.25l3.2082 12.25c2.125 8.0416 6.2917 9.8333 8.625 10.167 0.2917 0.0834 0.6667 0.125 1.0834 0.125zm21.5-27.625c-3.5833 0-7.5416 2.1666-9.375 5.1666l-7.3334 11.875c-2.0833 3.4166-3.9583 4.4583-4.9583 4.2916-0.9583-0.125-2.4584-1.7082-3.5001-5.5416l-3.2082-12.25c-0.875-3.3333-4-6.6249-7.2916-7.6249l-13.458-4.2084c-2.5834-0.7917-4.2499-2.0834-4.4999-3.4167s0.9167-3.0833 3.0833-4.7499l10.333-7.8334c2.5416-1.9167 4.3749-5.75 4.3332-8.9167l-0.2917-15.792c-0.0416-2.7917 0.625-4.8749 1.8334-5.4999 1.2083-0.625 3.25-1e-4 5.5417 1.6249l12.833 9.25c2.5417 1.8334 6.7499 2.5001 9.7916 1.5001l12.292-4.0417c2.5833-0.8333 4.6666-0.7917 5.6249 0.1666s1.0419 3.0417 0.2502 5.625l-4.2083 13.458c-1.0417 3.2917-0.125 7.75 2.125 10.333l8.2499 9.5833c2.625 3.0416 3.0417 5.1667 2.5833 6.0417-0.4166 0.875-2.4167 1.8332-6.3751 1.6249l-13.916-0.7084c-0.1667 0.0417-0.3333 0.0417-0.4583 0.0417z"/>
                            <path d="m8.7092 94.792c0.79166 0 1.5832-0.2916 2.2082-0.9166l12.625-12.625c1.2083-1.2084 1.2083-3.2084 0-4.4167-1.2084-1.2083-3.2083-1.2083-4.4167 0l-12.625 12.625c-1.2083 1.2083-1.2083 3.2083 0 4.4167 0.625 0.625 1.4168 0.9166 2.2085 0.9166z"/>
                        </g>
                    </svg>
                    <div class="text-center z-10">
                        <div class="text-[#17191C] text-lg font-semibold">Client-centric Collaboration</div>
                        <div class="text-gray-700 text-sm leading-tight mt-2">We prioritize your vision, fostering collaboration to transform it into a design masterpiece with ongoing support from our dedicated team.</div>
                    </div>
                </div>

                <!-- Image 1 -->
                <div class="flex justify-center items-center">
                    <img class="w-[418px] h-[230px] rounded-md" src="{{ asset('assets/img/Client-centric Collaboration.png') }}" />
                </div>

                <!-- Card 2: Customized Design Solutions -->
                <div class="relative bg-white rounded-lg p-6 shadow-md flex flex-col justify-center items-center border border-gray-300">
                    <svg class="absolute top-4 left-4 w-24 h-24" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#F6F7F9">
                            <path d="m37.5 73.958c-0.4584 0-0.9584-0.125-1.375-0.3333-3.2084-1.625-5.9584-4.0417-7.9584-7.0417-1.6666-2.5-1.6666-5.7083 0-8.2083 2-3 4.75-5.4167 7.9584-7 1.5416-0.7917 3.4166-0.125 4.2083 1.4167 0.7917 1.5416 0.1667 3.4166-1.4167 4.2083-2.25 1.125-4.1666 2.8333-5.5416 4.9167-0.25 0.375-0.25 0.875 0 1.2916 1.375 2.0834 3.2916 3.7917 5.5416 4.9167 1.5417 0.7917 2.1667 2.6667 1.4167 4.2083-0.5833 1-1.7083 1.625-2.8333 1.625z"/>
                            <path d="m63.375 73.958c-1.1666 0-2.25-0.625-2.7916-1.7083-0.7917-1.5417-0.1667-3.4167 1.4166-4.2083 2.25-1.125 4.1667-2.8334 5.5417-4.9167 0.25-0.375 0.25-0.875 0-1.2917-1.375-2.0833-3.2917-3.7916-5.5417-4.9166-1.5416-0.7917-2.1666-2.6667-1.4166-4.2084 0.7916-1.5416 2.6666-2.1666 4.2083-1.4166 3.2083 1.625 5.9583 4.0416 7.9583 7.0416 1.6667 2.5 1.6667 5.7084 0 8.2084-2 3-4.75 5.4166-7.9583 7-0.5 0.2916-0.9583 0.4166-1.4167 0.4166z"/>
                            <path d="m62.5 94.792h-25c-22.625 0-32.292-9.6667-32.292-32.292v-25c0-22.625 9.6666-32.292 32.292-32.292h25c22.625 0 32.292 9.6666 32.292 32.292v25c0 22.625-9.6667 32.292-32.292 32.292zm-25-83.333c-19.208 0-26.042 6.8333-26.042 26.042v25c0 19.208 6.8333 26.042 26.042 26.042h25c19.208 0 26.042-6.8333 26.042-26.042v-25c0-19.208-6.8333-26.042-26.042-26.042h-25z"/>
                            <path d="m9.2918 36.5c-1.7083 0-3.125-1.4166-3.125-3.125 0-1.7083 1.375-3.125 3.125-3.125l80.083-0.0416c1.7083 0 3.125 1.4166 3.125 3.125 0 1.7083-1.375 3.125-3.125 3.125l-80.083 0.0416z"/>
                        </g>
                    </svg>
                    <div class="text-center z-10">
                        <div class="text-[#17191C] text-lg font-semibold">Customized Design Solutions</div>
                        <div class="text-gray-700 text-sm leading-tight mt-2">At our core, we craft tailor-made designs that uniquely cater to each client's distinct needs and aspirations, ensuring seamless alignment with their individual vision and objectives.</div>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="flex justify-center items-center">
                    <img class="w-[372px] h-[230px] rounded-md" src="{{ asset('assets/img/Customized Design Solutions.png') }}" />
                </div>

                <!-- Card 3: Agile & Adaptive Methodology -->
                <div class="relative bg-white rounded-lg p-6 shadow-md flex flex-col justify-center items-center border border-gray-300">
                    <svg class="absolute top-4 left-4 w-24 h-24" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#F6F7F9">
                            <path d="m37.5 73.958c-0.4584 0-0.9584-0.125-1.375-0.3333-3.2084-1.625-5.9584-4.0417-7.9584-7.0417-1.6666-2.5-1.6666-5.7083 0-8.2083 2-3 4.75-5.4167 7.9584-7 1.5416-0.7917 3.4166-0.125 4.2083 1.4167 0.7917 1.5416 0.1667 3.4166-1.4167 4.2083-2.25 1.125-4.1666 2.8333-5.5416 4.9167-0.25 0.375-0.25 0.875 0 1.2916 1.375 2.0834 3.2916 3.7917 5.5416 4.9167 1.5417 0.7917 2.1667 2.6667 1.4167 4.2083-0.5833 1-1.7083 1.625-2.8333 1.625z"/>
                            <path d="m63.375 73.958c-1.1666 0-2.25-0.625-2.7916-1.7083-0.7917-1.5417-0.1667-3.4167 1.4166-4.2083 2.25-1.125 4.1667-2.8334 5.5417-4.9167 0.25-0.375 0.25-0.875 0-1.2917-1.375-2.0833-3.2917-3.7916-5.5417-4.9166-1.5416-0.7917-2.1666-2.6667-1.4166-4.2084 0.7916-1.5416 2.6666-2.1666 4.2083-1.4166 3.2083 1.625 5.9583 4.0416 7.9583 7.0416 1.6667 2.5 1.6667 5.7084 0 8.2084-2 3-4.75 5.4166-7.9583 7-0.5 0.2916-0.9583 0.4166-1.4167 0.4166z"/>
                            <path d="m62.5 94.792h-25c-22.625 0-32.292-9.6667-32.292-32.292v-25c0-22.625 9.6666-32.292 32.292-32.292h25c22.625 0 32.292 9.6666 32.292 32.292v25c0 22.625-9.6667 32.292-32.292 32.292zm-25-83.333c-19.208 0-26.042 6.8333-26.042 26.042v25c0 19.208 6.8333 26.042 26.042 26.042h25c19.208 0 26.042-6.8333 26.042-26.042v-25c0-19.208-6.8333-26.042-26.042-26.042h-25z"/>
                            <path d="m9.2918 36.5c-1.7083 0-3.125-1.4166-3.125-3.125 0-1.7083 1.375-3.125 3.125-3.125l80.083-0.0416c1.7083 0 3.125 1.4166 3.125 3.125 0 1.7083-1.375 3.125-3.125 3.125l-80.083 0.0416z"/>
                        </g>
                    </svg>
                    <div class="text-center z-10">
                        <div class="text-[#17191C] text-lg font-semibold">Agile & Adaptive Methodology</div>
                        <div class="text-gray-700 text-sm leading-tight mt-2">With our agile and adaptive approach, we proactively respond to market shifts and client input, ensuring your project's sustained relevance and success.</div>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="flex justify-center items-center">
                    <img class="w-[476px] h-[230px] rounded-md" src="{{ asset('assets/img/Agile & Adaptive Methodology.png') }}" />
                </div>

                <!-- Card 4: Future-ready Design Solution -->
                <div class="relative bg-white rounded-lg p-6 shadow-md flex flex-col justify-center items-center border border-gray-300">
                    <svg class="absolute top-4 left-4 w-24 h-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        <g fill="#F6F7F9">
                            <path d="m45.79 93.75c2.5 0 6.3749-1.2083 10.083-7.2916l7.3334-11.875c0.7083-1.1667 2.8751-2.2917 4.2084-2.2084l13.917 0.7084c8.3333 0.4167 11.25-3.0417 12.291-5.125 1.0417-2.0834 1.9586-6.5417-3.4581-12.875l-8.2502-9.5833c-0.8333-1-1.2915-3.1668-0.9165-4.4168l4.2083-13.458c2.125-6.75-0.25-10.375-1.8333-11.958-1.5833-1.5834-5.25-3.8751-12-1.6251l-12.292 4.0417c-1.125 0.375-3.2084 0.0417-4.1667-0.625l-12.833-9.25c-5.875-4.25-10.125-3.125-12.083-2.0833-1.9583 1.0417-5.2916 3.875-5.1666 11.125l0.2917 15.792c0.0416 1.1666-0.9167 3.0833-1.8334 3.7917l-10.334 7.8333c-5.625 4.2917-5.8333 8.5833-5.4583 10.792 0.375 2.2083 2.0416 6.2083 8.7916 8.2916l13.458 4.2084c1.25 0.375 2.7917 2 3.125 3.25l3.2082 12.25c2.125 8.0416 6.2917 9.8333 8.625 10.167 0.2917 0.0834 0.6667 0.125 1.0834 0.125zm21.5-27.625c-3.5833 0-7.5416 2.1666-9.375 5.1666l-7.3334 11.875c-2.0833 3.4166-3.9583 4.4583-4.9583 4.2916-0.9583-0.125-2.4584-1.7082-3.5001-5.5416l-3.2082-12.25c-0.875-3.3333-4-6.6249-7.2916-7.6249l-13.458-4.2084c-2.5834-0.7917-4.2499-2.0834-4.4999-3.4167s0.9167-3.0833 3.0833-4.7499l10.333-7.8334c2.5416-1.9167 4.3749-5.75 4.3332-8.9167l-0.2917-15.792c-0.0416-2.7917 0.625-4.8749 1.8334-5.4999 1.2083-0.625 3.25-1e-4 5.5417 1.6249l12.833 9.25c2.5417 1.8334 6.7499 2.5001 9.7916 1.5001l12.292-4.0417c2.5833-0.8333 4.6666-0.7917 5.6249 0.1666s1.0419 3.0417 0.2502 5.625l-4.2083 13.458c-1.0417 3.2917-0.125 7.75 2.125 10.333l8.2499 9.5833c2.625 3.0416 3.0417 5.1667 2.5833 6.0417-0.4166 0.875-2.4167 1.8332-6.3751 1.6249l-13.916-0.7084c-0.1667 0.0417-0.3333 0.0417-0.4583 0.0417z"/>
                            <path d="m8.7092 94.792c0.79166 0 1.5832-0.2916 2.2082-0.9166l12.625-12.625c1.2083-1.2084 1.2083-3.2084 0-4.4167-1.2084-1.2083-3.2083-1.2083-4.4167 0l-12.625 12.625c-1.2083 1.2083-1.2083 3.2083 0 4.4167 0.625 0.625 1.4168 0.9166 2.2085 0.9166z"/>
                        </g>
                    </svg>
                    <div class="text-center z-10">
                        <div class="text-[#17191C] text-lg font-semibold">Future-ready Design Solution</div>
                        <div class="text-gray-700 text-sm leading-tight mt-2">In today's sustainable landscape, we prioritize forward-thinking design solutions that address present requirements while propelling us towards a more environmentally conscious future.</div>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="flex justify-center items-center">
                    <img class="w-[372px] h-[230px] rounded-md" src="{{ asset('assets/img/Future-ready Design Solution.png') }}" />
                </div>

                <!-- Card 5: Customized Design Solutions -->
                <div class="relative bg-white rounded-lg p-6 shadow-md flex flex-col justify-center items-center border border-gray-300">
                    <svg class="absolute top-4 left-4 w-24 h-24" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#F6F7F9">
                            <path d="m37.5 73.958c-0.4584 0-0.9584-0.125-1.375-0.3333-3.2084-1.625-5.9584-4.0417-7.9584-7.0417-1.6666-2.5-1.6666-5.7083 0-8.2083 2-3 4.75-5.4167 7.9584-7 1.5416-0.7917 3.4166-0.125 4.2083 1.4167 0.7917 1.5416 0.1667 3.4166-1.4167 4.2083-2.25 1.125-4.1666 2.8333-5.5416 4.9167-0.25 0.375-0.25 0.875 0 1.2916 1.375 2.0834 3.2916 3.7917 5.5416 4.9167 1.5417 0.7917 2.1667 2.6667 1.4167 4.2083-0.5833 1-1.7083 1.625-2.8333 1.625z"/>
                            <path d="m63.375 73.958c-1.1666 0-2.25-0.625-2.7916-1.7083-0.7917-1.5417-0.1667-3.4167 1.4166-4.2083 2.25-1.125 4.1667-2.8334 5.5417-4.9167 0.25-0.375 0.25-0.875 0-1.2917-1.375-2.0833-3.2917-3.7916-5.5417-4.9166-1.5416-0.7917-2.1666-2.6667-1.4166-4.2084 0.7916-1.5416 2.6666-2.1666 4.2083-1.4166 3.2083 1.625 5.9583 4.0416 7.9583 7.0416 1.6667 2.5 1.6667 5.7084 0 8.2084-2 3-4.75 5.4166-7.9583 7-0.5 0.2916-0.9583 0.4166-1.4167 0.4166z"/>
                            <path d="m62.5 94.792h-25c-22.625 0-32.292-9.6667-32.292-32.292v-25c0-22.625 9.6666-32.292 32.292-32.292h25c22.625 0 32.292 9.6666 32.292 32.292v25c0 22.625-9.6667 32.292-32.292 32.292zm-25-83.333c-19.208 0-26.042 6.8333-26.042 26.042v25c0 19.208 6.8333 26.042 26.042 26.042h25c19.208 0 26.042-6.8333 26.042-26.042v-25c0-19.208-6.8333-26.042-26.042-26.042h-25z"/>
                            <path d="m9.2918 36.5c-1.7083 0-3.125-1.4166-3.125-3.125 0-1.7083 1.375-3.125 3.125-3.125l80.083-0.0416c1.7083 0 3.125 1.4166 3.125 3.125 0 1.7083-1.375 3.125-3.125 3.125l-80.083 0.0416z"/>
                        </g>
                    </svg>
                    <div class="text-center z-10">
                        <div class="text-[#17191C] text-lg font-semibold">Customized Design Solutions</div>
                        <div class="text-gray-700 text-sm leading-tight mt-2">At our core, we craft tailor-made designs that uniquely cater to each client's distinct needs and aspirations, ensuring seamless alignment with their individual vision and objectives.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of What Makes Us Different Section -->




    <!-- Banner CTA Section -->
    <div class="w-full h-[605px] relative bg-white flex flex-col px-16">
        <div class="text-[#17191C] text-xl font-semibold mt-6">An Array of What We Offer</div>

        <!-- Holistic Sustainability Card (Higher Position) -->
        <div class="pl-3 pr-3 pt-[26.50px] pb-[27.50px] absolute top-[112px] bg-[#006295] rounded-lg flex flex-col items-center" style="left: 50%; transform: translateX(-50%);">
            <div class="text-center text-white text-xl font-medium">Holistic Sustainability</div>
            <div class="w-[238px] text-center text-white text-[15px] font-normal mt-4">Like a finely tuned symphony, our design process harmonizes <br> aesthetic appeal with eco- <br> conscious principles, fostering products that not only excel in performance but also champion sustainability for generations to <br> come.</div>
        </div>

        <!-- Innovative Ideation Card (Aligned Below) -->
        <div class="px-3 pt-[59.50px] pb-[60.50px] absolute top-[222px] bg-[#A671B6] rounded-lg flex flex-col items-center" style="left: 25%; transform: translateX(-50%);">
            <div class="text-center text-white text-xl font-medium">Innovative Ideation</div>
            <div class="w-[236px] text-center text-white text-[15px] font-normal mt-4">We orchestrate a harmonious <br> blend of creativity and <br> functionality, sculpting <br> innovative product designs that captivate and inspire.</div>
        </div>

        <!-- User-Centric Approach Card (Aligned Below) -->
        <div class="px-3 pt-[60.48px] pb-[59.52px] absolute top-[222px] bg-[#484A85] rounded-lg flex flex-col items-center" style="left: 75%; transform: translateX(-50%);">
            <div class="text-center text-white text-xl font-medium">User-Centric Approach</div>
            <div class="w-[250px] text-center text-white text-[15px] font-normal mt-4">With a conductor's precision, we prioritize the user experience, <br> crafting intuitive and empathetic <br> designs that resonate deeply with <br> your audience.</div>
        </div>

        <!-- Button Below Holistic Sustainability -->
        <a href="{{ route('contact-us') }}" class="pl-[22px] pr-5 pt-5 pb-4 absolute top-[450px] bg-[#143669] rounded-lg flex justify-center items-center" style="left: 50%; transform: translateX(-50%);">
            <div class="text-white text-base font-normal">Request a Free 15mins Consultation</div>
        </a>
    </div>
    <!-- End of Banner CTA Section -->



    <!-- Product Design Solutions Section -->
    <section class="w-[1440px] h-[747px] px-[100px] pr-[150px] pt-[85px] pb-[69px] flex-col justify-end items-start gap-[62px] inline-flex bg-white">
        <div class="self-stretch flex-col justify-center items-start gap-6 inline-flex">
            <h1 class="text-center text-[#17191C] text-xl font-bold">Our Product Design Framework</h1>
            <p class="text-[#3B4454] font-medium">
                Professionalism is key to us & here's a refined version that underscores the professionalism of your company:
            </p>
        </div>
        <div class="self-stretch flex-col justify-start items-start gap-[62px] inline-flex">
            <div class="grid grid-cols-2 gap-[80px]">
                <div class="flex-col justify-start items-start gap-[15px] inline-flex">
                    <h2 class="text-[#17191C] font-semibold">Guiding Your Success</h2>
                    <p class="w-[545px] text-[#17191C] text-[15px] font-normal">
                        At Reconnaissance, we unveil the blueprint guiding our efforts to engineer <br> software solutions that epitomize excellence and drive your success.
                    </p>
                </div>
                <div class="flex-col justify-start items-start gap-[15px] inline-flex">
                    <h2 class="text-[#17191C] font-semibold">Your Vision, Our Expertise</h2>
                    <p class="w-[550px] text-[#17191C] text-[15px] font-normal">
                        We operate at the intersection of innovation and precision. Your insights are <br> the cornerstone of our design process, meticulously crafted by our team of <br> seasoned professionals to elevate your vision to new heights.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-[80px]">
                <div class="flex-col justify-start items-start gap-[15px] inline-flex">
                    <h2 class="text-[#17191C] font-semibold">Precision in Evolution</h2>
                    <p class="w-[545px] text-[#17191C] text-[15px] font-normal">
                        Our approach is as dynamic as it is exacting. With an unwavering <br> commitment to excellence, we continuously refine and elevate our designs <br> to mirror the evolution of your business landscape.
                    </p>
                </div>
                <div class="flex-col justify-start items-start gap-[15px] inline-flex">
                    <h2 class="text-[#17191C] font-semibold">Commitment to Excellence</h2>
                    <p class="w-[550px] text-[#17191C] text-[15px] font-normal">
                        Your journey is our top priority. From inception to implementation, we uphold <br> the highest standards of professionalism, ensuring a seamless and enriching <br> experience at every turn.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-[80px]">
                <div class="flex-col justify-start items-start gap-[15px] inline-flex">
                    <h2 class="text-[#17191C] font-semibold">Agile Mastery</h2>
                    <p class="w-[545px] text-[#17191C] text-[15px] font-normal">
                        Agility is our forte. Leveraging agile methodologies, we adeptly adapt to your <br> evolving needs, guaranteeing that our designs remain at the forefront of <br> innovation and efficacy.
                    </p>
                </div>
                <div class="flex-col justify-start items-start gap-[15px] inline-flex">
                    <h2 class="text-[#17191C] font-semibold">Engineering for Tomorrow</h2>
                    <p class="w-[550px] text-[#17191C] text-[15px] font-normal">
                        Our designs transcend aesthetics; they embody the essence of <br> sophistication and foresight. With a keen focus on sustainability, accessibility, <br> and scalability, we engineer solutions that stand as testaments to your <br> enduring success.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Product Design Solutions Section -->


    <!-- Success Story Section -->
    <section class="w-full h-[502px] px-16 pt-[69px] pb-[70px] bg-[#EDEDF8] flex justify-center items-center">
        <div class="w-full max-w-[1200px] pl-[93px] pr-[94px] pt-[47px] pb-12 bg-[#143669] rounded-lg flex justify-between items-center">
            <div class="flex flex-col justify-start items-start gap-[27px]">
                <div class="w-[450px] text-white text-2xl font-medium whitespace-nowrap">
                    Discover how our Product Design Services <br> transformed VIVINO's digital product, resulting <br> in a 60% increase in engagement and a 10% <br> decrease in bounce rate.
                </div>
                <div class="flex justify-start items-center gap-[26px]">
                    <img class="w-[67px] h-[67px] relative rounded-[100px]" src="{{ asset('assets/img/testimonials/Heinelayout.png') }}" />
                    <div class="flex flex-col justify-start items-start gap-2">
                        <div class="text-white text-sm font-bold">HEINE ZACHARIASSEN</div>
                        <div class="text-white text-sm font-normal">Founder & CEO</div>
                    </div>
                </div>
            </div>
            <div class="flex px-[17px] pt-4 pb-[17px] bg-white rounded-2xl justify-center items-center">
                <div class="flex justify-start items-center">
                    <img class="w-[131px] h-[232px]" src="{{ asset('assets/img/testimonials/Winelayout.png') }}" />
                    <img class="w-[127px] h-[235px]" src="{{ asset('assets/img/testimonials/Phonelayout.png') }}" />
                </div>
            </div>
        </div>
    </section>
    <!-- End of Success Story Section -->

    <!-- Call to Action Section -->
    <section class="w-full h-[356px] flex justify-center items-center bg-slate-50 px-4">
        <div class="max-w-[933px] flex flex-col justify-start items-center gap-[53px] text-center">
            <div class="text-[#17191C] text-2xl font-bold">
                Require the expertise of a Product Design Specialist to streamline your product development process?
            </div>
            <a href="{{ route('contact-us') }}" class="px-8 py-4 bg-[#143669] rounded-lg text-white text-base font-normal hover:bg-[#143671]">
                Hire a Product Designer
            </a>
        </div>
    </section>
    <!-- End of Call to Action Section -->

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
        
    <!-- Locations & Enquiry Section -->
    @include('inc.location-enquiry-section')
    <!-- End of Locations & Enquiry Section -->

    <!-- Frequently Asked Question Section -->
    <section class="bg-violet-50 px-16 py-12 flex justify-center items-center">
        <div class="w-full max-w-4xl">
            <div class="text-center text-[#17191C] text-2xl font-semibold mb-8">FAQs</div>
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        What distinguishes your product design services from others in the industry?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>Our product design services are distinguished by our user-centric approach, innovative solutions, and commitment to delivering high-quality designs that meet the specific needs and preferences of our clients.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        How do you ensure that the designs meet our specific needs and preferences?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>We ensure our designs meet your specific needs and preferences through a collaborative process, involving regular feedback and iterations to refine the design until it perfectly aligns with your vision.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        Could you walk us through your product design process?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>Our product design process involves initial consultations, research and analysis, concept development, prototyping, user testing, and final design delivery, ensuring a thorough and comprehensive approach.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        What level of involvement can we expect throughout the design journey?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>You can expect a high level of involvement throughout the design journey, with regular updates, meetings, and opportunities for feedback to ensure the design aligns with your expectations.</p>
                    </div>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <button class="w-full flex justify-between items-center text-left text-lg font-medium text-[#17191C] focus:outline-none" onclick="toggleFAQ(this)">
                        How do you handle feedback and revisions during the design process?
                        <span class="transform transition-transform duration-200">&#x25BC;</span>
                    </button>
                    <div class="hidden pt-4 text-[#374151]">
                        <p>We handle feedback and revisions through an iterative process, incorporating your suggestions and making necessary adjustments to the design to ensure it meets your satisfaction.</p>
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
</main>
@endsection