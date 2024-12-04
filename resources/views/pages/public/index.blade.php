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

        .news-box {
            position: relative;
            border: 2px solid darkgoldenrod;
            padding: 20px;
            margin: 50px;
        }

        .news-box::before {
            content: attr(data-label);
            position: absolute;
            top: -24px; /* Adjust based on border size and font size */
            left: 50%;
            transform: translateX(-50%);
            color: darkgoldenrod;
            background: black; /* Match the background color of your page */
            padding: 0 24px; /* Optional padding for better appearance */
            font-size: 26px; /* Adjust based on your preference */
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
    @include('pages.public.partials.hero')
    @include('pages.public.partials.message')
    @include('pages.public.partials.about')
    @include('pages.public.partials.openhours')
    @include('pages.public.partials.menu')
    @include('pages.public.partials.contact')
    @include('pages.public.partials.gallery')
    @include('pages.public.partials.location')
@endsection

@section('scripts')
@endsection
