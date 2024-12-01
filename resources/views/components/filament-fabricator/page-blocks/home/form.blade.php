@aware(['page'])
<section class="find pt-lg-5 pt-4 pb-lg-0 pb-5 overflow-hidden" id="formmedireve">
    <div class="container-xl position-relative">
        <div class="shape position-absolute end-0 bottom-0">
            <svg width="623" height="550" viewBox="0 0 623 842" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M345.481 839.294C363.582 657.155 320.027 234.5 0.999789 0.999769" stroke="#5969AE"></path>
                <path d="M345.481 839.294C363.582 657.155 320.027 234.5 0.999789 0.999769" stroke="#5969AE"></path>
                <path d="M417.131 840.992C406.362 732.593 432.276 481.054 622.087 342.088" stroke="#5969AE"></path>
                <path d="M417.131 840.992C406.362 732.593 432.276 481.054 622.087 342.088" stroke="#5969AE"></path>
            </svg>
        </div>
        <div class="row position-relative z-3">
            <div class="col-xl-8 col-lg-7">
                <div class="main-title d-flex align-items-start gap-md-5 gap-3 text-white pb-lg-5 pb-4 position-relative z-3 pt-xl-5">
                    <div class="icon mt-3">
                        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <span class="w-1px h-35px bg-white mt-3"></span>
                    <div class="fs-1 fw-lighter text-gray-400 text-balance lh-sm">{{ $title }}</div>
                </div>
                <div class="text-center d-lg-block d-none">
                    @if($image)
                    <img src="{{ Storage::url($image) }}" class="find-img h-600px ms-n5" />
                    @endif
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="d-lg-flex d-none align-items-end mb-5">
                    <div class="d-flex align-items-end flex-column gap-4">
                        <div class="big-icon text-gray-400">
                            <svg width="379" height="275" viewBox="0 0 379 339" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.9 339C27.4775 339 18.5552 335.312 11.1331 327.935C3.71104 320.559 0 311.692 0 301.333V75.3333C0 64.975 3.71104 56.1076 11.1331 48.7313C18.5552 41.3549 27.4775 37.6667 37.9 37.6667H229.295C228.032 43.9444 227.4 50.2222 227.4 56.5C227.4 62.7778 228.032 69.0556 229.295 75.3333H37.9L189.5 169.5L258.668 126.654C263.089 130.735 267.906 134.266 273.117 137.248C278.328 140.23 283.776 142.819 289.461 145.017L189.5 207.167L37.9 113V301.333H341.1V148.783C348.364 147.214 355.155 145.017 361.471 142.192C367.788 139.367 373.631 135.914 379 131.833V301.333C379 311.692 375.289 320.559 367.867 327.935C360.445 335.312 351.523 339 341.1 339H37.9Z" fill="currentcolor"/>
                            </svg>
                        </div>
                        <div class="d-flex align-items-center gap-5 text-secondary fs-4 pt-2">
                            <div class="icon flex-shrink-0">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.521 9.51758L4.37258 31.666L0.734226 28.0277L22.8827 5.87923L2.50792 5.87923L2.5534 0.740056H31.6602V29.8469L26.521 29.8923V9.51758Z" fill="#A3D2EA"/>
                                </svg>
                            </div>
                            {{ $contactText }}
                        </div>
                    </div>
                </div>
                <form id="contactForms" action="{{ route('form-submit') }}" method="POST" class="find-form row g-md-3 g-2 row-cols-md-2 row-cols-1 pt-md-3" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="form_id" value="contactForm" />
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-text bg-gray-400 pe-0">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.13516 15.1C4.98516 14.45 5.93516 13.9375 6.98516 13.5625C8.03516 13.1875 9.13516 13 10.2852 13C11.4352 13 12.5352 13.1875 13.5852 13.5625C14.6352 13.9375 15.5852 14.45 16.4352 15.1C17.0185 14.4167 17.4727 13.6417 17.7977 12.775C18.1227 11.9083 18.2852 10.9833 18.2852 10C18.2852 7.78333 17.506 5.89583 15.9477 4.3375C14.3893 2.77917 12.5018 2 10.2852 2C8.06849 2 6.18099 2.77917 4.62266 4.3375C3.06432 5.89583 2.28516 7.78333 2.28516 10C2.28516 10.9833 2.44766 11.9083 2.77266 12.775C3.09766 13.6417 3.55182 14.4167 4.13516 15.1ZM10.2852 11C9.30182 11 8.47266 10.6625 7.79766 9.9875C7.12266 9.3125 6.78516 8.48333 6.78516 7.5C6.78516 6.51667 7.12266 5.6875 7.79766 5.0125C8.47266 4.3375 9.30182 4 10.2852 4C11.2685 4 12.0977 4.3375 12.7727 5.0125C13.4477 5.6875 13.7852 6.51667 13.7852 7.5C13.7852 8.48333 13.4477 9.3125 12.7727 9.9875C12.0977 10.6625 11.2685 11 10.2852 11Z" fill="#000C40"/>
                                </svg>
                            </span>
                            <input type="text" name="name" class="form-control border-start-0 fw-light" placeholder="Your Full Name" required/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-text bg-gray-400 pe-0">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.2852 20C8.90182 20 7.60182 19.7375 6.38516 19.2125C5.16849 18.6875 4.11016 17.975 3.21016 17.075C2.31016 16.175 1.59766 15.1167 1.07266 13.9C0.547656 12.6833 0.285156 11.3833 0.285156 10C0.285156 8.61667 0.547656 7.31667 1.07266 6.1C1.59766 4.88333 2.31016 3.825 3.21016 2.925C4.11016 2.025 5.16849 1.3125 6.38516 0.7875C7.60182 0.2625 8.90182 0 10.2852 0C11.6685 0 12.9685 0.2625 14.1852 0.7875C15.4018 1.3125 16.4602 2.025 17.3602 2.925C18.2602 3.825 18.9727 4.88333 19.4977 6.1C20.0227 7.31667 20.2852 8.61667 20.2852 10V11.45C20.2852 12.4333 19.9477 13.2708 19.2727 13.9625C18.5977 14.6542 17.7685 15 16.7852 15C16.2018 15 15.6518 14.875 15.1352 14.625C14.6185 14.375 14.1852 14.0167 13.8352 13.55C13.3518 14.0333 12.806 14.3958 12.1977 14.6375C11.5893 14.8792 10.9518 15 10.2852 15C8.90182 15 7.72266 14.5125 6.74766 13.5375C5.77266 12.5625 5.28516 11.3833 5.28516 10C5.28516 8.61667 5.77266 7.4375 6.74766 6.4625C7.72266 5.4875 8.90182 5 10.2852 5C11.6685 5 12.8477 5.4875 13.8227 6.4625C14.7977 7.4375 15.2852 8.61667 15.2852 10V11.45C15.2852 11.8833 15.4268 12.25 15.7102 12.55C15.9935 12.85 16.3518 13 16.7852 13C17.2185 13 17.5768 12.85 17.8602 12.55C18.1435 12.25 18.2852 11.8833 18.2852 11.45V10C18.2852 7.76667 17.5102 5.875 15.9602 4.325C14.4102 2.775 12.5185 2 10.2852 2C8.05182 2 6.16016 2.775 4.61016 4.325C3.06016 5.875 2.28516 7.76667 2.28516 10C2.28516 12.2333 3.06016 14.125 4.61016 15.675C6.16016 17.225 8.05182 18 10.2852 18H15.2852V20H10.2852Z" fill="#000C40"/>
                                </svg>
                            </span>
                            <input type="email" name="email" class="form-control border-start-0 fw-light" placeholder="Your Mail Adress" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Lütfen geçerli bir e-posta adresi girin." />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <select name="service" class="form-control py-2" required>
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                <option value="{{ $service['name'] }}">{{ $service['name'] }}</option>
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
                            <span class="input-group-text bg-gray-400 pe-0">
                                <i class="flag-icon flag-icon-gb"></i>
                            </span>
                            <select id="countrySelect" name="country" class="form-control py-2" required>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group mb-4">
                            <span class="input-group-text bg-gray-400 pe-0">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.28516 12H12.2852V10H4.28516V12ZM4.28516 9H16.2852V7H4.28516V9ZM4.28516 6H16.2852V4H4.28516V6ZM0.285156 20V2C0.285156 1.45 0.48099 0.979167 0.872656 0.5875C1.26432 0.195833 1.73516 0 2.28516 0H18.2852C18.8352 0 19.306 0.195833 19.6977 0.5875C20.0893 0.979167 20.2852 1.45 20.2852 2V14C20.2852 14.55 20.0893 15.0208 19.6977 15.4125C19.306 15.8042 18.8352 16 18.2852 16H4.28516L0.285156 20ZM3.43516 14H18.2852V2H2.28516V15.125L3.43516 14Z" fill="#000C40"/>
                                </svg>
                            </span>
                            <input type="text" name="message" class="form-control border-start-0 fw-light" placeholder="Message" />
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
        </div>
    </div>
</section>

<section class="bg-primary position-relative z-3 pt-md-0 pt-3">
    <div class="container-xl position-relative">
        <div class="row align-items-center g-0">
            <div class="col-md-7">
                <div class="text-white">
                    <div class="fs-3 fw-semibold pb-1">{{ $footerTitle }}</div>
                    <div class="fs-5 lh-sm pe-xl-5 me-xl-4">{{ $footerDescription }}</div>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-xl-center justify-content-end">
                <div class="book-box w-400px h-300px bg-teal d-flex align-items-center justify-content-center position-relative mt-md-0 mt-3">
                    @if($footerImage)
                    <img src="{{ Storage::url($footerImage) }}" class="h-350px woman-img position-absolute start-0 bottom-0" />
                    @endif
                    <a href="{{ $footerLink }}" class="w-50px h-50px bg-white d-flex align-items-center justify-content-center">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.175 9H0V7H12.175L6.575 1.4L8 0L16 8L8 16L6.575 14.6L12.175 9Z" fill="#56463F" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('contactForms').addEventListener('submit', function(event) {
        event.preventDefault();


        var response = grecaptcha.getResponse();

        if (response.length === 0) {
            Swal.fire({
                title: 'Uyarı!',
                text: 'Lütfen robot olmadığınızı doğrulayın.',
                icon: 'warning',
                confirmButtonText: 'Tamam'
            });
            return false;
        }

        // Form verilerini topla
        const formData = new FormData(this);

        // AJAX isteği gönder
        fetch('{{ route("form-submit") }}', {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
            },
            credentials: 'same-origin'
        })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(json => Promise.reject(json));
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    Swal.fire({
                        title: 'Başarılı!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'Tamam'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Formu sıfırla
                            this.reset();
                            grecaptcha.reset();
                        }
                    });
                } else {
                    throw new Error(data.message || 'Bir hata oluştu');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Hata!',
                    text: error.message || 'Bir hata oluştu',
                    icon: 'error',
                    confirmButtonText: 'Tamam'
                });
            });
    });
</script>
