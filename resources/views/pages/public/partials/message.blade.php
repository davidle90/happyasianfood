@if(isset($post) && !empty($post->message))
    <div class="content-container mx-auto text-gray-300">
        <div class="news-box" data-label="">
            <div class="my-2 font-poppins">
                <h1 class="text-center text-2xl text-brand-color mb-5">{{ $post->title ?? '' }}</h1>
                <p class="text-center">
                    {{ $post->message ?? '' }}
                </p>
            </div>
        </div>
    </div>
@endif
