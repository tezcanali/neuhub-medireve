@aware(['page'])
<section class="py-xl-5 py-4">
    <div class="container-xl py-md-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center flex-md-row flex-column justify-content-center gap-xl-5 gap-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="w-100px h-100px rounded-circle bg-blue-3 d-flex align-items-center justify-content-center flex-column">
                            <svg width="76" height="9" viewBox="0 0 76 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 9V1.6958H1.51184L5.24632 4.06583H5.30273L9.03721 1.6958H10.5491V9H8.74387V3.73893L6.18276 5.29171V9H4.37758V5.29171L1.80519 3.73893V9H0Z" fill="white" />
                                <path d="M12.1308 9V1.6958H20.9762V3.02384H13.936V4.63791H20.3218V5.96595H13.936V7.67196H20.9762V9H12.1308Z" fill="white" />
                                <path
                                    d="M22.2122 9V1.6958H23.5436L27.1539 1.68558C28.6131 1.68558 29.7451 1.99546 30.55 2.61521C31.3548 3.23496 31.7572 4.14415 31.7572 5.34279C31.7572 6.54143 31.3548 7.45062 30.55 8.07037C29.7451 8.69013 28.6131 9 27.1539 9H22.2122ZM27.0298 3.01362H24.0174V7.67196H27.0298C27.9776 7.67196 28.6959 7.48468 29.1848 7.1101C29.6737 6.73553 29.9181 6.14642 29.9181 5.34279C29.9181 4.53235 29.6737 3.94325 29.1848 3.57548C28.6959 3.20091 27.9776 3.01362 27.0298 3.01362Z"
                                    fill="white"
                                />
                                <path d="M32.8887 9V1.6958H34.6939V9H32.8887Z" fill="white" />
                                <path d="M32.6767 1.15437V0H34.8993V1.15437H32.6767Z" fill="white" />
                                <path
                                    d="M36.2712 9V1.6958H43.0294C43.8643 1.6958 44.5111 1.88649 44.9699 2.26788C45.4363 2.64926 45.6694 3.22815 45.6694 4.00454C45.6694 4.66515 45.5002 5.18275 45.1617 5.55732C44.8233 5.9319 44.3419 6.16686 43.7176 6.2622L45.5792 9H43.5258L41.7996 6.31328H38.0764V9H36.2712ZM42.815 3.02384H38.0764V4.97503L42.815 4.98524C43.1459 4.98524 43.3979 4.91033 43.5709 4.7605C43.7514 4.61067 43.8417 4.35868 43.8417 4.00454C43.8417 3.64359 43.7514 3.3916 43.5709 3.24858C43.3979 3.09875 43.1459 3.02384 42.815 3.02384Z"
                                    fill="white"
                                />
                                <path d="M47.0247 9V1.6958H55.8702V3.02384H48.8299V4.63791H55.2158V5.96595H48.8299V7.67196H55.8702V9H47.0247Z" fill="white" />
                                <path d="M59.9494 9L56.3164 1.6958H58.2796L61.2694 7.72304H61.4161L64.4059 1.6958H66.369L62.7361 9H59.9494Z" fill="white" />
                                <path d="M67.1546 9V1.6958H76V3.02384H68.9598V4.63791H75.3456V5.96595H68.9598V7.67196H76V9H67.1546Z" fill="white" />
                            </svg>
                        </div>
                        <div class="d-flex flex-column align-items-start text-blue-3">
                            <div class="fs-3 fw-semibold">{{ $displayName }}</div>
                            <span class="text-gray-500 fs-15">{{ $username }}</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 text-blue-3">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="fs-5 fw-semibold">{{ $postCount }}</div>
                            <span class="text-gray-500">Post</span>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="fs-5 fw-semibold">{{ $followersCount }}</div>
                            <span class="text-gray-500">Followers</span>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="fs-5 fw-semibold">{{ $followingCount }}</div>
                            <span class="text-gray-500">Tracking</span>
                        </div>
                    </div>
                    <a href="{{ $instagramLink }}" class="btn btn-blue-2 rounded-1 flex-shrink-0 d-flex align-items-center gap-3" target="_blank">
                        <i class="fab fa-instagram fs-18"></i>
                        Follow
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="photo-list swiper">
        <div class="swiper-wrapper">
            @foreach($gallery as $item)
            <div class="swiper-slide">
                <a href="{{ $item['link'] ?? Storage::url($item['image']) }}"
                   class="d-block hover-img-scale overflow-hidden w-100 h-470px"
                   data-fancybox="gallery">
                    <img src="{{ Storage::url($item['image']) }}"
                         class="w-100 h-100 object-fit-cover"
                         alt="{{ $displayName }} Instagram Post" />
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
