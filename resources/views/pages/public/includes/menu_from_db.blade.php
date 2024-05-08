@foreach($menus as $main_category => $menu)

    @php
        $underscore_position = strpos($main_category, '_');
        $display_main_category = $underscore_position !== false ? substr($main_category, $underscore_position + 1) : $main_category;
    @endphp

    <h1 class="text-3xl font-bold mb-5 text-center">{{ $display_main_category }}</h1>
    <div class="border-brand mb-8">
    <div class="grid md:grid-cols-2 md:gap-6">
        @foreach($menu as $sub_category => $meals)
            <div class="flex justify-center md:justify-between">
                <div class="p-5">
                    @if(isset($sub_category) && !empty($sub_category))
                        <h1 class="text-xl font-bold mb-5">{{ $sub_category }}</h1>
                    @endif
                    @foreach($meals as $meal)
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-3">
                                <h1 class="mb-2 font-semibold">
                                    <span class="mr-2">{{ $meal['title'] }} </span> <span class="text-red-600 text-sm">@for($i = 0; $i < $meal['extras']['spice']; $i++) <i class="fa-solid fa-pepper-hot"></i>@endfor</span>
                                </h1>
                                <p class="mb-3 text-sm text-gray-300">
                                    {{ $meal['description'] }}
                                </p>
                            </div>
                            <div class="col-span-1">
                                <span class="font-bold">{{ $meal['price'] }} kr</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
@endforeach
