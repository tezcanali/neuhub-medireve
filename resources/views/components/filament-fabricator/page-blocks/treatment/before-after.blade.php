@aware(['page'])
<section class="bg-gray-400 overflow-hidden pt-lg-5 pt-4">
    <div class="bg-gray-400 mt-md-5">
        <div class="container-xl position-relative">
            <div class="d-flex align-items-md-center flex-md-row flex-column gap-0">
                <div
                    class="main-title bf-title flex-shrink-0 d-flex align-items-center gap-md-5 gap-3 text-white position-relative z-3 h-150px bg-primary pe-md-5 py-md-0 py-3">
                    <div class="w-50px h-100 bg-primary end-100 top-0 position-absolute"></div>
                    <div class="icon text-secondary">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="w-1px h-35px bg-white bg-opacity-25"></span>
                    <div class="title fs-1 fw-lighter">{{ $title }}</div>
                </div>
                <div class="text-primary h-150px d-flex align-items-center bg-gray-400 ps-lg-5 ps-4 position-relative">
                    <div
                        class="w-100 h-300px bg-gray-400 position-absolute top-100 start-0 z-2 d-md-block d-none"></div>
                    {{ $description }}
                </div>
            </div>
        </div>
        <div class="container-custom">
            <div class="bg-primary position-relative">
                <div class="w-50px h-100 bg-primary end-100 top-0 position-absolute"></div>
                <div class="ba-list swiper position-relative z-3">
                    <div class="swiper-wrapper">
                        @foreach($images as $item)
                        <div class="swiper-slide">
                            <a href="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}"
                               class="d-block hover-img-scale overflow-hidden w-100 h-400px" data-fancybox="gallery">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($item['image']) }}" class="w-100 h-100 object-fit-cover"/>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div class="bg-primary text-white pb-lg-5 pb-4 position-relative pt-md-0 pt-3">
                <div class="w-50px h-100 bg-primary end-100 top-0 position-absolute"></div>
                <div class="w-100 h-100 bg-primary start-100 top-0 position-absolute"></div>
                {{ $footerNote }}
            </div>
        </div>
    </div>
</section>

