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
    
    @if($alertText || $awardText)
    <a href="#" class="alert bg-blue-4 rounded-0 py-0 alert-dismissible fade show position-absolute start-0 top-0 end-0 z-3 d-md-block d-none" role="alert">
        <div class="container-xl d-flex align-items-center justify-content-between">
            <div class="m-auto d-flex align-items-center gap-4">
                @if($alertText)
                <div class="text-secondary">{{ $alertText }}</div>
                @endif
                
                @if($awardText)
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
                @endif
            </div>
            <button type="button" class="btn-close btn-close-white position-relative shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </a>
    @endif

    <div class="container-xl position-relative z-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
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
        
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="pe-xl-4">
                    @if($subtitle)
                    <div class="text-white ls-1 pb-4">{{ $subtitle }}</div>
                    @endif
                    
                    @if($title || $coloredTitle)
                    <div class="fs-50 fw-semibold text-white lh-sm pb-4">
                        {{ $title }}
                        @if($coloredTitle)
                        <span class="text-teal">{{ $coloredTitle }}</span>
                        @endif
                    </div>
                    @endif

                    @if($description)
                    <div class="text-white pb-4">{{ $description }}</div>
                    @endif
                </div>
            </div>
            
            @if($image)
            <div class="col-lg-6">
                <a href="" class="ba-page-img w-600px 400px d-block overflow-hidden rounded-1 position-relative hover-img-scale">
                    @if($imageTitle || $imageSubtitle)
                    <div class="d-flex gap-4 position-absolute start-0 bottom-0 m-xl-5 m-lg-4 m-3 z-3 text-white">
                        <div class="d-flex flex-column">
                            @if($imageTitle)
                            <div class="fs-5 fw-normal">{{ $imageTitle }}</div>
                            @endif
                            
                            @if($imageSubtitle)
                            <div class="fs-15">{{ $imageSubtitle }}</div>
                            @endif
                        </div>
                    </div>
                    @endif
                    <img src="{{ Storage::url($image) }}" class="w-100 h-100 object-fit-cover">
                </a>
            </div>
            @endif
        </div>
    </div>
</div>