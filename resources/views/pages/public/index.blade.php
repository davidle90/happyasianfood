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
            <div class="border-brand p-6 custom-text-bg">
                <span class="font-bold text-xl">Välkommen på öppet hus</span>
                <br>
                <span>
                    29 juni 12.00 - 14.00
                </span>
                <br><br>
                <span>
                    Nu öppnar vi restaurangen på nytt vid Ginstgatan 3, 254 75 Ödåkra.
                    <br>
                    Välkomna in på öppet hus där ni får smaka och ta del av restaurangens nya mat och koncept.
                    <br>
                    Det kommer att bjudas på smårätter från asiens alla länder samt dryck.
                    <br>
                    Vi hoppas på att ni vill komma och vara med på vår resa mot matglädje och gemenskap.
                </span>
            </div>
        </figcaption>
    </figure>

    <div id="menu-section" class="content-container mx-auto py-8 text-brand-color">
        {{-- <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-brand-color rounded-lg border border-brand">Meny</button>
        <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-brand-color rounded-lg border border-brand">Beställ online</button> --}}

        @if(!isset($menus) || empty($menus))
            @include('pages.public.includes.menu_from_images')
        @else
            @include('pages.public.includes.menu_from_db', ['menus' => $menus])
        @endif
    </div>
    <div id="location-section" class="flex justify-center items-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d935.4426356608444!2d12.747932542892789!3d56.10746663900431!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46522da3ab1a17eb%3A0xa536c23629936c83!2sGinstgatan%203%2C%20254%2075%20%C3%96d%C3%A5kra!5e0!3m2!1ssv!2sse!4v1716585851580!5m2!1ssv!2sse" class="w-full h-96" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
@section('scripts')
@endsection
