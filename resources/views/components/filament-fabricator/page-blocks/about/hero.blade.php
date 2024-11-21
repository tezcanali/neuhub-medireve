@aware(['page'])
<div class="hero hero-page bg-primary position-relative overflow-hidden">
    <div class="shape-1 position-absolute top-0">
        <svg width="185" height="200" viewBox="0 0 185 249" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
            <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
            <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
            <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
        </svg>
    </div>
    <div class="shape-2 position-absolute bottom-0">
        <svg width="367" height="400" viewBox="0 0 367 496" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M203.459 493.994C214.104 386.879 188.49 138.32 0.872613 1.00037" stroke="#5969AE"/>
            <path d="M203.459 493.994C214.104 386.879 188.49 138.32 0.872613 1.00037" stroke="#5969AE"/>
            <path d="M245.598 494.992C239.264 431.244 254.504 283.316 366.13 201.591" stroke="#5969AE"/>
            <path d="M245.598 494.992C239.264 431.244 254.504 283.316 366.13 201.591" stroke="#5969AE"/>
        </svg>
    </div>
    <a href="#" class="alert bg-blue-4 rounded-0 py-0 alert-dismissible fade show position-absolute start-0 top-0 end-0 z-3 d-md-block d-none" role="alert">
        <div class="container-xl d-flex align-items-center justify-content-between">
            <div class="m-auto d-flex align-items-center gap-4">
                <div class="text-secondary">{{ $alertText }}</div>
                <div class="d-flex align-items-center gap-2">
                    <div class="icon">
                        <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 35C15.0792 35 12.8042 34.5406 10.675 33.6219C8.54583 32.7031 6.69375 31.4563 5.11875 29.8813C3.54375 28.3063 2.29688 26.4542 1.37813 24.325C0.459375 22.1958 0 19.9208 0 17.5C0 15.0792 0.459375 12.8042 1.37813 10.675C2.29688 8.54583 3.54375 6.69375 5.11875 5.11875C6.69375 3.54375 8.54583 2.29688 10.675 1.37813C12.8042 0.459375 15.0792 0 17.5 0" fill="currentColor"/>
                        </svg>
                    </div>
                    <span class="text-white fw-light">{{ $awardText }}</span>
                    <div class="icon">
                        <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 35C15.0792 35 12.8042 34.5406 10.675 33.6219C8.54583 32.7031 6.69375 31.4563 5.11875 29.8813C3.54375 28.3063 2.29688 26.4542 1.37813 24.325C0.459375 22.1958 0 19.9208 0 17.5C0 15.0792 0.459375 12.8042 1.37813 10.675C2.29688 8.54583 3.54375 6.69375 5.11875 5.11875C6.69375 3.54375 8.54583 2.29688 10.675 1.37813C12.8042 0.459375 15.0792 0 17.5 0" fill="currentColor"/>
                        </svg>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white position-relative shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </a>
    <div class="container-xl position-relative z-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                @foreach($breadcrumbs as $breadcrumb)
                    @if(!$loop->last)
                        <li class="breadcrumb-item text-gray-400">
                            <a href="{{ $breadcrumb['link'] }}">{{ $breadcrumb['text'] }}</a>
                        </li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb['text'] }}</li>
                    @endif
                @endforeach
            </ol>
        </nav>
        <div class="fs-54 text-white fw-light pb-4">{{ $title }}</div>
        <div class="row">
            <div class="col-lg-7">
                <div class="text-white pe-xl-5">
                    <p>{{ $contentFirst }}</p>
                    <p>{{ $contentSecond }}</p>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="{{ Storage::url($heroImage) }}" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>
