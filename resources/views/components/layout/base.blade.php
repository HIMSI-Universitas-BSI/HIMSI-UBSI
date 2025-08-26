<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'JASANYATECH' }}</title>
    {{-- <link rel="icon" href="images/2.png" type="image/png" sizes="16x16"> --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/icon_web.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/fonts/unicons/unicons.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/colors/grape.css">
    <link rel="preload" href="{{ asset('assets') }}/css/fonts/space.css" as="style" onload="this.rel='stylesheet'">
    <style>
        .swiper-container.nav-color .swiper-button,
        .swiper-container.nav-color .swiper-slide figure .item-link {
            background: #605dbae6 !important;
            color: #fff !important;
        }

        .swiper-container.nav-color .swiper-button:hover,
        .swiper-container.nav-color .swiper-slide figure .item-link:hover {
            background: #605dba !important;
        }

        @media (max-width: 991.98px) {
            .navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
                color: #ffffff !important;
            }
        }
    </style>
</head>

<body class="!bg-[#f0f0f8]">
    {{ $slot }}
    <script src="{{ asset('assets') }}/js/plugins.js"></script>
    <script src="{{ asset('assets') }}/js/theme.js"></script>
</body>

</html>
