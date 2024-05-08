<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('/images/HappyAsianFood.png') }}"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/0c64e32fd9.js" crossorigin="anonymous"></script>

    <!-- Flowbite JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
{{--    @ vite(['resources/css/app.css', 'resources/js/app.js'])--}}

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .haf-font {
            font-family: 'Merienda', sans-serif;
            color: darkgoldenrod;
        }

        .font-brand {
            font-family: 'Merienda', cursive;
        }

        .bg-black {
            --tw-bg-opacity: 1;
            background-color: rgba(0, 0, 0, var(--tw-bg-opacity));
        }
        .navlink-text {
            transition: .2s all;
            color: darkgoldenrod;
        }

        .navlink-text:hover {
            color: gold;
            text-decoration: underline;
            text-underline-offset: 8px;
            transition: .2s all;
        }
        .content-container {
            width: 64%;
        }

        .text-brand-color {
            color: darkgoldenrod;
        }

        @media only screen and (max-width: 768px) {
            .content-container {
                width: 80%;
            }
        }
    </style>

    @yield('styles')
    @stack('styles')
</head>
<body class="h-screen flex flex-col justify-between">

@yield('modals')

<!-- Header -->
<div class="font-brand">
    @include('layouts.public.header')
</div>

<!-- Main -->
<main class="grow bg-black font-brand">
    @yield('content')
</main>

<!-- Footer -->
@include('layouts.public.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@yield('scripts')
@stack('scripts')

</body>
</html>
