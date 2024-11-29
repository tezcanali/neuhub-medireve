@aware(['page'])
<section class="bg-gray-400 py-lg-5 py-4">
    <div class="container-xl py-md-4">
        <div class="main-title d-flex align-items-center gap-md-5 gap-3 text-primary pb-lg-5 pb-4 position-relative z-3">
            <div class="icon">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.1473 8.67152L3.62475 30.1941L0.0892122 26.6585L21.6118 5.13599H1.81278L1.85698 0.142044H30.1412V28.4263L25.1473 28.4705V8.67152Z" fill="currentColor"></path>
                </svg>
            </div>
            <span class="w-1px h-35px bg-primary bg-opacity-25"></span>
            <div class="title fs-1 fw-lighter">{{ $title }}</div>
        </div>
    </div>
    <div class="blog-list swiper">
        <div class="swiper-wrapper">
            @foreach($blogs as $blog)
            <div class="swiper-slide w-auto">
                <a href="/blog/{{ $blog->slug }}" class="d-block w-500px border border-black border-opacity-10 rounded-1 p-3 hover-img-scale">
                    <div class="image w-100 h-225px overflow-hidden rounded-2">
                        <img src="{{ Storage::url($blog->image) }}" 
                             class="w-100 h-100 object-fit-cover"
                             alt="{{ $blog->title }}" />
                    </div>
                    <div class="py-4 px-3 text">
                        <div class="fs-13 pb-2">{{ $blog->created_at->format('d.m.Y') }}</div>
                        <div class="fs-18 fw-light">{{ $blog->title }}</div>
                        <hr class="border-black border-opacity-10 opacity-100 my-4" />
                        <div class="d-flex align-items-center gap-3 text-teal read-more">
                            <span>keep reading</span>
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
