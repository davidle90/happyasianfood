<div class="flex justify-center items-center gap-4 mb-6">
    <div class="cursor-pointer border-brand main-menu-link">
        <h1 class="p-4 underline">Meny</h1>
    </div>
    <div class="cursor-pointer border-brand take-away-menu-link">
        <h1 class="p-4 underline">Take Away Meny</h1>
    </div>
</div>

<div id="main-menu" class="mb-5">
    <img class="mb-2 border-brand" src="{{ asset('images/menu/haf_menu_1.jpg') }}" alt="menu_1">
    <img class="mb-2 border-brand" src="{{ asset('images/menu/haf_menu_2.jpg') }}" alt="menu_2">
    <img class="mb-2 border-brand" src="{{ asset('images/menu/haf_menu_3.jpg') }}" alt="menu_3">
</div>

<div id="take-away-menu" class="mb-5 hidden">
    <img class="mb-2 border-brand" src="{{ asset('images/menu/haf_ta_menu_1.jpg') }}" alt="ta_menu_1">
    <img class="mb-2 border-brand" src="{{ asset('images/menu/haf_ta_menu_2.jpg') }}" alt="ta_menu_2">
    <img class="mb-2 border-brand" src="{{ asset('images/menu/haf_ta_menu_3.jpg') }}" alt="ta_menu_3">
    <img class="mb-2 border-brand" src="{{ asset('images/menu/haf_ta_menu_4.jpg') }}" alt="ta_menu_4">
</div>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.main-menu-link').on('click', function() {
                $('#take-away-menu').addClass('hidden');
                $('#main-menu').removeClass('hidden');
                $('html,body').animate(
                    {
                        scrollTop: $("#main-menu").offset().top
                    },
                    'slow'
                );
            })

            $('.take-away-menu-link').on('click', function() {
                $('#main-menu').addClass('hidden');
                $('#take-away-menu').removeClass('hidden');
                $('html,body').animate(
                    {
                        scrollTop: $("#take-away-menu").offset().top
                    },
                    'slow'
                );
            })
        })
    </script>
@endpush
