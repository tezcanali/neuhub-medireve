@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4 overflow-hidden">
    <div class="container-xl py-lg-4">
        <div
            class="main-title d-flex align-items-start gap-md-5 gap-3 text-primary pb-lg-5 pb-4 mb-xl-2 position-relative z-3">
            <div class="icon mt-3">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary mt-3"></span>
            <div class="fs-1 fw-lighter text-balance lh-sm">
                {{ $titleLine1 }}<br/>
                {{ $titleLine2 }}
            </div>
        </div>
    </div>
    <div class="say-list swiper">
        <div class="swiper-wrapper">
            @foreach($reviews as $review)
                <div class="swiper-slide w-auto">
                    <a href="{{ $review['reviewLink'] }}" class="w-600px 400px d-block overflow-hidden rounded-1 position-relative hover-img-scale">
                        <div class="d-flex gap-4 position-absolute start-0 bottom-0 m-xl-5 m-4 z-3 text-white">
                            <div class="d-flex flex-column">
                                <div class="fs-5 fw-normal">{{ $review['patientName'] }}</div>
                                <div class="fs-15">{{ $review['procedureText'] }}</div>
                            </div>
                        </div>
                        <img src="{{ $review['reviewImage'] }}" class="w-100 h-100 object-fit-cover"/>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container-xl">
        <div class="py-lg-5 py-4">
            <p class="fs-18">{{ $description }}</p>
        </div>
        <div
            class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-lg-5 pb-4 mb-xl-3 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-lighter">{{ $whyTitle }}</div>
        </div>
    </div>
    <div class="row g-xl-5 g-4">
        <div class="col-lg-4">
            <img src="{{ $whyImage }}" class="img-fluid"/>
        </div>
        <div class="col-lg-8">
            <div class="pe-lg-5 pe-4 me-lg-5 ps-lg-0 ps-3">
                <p class="fs-5 fw-light text-balance">{{ $whyDescription }}</p>
                <div>{{ $whyContent }}</div>
            </div>
        </div>
    </div>
</section>
