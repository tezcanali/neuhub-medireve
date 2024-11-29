@aware(['page'])
<div class="hero bg-primary position-relative overflow-hidden">
    <div class="shape-1 position-absolute top-0">
        <svg width="185" height="200" viewBox="0 0 185 249" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
            <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
            <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
            <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
        </svg>
    </div>
    <div class="shape-2 position-absolute bottom-0">
        <svg width="367" height="400" viewBox="0 0 367 496" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M203.459 493.994C214.104 386.879 188.49 138.32 0.872613 1.00037" stroke="#5969AE"/>
            <path d="M203.459 493.994C214.104 386.879 188.49 138.32 0.872613 1.00037" stroke="#5969AE"/>
            <path d="M245.598 494.992C239.264 431.244 254.504 283.316 366.13 201.591" stroke="#5969AE"/>
            <path d="M245.598 494.992C239.264 431.244 254.504 283.316 366.13 201.591" stroke="#5969AE"/>
        </svg>
    </div>
    <div class="hero-list swiper h-100">
        <div class="swiper-wrapper">
            @foreach($slides as $slide)
            <div class="swiper-slide">
                <div class="container-custom h-100 position-relative z-3">
                    <div class="row align-items-end h-100 g-0">
                        <div class="col-lg-5 col-md-6">
                            <div class="hero-text position-relative">
                                <div class="title text-white fs-72 lh-sm fw-light pb-lg-4 pb-3 text-balance">
                                    {!! $slide['title'] !!}
                                </div>
                                <div class="position-relative">
                                    <p class="text-white fs-5 mb-0 pe-xl-5 text-balance">{{ $slide['description'] }}</p>
                                </div>
                                <a href="https://wa.me/905346957401" class="d-flex align-items-start flex-md-column flex-row pt-lg-5 pt-4 mt-lg-3">
                                    <div class="get-icon bg-teal w-100px h-100px d-flex align-items-center justify-content-center text-primary fs-54 flex-shrink-0">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="get-box bg-teal text-primary p-md-4 p-2">
                                        <div class="title fs-3 fw-normal pb-1">Get a Free Quote</div>
                                        <div class="text fs-5">
                                            Contact us to make an appointment, <br />
                                            ask questions.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="hero-image position-relative text-md-start text-center mt-md-0 mt-4">
                                @if($slide['image'])
                                <img src="{{ Storage::url($slide['image']) }}" class="hero-img h-700px object-fit-contain position-relative z-1" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<section class="bg-primary py-xl-5 py-4 position-relative overflow-hidden">
    <div class="container-xl">
        @if($treatmentTitle)
        <div class="title text-white fs-50 fw-light pb-xl-5 pb-4">{{ $treatmentTitle }}</div>
        @endif

        <div class="best-list swiper position-relative z-3">
            <div class="swiper-wrapper">
                @foreach($treatments as $treatment)
                <div class="swiper-slide w-auto">
                    <a href="{{ $treatment['link'] }}" class="d-block w-450px h-550px overflow-hidden hover-img-scale position-relative">
                        <div class="title position-absolute start-0 bottom-0 m-lg-5 m-4 z-3 d-flex flex-column gap-4">
                            <div class="w-50px h-50px bg-blue d-flex align-items-center justify-content-center">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.175 9H0V7H12.175L6.575 1.4L8 0L16 8L8 16L6.575 14.6L12.175 9Z" fill="currentColor" />
                                </svg>
                            </div>
                            <span class="fs-4 text-white fw-light lh-sm">{!! $treatment['title'] !!}</span>
                        </div>
                        <div class="gradient position-absolute start-0 end-0 bottom-0 h-75 z-2"></div>
                        @if($treatment['image'])
                        <img src="{{ Storage::url($treatment['image']) }}" class="w-100 h-100 object-fit-cover" />
                        @endif
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @if($treatmentDescription)
    <div class="py-md-4 py-2">
        <div class="container-xl">
            <div class="text-balance text-white fs-5">{{ $treatmentDescription }}</div>
        </div>
    </div>
    @endif
</section>
