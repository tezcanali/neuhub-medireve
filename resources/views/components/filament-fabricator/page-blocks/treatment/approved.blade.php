@aware(['page'])
<section class="bg-gray-400 py-xl-5 py-4 position-relative">
    <button type="button"
            class="tag-button-prev w-80px h-80px border border-gray-600 rounded-circle d-flex align-items-center justify-content-center text-gray-600 position-absolute start-0 top-50 translate-middle-y z-3 mt-md-5 ms-4">
        <i class="fa fa-chevron-left"></i>
    </button>
    <button type="button"
            class="tag-button-next w-80px h-80px border bg-gray-400 border-gray-600 rounded-circle d-flex align-items-center justify-content-center text-gray-600 position-absolute end-0 top-50 translate-middle-y z-3 mt-md-5 me-4">
        <i class="fa fa-chevron-right"></i>
    </button>
    <div class="container-custom py-lg-4 position-relative z-2">
        <div
            class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-5 mb-xl-3 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-light">Approved By</div>
        </div>
        <div class="tag-list swiper">
            <div class="swiper-wrapper">
                @foreach ($doctors as $doctor)
                    <div class="swiper-slide w-auto">
                        <a href="{{ $doctor['link'] }}" class="bg-blue-6 p-lg-4 p-3 row w-800px row position-relative g-0">
                            <div class="overlay bg-blue-6 bg-opacity-75 position-absolute start-0 top-0 w-100 h-100"></div>
                            <div class="col-lg-5">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($doctor['image']) }}" class="w-100 h-325px object-fit-cover"/>
                            </div>
                            <div class="col-lg-7">
                                <div class="px-lg-4 px-3 py-lg-0 py-3">
                                    <div class="d-flex flex-column gap-1 fw-light">
                                        <div class="fs-5 text-white">{{ $doctor['name'] }}</div>
                                        <span class="text-secondary">{{ $doctor['title'] }}</span>
                                    </div>
                                    <div class="d-flex flex-column gap-1 text-white fs-14 py-lg-5 py-4">
                                        <span>Experience Date : {{ $doctor['experience'] }}</span>
                                        <span>Education: {{ $doctor['education'] }}</span>
                                        <span>E-mail: {{ $doctor['email'] }}</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-4 justify-content-between">
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="icon flex-shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.1838 9.00884L12.2052 8.9875H12.175H0.0125V7.0125H12.175H12.2052L12.1838 6.99116L6.59276 1.40008L7.99992 0.0175998L15.9823 8L7.99992 15.9824L6.59276 14.5999L12.1838 9.00884Z"
                                                        fill="#A3D2EA" stroke="#000C40" stroke-width="0.025"/>
                                                </svg>
                                            </div>
                                            <span
                                                class="fw-ligh text-white lh-sm">Education and Experience Information</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="icon flex-shrink-0">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.1838 9.00884L12.2052 8.9875H12.175H0.0125V7.0125H12.175H12.2052L12.1838 6.99116L6.59276 1.40008L7.99992 0.0175998L15.9823 8L7.99992 15.9824L6.59276 14.5999L12.1838 9.00884Z"
                                                        fill="#A3D2EA" stroke="#000C40" stroke-width="0.025"/>
                                                </svg>
                                            </div>
                                            <span class="fw-ligh text-white lh-sm">Professional Publications</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
