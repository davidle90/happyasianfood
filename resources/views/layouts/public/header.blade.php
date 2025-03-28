<nav class="bg-black">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="h-8" src="https://dl-spaces.ams3.cdn.digitaloceanspaces.com/happyasianfood/images/HappyAsianFood.png" alt="happyasianfood">
            <span class="haf-font self-center text-2xl font-normal">{{ config('app.name', 'Laravel') }}</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="navlink-text inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-orange-100 rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 justify-center items-center">
                <li>
                    <a href="{{ route('index') }}" class="navlink-text block py-2 px-3 md:p-0">Hem</a>
                </li>
                <li>
                    <a href="{{ route('menu') }}" class="navlink-text block py-2 px-3 md:p-0" id="scrollToMenu">Meny</a>
                </li>
                <li>
                    <a href="tel:{{ $info['phone_number']->value ?? '' }}" class="navlink-text block py-2 px-3 md:p-0"><i class="bi bi-telephone"></i> {{ $info['phone_number']->value ?? '' }}</a>
                </li>
                <li>
                    <div class="py-2 px-3 md:p-0 flex justify-between space-x-8">
                        <a href="https://www.facebook.com/profile.php?id=61558980699686" class="navlink-text" target="_blank" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/happyasianfood" class="navlink-text" target="_blank" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@happy.asian.food" class="navlink-text" target="_blank" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </li>
                <li class="mt-5 md:mt-0">
                    <a href="https://order.trueorder.se/happyasianfood/store1" class="font-poppins uppercase px-4 py-2 text-xs bg-red-700 hover:bg-red-800 text-white">
                        Beställ online
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            // $('#scrollToMenu').click(function(event) {
            //     event.preventDefault(); // Prevent the default link behavior

            //     $('html, body').animate({
            //     scrollTop: $("#menu-section").offset().top
            // }, 500);
            // });
            $('#scrollToOpenHours').click(function(event) {
                event.preventDefault(); // Prevent the default link behavior

                $('html, body').animate({
                scrollTop: $("#open-hours-section").offset().top
            }, 500);
            });
            $('#scrollToLocation').click(function(event) {
                event.preventDefault(); // Prevent the default link behavior

                $('html, body').animate({
                scrollTop: $("#location-section").offset().top
            }, 500);
            });
        });
    </script>
@endpush
