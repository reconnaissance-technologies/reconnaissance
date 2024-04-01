@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies has garnered splendid achievements in awards, accolades and certificates globally on various occasions. We leverage our perseverance and passion to excel and lead web and mobile application arena.')
@section('meta-keywords', 'Awards &amp; Accolades')
@section('robots', 'index, follow')
@section('og-title', 'Awards and Recognition | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('awards') }}")
@section('og-description', 'Reconnaissance Technologies has garnered splendid achievements in awards, accolades and certificates globally on various occasions. We leverage our perseverance and passion to excel and lead web and mobile application arena.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Awards and Recognition - Reconnaissance Technologies')

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
                    Awards & Accolades
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Showcasing our prowess through awards and recognitions garnered from around the globe as leading technology & innovation at the global stage.
                </p>

                <!-- CTA Button -->
                <div class="w-full flex py-6">
                    <a href="{{ route('contact-us') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Speak with an Expert
                    </a>
                </div>
                <!-- End of CTA Button -->
            </div>
            <div class="w-full lg:w-1/2 mt-16">
                <img src="{{ asset('assets/img/awards.png') }}"
                    class="object-fill" alt="Awards & Accolades - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Overview Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Celebrate With Us</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Awards & Accolades in recognition of our journey of excellence
            </h1>
            <div class="flex justify-between">
                <div class="w-1/2 py-8 text-2xl">
                    <p class="border-l-8 pl-3 border-l-rt-primary">
                        The awards bestowed upon us strengthen our determination to offer high-quality service to the people who matter the most – our clients.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-8 pt-14">
             <div class="rounded-lg transition-transform duration-300 transform hover:scale-105 px-6 object-contain w-50 cursor-pointer hover:shadow-sm">
                 <img src="{{ asset('assets/img/recognition/banner-award-2023-white-winner (2).png') }}" alt="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023 Badge">
                 <div>
                    <h3 class="text-blue-600 text-sm text-center pb-6 font-semibold">TechBehemoths Cyber Security Award</h3>
                    <p class="text-black text-lg text-center font-bold">Recognized as the top cyber security company in Nigeria for 2023.</p>
                 </div>
              </div>
              <div class="rounded-lg transition-transform duration-300 transform hover:scale-105 px-6 object-contain w-50 cursor-pointer hover:shadow-sm">
              <img src="{{ asset('assets/img/recognition/banner-award-2023-white-winner (1).png') }}" alt="TechBehemoths Top Custom Software Development Company in Nigeria Awards 2023 Badge">
              <div>
                    <h3 class="text-blue-600 text-sm text-center pb-6 font-semibold">TechBehemoths Top Custom Software Development Award</h3>
                    <p class="text-black text-lg text-center font-bold">Recognized as the top custom software company in Nigeria for 2023.</p>
                 </div>
              </div>
              <div  class="rounded-lg transition-transform duration-300 transform hover:scale-105 px-6 object-contain w-25 cursor-pointer hover:shadow-sm">
              <img src="{{ asset('assets/img/recognition/banner-service-white-3.png') }}" alt="TechBehemoths Top Cyber Security Company in Nigeria Awards 2023 Badge">
              <div>
                    <h3 class="text-blue-600 text-sm text-center pt-20 font-semibold">TechBehemoths Top Custom Software Development Award</h3>
                    <p class="text-black text-lg text-center pt-5 font-bold">Recognized as the top custom software development company in Nigeria for 2022.</p>
                 </div>
              </div>
              <div class="rounded-lg transition-transform duration-300 transform hover:scale-105 px-6 object-contain w-25 cursor-pointer hover:shadow-sm">
              <img src="{{ asset('assets/img/recognition/banner-service-white-1.png') }}" alt="TechBehemoths Top Web Design Company in Nigeria Awards 2022 Badge">
                <div>
                    <h3 class="text-blue-600 text-sm text-center pb-6 pt-3 font-semibold">TechBehemoths Web Design Award</h3>
                    <p class="text-black text-lg text-center font-bold">Recognized as the top web design company in Nigeria for 2022.</p>
                </div>
              </div>
              <div class="rounded-lg transition-transform duration-300 transform hover:scale-105 px-6 object-contain w-25 cursor-pointer hover:shadow-sm">
              <img src="{{ asset('assets/img/recognition/banner-service-white-2.png') }}" alt="TechBehemoths Top Cyber Security Company in Nigeria Awards 2022 Badge">
                <div>
                    <h3 class="text-blue-600 text-sm text-center pb-6 pt-3 font-semibold">TechBehemoths Cyber Security Award</h3>
                    <p class="text-black text-lg text-center font-bold">Recognized as the top cyber security company in Nigeria for 2022.</p>
                </div>
              </div>          
            </div>
        </div>
        
    </section>
    <!-- End of Overview Section -->

    <!-- Awards Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        
    </section>
    <!-- End of Awards Section -->
    <!-- Locations & Enquiry Section -->
    <section class="bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <div class="px-16">
                <h3 class="text-rt-primary text-xl uppercase font-semibold">Enquiry</h3>
                <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                    Get In Touch With Us
                </h1>
            </div>
            <div
                class="relative h-96 py-6 bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
                <h1 class="pl-16 text-2xl text-white underline uppercase font-semibold">Nigeria</h1>
                <div class="flex pt-6 pl-16 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <div class="pl-3 text-white">
                        <p class="text-xl font-medium">
                            No 50, Ebitu Ukiwe Street,<br>
                            Jabi, Abuja - 900108,<br>
                            FCT
                        </p>
                    </div>
                </div>

                <div class="flex py-3 text-white pl-16">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <div class="pl-3 ">
                        <p class="text-xl font-medium">
                            <a href="tel:+2342013309246" title="Call Reconnaissance Technologies Nigeria">+234 201 330 9246</a>
                        </p>
                    </div>
                </div>

                <div class="flex text-white pl-16 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <div class="pl-3 ">
                        <p class="text-xl font-medium">
                            <a href="mailto:enquiries@reconnaissancetechnologies.com"
                                title="Email Reconnaissance Technologies for enquiries">enquiries@reconnaissancetechnologies.com</a>
                        </p>
                    </div>
                </div>

                <div class="absolute lg:w-[500px] xl:w-[500px] 2xl:w-[500px] left-[650px] -top-28 p-4 bg-white border-gray-200 rounded-lg shadow-lg sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-black mb-6 text-xl font-semibold">Hola :)</h3>
                    @include('inc.get-a-quote-form')
                </div>
            </div>
        </div>
    </section>
    <!-- End of Locations & Enquiry Section -->
</main>
@endsection