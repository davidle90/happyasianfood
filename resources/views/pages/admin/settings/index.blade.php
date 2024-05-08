@extends('layouts.admin.main')

@section('styles')
@endsection

@section('modals')
@endsection

@section('breadcrumbs')
    <li aria-current="page">
        <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Settings</span>
        </div>
    </li>
@endsection



@section('content')
    <div class="m-5">
        <h1 class="mb-5 font-bold">Inställningar</h2>
        <form id="onSaveForm" action="{{ route('admin.settings.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="menu_display" class="block mb-2 text-sm font-medium text-gray-900">Välj typ</label>
                <select id="menu_display" name="menu_display" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5">
                    <option @if(isset($settings['menu_display']) && $settings['menu_display'] == 'show_prints') selected @endif value="show_prints">Visa prints</option>
                    <option @if(isset($settings['menu_display']) && $settings['menu_display'] == 'show_db') selected @endif value="show_db">Hämta från databas</option>
                </select>
            </div>

        </form>
        <br>
        <button class="onSave block text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
            Spara
        </button>
        <div class="action-message mt-3">
        </div>
    </div>
@endsection

@section('scripts')
    @include('settings::includes.scripts.form')
@endsection
