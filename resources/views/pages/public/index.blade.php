@extends('layouts.public.main')

@section('styles')
    <style>
        .haf-bg-img {
            background-image: url('{{ asset('/images/hero-placeholder.jpg') }}');
        }
    </style>
@endsection

@section('modals')
@endsection

@section('content')
    <div class="flex items-center justify-center bg-fixed bg-parallax bg-cover h-96 haf-bg-img">
        <h1 class="text-5xl font-bold haf-font">Happy Asian Food</h1>
    </div>
    <div class="mt-10">
        <h1 class="text-3xl font-bold text-center">Meny</h1>
    </div>
@endsection

@section('scripts')
@endsection
