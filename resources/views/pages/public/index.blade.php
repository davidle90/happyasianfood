@extends('layouts.public.main')

@section('styles')
    <style>
        .haf-bg-img {
            background-image: url('{{ asset('/images/haf-hero.jpg') }}');
        }
        .li-item {
            display: list-item;
            list-style-type: disc;
            list-style-position: inside;
        }
        .border-brand {
            border: solid 1px darkgoldenrod;
        }

        .custom-figure {
            position: relative;
            width: 100%; /* Maintain the full width */
            height: 400px; /* Adjust this value as needed */
            overflow: hidden; /* Hide the overflow */
        }

        .custom-image {
            width: 100%; /* Ensure the image covers the full width */
            height: 100%;
            object-fit: cover; /* This will cover the container, cutting off the top and bottom */
            object-position: center; /* Center the image */
        }

        .custom-caption {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 0 1rem;
            text-align: left;
        }

        .custom-text-bg {
            background-color: rgba(0, 0, 0, 0.84); /* Black background with 60% opacity */
            padding: 1rem; /* Padding around the text */
        }
        .section-gap {
            padding-top: 12rem;
            padding-bottom: 12rem;
        }

        .open-hours-box {
            position: relative;
            border: 2px solid darkgoldenrod;
            padding: 20px;
            margin: 50px;
        }

        .open-hours-box::before {
            content: "Öppettider";
            position: absolute;
            top: -24px; /* Adjust based on border size and font size */
            left: 50%;
            transform: translateX(-50%);
            color: darkgoldenrod;
            background: black; /* Match the background color of your page */
            padding: 0 24px; /* Optional padding for better appearance */
            font-size: 26px; /* Adjust based on your preference */
        }

        .contact-box {
            position: relative;
            border: 2px solid darkgoldenrod;
            padding: 20px;
            margin: 50px;
        }

        .contact-box::before {
            content: "Kontakt";
            position: absolute;
            top: -24px; /* Adjust based on border size and font size */
            left: 50%;
            transform: translateX(-50%);
            color: darkgoldenrod;
            background: black; /* Match the background color of your page */
            padding: 0 24px; /* Optional padding for better appearance */
            font-size: 26px; /* Adjust based on your preference */
        }

        .address-box {
            position: relative;
            border: 2px solid darkgoldenrod;
            padding: 20px;
            margin: 50px;
        }

        .address-box::before {
            content: "Adress";
            position: absolute;
            top: -24px; /* Adjust based on border size and font size */
            left: 50%;
            transform: translateX(-50%);
            color: darkgoldenrod;
            background: black; /* Match the background color of your page */
            padding: 0 24px; /* Optional padding for better appearance */
            font-size: 26px; /* Adjust based on your preference */
        }
    </style>
@endsection

@section('modals')
@endsection

@section('content')
    {{-- <div class="container mx-auto">
        <div class="w-4/5 mx-auto py-12 my-5 font-poppins">
            <h1 class="mb-4 text-2xl font-semibold leading-none tracking-tight sm:text-4xl text-center text-brand-color">
                Välkommen till <span class="font-brand font-normal">Happy Asian Food</span>
            </h1>
            <p class="mb-6 text-md font-normal sm:text-2xl sm:px-16 xl:px-48 mx-5 text-brand-color">
                Upplev glädjen i asiatiska smaker med utsökta rätter och en varm, inbjudande atmosfär.
            </p>
            <div class="text-center space-x-4 flex-row">
                <a href="{{ route('menu') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-brand-color menu-button">
                    Meny
                </a>
                <a href="https://order.trueorder.se/happyasianfood/store1" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white order-button">
                    Beställ online
                </a>
            </div>
        </div>
    </div> --}}

    <div class="bg-cover bg-fixed bg-center bg-no-repeat" style="background-image: url('{{ asset('/images/haf-hero-2.jpg') }}');">
        <div class="w-4/5 mx-auto py-12 mb-5 font-poppins">
            <h1 class="mb-4 text-2xl font-semibold leading-none tracking-tight sm:text-4xl text-center ">
                Välkommen till <span class="font-brand">Happy Asian Food</span>
            </h1>
            <p class="mb-6 text-md font-normal sm:text-2xl sm:px-16 xl:px-48 mx-5">
                Upplev glädjen i asiatiska smaker med utsökta rätter och en varm, inbjudande atmosfär.
            </p>
            <div class="text-center space-x-4">
                <a href="{{ route('menu') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-sm sm:text-base text-brand-color menu-button">
                    VISA MENYN
                </a>
                <a href="https://order.trueorder.se/happyasianfood/store1" class="inline-flex items-center justify-center px-5 py-3 text-sm sm:text-base font-medium text-white order-button">
                    BESTÄLL ONLINE
                </a>
            </div>
        </div>
    </div>

    <div class="content-container mx-auto text-center text-gray-300">
        <div class="open-hours-box">
            <div class="sm:flex justify-center my-5 sm:space-x-8">
                <p class="text-start mb-5 sm:mb-0">
                    Måndag: {{ $info['monday']->value ?? 'Stängt' }}
                    <br>
                    Tisdag: {{ $info['tuesday']->value ?? 'Stängt' }}
                    <br>
                    Onsdag: {{ $info['wednesday']->value ?? 'Stängt' }}
                    <br>
                    Torsdag: {{ $info['thursday']->value ?? 'Stängt' }}
                    <br>
                    Fredag: {{ $info['friday']->value ?? 'Stängt' }}
                </p>
                <p class="text-start">
                    Lördag: {{ $info['saturday']->value ?? 'Stängt' }}
                    <br>
                    Söndag: {{ $info['sunday']->value ?? 'Stängt' }}
                    <br>
                    Helgdagar: {{ $info['holidays']->value ?? 'Stängt' }}
                </p>
            </div>
        </div>
    </div>

    {{-- <div class="content-container mx-auto text-center text-gray-300">
        <div class="address-box">
            <p class="my-5">
                {{ $info['adress']->value ?? '' }}
                <br>
                {{ $info['zip_code']->value ?? '' }} {{ $info['city']->value ?? '' }}
                <br>
            </p>
        </div>
    </div> --}}

    <div class="content-container mx-auto text-center text-gray-300 mb-10">
        Vi finns på {{ $info['adress']->value ?? '' }} i {{ $info['city']->value ?? '' }}.
    </div>

    <div id="location-section" class="flex justify-center items-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d935.4426356608444!2d12.747932542892789!3d56.10746663900431!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46522da3ab1a17eb%3A0xa536c23629936c83!2sGinstgatan%203%2C%20254%2075%20%C3%96d%C3%A5kra!5e0!3m2!1ssv!2sse!4v1716585851580!5m2!1ssv!2sse" class="w-full h-96" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
@section('scripts')
@endsection
