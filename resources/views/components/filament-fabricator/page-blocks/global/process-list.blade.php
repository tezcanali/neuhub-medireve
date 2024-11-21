@aware(['page'])
<section class="operation pt-xl-5 pt-4">
    <div class="container-xl pt-xl-4">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="main-title flex-shrink-0 d-flex align-items-center gap-md-5 gap-3 text-white position-relative z-3 mb-xl-5 mb-4">
                    <div class="icon">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
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
                                        <svg width="55" height="45" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            {!! $item['iconPath'] !!}
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
                    <div class="fs-3 fw-normal text-primary pb-4">{{ $bottomTitle }}</div>
                    <div class="text-gray-700">{{ $bottomContent }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

