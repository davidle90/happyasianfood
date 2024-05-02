@extends('layouts.public.main')

@section('styles')
    <style>
        .haf-bg-img {
            background-image: url('{{ asset('/images/hero-placeholder.jpg') }}');
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
        <h1 class="text-5xl font-bold haf-font">Happy Asian Food</h1>
    </div>
    <div class="container mx-auto my-10 px-8">
        <h1 id="menu-section" class="text-xl font-bold mb-5 text-center">Förrätter</h1>

        <div>
            <div class="font-bold">F1 - Pha Pia </div>
            <div class="mb-2">Thailändska vårrullar med sweetchilisås</div>
            <ul class="max-w-md space-y-1 list-disc list-inside text-sm">
                <li class="flex justify-between">
                    <span class="li-item">Kycklingfärs (3st)</span><span class="font-bold">75 kr</span>
                </li>
                <li class="flex justify-between">
                    <span class="li-item">Fläskfärs (3st)</span><span class="font-bold">75 kr</span>
                </li>
                <li class="flex justify-between">
                    <span class="li-item">Vegetarisk (6st)</span><span class="font-bold">65 kr</span>
                </li>
                <li class="flex justify-between">
                    <span class="li-item">Räkor (10st)</span><span class="font-bold">75 kr</span>
                </li>
            </ul>
        </div>

        <h1 class="text-xl font-bold mt-10 mb-5 text-center">Huvudrätter</h1>

        <h1 class="text-xl font-bold mb-5">Soppa & Gryta</h1>

        <div class="flex justify-between">
            <div class="max-w-sm grid grid-cols-4 gap-4">
                <div class="col-span-3">
                    <h1 class="mb-2 font-bold text-gray-900">11 - Tom Yum<span class="text-red-600 ml-2"><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i></span></h1>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Soppa med citron, limeblad, lök, svamp, tomat, salladlök, koriander</p>
                    <ul class="max-w-md space-y-1 list-disc list-inside text-sm">
                        <li>Kyckling</li>
                        <li>Räkor</li>
                        <li>Skaldjur</li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <span class="text-red-600 font-bold">120 kr</span>
                </div>
            </div>

            <div class="max-w-sm grid grid-cols-4 gap-4">
                <div class="col-span-3">
                    <h1 class="mb-2 font-bold text-gray-900">11 - Tom Yum<span class="text-red-600 ml-2"><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i></span></h1>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Soppa med citron, limeblad, lök, svamp, tomat, salladlök, koriander</p>
                    <ul class="max-w-md space-y-1 list-disc list-inside text-sm">
                        <li>Kyckling</li>
                        <li>Räkor</li>
                        <li>Skaldjur</li>
                    </ul>
                </div>
                <div class="col-span-1">
                    <span class="text-red-600 font-bold">120 kr</span>
                </div>
            </div>
        </div>

    </div>

    <div class="container mx-auto mb-10 px-8">
        <h1 id="open-hours-section" class="font-bold mb-2">Öppettider</h1>
        <p>
            Måndag: Stängt
            <br>
            Tisdag - Torsdag: 11.30 - 21.00
            <br>
            Fredag: 11.30 - 22.00
            <br>
            Lördag: 12.00 - 22.00
            <br>
            Söndag & helgdagar: 13.00 - 21.00
        </p>
    </div>
@endsection

@section('scripts')
@endsection
