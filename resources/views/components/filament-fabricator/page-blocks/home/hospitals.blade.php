@aware(['page'])
<section class="py-lg-5 py-4">
    <div class="container-xl">
        <div class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-lg-5 pb-4 mb-xl-3 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-lighter">{{ $title }}</div>
        </div>

        <div class="hospital-list swiper mb-lg-5 mb-4">
            <div class="swiper-wrapper">
                @foreach($hospitals as $hospital)
                <div class="swiper-slide">
                    <div class="d-block text-center">
                        @if($hospital['link'])
                        <a href="{{ $hospital['link'] }}" target="_blank" title="{{ $hospital['name'] }}">
                        @endif
                            @if($hospital['logo'])
                            <img src="{{ Storage::url($hospital['logo']) }}" 
                                 alt="{{ $hospital['name'] }}" 
                                 class="w-150px h-100px object-fit-contain" />
                            @endif
                        @if($hospital['link'])
                        </a>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
