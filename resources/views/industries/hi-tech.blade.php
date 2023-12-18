@extends('layouts.general')

@section('meta-description', 'Get ahead with Hi-Tech Software Solutions of Reconnaissance Technologies. Innovative, tech-driven Hi-tech services tailored to meet the dynamic needs of your business.')
@section('meta-keywords', 'Advanced Technology Software Solutions, Cutting-Edge Software Development Services, Innovative Software Engineering Services, Next-Gen Software Design and Development, State-of-the-Art Software Platforms, Futuristic Software Applications, Smart Technology Software Services, High-End Custom Software Development')
@section('robots', 'index, follow')
@section('og-title', 'Advanced Hi-Tech Software Solutions for Modern Businesses - Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('industries.hi-tech') }}")
@section('og-description', 'Get ahead with Hi-Tech Software Solutions of Reconnaissance Technologies. Innovative, tech-driven Hi-tech services tailored to meet the dynamic needs of your business.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Advanced Hi-Tech Software Solutions for Modern Businesses - Reconnaissance Technologies')

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
                    Hi-Tech Software Solutions Provider
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                    We harness the power of cutting-edge technology to transform your ideas into reality. Our expertise lies in understanding the intricacies of advanced technology and leveraging it to create software that is not only futuristic but also practical.
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
                <img src="{{ asset('assets/img/hi-tech-image.png') }}"
                    class="object-contain" alt="Hi-Tech - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Significant Achievements Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">What We Can Deliver</h3>
            <h1 class="w-3/4 text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6">
                Future-Proof Your Business: Next-Gen Solutions for Modern Challenges
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center">
                <div class="lg:w-3/4">
                    <p>
                        Discover how our cutting-edge technologies uniquely address the complex challenges faced by today’s enterprises, driving growth and innovation across every aspect of your business.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-4 py-8">
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-red-700">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl lg:w-50">
                        Data Security Concerns
                    </h1>

                    <p>
                        In an era of frequent cyber threats, protecting sensitive data is paramount. Our Blockchain solutions offer unparalleled security, ensuring that your data remains secure and tamper-proof.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-orange-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Scalability Challenge
                    </h1>
                    
                    <p>
                        We understand the struggles of scaling technology infrastructure. Our expertise in Microservices Architecture and Serverless Architecture ensures that your enterprise can scale seamlessly, reducing downtime and improving user experience.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-yellow-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Customer Engagement Gaps
                    </h1>
                    
                    <p>
                        Enhance customer engagement with our AI/ML and Chatbot technologies. We deliver personalized experiences, ensuring your customers feel valued and understood.
                    </p>
                </div>
                <div class="card drop-shadow-lg dark:text-black mx-3 border-b-8 border-b-green-500">
                    <h1 class="py-6 font-semibold text-black hover:text-rt-primary lg:text-xl">
                        Limited Interactive Experiences
                    </h1>

                    <p>
                        Utilize our AR/VR solutions to create immersive and interactive experiences for your clients and employees, fostering greater engagement and understanding.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Significant Achievements Section -->

    <!-- Our Expertise Section -->
    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h1 class="w-full text-xl lg:text-4xl font-bold mt-2 mb-2 lg:mb-6 text-center">
                Our Expertise in Hi-Tech Software Solutions
            </h1>
            <div class="w-full lg:w-full flex justify-between items-center text-center">
                <div class="lg:w-full">
                    <p>
                        Our wide array of hi-tech software solutions is designed not just to meet the current demands of the industry but to foresee and shape the future. With our expertise, we empower your business to transcend traditional boundaries and embrace the new era of digital transformation.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 py-10">
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-violet-600 border-t-8 border-t-violet-600 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/ai-icon.png') }}" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">AI / ML</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Our AI/ML solutions offer predictive analytics, intelligent automation, and enhanced decision-making capabilities.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        By implementing these technologies, we transform data into actionable insights, driving efficiency and innovation in your business processes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-slate-800 border-t-8 border-t-slate-800 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/ar-vr-icon.webp') }}" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">AR/VR Solutions</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Our AR/VR solutions create immersive experiences, transforming the way you interact with your customers and product.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Whether it's for training, marketing, or product visualization, these technologies offer a new dimension of engagement.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-lime-500 border-t-8 border-t-lime-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/blockchain-icon.png') }}" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Blockchain Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Our expertise in Blockchain ensures secure, transparent, and decentralized solutions for variuos industries.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        From smart contracts to supply chain optimization, we empower your business with trust and accountability, enhancing your operational efficiancy and data integrity.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-yellow-500 border-t-8 border-t-yellow-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/chatbot-icon.png') }}" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Chatbot Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Our advanced chatbot development solutions utilize natural language processing to provide seamless customer interactions.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        These AI-driven bots enhance customer service, automate responses, and ensure 24/7 engagement, elevating the customer experieence to new heights.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 py-5">
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-purple-900 border-t-8 border-t-purple-900 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/iot-icon.webp') }}" width="52" alt="">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">IOT Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        We leverage IoT to connect and automate your business operations, enabling real-time data collection and analysis.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        This interconnected ecosystem enhances productivity, reduces costs, and offers new nsights, making your business smarter and more responsive.
                                    </p>
                                </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-emerald-500 border-t-8 border-t-emerald-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/microfrontend-icon.webp') }}" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Microfrontend Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Our specialty in microfrontend implores us to breakdown frontend monoliths into smaller manageable pieces.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        This enhances development speed, allows independent deployment, and improves scalbility, maintainability of your web apps.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-fuchsia-500 border-t-8 border-t-fuchsia-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/microservices-icon.webp') }}" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Micorservices Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Our expertise in microservices architecture enables us to build scalabale and flexible applications.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        This modular approach enables faster development cycles, easier maintenance, and better resilience, making your apps robust and future-ready. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-rose-500 border-t-8 border-t-rose-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/industries/serverless-icon.webp') }}" width="52" alt="">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Serveless Architecture</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Our serverless computing solutions offer cost efficiency, scalability, and flexibility.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        By abstracting the server layer, we enable you to focus on your core product without worrying about infrastructure management.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Our Expertise Section -->
</main>
@endsection