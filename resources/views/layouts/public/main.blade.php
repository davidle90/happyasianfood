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
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/0c64e32fd9.js" crossorigin="anonymous"></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite JS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <!-- Scripts -->
{{--    @ vite(['resources/css/app.css', 'resources/js/app.js'])--}}

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        .haf-font {
            font-family: 'Merienda', cursive;
            color: darkgoldenrod;
        }

        .font-poppins {
            font-family: 'Poppins', sans-serif;
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
                width: 95%;
            }
            #backToTopBtn {
            padding: 10px; /* Reduce padding */
            font-size: 14px; /* Reduce font size */
            bottom: 15px; /* Adjust position */
            right: 20px; /* Adjust position */
        }
        }

        /* Back to top button */
        #backToTopBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: darkgoldenrod; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            font-size: 18px; /* Increase font size */
        }

        #backToTopBtn:hover {
            background-color: goldenrod; /* Add a dark-grey background on hover */
        }
        .order-button {
            background-color: rgb(235, 47, 0);
            color: white;
            border: 2px solid rgb(235, 47, 0);
            transition: .4s all;
        }
        .order-button:hover {
            background-color: rgb(235, 94, 0);
            border: 2px solid rgb(235, 94, 0);
            color: white;
            transition: .4s all;
        }

        .menu-button {
            border: 2px solid black;
            color: black;
            transition: .2s all;
        }
        .menu-button:hover {
            background-color: rgb(235, 47, 0);
            border: 2px solid rgb(235, 47, 0);
            color: white;
            transition: .2s all;
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

<!-- Back to top button -->
<button id="backToTopBtn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@yield('scripts')
@stack('scripts')

<script>
    $(document).ready(function() {
        // Show or hide the button based on scroll position
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('#backToTopBtn').fadeIn();
            } else {
                $('#backToTopBtn').fadeOut();
            }
        });

        // Scroll to the top when the button is clicked
        $('#backToTopBtn').click(function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, 500);
            return false;
        });
    });
</script>

</body>
</html>
