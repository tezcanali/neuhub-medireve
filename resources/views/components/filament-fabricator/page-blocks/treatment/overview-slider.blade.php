@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4 overflow-hidden">
    <div class="container-xl">
        <div class="main-title d-flex align-items-start gap-md-5 gap-3 text-primary pb-lg-5 pb-4 mb-xl-3 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="d-flex flex-column mt-n3 gap-2">
                <div class="title fs-1 fw-lighter">{{ $title }}</div>
                <div class="fs-15 text-balance">{{ $description }}</div>
            </div>
        </div>
        <div class="tech-list swiper">
            <div class="swiper-wrapper">
                @foreach($slides as $slide)
                    <div class="swiper-slide">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <img src="{{ $slide['slide_image'] }}" class="w-100 h-500px object-fit-cover tech-img position-relative z-3"/>
                            </div>
                            <div class="col-lg-6">
                                <div class="bg-primary p-lg-5 p-4 rounded-3 rounded-start-0 position-relative">
                                    <div class="w-50 h-100 bg-primary position-absolute end-100 top-0 d-lg-block d-none"></div>
                                    <div class="ps-lg-4 text-white">
                                        <div class="fs-3 fw-normal text-white">{{ $slide['slide_title'] }}</div>
                                        <div class="w-100 h-1px bg-blue-5 mt-4 mb-lg-5 mb-4"></div>
                                        <p class="fs-18">{{ $slide['slide_content'] }}</p>
                                        <a href="{{ $slide['button_link'] }}" class="d-flex align-items-center gap-3 text-secondary py-lg-4 py-3">
                                            <span class="text-decoration-underline fw-light">{{ $slide['button_text'] }}</span>
                                            <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-nav d-flex align-items-center gap-lg-3 gap-2 z-3 position-absolute start-0 bottom-0 ms-5">
                <button type="button" class="tech-button-prev bg-gray-400 w-70px h-70px border border-gray-500 rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa fa-chevron-left"></i>
                </button>
                <button type="button" class="tech-button-next bg-gray-400 w-70px h-70px border border-gray-500 rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

