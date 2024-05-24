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
    <div class="container mx-auto">
        <div class="w-4/5 mx-auto my-12 py-12">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
                Happy Asian Food
            </h1>
            <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                This is a template for future projects - using Tailwind CSS, Fontawesome / Bootstrap Icons and DropzoneJS. Includes public and admin pages.
            </p>
            <div class="text-center">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Learn more
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
