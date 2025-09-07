<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">

    {{-- Vite untuk Tailwind + custom app.js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title ?? 'HIMSI' }}</title>
    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/himsi.png') }}">
    {{-- Vendor CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/unicons/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/grape.css') }}">
    <link rel="preload" href="{{ asset('assets/css/fonts/space.css') }}" as="style" onload="this.rel='stylesheet'">

    {{-- Custom inline style --}}
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

<body class="!bg-[#ffffff]">
    {{ $slot }}

    {{-- Vendor JS --}}
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
