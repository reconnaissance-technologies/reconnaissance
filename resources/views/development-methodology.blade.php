@extends('layouts.general')

@section('meta-description', 'Reconnaissance Technologies employs a very disciplined approach to the methods and strategies used in a project development process. We offer Agile, Scrum, Waterfall, Spiral and Iterative methodologies.')
@section('meta-keywords', 'software Development Methodology, software development process, system development methodologies, Agile Business Consulting, Agile Software Development, project development methodologies, SDLC Methodology')
@section('robots', 'index, follow')
@section('og-title', 'Implementation of Project Development Methodologies | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('development-methodology') }}")
@section('og-description', 'Reconnaissance Technologies employs a very disciplined approach to the methods and strategies used in a project development process. We offer Agile, Scrum, Waterfall, Spiral and Iterative methodologies.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Implementation of Project Development Methodologies - Reconnaissance Technologies')

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
                    Development Methodology
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    Our development methodologies are crafted in a way to help clients achieve their business goals within the predefined deadline and budget.
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
                <img src="{{ asset('assets/img/development-methodology-image.png') }}"
                    class="object-fill" alt="Development Methodology - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Overview Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Development Methodologies</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Methodologies for quick project turnaround in fast-paced environments.</h1>
            <div class="flex justify-between">
                <div class="w-1/2 py-8 p-6 text-2xl">
                    <p class="border-l-8 border-l-rt-primary">
                        Reconnaissance Technologies propels businesses to the summit of success through innovative technology solutions.
                    </p>
                </div>
                <div class="w-1/2 py-8 p-6">
                    <p class="pb-8">
                        The digital age and proliferation of technology makes it imperative for businesses to transform. We have worked for clients in almost every industry and believe each and every project has different needs and requirements. We at Reconnaissance Technologies offer different methodologies based on business dynamics, customer expectations, timeline, budget allocations and level of expertise required and experience of resources.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Overview Section -->

    <!-- Watch word Section -->
    <section class=" h-48 px-16 bg-black text-white flex justify-between items-center">
        <div class="w-3/4 py-6">
            <p class="text-lg font-bold">
                Unleash Innovation, Embrace Efficiency
            </p>
            <h1 class="text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Transforming Visions into Reality with Our Cutting-Edge Development Methodology
            </h1>
        </div>
    </section>
    <!-- End of Watch word Section -->

    <!-- Our Commitment Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Methodologies We Use
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Explore our diverse development methodologies and pick the most suitable one as per your needs.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 py-8">
                <div class="flex p-6">
                    <img src="{{ asset('assets/img/agile-methodology.png') }}" height="381" class="object-contain" alt="Agile Methodology - Reconnaissance Technologies">
                    <div>
                        <h1 class="text-2xl font-bold mt-2 mb-2">
                            Agile Methodology
                        </h1>
                        <p class="pb-8">
                            Agile is one of the most popular development methodologies focussed on collaboration. This method introduces new changes with continuous communication and collaboration with short-term software development cycles called iterations.
                        </p>
                    
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Minimizes risk and focuses on people over processes.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Divide tasks into smaller modules called sprints.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Predetermine scope of work and assign dedicated people to teams.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Bifurcate work till the final release.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex p-6">
                    <div>
                        <h1 class="text-2xl font-bold mt-2 mb-2">
                            Waterfall Methodology
                        </h1>
                        <p class="">
                            This is one of the most traditional and commonly used software development methodologies for software development. Linear in nature with projects progressing in stages, Waterfall methodology depends on completion of one stage precedes the other.
                        </p>
                        
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Defined scope, objective and expectations before the start of the development process.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Linear sequential flow of development process.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Most effective method for small projects in cases where the requirements are well defined.
                            </p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/waterfall-methodology.png') }}" height="381" class="object-contain" alt="Waterfall Methodology - Reconnaissance Technologies">
                </div>
                <div class="flex p-6">
                    <img src="{{ asset('assets/img/spiral-methodology.png') }}" width="500" class="object-contain" alt="Spiral Methodology - Reconnaissance Technologies">
                    <div>
                        <h1 class="text-2xl font-bold mt-2 mb-2">
                            Spiral Methodology
                        </h1>
                        <p class="">
                            Spiral development, a dynamic approach embraced with zeal, iterative cycles, progress it does reveal.
                            Risk management intertwined, a guiding light, flexibility and adaptability, in every project's flight.
                        </p>
                        
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Iterative cycles, allowing for continuous refinement and enhancement of a project
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Flexibility allows teams to respond effectively to shifting priorities, technological advancements, or unexpected challenges encountered during development.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Stakeholder engagement to ensure regular feedback from clients and end-users is solicited at various stages, ensuring that the evolving product aligns with their expectations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex p-6">
                    <div class="px-2">
                        <h1 class="text-2xl font-bold mt-2 mb-2">
                            Scrum Methodology
                        </h1>
                        <p class="">
                            This methodology is ideal for projects with rapidly changing, dynamic or highly evolving requirements. Scrum development kicks off with a brief planning for each sprint, daily scrum meetings to highlight project progress, and a final review. It is ideal for managing projects which does not have well defined requirements and feedback from the client.
                        </p>
                        
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Development process moves in a series of sprints or iterations.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Flexibility to adapt to emerging business realities.
                            </p>
                        </div>
                        <div class="py-1">
                            <p class="p-4 shadow-lg rounded-md border border-gray-500">
                                Fast feedback cycle to stay focused and discover problems.
                            </p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/img/scrum-methodology.png') }}" width="500" class="object-contain" alt="Waterfall Methodology - Reconnaissance Technologies">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Commitment Section -->
</main>
@endsection