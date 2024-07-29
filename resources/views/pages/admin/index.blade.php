@extends('layouts.admin.main')

@section('styles')
@endsection

@section('modals')
@endsection

@section('breadcrumbs')
@endsection

@section('content')
<div class="m-5">
    <h1 class="mb-5 font-bold">Meddelande</h2>
    <form id="onSaveForm" action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $post->id ?? '' }}">

        <div class="mb-5 w-1/2">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
            <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="titel..." value="{{ $post->title ?? '' }}">
        </div>
        <div class="mb-5 w-1/2">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Meddelande</label>
            <textarea id="message" name="message" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="meddelande...">{{ $post->message ?? '' }}</textarea>
        </div>
    </form>

    <button class="onSave block text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
        Spara
    </button>
    <div class="action-message mt-3">
    </div>
</div>
@endsection

@section('scripts')
    @include('includes.scripts.form')
@endsection
