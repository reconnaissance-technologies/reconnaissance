<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D2QPH4FE3N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D2QPH4FE3N');
    </script>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="@yield('meta-description')" />
    <meta name="keywords"
        content="@yield('meta-keywords')" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#0067FF" />
    <meta name="robots" content="@yield('robots')">
    <meta property="og:title" content="@yield('og-title')">
    <meta property="og:site_name" content="@yield('og-sitename')">
    <meta property="og:url" content="@yield('og-url')">
    <meta property="og:description"
        content="@yield('og-description')">
    <meta property="og:type" content="website">
    <meta property="og:phone_number" content="+234-708-063-9008">
    <meta property="og:email" content="enquiries@reconnaissancetechnologies.com">
    <meta property="og:image" content="@yield('og-image')">

    <meta name="fb:admins" content="168384391200">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@recontech_ng" />

    {{-- <meta name="google-site-verification" content="2EpKrukJzFrF4jBZBFQ65qIgekegRS83dYp2sUARVbc" />
    <meta name="google-site-verification" content="qcgtG-7Y55KHuZxwMzFDXka3gDF9TBj6tf5dLujbKdQ" />

    <meta name="msvalidate.01" content="58965EC2D7CA845C816AC90D8375727A" />
    <meta name="author" content="Vishal Chhawchharia" />
    <meta name="language" content="english" />
    <meta http-equiv="content-language" content="en-us">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="p:domain_verify" content="0e507a464331c0206e2d5179cb65c6d8" /> --}}

    <base href="{{ route('index') }}">

    <title>@yield('title')</title>

    <link rel="manifest" href="{{ asset('assets/manifest.json') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/icons/icon-192x192.png') }}">
    <link rel="canonical" href="{{ route('index') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css','resources/js/app.js'])
    @yield('custom-styles')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window
                .matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="text-black antialiased bg-white">
    <!-- Header Section -->
    <header>
        <!-- Navigation and Logo Implementation -->
        @include('inc.menu.menu')
        <!-- End of Navigation and Logo Implementation -->
    </header>
    <!-- End of Header Section -->

    @yield('content')

    <!-- Footer Section -->
    @include('inc.footer-section')
    <!-- End of Footer Section -->

    <!-- Scroll to Top Button -->
    <div id="scroll-to-top" class="hidden">
        <button  onclick="window.scrollTo(0, 0);" title="Back to Top"
            class="fixed z-90 bottom-10 right-8 bg-white w-16 h-16 rounded-full drop-shadow-lg flex justify-center items-center text-white text-4xl hover:drop-shadow-3xl hover:animate-bounce duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6 text-rt-primary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75L12 3m0 0l3.75 3.75M12 3v18" />
            </svg>
        </button>
    </div>
    <!-- End of Scroll to Top Button -->
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@if ( Request::is('/') || Request::is('our-company/contact-us'))
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();

            // Show the progress indicator and hide the form content
            $('#sendBtn').addClass('hidden');
            $('#progressIndicator').removeClass('hidden');

            var formData = new FormData(this);

            $.ajax({
                url: '{{ route('send-contact-form') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // console.log(response.message);
                    $('#responseMessage').text(response.message);
                },
                error: function(xhr, status, error) {
                    var errors = xhr.responseJSON.errors;

                    $.each(errors, function(key, value) {
                        console.log(value);
                        $('input[name="' + key + '"]').next('span').text(value);
                        $('textarea[name="' + key + '"]').next('span').text(value);
                    });
                },
                complete: function() {
                    // Hide the progress indicator and show the form content
                    $('#progressIndicator').addClass('hidden');
                    $('#contactForm').trigger("reset");
                    $('#responseDiv').removeClass('hidden');
                    setInterval(function() {
                        $('#responseDiv').addClass('hidden');
                        $('#formContent').removeClass('hidden');
                        $('#sendBtn').removeClass('hidden');
                    }, 3000);
                    
                }
            });
        });
    });
    
    function formatPhoneNumber(input) {
        // Remove all non-numeric characters from the input value
        var cleaned = input.value.replace(/\D/g, '');

        // Check if the cleaned number is empty or not
        if (cleaned === '') {
            input.value = '';
            return;
        }

        // Format the cleaned number with dashes
        var formatted = cleaned.slice(0, 3) + '-' + cleaned.slice(3, 6) + '-' + cleaned.slice(6, 9) + '-' + cleaned.slice(9, 13);
        if (formatted.length > 0) {
            if (formatted[0] !== '+') {
                input.value= '+' + formatted;
            }
        }
        // input.value = formatted;
    }
</script>
@endif
</html>
