<div class="pt-10">
    <div class="content-container mx-auto text-center text-gray-300 mb-5 font-poppins">
        Vi finns på {{ $info['adress']->value ?? '' }} i {{ $info['city']->value ?? '' }}.
    </div>

    <div id="location-section" class="flex justify-center items-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d935.4426356608444!2d12.747932542892789!3d56.10746663900431!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46522da3ab1a17eb%3A0xa536c23629936c83!2sGinstgatan%203%2C%20254%2075%20%C3%96d%C3%A5kra!5e0!3m2!1ssv!2sse!4v1716585851580!5m2!1ssv!2sse" class="w-full h-96" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
