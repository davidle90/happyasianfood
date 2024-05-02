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
    <div class="content-container mx-auto my-10">
        <h1 id="menu-section" class="text-xl font-bold mb-5 text-center">Förrätter</h1>

        <div>
            <div class="font-semibold">F1 - Pha Pia </div>
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

        <div class="flex justify-between">
            <div>
                <h1 class="text-xl font-bold mb-5">Soppa & Gryta</h1>

                <div class="max-w-sm grid grid-cols-4 gap-4 mb-6">
                    <div class="col-span-3">
                        <h1 class="mb-2 font-semibold text-gray-900">11 - Tom Yum<span class="text-red-600 ml-2"><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i></span></h1>
                        <p class="mb-3 text-sm text-gray-700">Soppa med citron, limeblad, lök, svamp, tomat, salladlök, koriander</p>
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
                        <h1 class="mb-2 font-semibold text-gray-900">11 - Tom Yum<span class="text-red-600 ml-2"><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i></span></h1>
                        <p class="mb-3 text-sm text-gray-700">Soppa med citron, limeblad, lök, svamp, tomat, salladlök, koriander</p>
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

            <div>
                <h1 class="text-xl font-bold mb-5">Wokat</h1>

                <div class="max-w-sm grid grid-cols-4 gap-4 mb-6">
                    <div class="col-span-3">
                        <h1 class="mb-2 font-semibold text-gray-900">
                            31 - Pad Ka Pow
                            <span class="text-red-600 ml-2"><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i></span>
                        </h1>
                        <p class="mb-3 text-sm text-gray-700">
                            Wokad med chili, bambuskott, långbönor, lök, thaibasilika och paprika.
                            <span class="block mt-2">Kyckling, Fläsk, Biff, Kycklingfärs, Fläskfärs, Nöttfärs, Räkor eller Skaldjur</span>
                        </p>
                    </div>
                    <div class="col-span-1">
                        <span class="text-red-600 font-bold">120 kr</span>
                    </div>
                </div>

                <div class="max-w-sm grid grid-cols-4 gap-4 mb-6">
                    <div class="col-span-3">
                        <h1 class="mb-2 font-semibold text-gray-900">
                            31 - Pad Ka Pow
                            <span class="text-red-600 ml-2"><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i><i class="fa-solid fa-pepper-hot"></i></span>
                        </h1>
                        <p class="mb-3 text-sm text-gray-700">
                            Wokad med chili, bambuskott, långbönor, lök, thaibasilika och paprika.
                            <span class="block mt-2">Kyckling, Fläsk, Biff, Kycklingfärs, Fläskfärs, Nöttfärs, Räkor eller Skaldjur</span>
                        </p>
                    </div>
                    <div class="col-span-1">
                        <span class="text-red-600 font-bold">120 kr</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
