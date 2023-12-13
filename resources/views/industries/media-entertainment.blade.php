@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies\' entertainment technology solutions offered to its global clients are top-notch. Avail our media and entertainment solutions at affordable rates from a leading technology solutions provider in the media and entertainments industry.')
@section('meta-keywords', 'Entertainment Technology Solutions, IT Solution for Media Industry, integrated entertainment solutions, media and entertainment solutions, custom entertainment solutions, Media Supply Chain Cloudification')
@section('robots', 'index, follow')
@section('og-title', 'Technology Solutions for Media and Entertainment Industry IT Solutions | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.media-and-entertainment') }}")
@section('og-description', 'Reconnaissance Technologies\' entertainment technology solutions offered to its global clients are top-notch. Avail our media and entertainment solutions at affordable rates from a leading technology solutions provider in the media and entertainments industry.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Technology Solutions for Media and Entertainment Industry - Reconnaissance Technologies')

@section('custom-styles')
@endsection

@section('content')
<main class="w-full">
    <!-- Hero Section -->
    <section class="bg-gradient-to-tr from-violet-200 to-slate-700 px-16">
        <!-- hero section content goes here -->
        <div class="w-full lg:flex items-center">
            <div class="w-full lg:w-1/2 md:w1/2 lg:pt-32 my-24">
                <!-- hero section description goes here -->
                <h1 class="text-xl lg:text-5xl font-bold text-white mt-2 mb-2 lg:mb-6">
                    Media & Entertainment Solutions Provider
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    From mobile apps, subscription management platform, social networking applications to sophisticated new portal, Reconnaissance Technologies offers solutions to ensure media asset flow.
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
                <img src="{{ asset('assets/img/media-entertainment.png') }}"
                    class="object-fill" alt="Media & Entertainment - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Significant Achievements Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">What We've Achieved</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Our Significant achievements in this industry
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Media and entertainment solutions for the areas related to digital advertising, live streaming, networking and digital publishing.
                    </p>
                </div>
            </div>

            <div class="flex justify-between py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700 w-[500]">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/song-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        20k+ Songs
                    </h1>

                    <p>
                        Effortless daily streaming of songs
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/article-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        10M+ Articles
                    </h1>
                    
                    <p>
                        Insights and News Articles published
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/multimedia-icon.png') }}" class="object-contain"
                            alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        420k+ Multimedia
                    </h1>
                    
                    <p>
                        Seamless sharing of multimedia files
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/artist-icon.png') }}" class="object-contain" alt="">
                    </div>
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        30k+ Artists
                    </h1>

                    <p>
                        Connecting artists around the globe
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Media and Entertainment Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Media & Entertainment Software Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-3/4">
                    <p>
                        Web, mobile and software applications involving live streaming, for efficient multimedia content distribution.
                    </p>
                </div>
            </div>

            <div class="flex justify-between py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-violet-600 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Music Streaming Application
                    </h1>

                    <p>
                        Music Streaming apps for quick access to Artists, Music Tracks, Podcasts, Albums based on your preferences.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-900">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Video Streaming Application
                    </h1>
                    
                    <p>
                        Build video streaming apps similar to Netflix to view live video streaming from the comfort of your home.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-slate-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Social Networking Platform
                    </h1>
                    
                    <p>
                        Social networking platform app development to ensure seamless connectivity with friends and family across the globe.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-lime-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Dating & Matchmaking Applications
                    </h1>

                    <p>
                        Dating apps development with features such as virtual dates, video-based features, making it simpler to meet more people.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Media and Entertainment Solutions Section -->
</main>
@endsection