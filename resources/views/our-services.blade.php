@extends('layouts.general')

@section('meta-description', 'We understand the need of your business to deliver you with the best performance and ROI with the use of our different global delivery models. We offer off-site, on-site, off-site/on-site, offshore, hybrid and Global delivery models.')
@section('meta-keywords', 'it service delivery model, business strategy model, integrated service delivery model, onsite offshore model, offshore development model')
@section('robots', 'index, follow')
@section('og-title', 'Reconnaissance Technologies\' Global Business Delivery Model | Reconnaissance Technologies')
@section('og-sitename', 'Reconnaissance Technologies')
@section('og-url', "{{ route('sm.delivery') }}")
@section('og-description', 'We understand the need of your business to deliver you with the best performance and ROI with the use of our different global delivery models. We offer off-site, on-site, off-site/on-site, offshore, hybrid and Global delivery models.')
@section('og-image', "{{ asset('assets/img/logo-dark.png') }}")
@section('title', 'Reconnaissance Technologies\' Global Business Delivery Model - Reconnaissance Technologies')

@section('custom-styles')
<style>
    .logo-dark {
        background-image: url("/assets/img/logo-dark.svg");
    }

    .logo-mixed {
        background-image: url("/assets/img/logo-mixed.svg")
    }
</style>
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
                    Our Services
                </h1>
                <p class="text-md lg:text-xl text-white mb-8">
                Elevate your business with our cutting-edge IT solutions. From software development to cybersecurity, we've got you covered at Reconnaissance Technologies.
                </p>
            </div>
            <div class="w-full lg:w-1/2 mt-[350px] right-0">
                <img src="{{ asset('assets/img/company-overview.png') }}"
                    class="object-fill scale-x-150" alt="Company Overview - Reconnaissance Technologies">
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <section class="px-16 bg-white dark:text-white dark:bg-gray-800 flex justify-between">
        <div class="w-full py-6">
            <h3 class="text-rt-primary text-xl uppercase font-semibold">Our Offerings</h3>
            <h1 class="w-3/4 text-xl lg:text-3xl font-bold mt-2 mb-2 lg:mb-6">
                We offer professional IT Services
            </h1>
       <div class="flex flex-col sm:flex-row items-center justify-center gap-4 py-10">
        <div class="group h-96 w-80 [perspective:1000px]">
              <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-red-700 border-t-8 border-t-red-700 rounded-lg">
              <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
              <div class="flex flex-col justify-between h-full">
                <img src="{{ asset('assets/img/our-services/frontendcoding.png') }}" class="text-white py-2 rounded-md bg-red-600" width="52">
                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Frontend Development</h1>
              </div>
             </div>
              <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
               <div class="h-full">
                <div class="mt-2 space-y-2">
                    <p class="text-black text-lg font-light leading-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, enim.
                    </p>
                    <p class="text-black text-lg font-light leading-5">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam maiores dolorem inventore vero fugiat quos.
                    </p>
                </div>
                <div class="flex justify-end hover:animate-bounce">
                    <a href="{{ route('services.frontend-development') }}" class="text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </a>
                </div>
               </div>
              </div>
           </div>
          </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-orange-500 border-t-8 border-t-orange-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/our-services/softcoding.png') }}" class="text-white p-2 rounded-md bg-orange-500" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Software Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reiciendis minus eum, doloremque minima tempore.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe rerum mollitia consequatur repellendus magnam corrupti.
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.software-devlopment') }}" class="text-orange-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-yellow-300 border-t-8 border-t-yellow-300 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/our-services/mobilecoding.png') }}" class="text-white py-1 rounded-md bg-yellow-300" width="52">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Mobile App Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam doloribus eaque reiciendis et illo minus.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus rerum ullam sint cupiditate, provident veritatis.
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.mobile-app') }}" class="text-yellow-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-green-700 border-t-8 border-t-green-700 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/webdevelopment.png') }}" width="52" class="text-white p-2 rounded-md bg-green-700">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Web Application Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut porro explicabo est non pariatur aperiam!
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum itaque, possimus laudantium officia delectus natus?
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.web-app') }}" class="text-green-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 py-5">
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-blue-500 border-t-8 border-t-blue-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/ui-ux.webp') }}" width="52" class="text-white p-2 rounded-md bg-blue-500" >
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Product Design</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, officiis architecto odit dolore officia ipsum.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, pariatur placeat fuga officiis quisquam dicta?
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.product-design') }}" class="text-blue-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-indigo-400 border-t-8 border-t-indigo-400 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/cloud-ui-ux.svg.svg') }}" width="52" class="text-white p-2 rounded-md bg-indigo-400">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Cloud & Infrastructure</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore, corporis.
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi omnis eum perspiciatis quas illum in.
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.cloud-infrastructure') }}" class="text-indigo-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-violet-600 border-t-8 border-t-violet-600 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/cybersec1.svg') }}" width="52" class="text-white p-2 rounded-md bg-violet-600">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Cybersecurity</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum eum qui suscipit, cumque animi blanditiis!
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores deserunt recusandae nemo ad, maxime accusamus.
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.cybersecurity') }}" class="text-violet-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-[#22d3ee] border-t-8 border-t-[#22d3ee] rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/ar&vr.svg') }}" width="52" class="text-white p-2 rounded-md bg-[#22d3ee]">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">AR/VR Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate illo sed culpa voluptatum iusto atque?
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quo fugit error perspiciatis eius beatae.
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.ar-vr-development') }}" class="text-[#22d3ee]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 py-5">
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-gray-500 border-t-8 border-t-gray-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/AI&ML.svg') }}" width="52" class="text-white p-2 rounded-md bg-gray-500">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">AI/ML Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa odio deleniti hic rerum dolorem perspiciatis laboriosam fugiat repudiandae nemo dolorum!
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit molestias, exercitationem vero voluptatum asperiores eos!
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.ai-ml-development') }}" class="text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-yellow-500 border-t-8 border-t-yellow-500 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/iot.svg') }}" width="52" class="text-white p-2 rounded-md bg-yellow-500">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">IOT Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In vel sint quis! Quae rem labore odio minima beatae enim illo!
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae laboriosam veritatis obcaecati quis alias minus!
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.iot-development') }}" class="text-yellow-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group h-96 w-80 [perspective:1000px]">
                    <div class="relative h-full w-full shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)] border-b-8 border-b-green-300 border-t-8 border-t-green-300 rounded-lg">
                        <div class="absolute inset-0 p-4 bg-[#fdfcf7] bg-opacity-10 rounded-xl">
                            <div class="flex flex-col justify-between h-full">
                                <img src="{{ asset('assets/img/our-services/chatbotcoding.png') }}" width="52" class="text-white py-2 rounded-md bg-green-500">
                                <h1 class="mt-auto font-light text-4xl leading-5 text-black block">Chatbot Development</h1>
                            </div>
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-[#fdfcf7] p-8 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="h-full">
                                <div class="mt-2 space-y-2">
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quae assumenda doloremque possimus ullam magnam dicta sit suscipit sequi est?
                                    </p>
                                    <p class="text-black text-lg font-light leading-5">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita hic saepe natus exercitationem ipsum labore.
                                    </p>
                                </div>
                                <div class="flex justify-end hover:animate-bounce">
                                  <a href="{{ route('services.chatbot-development') }}" class="text-green-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                      stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                       <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                    </svg>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
    </section>
