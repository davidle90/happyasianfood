<footer class="py-4 bg-gray-900">
    <div class="mx-auto content-container text-gray-300 md:grid md:grid-cols-2 md:gap-4 py-4">
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

    <div class="mx-auto content-container text-gray-300 mb-10">
        <h1 class="font-bold mb-2">Följ oss:</h1>
        <div class="md:flex justify-start space-x-4">
            <a href="https://www.facebook.com/profile.php?id=61558980699686" target="_blank" aria-label="Facebook" class="hover:text-white text-3xl"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/happyasianfood" target="_blank" aria-label="Instagram" class="hover:text-white text-3xl"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com/@happy.asian.food" target="_blank" aria-label="TikTok" class="hover:text-white text-3xl"><i class="bi bi-tiktok"></i></a>
        </div>
    </div>

    <div class="mx-auto content-container md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="{{route('index')}}" class="hover:underline">{{ config('app.name', 'Laravel') }}</a></span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
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
