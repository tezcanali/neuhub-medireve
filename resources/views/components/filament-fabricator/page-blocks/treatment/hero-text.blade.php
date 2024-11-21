@aware(['page'])
<section class="bg-primary pt-lg-5 pt-4">
    <div class="container-xl pt-xl-5">
        <div class="row g-0">
            <div class="col-xl-6">
                <div class="what-content position-relative">
                    <a href="{{ $buttonLink }}"
                       class="d-flex align-items-center gap-3 text-secondary position-absolute start-0 bottom-0 mb-5 pb-5 z-3 d-xl-block d-none">
                        <span class="text-decoration-underline fw-light">{{ $buttonText }}</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                    <div class="what-shape position-absolute end-0 bottom-0 d-lg-block d-none">
                        <svg width="553" height="620" viewBox="0 0 553 747" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M306.524 744.487C322.577 582.947 283.948 208.093 1.00181 1.00067" stroke="#5969AE"/>
                            <path d="M306.524 744.487C322.577 582.947 283.948 208.093 1.00181 1.00067" stroke="#5969AE"/>
                            <path d="M370.069 745.992C360.517 649.853 383.501 426.762 551.845 303.512" stroke="#5969AE"/>
                            <path d="M370.069 745.992C360.517 649.853 383.501 426.762 551.845 303.512" stroke="#5969AE"/>
                        </svg>
                    </div>
                    <div class="fs-1 fw-normal text-secondary lh-sm position-relative z-2 pb-xl-0 pb-4">
                        {{ $titleLine1 }} <br/>
                        {{ $titleLine2 }}
                    </div>
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($contentImage) }}" class="what-content-img h-500px position-relative z-2 ms-5 d-xl-block d-none"/>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="text-white">
                    <p class="fs-5">{{ $description }}</p>
                    <p>{{ $content }}</p>
                    <p>{{ $note }}</p>
                    <a href="{{ $buttonLink }}" class="d-flex align-items-center gap-3 text-secondary mb-5 z-3 d-xl-none d-block">
                        <span class="text-decoration-underline fw-light">{{ $buttonText }}</span>
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

