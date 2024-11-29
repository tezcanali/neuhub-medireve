@aware(['page'])
<section class="bg-gray-300 py-xl-5 py-4 overflow-hidden">
    <div class="container-custom py-lg-4">
        <div class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-lg-5 pb-4 mb-lg-3 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-lighter">{{ $title }}</div>
        </div>
        
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <div class="fs-3 fw-light pb-4 mb-lg-3 pe-xl-4">{{ $subtitle }}</div>
                <div class="fs-18">{{ $description }}</div>
            </div>
            
            <div class="col-lg-7">
                <div class="increase-list swiper">
                    <div class="swiper-wrapper">
                        @foreach($slides as $slide)
                        <div class="swiper-slide w-auto">
                            <a href="{{ Storage::url($slide['image']) }}" class="d-block w-450px h-450px overflow-hidden position-relative hover-img-scale" data-fancybox="gallery">
                                <img src="{{ Storage::url($slide['image']) }}" class="w-100 h-100 object-fit-cover" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination position-absolute start-0 top-50 translate-middle-y z-3">
                        <button type="button" class="increase-button-prev w-80px h-80px rounded-circle d-flex align-items-center justify-content-center bg-primary text-white fs-5 position-absolute start-0 top-50 translate-middle-y ms-md-n5">
                            <i class="fa fa-chevron-left"></i>
                        </button>
                        <button type="button" class="increase-button-next w-80px h-80px rounded-circle d-flex align-items-center justify-content-center bg-primary text-white fs-5 position-absolute end-0 top-50 translate-middle-y me-md-n5">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
