@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4">
    <div class="container-xl py-lg-4">
        <div class="row">
            <div class="col-lg-5">
                <div
                    class="main-title d-flex align-items-start gap-xl-5 gap-lg-4 gap-3 text-primary pb-lg-5 pb-4 mb-lg-4 position-relative z-3">
                    <div class="icon mt-3">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="w-1px h-35px bg-primary mt-3"></span>
                    <div class="fs-1 fw-lighter text-balance lh-sm position-relative">
                        <span
                            class="position-relative z-2 fw-normal">{{ $title }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <span class="fs-5">{{ $subtitle }}</span>
            </div>
        </div>
        <img src="{{ \Illuminate\Support\Facades\Storage::url($contentImage) }}" class="w-100 h-300px object-fit-cover mb-lg-5 mb-4 mt-lg-0 mt-3"/>
        <p class="fw-light">
           {!! $content !!}
        </p>
    </div>
</section>
