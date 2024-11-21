@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4">
    <div class="container-xl py-lg-4">
        <div class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-xl-5 pb-4 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-lighter">{{ $title }}</div>
        </div>
        <div class="what-list pt-xl-5 pt-2 row g-lg-3 g-1 pb-lg-5 pb-4">
            @foreach($items as $item)
            <div class="col-lg-6">
                <div class="d-flex gap-4 p-lg-5 p-4 bg-white rounded-1 h-100">
                    <div class="num flex-shrink-0 w-50px h-50px rounded-4 d-flex align-items-center justify-content-center fs-5 text-primary fw-light">
                        {{ $item['number'] }}
                    </div>
                    <div class="d-flex flex-column text-primary gap-3">
                        <div class="fs-4 fw-light pt-2">{{ $item['subtitle'] }}</div>
                        <span>{!! $item['content'] !!}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

