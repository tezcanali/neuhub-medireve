@aware(['page'])
<section class="before-after py-xl-5 py-md-4 py-3 position-relative overflow-hidden">
    <div class="shape position-absolute end-0 bottom-0 me-4">
        <svg width="623" height="740" viewBox="0 0 623 842" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M345.481 839.294C363.582 657.155 320.027 234.5 0.999789 0.999769" stroke="#6089A0"/>
            <path d="M345.481 839.294C363.582 657.155 320.027 234.5 0.999789 0.999769" stroke="#6089A0"/>
            <path d="M417.131 840.992C406.362 732.593 432.276 481.054 622.087 342.088" stroke="#6089A0"/>
            <path d="M417.131 840.992C406.362 732.593 432.276 481.054 622.087 342.088" stroke="#6089A0"/>
        </svg>
    </div>
    <div class="container-xxl position-relative z-3 py-4">
        <div class="d-flex align-items-md-center flex-md-row flex-column gap-md-5 gap-4">
            <div
                class="main-title flex-shrink-0 d-flex align-items-center gap-md-5 gap-3 text-white position-relative z-3">
                <div class="icon">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                            fill="currentColor"/>
                    </svg>
                </div>
                <span class="w-1px h-35px bg-success"></span>
                <div class="title fs-1 fw-lighter">{{ $title }}</div>
            </div>
            <span class="text-gray-400">{{ $description }}</span>
        </div>
    </div>

    <div class="beforeafter-list swiper">
        <div class="swiper-wrapper">
            @foreach($images as $item)
                <div class="swiper-slide w-auto">
                    <a href="{{ Storage::url($item['image']) }}"
                       class="d-block w-400px h-400px overflow-hidden position-relative hover-img-scale"
                       data-fancybox="gallery-a">
                        <img src="{{ Storage::url($item['image']) }}" class="w-100 h-100 object-fit-cover"/>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="pagination position-absolute start-50 top-50 translate-middle z-3">
            <button type="button"
                    class="beforeafter-button-prev w-80px h-80px rounded-circle d-flex align-items-center justify-content-center bg-secondary fs-5 position-absolute start-0 top-50 translate-middle-y">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button type="button"
                    class="beforeafter-button-next w-80px h-80px rounded-circle d-flex align-items-center justify-content-center bg-secondary fs-5 position-absolute end-0 top-50 translate-middle-y">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    @if($footerText)
        <div class="pb-4">
            <div class="container-xl">
                <div class="text-balance text-gray-400">{{ $footerText }}</div>
            </div>
        </div>
    @endif
</section>
