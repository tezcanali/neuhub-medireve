@aware(['page'])
<section class="find-page pt-lg-4 pt-4 pb-xl-5 pb-4" id="formmedireve">
    <div class="container-xl position-relative">
        <div class="row position-relative z-3">
            <div class="col-xl-8 col-lg-7">
                <div class="main-title d-flex align-items-start gap-md-5 gap-3 text-primary pb-lg-5 pb-4 position-relative z-3 pt-xl-5 mt-lg-5">
                    <div class="icon mt-3">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="w-1px h-35px bg-primary mt-3"></span>
                    <div class="fs-1 fw-lighter text-balance lh-sm position-relative">
                        <div class="icon position-absolute start-0 bottom-0 mb-4 d-xl-block d-none">
                            <svg width="170" height="150" viewBox="0 0 379 339" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.9 339C27.4775 339 18.5552 335.312 11.1331 327.935C3.71104 320.559 0 311.692 0 301.333V75.3333C0 64.975 3.71104 56.1076 11.1331 48.7313C18.5552 41.3549 27.4775 37.6667 37.9 37.6667H229.295C228.032 43.9444 227.4 50.2222 227.4 56.5C227.4 62.7778 228.032 69.0556 229.295 75.3333H37.9L189.5 169.5L258.668 126.654C263.089 130.735 267.906 134.266 273.117 137.248C278.328 140.23 283.776 142.819 289.461 145.017L189.5 207.167L37.9 113V301.333H341.1V148.783C348.364 147.214 355.155 145.017 361.471 142.192C367.788 139.367 373.631 135.914 379 131.833V301.333C379 311.692 375.289 320.559 367.867 327.935C360.445 335.312 351.523 339 341.1 339H37.9Z" fill="#fff"/>
                            </svg>
                        </div>
                        <span class="position-relative z-2 fw-normal">{{ $title }}</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="d-lg-flex d-none align-items-end mb-xl-5 mb-4">
                    <div class="d-flex align-items-start flex-column gap-0">
                        <div class="text-center d-lg-block d-none mt-n5 ms-5">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($findImage) }}" class="find-img h-275px mt-n4"/>
                        </div>
                        <div class="get-gradient rounded-pill p-4 d-flex align-items-center gap-4 text-primary fs-5">
                            <div class="icon flex-shrink-0">
                                <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.521 9.51758L4.37258 31.666L0.734226 28.0277L22.8827 5.87923L2.50792 5.87923L2.5534 0.740056H31.6602V29.8469L26.521 29.8923V9.51758Z" fill="currentcolor"/>
                                </svg>
                            </div>
                            <span class="lh-sm fw-light">{{ $subtitle }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="contactForm" action="send_mail.php" method="post" class="row g-md-3 g-2 pt-md-3 pb-lg-5 pb-4">
            <input type="hidden" name="form_id" value="contactForm"/>
            <div class="col-lg-6">
                <div class="input-group">
                    <span class="input-group-text bg-gray-400 pe-0">
                        <svg>...</svg>
                    </span>
                    <select name="service" class="form-control py-2" required>
                        <option value="">Select Service</option>
                        @foreach($services as $service)
                            <option value="{{ $service }}">{{ $service }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number" required/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" name="message" class="form-control border-start-0 fw-light"
                           placeholder="Message"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="g-recaptcha" data-sitekey="{{ $recaptchaKey }}"></div>
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-teal text-primary w-100 h-100 fs-18">Submit</button>
            </div>
        </form>
    </div>
</section>
