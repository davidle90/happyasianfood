@extends('layouts.public.main')

@section('styles')
    <style>
        .haf-bg-img {
            background-image: url('{{ asset('/images/hero-placeholder.jpg') }}');
        }
        .menu-bg-img {
            background-color: #000000;
            background-image: url("https://www.transparenttextures.com/patterns/xv.png");
        }
        .li-item {
            display: list-item;
            list-style-type: disc;
            list-style-position: inside;
        }

        .border-brand {
            border: solid 1px darkgoldenrod;
        }
    </style>
@endsection

@section('modals')
@endsection

@section('content')
    <div class="flex items-center justify-center bg-fixed bg-parallax bg-cover h-96 haf-bg-img">
    </div>
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
