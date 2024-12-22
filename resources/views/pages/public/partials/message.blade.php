@if(isset($posts))
    @foreach($posts as $post)
        <div class="content-container mx-auto text-gray-300">
            <div class="news-box" data-label="">
                <div class="my-2 font-poppins text-center">
                    <h2 class="text-2xl text-brand-color mb-5">{{ $post->title ?? '' }}</h2>
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    @endforeach
@endif
