@aware(['page'])
<section class="py-xl-5 py-4">
    <div class="container-xl py-lg-4">
        <div class="hospital-list swiper mb-lg-5 mb-4">
            <div class="swiper-wrapper">
                @foreach($brands as $brand)
                <div class="swiper-slide">
                    <a href="{{ $brand['url'] ?? '#' }}" class="d-block text-center">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($brand['image']) }}" class="w-150px h-100px object-fit-contain"/>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
