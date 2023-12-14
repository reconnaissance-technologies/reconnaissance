@extends('layouts.general')

@section('meta-description', 'Top education app development companies in Nigeria. Reconnaissance Technologies offers the best education IT solution, eLearning software & eLearning app development services.')
@section('meta-keywords', 'eLearning Software Development Company Nigeria, eLearning, e-Learning Software, LMS, Learnin Management System, Education App, School Management Software')
@section('robots', 'index, follow')
@section('og-title', 'Education & e-Learning Software Development Company, Education IT Solutions - Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.education') }}")
@section('og-description', 'Top education app development companies in Nigeria. Reconnaissance Technologies offers the best education IT solution, eLearning software & eLearning app development services.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Education & e-Learning Software Development Company, Education IT Solutions - Reconnaissance Technologies')

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
                    Education & e-Learning Solutions Provider
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Craft bespoke educational e-learning solutions to propel growth, enhance efficiency, and drive high performance.
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
                <img src="{{ asset('assets/img/eLearning.webp') }}"
                    class="object-fill" alt="Educaton & eLearning - Reconnaissance Technologies">
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
                        Custom e-Learning software development services that can change the course of learning for education institutes and students.
                    </p>
                </div>
            </div>

            <div class="flex justify-between py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-red-700 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/instructors-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        50k+ Course Instructors
                    </h1>

                    <p>
                        Platform used by instructors around the world
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-orange-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/study-app-icon.png') }}" class="object-contain" alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        31M+ Online Examination
                    </h1>
                    
                    <p>
                        End-to-end assessment solutions for exams and quizzes
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-yellow-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/student-icon.png') }}" class="object-contain"
                            alt="">
                    </div>
                    
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        7M+ Student Access
                    </h1>
                    
                    <p>
                        Reaching students for self-paced and school-assisted learning solutions
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <div class="py-3 p-6 flex rounded-2xl text-white bg-green-500 lg:w-20 lg:h-20">
                        <img src="{{ asset('assets/img/courses-icon.png') }}" class="object-contain" alt="">
                    </div>
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        32k+ Courses
                    </h1>

                    <p>
                        On-demand and regularly updates courses with labs, tests, and practice exams
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Education & eLearning Solutions Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Education & e-Learning Software Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                         Our experts has successfully designed and developed technology solutions for the education sector that improve efficiency, enhance learning and facilitate students, instructors and administrators.
                    </p>
                </div>
            </div>

            <div class="flex justify-between py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-violet-600 w-[500]">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        School Management System
                    </h1>

                    <p>
                        Our school management system is specifically designed for educational institutes, schools and universities to help teachers & school administrators to manage all student & curriculam related data through centralized platform.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-purple-900">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Virtual Classroom
                    </h1>
                    
                    <p>
                        Our virtual classroom software solutions utilize video streaming and online classes to establish a learning loop between students and teachers. Virtual classroom solutions encompass video classes, course materials online, assignments evaluation, online tests and students assessment all in one place.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-slate-800">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Learning Management System
                    </h1>
                    
                    <p>
                        Learning Management system oversees the management and delivery of eLearning courses. It can be extensively used by businesses, national & local government agencies, educational institutions and online/eLearning-based institutions to plan, implement and assess learning process online.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-lime-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Research & Academic Scholars' Portal
                    </h1>

                    <p>
                        Our solution provides a channel for researchers and academic experts and scholars to share their subject expertise by resolving doubts through video chat, whiteboard, file sharing and other powerful objects.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Education & eLearning Solutions Section -->
</main>
@endsection