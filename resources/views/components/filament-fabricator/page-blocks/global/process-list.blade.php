@aware(['page'])
<section class="operation pt-xl-5 pt-4">
    <div class="container-xl pt-xl-4">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div
                    class="main-title flex-shrink-0 d-flex align-items-center gap-md-5 gap-3 text-white position-relative z-3 mb-xl-5 mb-4">
                    <div class="icon">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="w-1px h-35px bg-success"></span>
                    <div class="title fs-1 fw-lighter">{{ $title }}</div>
                </div>
                <p class="text-white text-balance">{{ $description }}</p>
                <a href="{{ $buttonLink }}" class="d-flex align-items-center gap-3 text-secondary pb-4 pt-xl-4">
                    <span class="text-decoration-underline fw-light">{{ $buttonText }}</span>
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-xl-6">
                <div class="op-list row g-3">
                    @foreach($processItems as $item)
                        <div class="col-lg-4 col-md-6">
                            <a href="{{ $item['link'] }}" class="d-block p-4 bg-white rounded-1 h-250px">
                                <div class="d-flex flex-column gap-4 p-2">
                                    <div class="icon flex-shrink-0 h-35px">
                                        <svg width="55" height="45" viewBox="0 0 55 45" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            {!! $item['icon_path'] !!}
                                        </svg>
                                    </div>
                                    <div class="fs-5 fw-light text-gray-800">{{ $item['title'] }}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row pt-5 g-lg-4 g-2 mt-xl-5">
            <div class="col-lg-8">
                <div class="bg-white p-xl-5 p-4">
                    <div
                        class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary position-relative z-3 py-2">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 31 31" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                        <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
                        <div class="title fs-2 fw-lighter">{{ $bottomTitle }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pagination d-flex align-items-center gap-3 py-xl-5 py-4 ps-xl-3">
                    <button type="button"
                            class="hospital-button-prev w-60px h-60px rounded-circle border border-white text-white d-flex align-items-center justify-content-center hover-bg-primary swiper-button-lock"
                            tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-38bc48de6d3fc6f6">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button type="button"
                            class="hospital-button-next w-60px h-60px rounded-circle border border-white text-white d-flex align-items-center justify-content-center hover-bg-primary swiper-button-lock"
                            tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-38bc48de6d3fc6f6">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-xl-5 py-4">
    <div class="container-xl py-lg-4">
        <div class="hospital-list swiper mb-lg-5 mb-4 swiper-initialized swiper-horizontal swiper-free-mode swiper-watch-progress swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-38bc48de6d3fc6f6" aria-live="off">
                @foreach($brands as $image)
                    <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible {{ $loop->first ? 'active' : ($loop->iteration === 2 ? 'next' : '') }}" style="width: 243.2px; margin-right: 20px;" role="group" data-swiper-slide-index="0">
                        <a href="#" class="d-block text-center">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($image['image']) }}" class="w-150px h-100px object-fit-contain">
                        </a>
                    </div>
                @endforeach
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
</section>

