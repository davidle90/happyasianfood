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
    </style>
@endsection

@section('modals')
@endsection

@section('content')

    <figure class="relative custom-figure">
        <img class="custom-image" src="{{ asset('/images/haf-hero.jpg') }}" alt="hero">
        <figcaption class="absolute custom-caption text-brand-color md:text-lg font-poppins">
            <p class="border-brand p-6 custom-text-bg">
                <span class="font-bold text-xl">Öppet hus</span>
                <br>
                <span class="text-sm">
                    29 juni 13.00 - 15.00
                </span>
                <br>
                <span>
                    Nu öppnar vi restaurangen på nytt vid Ginstgatan 3, Helsingborg.
                    <br>
                    Välkomna in på öppet hus där ni får smaka och ta del av restaurangens nya mat och koncept.
                    <br>
                    Det kommer att bjudas på smårätter från asiens alla länder samt dryck.
                    <br>
                    Vi hoppas på att ni vill komma och vara med på vår resa mot matglädle och gemenskap.
                </span>
            </p>
        </figcaption>
    </figure>

    <div id="menu-section" class="content-container mx-auto py-8 text-brand-color">
        @if(!isset($menus) || empty($menus))
            @include('pages.public.includes.menu_from_images')
        @else
            @include('pages.public.includes.menu_from_db', ['menus' => $menus])
        @endif
    </div>
@endsection

@section('scripts')
@endsection
