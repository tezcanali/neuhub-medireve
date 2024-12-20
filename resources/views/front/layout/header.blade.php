@php
    use Datlechin\FilamentMenuBuilder\Models\Menu;
    $web_menu = Menu::location('header');
    $mobil_menu = Menu::location('mobil_header');
    $settings = \Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting::find(1);
@endphp
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobile-menu" aria-labelledby="mobile-menu-label">
    <div class="offcanvas-header px-4 pt-4 d-flex align-items-center justify-content-between">
        <a href="/" class="d-block text-white">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($settings->site_logo) }}" class="d-block h-30px"/>
        </a>
        <button type="button" class="shadow-none px-0 w-50px h-50px rounded-circle border border-gray-500"
                data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fa fa-x"></i>
        </button>
    </div>
    <div class="offcanvas-body p-0">
        <div class="mobile-menu-section p-4 pt-0 px-4">
            <div class="link-section">
                @foreach($mobil_menu->menuItems as $item)
                    <div class="menu-box pb-3">
                        <div class="menu-box-item border-bottom border-white border-opacity-10">
                            <div class="heading d-flex align-items-center justify-content-between fw-light fs-4">
                                {{ $item->title }}
                                @if($item->children->isNotEmpty())
                                    <div class="icon">
                                        <i class="fa fa-chevron-down fs-14"></i>
                                    </div>
                                @endif
                            </div>
                            @if ($item->children->isNotEmpty())
                                <div class="menu-box-item-content p-3" style="display: none">
                                    <div class="d-flex flex-column gap-3 fw-light ps-3 pb-3">
                                        @foreach ($item->children as $child)
                                            <a href="{{ $child->url }}" class="d-block">{{ $child->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <hr class="border-gray-500 border-opacity-10 opacity-50 my-4"/>
            <a href="https://wa.me/905346957401" class="d-flex align-items-center gap-3">
                <div class="icon flex-shrink-0 text-success">
                    <i class="fab fa-whatsapp fs-48"></i>
                </div>
                <span class="text-success fs-18 lh-sm">
                    Get <span class="fw-semibold">Whatsapp</span> <br/>Support
                </span>
            </a>
        </div>
    </div>
</div>

<header class="header bg-primary position-sticky start-0 top-0 end-0">
    <div class="container-xxl d-flex align-items-center justify-content-between h-100">
        <div class="header-left d-flex align-items-center gap-4 h-100">
            <!-- logo -->
            <div class="logo d-flex align-items-center gap-4 flex-1">
                <a href="/" class="d-block text-white">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($settings->site_logo) }}" class="d-block"/>
                </a>
                <span class="fs-12 text-secondary lh-sm d-md-block d-none">
                    Years of Innovation in <br/>Hair Restoration
                </span>
                <span class="w-1px h-25px bg-white d-md-block d-none"></span>
                <a href="https://wa.me/905346957401" class="d-md-flex d-none align-items-center gap-2">
                    <div class="icon flex-shrink-0 text-success">
                        <i class="fab fa-whatsapp fs-4"></i>
                    </div>
                    <span class="text-success fs-12 lh-sm">
                        Get <span class="fw-semibold">Whatsapp</span> <br/>Support
                    </span>
                </a>
            </div>
            <!-- end #logo -->
            <!-- webmenu -->
            <ul class="webmenu d-xxl-flex d-none align-items-center gap-4 list-unstyled mb-0 fs-18 h-100 ps-3">
                @foreach($web_menu->menuItems as $item)
                    <li class="px-1 h-100 d-flex align-items-center position-relative">
                        <a href="{{ $item->url }}"
                           class="d-block text-white fw-lighter hover-text-secondary py-4">{{ $item->title }}</a>
                        @if ($item->children->isNotEmpty())
                            <div class="submenu" style="width: 380px; left: 50%; transform: translateX(-50%)">
                                <div class="submenu-content bg-white p-xl-5 p-4">
                                    @foreach ($item->children as $child)
                                        <a href="{{ $child->url }}"
                                           class="d-block mb-3 hover-text-secondary">{{ $child->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
            <!-- end #webmenu -->
        </div>
        <div class="header-right d-flex align-items-center gap-5 position-relative">
            <!-- button -->
            <div class="button d-flex align-items-center gap-md-3 gap-2">
                <a href="/contact"
                   class="d-xxl-block d-none btn btn-teal text-primary fw-semibold rounded-pill py-2 px-4">Contact
                    Us</a>
                <div class="mobile-menu-button d-xxl-none block">
                    <button id="showMenu" class="menu-button px-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#mobile-menu" aria-controls="mobile-menu">
                        <svg width="40" height="40" viewBox="0 0 103 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="21.3628" width="81.637" height="9.91852" rx="4.95926" fill="#D9D9D9"/>
                            <rect x="38.9111" y="53.4072" width="64.0889" height="9.91852" rx="4.95926" fill="#70D5F7"/>
                            <rect y="26.7041" width="103" height="9.91852" rx="4.95926" fill="#D9D9D9"/>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- end #button -->
        </div>
    </div>
</header>
