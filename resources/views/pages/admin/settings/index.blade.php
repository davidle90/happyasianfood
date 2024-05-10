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

            <div class="mb-5">
                <label for="menu_display" class="block mb-2 text-sm font-medium text-gray-900">Välj hur menyn ska visas</label>
                <select id="menu_display" name="menu_display" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5">
                    <option @if(isset($settings['menu_display']) && $settings['menu_display'] == 'show_prints') selected @endif value="show_prints">Visa prints</option>
                    <option @if(isset($settings['menu_display']) && $settings['menu_display'] == 'show_db') selected @endif value="show_db">Hämta från databas</option>
                </select>
            </div>

            <div class="md:flex gap-4">
                <div class="border rounded p-5 bg-gray-50 mb-3">
                    <div class="mb-3">
                        <label for="business_hours" class="block mb-2 text-sm font-medium text-gray-900">Öppettider</label>
                        <div class="md:flex">
                            <div class="mr-5">
                                <label for="monday" class="block mb-2 text-sm text-gray-900">Måndag</label>
                                <input type="monday" name="monday" value="{{ $settings['monday'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                                <label for="tuesday" class="block mb-2 text-sm text-gray-900">Tisdag</label>
                                <input type="tuesday" name="tuesday" value="{{ $settings['tuesday'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                                <label for="wednesday" class="block mb-2 text-sm text-gray-900">Onsdag</label>
                                <input type="wednesday" name="wednesday" value="{{ $settings['wednesday'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                                <label for="thursday" class="block mb-2 text-sm text-gray-900">Torsdag</label>
                                <input type="thursday" name="thursday" value="{{ $settings['thursday'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                            </div>
                            <div>
                                <label for="friday" class="block mb-2 text-sm text-gray-900">Fredag</label>
                                <input type="friday" name="friday" value="{{ $settings['friday'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                                <label for="saturday" class="block mb-2 text-sm text-gray-900">Lördag</label>
                                <input type="saturday" name="saturday" value="{{ $settings['saturday'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                                <label for="sunday" class="block mb-2 text-sm text-gray-900">Söndag</label>
                                <input type="sunday" name="sunday" value="{{ $settings['sunday'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                                <label for="holidays" class="block mb-2 text-sm text-gray-900">Helgdagar</label>
                                <input type="holidays" name="holidays" value="{{ $settings['holidays'] ?? 'Stängt'}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded p-5 bg-gray-50 mb-3">
                    <div class="mb-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Kontaktinformation</label>

                        <label for="adress" class="block mb-2 text-sm text-gray-900">Adress</label>
                        <input type="text" name="adress" value="{{ $settings['adress'] ?? ''}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />

                        <label for="city" class="block mb-2 text-sm text-gray-900">Ort</label>
                        <input type="text" name="city" value="{{ $settings['city'] ?? ''}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />

                        <label for="zip_code" class="block mb-2 text-sm text-gray-900">Postnummer</label>
                        <input type="text" name="zip_code" value="{{ $settings['zip_code'] ?? ''}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />

                        <label for="phone_number" class="block mb-2 text-sm text-gray-900">Telefon</label>
                        <input type="tel" name="phone_number" value="{{ $settings['phone_number'] ?? ''}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />

                        <label for="email" class="block mb-2 text-sm text-gray-900">E-post</label>
                        <input type="text" name="email" value="{{ $settings['email'] ?? ''}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-64 p-2.5" />
                    </div>
                </div>
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
    @include('settings::includes.scripts.form')
@endsection
