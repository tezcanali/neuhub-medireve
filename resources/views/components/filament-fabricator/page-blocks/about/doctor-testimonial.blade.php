@aware(['page'])
<section class="bg-gray-400 py-lg-5 py-4">
    <div class="container-xl">
        <div class="doctor-say-list swiper">
            <div class="pagination d-flex gap-md-4 gap-2 position-absolute end-0 bottom-0 z-3 m-4">
                <button type="button"
                        class="doctor-say-button-prev w-60px h-60px rounded-circle bg-white d-flex align-items-center justify-content-center">
                    <i class="fa fa-arrow-left"></i>
                </button>
                <button type="button"
                        class="doctor-say-button-next w-60px h-60px rounded-circle bg-white d-flex align-items-center justify-content-center">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="row g-md-4 g-3">
                            <div class="col-md-5">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($testimonial['doctor_image']) }}" class="img-fluid"/>
                            </div>
                            <div class="col-md-7">
                                <div class="bg-primary text-white p-lg-5 p-4 h-100 position-relative">
                                    <div class="pb-4">
                                        <svg width="58" height="33" viewBox="0 0 58 33" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M29.1783 29.625C28.7743 29.3018 28.6935 28.8978 28.8551 28.2109L36.6124 1.34329C36.7336 0.818062 37.178 0.454437 37.7436 0.454437H56.0056C56.7328 0.454437 57.0156 0.777657 57.0156 1.4645V4.21186C56.9752 4.73709 56.8136 5.22192 56.5308 5.62595L36.2487 32.3724C35.9255 32.8572 35.2387 33.0188 34.7135 32.6956L29.1783 29.625ZM0.73497 29.625C0.330944 29.3018 0.250145 28.8978 0.411755 28.2109L8.16904 1.34329C8.29024 0.77766 8.81548 0.414032 9.38111 0.454437H27.5622C28.2895 0.454437 28.5723 0.777657 28.5723 1.4645V4.21186C28.5319 4.73709 28.3703 5.22192 28.0875 5.62595L7.88621 32.3724C7.56299 32.8572 6.87616 33.0188 6.35093 32.6552L0.73497 29.625Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </div>
                                    <p class="fs-3">{{ $testimonial['content'] }}</p>
                                    <div class="pt-lg-4">
                                        <div class="d-flex flex-column gap-2">
                                            <div class="fs-5 fw-normal">{{ $testimonial['doctor_name'] }}</div>
                                            <span>{{ $testimonial['doctor_title'] }}</span>
                                        </div>
                                    </div>
                                    <div class="w-100 h-100px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
