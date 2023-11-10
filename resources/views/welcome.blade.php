<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Reconnaissance Technologies is a trusted web, mobile application & software development and IT consulting service provider headquartered in Nigeria. 10+ Expert Developers, 3+ industry awards. Let's Talk" />
    <meta name="keywords"
        content="software development company, software development company Nigeria, software company, offshore software development, mobile app development company, app development company, app developers Nigeria, web development company, web application development company, web design company, enterprise business solution, enterprise web & mobile app development company, enterprise services company, software product development solutions" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#0067FF" />
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Web, Mobile Application & Software Development Company | IT Solutions Provider">
    <meta property="og:site_name" content="Reconnaissance Technologies">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:description"
        content="Reconnaissance Technologies is an award-winning web, mobile application and software development company in Nigeria. 3+ Yrs. Exp. in IT Services & Solutions, 20+ Worldwide Clients, 10+ Experts. Contact Us Now!">
    <meta property="og:type" content="website">
    <meta property="og:phone_number" content="+234-708-063-9008">
    <meta property="og:email" content="enquiries@reconnaissancetechnologies.com">
    <meta property="og:image" content="{{ asset('assets/img/logo-dark.png') }}">
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

    <base href="{{ url('/') }}">

    <title>#1 Web, Mobile Application & Software Development Company in Nigeria - Reconnaissance Technologies</title>

    <link rel="manifest" href="{{ asset('assets/manifest.json') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/icons/icon-192x192.png') }}">
    <link rel="canonical" href="{{ url('/') }}">

    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        .bg-award-leaf {
            background-image: url("/assets/img/awrd-leaf.png");
        }
    </style>
</head>

<body class="bg-white text-black antialiased dark:bg-black dark:text-white">
</body>

</html>