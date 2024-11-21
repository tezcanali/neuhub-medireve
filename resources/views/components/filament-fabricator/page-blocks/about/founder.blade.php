@aware(['page'])
<section class="founder pt-lg-5 pt-4">
    <div class="container-xl pt-lg-3">
        <div class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-lg-5 pb-4 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-lighter">{{ $title }}</div>
        </div>
        <div class="row g-xl-5 g-4">
            <div class="col-lg-6">
                <p class="fs-3 fw-light pb-3">{{ $mainContent }}</p>
                <p class="fs-18">{{ $subContent }}</p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <div class="d-flex gap-4 position-absolute start-0 bottom-0 m-xl-5 m-4 z-3 text-white">
                        <div class="icon flex-shrink-0">
                            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.125 25.375L25.375 17.5L13.125 9.625V25.375ZM17.5 35C15.0792 35 12.8042 34.5406 10.675 33.6219C8.54583 32.7031 6.69375 31.4563 5.11875 29.8813C3.54375 28.3063 2.29688 26.4542 1.37813 24.325C0.459375 22.1958 0 19.9208 0 17.5C0 15.0792 0.459375 12.8042 1.37813 10.675C2.29688 8.54583 3.54375 6.69375 5.11875 5.11875C6.69375 3.54375 8.54583 2.29688 10.675 1.37813C12.8042 0.459375 15.0792 0 17.5 0C19.9208 0 22.1958 0.459375 24.325 1.37813C26.4542 2.29688 28.3063 3.54375 29.8813 5.11875C31.4563 6.69375 32.7031 8.54583 33.6219 10.675C34.5406 12.8042 35 15.0792 35 17.5C35 19.9208 34.5406 22.1958 33.6219 24.325C32.7031 26.4542 31.4563 28.3063 29.8813 29.8813C28.3063 31.4563 26.4542 32.7031 24.325 33.6219C22.1958 34.5406 19.9208 35 17.5 35ZM17.5 31.5C21.4083 31.5 24.7188 30.1438 27.4312 27.4312C30.1438 24.7188 31.5 21.4083 31.5 17.5C31.5 13.5917 30.1438 10.2813 27.4312 7.56875C24.7188 4.85625 21.4083 3.5 17.5 3.5C13.5917 3.5 10.2813 4.85625 7.56875 7.56875C4.85625 10.2813 3.5 13.5917 3.5 17.5C3.5 21.4083 4.85625 24.7188 7.56875 27.4312C10.2813 30.1438 13.5917 31.5 17.5 31.5Z" fill="white"></path>
                            </svg>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="fs-5 fw-normal">{{ $videoTitle }}</div>
                            <div class="fs-15">{{ $videoSubtitle }}</div>
                        </div>
                    </div>
                    <img src="{{ $aboutImage }}" class="img-fluid"/>
                </div>
            </div>
        </div>
        <div class="w-100 h-75px"></div>
        <div class="d-inline-flex justify-content-center w-100">
            <ul class="nav nav-about nav-pills bg-gray-400 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link fs-18 fw-normal text-blue-3 px-lg-5 px-md-4 px-2 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        {{ $missionTabTitle }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fs-18 fw-normal text-blue-3 px-lg-5 px-md-4 px-2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        {{ $visionTabTitle }}
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fs-18 fw-normal text-blue-3 px-lg-5 px-md-4 px-2" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        {{ $valuesTabTitle }}
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    {{ $missionContent }}
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    {{ $visionContent }}
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    {{ $valuesContent }}
                </div>
            </div>
        </div>
    </div>
</section>
