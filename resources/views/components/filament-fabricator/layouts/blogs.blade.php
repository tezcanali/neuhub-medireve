@props(['page'])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.start') }}
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#FFF"/>
    <meta name="msapplication-TileColor" content="#FFF"/>
    <meta name="theme-color" content="#FFF"/>
    <title>Medireve - Hair Transplant Clinic in Turkey</title>
    <link rel="canonical" href="https://medireve.com/"/>
    <link rel="stylesheet" href="{{asset('front/css/fancybox.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/swiper-bundle.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/css/main.min.css')}}"/>
    <link rel="icon" href="favicon.png" type="image/png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/country-region-dropdown-menu/2.0.0/css/countrySelect.min.css">

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getMeta() as $tag)
        {{ $tag }}
    @endforeach

    {!! seo()->for($page) !!}

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getStyles() as $name => $path)
        @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <link rel="stylesheet" href="{{ $path }}"/>
        @endif
    @endforeach

    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.head.end') }}
</head>
<body>
{{ \Filament\Facades\Filament::renderHook('filament-fabricator.body.start') }}

@include('front.layout.header')
<main>
    @if($featuredBlog = \App\Models\Blog::where('status', 'published')->latest()->first())
        <div class="hero hero-page bg-primary position-relative overflow-hidden">
            <img src="assets/img/blog-bg.png" class="position-absolute start-0 top-0 w-100 h-100 opacity-10"/>
            <div class="shape-1 position-absolute top-0">
                <svg width="185" height="200" viewBox="0 0 185 249" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
                    <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
                    <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
                    <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
                </svg>
            </div>
            <a href="#" class="alert bg-blue-4 rounded-0 py-0 alert-dismissible fade show position-absolute start-0 top-0 end-0 z-3 d-md-block d-none" role="alert">
                <div class="container-xl d-flex align-items-center justify-content-between">
                    <div class="m-auto d-flex align-items-center gap-4">
                        <div class="text-secondary">Recognized Leader in Hair Transplants</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="icon">
                                <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- ... SVG content ... -->
                                </svg>
                            </div>
                            <span class="text-white fw-light">Your Trusted Choice</span>
                            <div class="icon">
                                <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- ... SVG content ... -->
                                </svg>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close btn-close-white position-relative shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </a>
            <div class="container-xl position-relative z-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item text-gray-400"><a href="/">Medireve</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="text-white ls-1 pb-4">{{ $featuredBlog->category->title }}</div>
                        <div class="fs-50 fw-semibold text-white lh-sm pb-4">{{ $featuredBlog->title }}</div>
                        <div class="text-white pb-4">
                            <span class="text-teal">{{ $featuredBlog->author->name }}</span> |
                            {{ $featuredBlog->created_at->format('M d, Y') }}
                        </div>
                        <div class="text-white pb-4">
                            {{ Str::limit(strip_tags($featuredBlog->content), 200) }}
                        </div>
                        <a href="/blog/{{ $featuredBlog->slug }}" class="btn btn-teal text-primary mt-lg-4 px-5">Devamını Oku ></a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ Storage::url($featuredBlog->image) }}" class="img-fluid px-xl-5 px-lg-4 mt-lg-0 mt-4"/>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <section class="bg-gray-400 py-lg-5 py-4">
        <div class="container-xl py-xl-2">
            <div class="border border-black border-opacity-10 p-md-4 p-2 mb-5">
                <div class="row g-4">
                    <div class="col-lg-6">
                        @if($secondBlog = \App\Models\Blog::where('status', 'published')->latest()->skip(1)->first())
                            <a href="/blog/{{ $secondBlog->slug }}" class="d-flex flex-column gap-4 hover-img-scale">
                                <div class="image overflow-hidden">
                                    <img src="{{ Storage::url($secondBlog->image) }}" class="img-fluid"/>
                                </div>
                                <div class="d-flex flex-column gap-3">
                                    <div class="text-gray-700 fs-14 fw-light">
                                        <span class="text-blue-3">{{ $secondBlog->author->name }}</span> |
                                        {{ $secondBlog->created_at->format('M d, Y') }}
                                    </div>
                                    <div class="fs-3 fw-normal text-blue-3">{{ $secondBlog->title }}</div>
                                    <p class="text-gray-600">{{ Str::limit(strip_tags($secondBlog->content), 150) }}</p>
                                    <div class="d-inline-flex">
                                        <span class="btn btn-blue-3 text-primary px-5 text-white">Devamını Oku ></span>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column">
                            @foreach(\App\Models\Blog::where('status', 'published')->latest()->skip(2)->take(3)->get() as $blog)
                                <a href="/blog/{{ $blog->slug }}" class="p-4 bg-white">
                                    <div class="d-flex gap-xl-4 gap-3 p-md-3">
                                        <img src="{{ Storage::url($blog->image) }}" class="w-100px h-100px object-fit-cover flex-shrink-0"/>
                                        <div class="d-flex flex-column gap-2">
                                            <div class="text-gray-700 fs-14 fw-light">
                                                <span class="text-blue-3">{{ $blog->author->name }}</span> |
                                                {{ $blog->created_at->format('M d, Y') }}
                                            </div>
                                            <div class="fs-4 fw-semibold text-blue-3">{{ $blog->title }}</div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-lg-5 mb-4">
                <div class="fs-4 fw-semibold text-blue-3 pb-4">All Categories</div>
                <ul class="nav nav-blog nav-pills d-flex justify-content-center gap-md-4 mb-3" id="pills-tab" role="tablist">
                    @foreach(\App\Models\BlogCategory::all() as $category)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link d-flex flex-column text-center align-items-center justify-content-center gap-3 {{ $loop->first ? 'active' : '' }}"
                                    id="pills-{{ $category->id }}-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-{{ $category->id }}"
                                    type="button"
                                    role="tab">
                                <div class="icon w-80px h-80px rounded-circle border border-primary border-opacity-50 d-flex align-items-center justify-content-center text-blue-3">
                                    {!! $category->icon !!}
                                </div>
                                <span class="text-blue-3 fw-light fs-18">{{ $category->title }}</span>
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                @foreach(\App\Models\BlogCategory::all() as $category)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                         id="pills-{{ $category->id }}"
                         role="tabpanel"
                         tabindex="0">
                        <div class="blog-tab-list row g-4">
                            @foreach($category->blogs()->where('status', 'published')->latest()->take(4)->get() as $blog)
                                <div class="col-lg-4">
                                    <a href="/blog/{{ $blog->slug }}" class="d-flex flex-column gap-4 hover-img-scale">
                                        <div class="image overflow-hidden">
                                            <img src="{{ Storage::url($blog->image) }}" class="w-100 h-375px object-fit-cover mobile-img"/>
                                        </div>
                                        <div class="d-flex flex-column gap-3">
                                            <div class="fs-4 fw-normal text-blue-3">{{ $blog->title }}</div>
                                            <div class="fw-light text-primary text-opacity-25">{{ $blog->created_at->format('M d, Y') }}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-filament-fabricator::page-blocks :blocks="$page->blocks"/>
</main>

@stack('scripts')

{{ \Filament\Facades\Filament::renderHook('filament-fabricator.scripts.end') }}

{{ \Filament\Facades\Filament::renderHook('filament-fabricator.body.end') }}

</body>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/country-region-dropdown-menu/2.0.0/js/countrySelect.min.js"></script>
<script src="{{asset('front/js/form.js')}}"></script>
<script src="{{asset('front/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/fancybox.umd.js')}}"></script>
<script src="{{asset('front/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

</html>

