<footer class="py-4 bg-gray-900">
    <div class="w-full mx-auto content-container text-gray-300 md:grid md:grid-cols-2 md:gap-4 py-4">
        <div class="mb-10 col-span-1">
            <h1 id="open-hours-section" class="font-bold mb-2">Öppettider</h1>
            <div class="md:flex justify-start">
                <p class="mr-5">
                    Måndag: {{ $info['monday']->value ?? 'Stängt' }}
                    <br>
                    Tisdag: {{ $info['tuesday']->value ?? 'Stängt' }}
                    <br>
                    Onsdag: {{ $info['wednesday']->value ?? 'Stängt' }}
                    <br>
                    Torsdag: {{ $info['thursday']->value ?? 'Stängt' }}
                    <br>
                    Fredag: {{ $info['friday']->value ?? 'Stängt' }}
                </p>
                <p>
                    Lördag: {{ $info['saturday']->value ?? 'Stängt' }}
                    <br>
                    Söndag: {{ $info['sunday']->value ?? 'Stängt' }}
                    <br>
                    Helgdagar: {{ $info['holidays']->value ?? 'Stängt' }}
                </p>
            </div>

        </div>
        <div class="mb-10 col-span-1">
            <h1 class="font-bold mb-2">Adress</h1>
            <p>
                {{ $info['adress']->value ?? '' }}
                <br>
                {{ $info['zip_code']->value ?? '' }} {{ $info['city']->value ?? '' }}
                <br>
            </p>
            <br>
            <h1 class="font-bold mb-2">Kontakt</h1>
            <p>
                Telefon: {{ $info['phone_number']->value ?? '' }}
                @if(isset($info['email']->value) && !empty($info['email']->value))
                <br>
                    E-post: {{ $info['email']->value ?? '' }}
                @endif
            </p>
        </div>
    </div>
    <div class="w-full mx-auto content-container md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="{{route('index')}}" class="hover:underline">{{ config('app.name', 'Laravel') }}</a></span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            {{-- <li>
                <a href="#" class="hover:underline me-4 md:me-6">About</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
            </li> --}}
            {{-- <li>
                <a href="{{ route('admin.index')}}" class="hover:underline">Admin</a>
            </li> --}}
        </ul>
    </div>
</footer>
