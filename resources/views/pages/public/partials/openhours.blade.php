<div class="content-container mx-auto text-center text-gray-300 py-12">
    <div class="open-hours-box">
        <div class="sm:flex justify-center my-5 sm:space-x-8 font-poppins">
            <p class="text-start mb-5 sm:mb-0">
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
            <p class="text-start">
                Lördag: {{ $info['saturday']->value ?? 'Stängt' }}
                <br>
                Söndag: {{ $info['sunday']->value ?? 'Stängt' }}
                <br>
                Helgdagar: {{ $info['holidays']->value ?? 'Stängt' }}
            </p>
        </div>
    </div>
</div>
