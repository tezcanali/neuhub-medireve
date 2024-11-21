@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4">
    <div class="container-fluid">
        <div class="container-xl">
            <div
                class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-lg-5 pb-4 mb-xl-5 position-relative z-3">
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
        <div class="d-flex align-items-center gap-4">
            <button type="button"
                    class="doctors-button-prev w-80px h-80px rounded-circle d-md-flex d-none align-items-center justify-content-center bg-gray-400 border border-black border-opacity-25 fs-5 flex-shrink-0">
                <i class="fa fa-chevron-left"></i>
            </button>
            <div class="doctors-list swiper">
                <div class="swiper-wrapper">
                    @foreach($doctors as $doctor)
                    <div class="swiper-slide">
                        <a href="{{ $doctor['link'] }}"
                           class="d-block border border-black border-opacity-10 p-lg-5 p-4 pt-lg-0 pt-4 text-gray-800">
                            <div class="image mb-4 mt-lg-n5">
                                <img src="{{ $doctor['image'] }}"
                                     class="doctor-list-img w-100 h-500px object-fit-cover mt-lg-n5"/>
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <div class="fs-4 fw-light">{{ $doctor['name'] }}</div>
                                <span class="fw-light fs-15">{{ $doctor['title'] }}</span>
                            </div>
                            <hr class="my-4 border-black border-opacity-50 opacity-100"/>
                            <div class="d-flex flex-column gap-1">
                                <div class="fs-15 fw-light">EDUCATION</div>
                                <span class="fs-14 fw-light">{{ $doctor['education'] }}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <button type="button"
                    class="doctors-button-next w-80px h-80px rounded-circle d-md-flex d-none align-items-center justify-content-center bg-gray-400 border border-black border-opacity-25 fs-5 flex-shrink-0">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
