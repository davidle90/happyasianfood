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
    </style>
@endsection

@section('modals')
@endsection

@section('content')
    <div class="flex items-center justify-center bg-fixed bg-parallax bg-cover h-96 haf-bg-img">
    </div>
    <div id="menu-section" class="content-container mx-auto py-8 text-brand-color">
        @foreach($menus as $main_category => $menu)
            <h1 class="text-3xl font-bold mb-5 text-center">{{ $main_category }}</h1>
            <div class="grid md:grid-cols-2 md:gap-8">
                @foreach($menu as $sub_category => $meals)
                        <div class="md:flex md:justify-between">
                            <div class="mb-5 md:mb-0 md:mr-5">
                                <h1 class="text-xl font-bold mb-5">{{ $sub_category }}</h1>
                                @foreach($meals as $meal)
                                    <div class="max-w-sm grid grid-cols-4 gap-4 mb-3">
                                        <div class="col-span-3">
                                            <h1 class="mb-2 font-semibold">
                                                <span class="mr-2">{{ $meal['title'] }} </span> @for($i = 0; $i < $meal['extras']['spice']; $i++) <span class="text-red-600 text-sm"><i class="fa-solid fa-pepper-hot"></i></span> @endfor
                                            </h1>
                                            <p class="mb-3 text-sm text-gray-200">
                                                {{ $meal['description'] }}
                                            </p>
                                        </div>
                                        <div class="col-span-1">
                                            <span class="font-bold">{{ $meal['price'] }} kr</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
@endsection
