@aware(['page'])
<section class="bg-white py-xl-5 py-4">
    <div class="container-xl">
        <div
            class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-5 mb-lg-5 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-lighter">{{ $title }}</div>
        </div>
    </div>

    <div class="container-fluid pb-5">
        <div class="d-flex align-items-center gap-4">
            <button type="button"
                    class="logo-button-prev w-80px h-80px rounded-circle d-flex align-items-center justify-content-center bg-gray-400 border border-white fs-5 flex-shrink-0">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="logo-list swiper">
                <div class="swiper-wrapper">
                    @foreach($brands as $brand)
                        <div class="swiper-slide">
                            <a href="{{ $brand['brand_link'] }}" class="d-block text-center">
                                <img src="{{ $brand['brand_logo'] }}" class="w-100px h-80px object-fit-contain"/>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="button"
                    class="logo-button-next w-80px h-80px rounded-circle d-flex align-items-center justify-content-center bg-gray-400 border border-white fs-5 flex-shrink-0">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
