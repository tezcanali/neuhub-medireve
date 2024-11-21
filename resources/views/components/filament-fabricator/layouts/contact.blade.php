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
    <div class="hero hero-page bg-primary position-relative overflow-hidden">
        <div class="shape-1 position-absolute top-0">
            <svg width="185" height="200" viewBox="0 0 185 249" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE" />
                <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE" />
                <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE" />
                <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE" />
            </svg>
        </div>
        <div class="shape-2 position-absolute bottom-0">
            <svg width="367" height="400" viewBox="0 0 367 496" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M203.459 493.994C214.104 386.879 188.49 138.32 0.872613 1.00037" stroke="#5969AE" />
                <path d="M203.459 493.994C214.104 386.879 188.49 138.32 0.872613 1.00037" stroke="#5969AE" />
                <path d="M245.598 494.992C239.264 431.244 254.504 283.316 366.13 201.591" stroke="#5969AE" />
                <path d="M245.598 494.992C239.264 431.244 254.504 283.316 366.13 201.591" stroke="#5969AE" />
            </svg>
        </div>
        <a href="#" class="alert bg-blue-4 rounded-0 py-0 alert-dismissible fade show position-absolute start-0 top-0 end-0 z-3 d-md-block d-none" role="alert">
            <div class="container-xl d-flex align-items-center justify-content-between">
                <div class="m-auto d-flex align-items-center gap-4">
                    <div class="text-secondary">Recognized Leader in Hair Transplants</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="icon">
                            <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="18" height="30" transform="matrix(-1 0 0 1 18 0)" fill="url(#pattern0_29_1759)" />
                                <defs>
                                    <pattern id="pattern0_29_1759" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_29_1759" transform="matrix(0.0294118 0 0 0.0176471 0 -0.0117647)" />
                                    </pattern>
                                    <image
                                        id="image0_29_1759"
                                        width="34"
                                        height="58"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAA6CAYAAADVwos0AAAAxHpUWHRSYXcgcHJvZmlsZSB0eXBlIGV4aWYAAHjabVDbDcMgDPxnio6AH7zGIU0qdYOO3wM7URLlJB/GZx3GYft9P+E1wKRBU6m55RwBbdq4I6nR0CdT1MkTzK7RtR6ku8AoCU6xa83ev9fpMLCjI0sno/p2YbkKTd2/3oz8IRkTjelWN2puJGwCuUH3SXOr5fyFZYtXVIswSMr0Pkzudy3Y3ppQFOZNSCJYJNsAMkKxIyRqjEZCQ0cwOM1WsoU87WlH+AMnJ1lLTVZ/QgAAAYRpQ0NQSUNDIHByb2ZpbGUAAHicfZE9SMNAHMVf04oiFUE7iHTIUAXBLiriWKpYBAulrdCqg8mlX9CkIUlxcRRcCw5+LFYdXJx1dXAVBMEPEGcHJ0UXKfF/SaFFjAfH/Xh373H3DhCaVaaagRigapaRTsTFXH5V7H1FAH4MIYwJiZl6MrOYhef4uoePr3dRnuV97s8xoBRMBvhE4hjTDYt4g3h209I57xOHWFlSiM+JJw26IPEj12WX3ziXHBZ4ZsjIpueJQ8RiqYvlLmZlQyWeIY4oqkb5Qs5lhfMWZ7VaZ+178hcGC9pKhus0w0hgCUmkIEJGHRVUYSFKq0aKiTTtxz38o44/RS6ZXBUwciygBhWS4wf/g9/dmsXpKTcpGAd6Xmz7Ywzo3QVaDdv+Prbt1gngfwautI6/1gTmPklvdLTIETC4DVxcdzR5D7jcAUaedMmQHMlPUygWgfcz+qY8MHwL9K+5vbX3cfoAZKmr5Rvg4BAYL1H2use7+7p7+/dMu78fqFRyvF7PQncAAA12aVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/Pgo8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA0LjQuMC1FeGl2MiI+CiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiCiAgICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgICB4bWxuczpHSU1QPSJodHRwOi8vd3d3LmdpbXAub3JnL3htcC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgeG1wTU06RG9jdW1lbnRJRD0iZ2ltcDpkb2NpZDpnaW1wOmJhYTE4MWU2LTIwNzUtNDdiMC04MmYzLTRhYzYzYzhkMzEyNyIKICAgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDphOWY3ZjcxZi0yY2QyLTRlNGYtYWY3ZC1hNjU2YmJhMmU1NzUiCiAgIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo2MmJiMDNkZS0zMDk4LTRiNzMtYTU3OC1iZWQ3ZGU5MmY5ZDQiCiAgIGRjOkZvcm1hdD0iaW1hZ2UvcG5nIgogICBHSU1QOkFQST0iMi4wIgogICBHSU1QOlBsYXRmb3JtPSJXaW5kb3dzIgogICBHSU1QOlRpbWVTdGFtcD0iMTcxMjIzMzk3OTUzOTQzMiIKICAgR0lNUDpWZXJzaW9uPSIyLjEwLjM2IgogICB0aWZmOk9yaWVudGF0aW9uPSIxIgogICB4bXA6Q3JlYXRvclRvb2w9IkdJTVAgMi4xMCIKICAgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyNDowNDowNFQxMzozMjo1NiswMTowMCIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjQ6MDQ6MDRUMTM6MzI6NTYrMDE6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJzYXZlZCIKICAgICAgc3RFdnQ6Y2hhbmdlZD0iLyIKICAgICAgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDowNTUyZjJjNy04Y2I4LTRmMTQtODhmZS1hYzNiODI4MzA1MmUiCiAgICAgIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkdpbXAgMi4xMCAoV2luZG93cykiCiAgICAgIHN0RXZ0OndoZW49IjIwMjQtMDQtMDRUMTM6MzI6NTkiLz4KICAgIDwvcmRmOlNlcT4KICAgPC94bXBNTTpIaXN0b3J5PgogIDwvcmRmOkRlc2NyaXB0aW9uPgogPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgIAo8P3hwYWNrZXQgZW5kPSJ3Ij8+U8fGtQAAAAZiS0dEAA4ATABgckEQ4gAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+gEBAwgO2G0NjoAAAO3SURBVFjDzVmvc6NgFNzXQSCRSCQSiURGIisjKyvvz6isjKyMjEQikUgkEol7Z/b13tF02jR83x0zmTC06dvs7vd+FfjBpaopdr4efvi5J1Ut/gcgGYBHY0ZVi3tZSr4pRQWgBLAC6ABMAAoCmgHUAFIAp9CMjARRAGgIZmVw8L1Q1TwoIyKyAjibDAAqslKq6kJWCgNGBlMR6YN4hAGOBJKRGRAUyBIoVbM7IxuTjgBmEenITuMkMs9kAFJVzURk2R2IiHSOnRrAwTFxATCraglgAfAOgr87UOJdGPGgelWdyYZJU/F95ss8dSDYYXcgBDO5YI9OIgAYVDXjsTfZEASIB6SqFwA5ZZn5rHIApuBACGZwdagiCAu+OPZaAN3WxLsBcVflTFy5bAxVbVwOGoICoYlHB8JMmzszr3sVva/ALAB6fvOUvintXkTGYB65cuXMwtiY9Y0MZcw1UzBG3NE+EcBKYJOIzJTpyUkFQcTLNVOt1SrL1kmE4A0rs5WBmiAWf3KSCEQMrnEqnVRvPpdIJEkyVumcgC4iMvJ5DaBPItljZfCVmbdWVfNKCqCLBaQG0LBan/nsQBCDiKwPkYD0NKfllsw1UV3U4+t8YrmjF5FLbLNuT0xDlqwwZknEfNby/eL6WmumhigeYa86bEzauoLYxfRIShCVawMGpvk1FohSVY+qmrn7NFYbsE1oBSvuK+VIWYdKAFMsILOblW0gO/rGOtbxrQjm6IZ2Y6oTkV4igCgIoKM5H5lPbHRdg3ZoG3+AkmQMfrGx1EybhD6ybA0XgigY/Mh762VPEhhIS0ZGyrNsRs8FwElEltCnJudrZPm3GrMSxGgeSQJK4ldbNt11Npp+KAMBJVmcSWe3i/MT4CUYIzaEM9gr73Mn1XuS8zUmCZAzVpe0Mnoi43Mz6mAT3u5A3CrrZbNzK0Tk7ctWYQcAOXPFMwOfKUfhfJKSkenabuTuzMoa8mQDtQvaO4kyJ1PpEtl92wAGrVg32iv7MetJX135z22Z91kTlNwqAzPk6mj3a4ec4AaCmZg3xq/+9q3SPDq9M5emFz6fXQKrALSq+kwWscsyj2xkm0bHmDgAONO0BUHYfzOGa6uqe6TJHQMT/uxPbWAqVdWa4fPNnf4NbNQuY65kYFLVA3/2oaLuAsRRXFCKidLULmDPLWLhdiDW/s13AXG70IXt3V81gT9v3EfOn1XUHwHht2rfJ69NLbiSzmtXQ152GZJU9aCqvxjg1kq76xT2rbMeay79p9dvaV7+fDnvCtQAAAAASUVORK5CYII="
                                    />
                                </defs>
                            </svg>
                        </div>
                        <span class="text-white fw-light">Your Trusted Choice</span>
                        <div class="icon">
                            <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="18" height="30" fill="url(#pattern0_29_1758)" />
                                <defs>
                                    <pattern id="pattern0_29_1758" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_29_1758" transform="matrix(0.0294118 0 0 0.0176471 0 -0.0117647)" />
                                    </pattern>
                                    <image
                                        id="image0_29_1758"
                                        width="34"
                                        height="58"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAA6CAYAAADVwos0AAAAAXNSR0IArs4c6QAABGVJREFUaEO9mS1UHEEQhLsdEomMjERGRkZGRkZGRkZGIpFIJBKJRCKRSCQSievwdbr2zcHtsbt3s/PevZD72amtrq7p7nVbsCLiyN1fFvx09Ce+5GIR8dvMrt39ccnvt/1mKZC/ZgYj5zATEZ/M7GkfliYBiYhTM/tcm9+a2XczY/MLd3+KiB9mRrgulzI0FciRmX2rzQnHvZmx+RXhiYifLbAlYCYBaS9cYYAhwD2/Arwzsy/1uixg+bm789mkNQtIhYiwsJ5eWSAUADophhSqX6/6OXb3s0kozGwukK+1KcK8LXZ4T2AI1UNE/Kn3EDOsfbhmAXkTIsKBblhkECJ+KKCAGxiJCL57vyurFgNh92IENuQnaINFqMzdr+s7iBnfQeRb115AdMXaLFO42YVNYUlCviWcXYEUO7ABE2gCDZHW8h88KDOqO5CGHVgRKDYGxIm7nxdgsg52NkR8kNDsEPEgZDwlIhAxr3d6OTiQuuvjYoVswm8ECB3xWaZ5ewNdgBQYQsSmvABDuBDui8K0FhAORdJWC70gZkTLQZkgJeBujDQ+IzfmrUd3v4oIAAHyAa9JzxlLpx7vl99waTIHRgZv6Q6kMoUwIdybxuBIX8KUabwGEO6c01iuu6EVMd8dSJPO0gqAbuqUBiSZdLcWkGSj6lv+ZnNSGq3w/7O1gMhR2ZwswfbxFRihPLheCwh3nVVbiRZXBQjAcNnnVYC80Ylqljt3J4tyrQKEzrDCQcaQxoRKhXWGaE0g1LEsWAAM/qFi6n4VIBUaMkRhkbGhmf/G1sPKt12zwkOxDRg18FlOktarAIkI0hXvIHU58PibbBkmCmsBUUnAxhclVhXWgHxcCwhZwyiDfwmHGjI0wlrN0GReKpR0AGZjRj3bnZGmwSIUmiLgJ7jrMFNZAwjixN5ZNO2n1QESlpwodM8azdpq1JUVWc1RAIWAWZSPfX0kIjAxdEAY0AfmJYECYqjSuoYmIghJVu4FgDMGULJ4iuf0ki5AtoQEkWbfOzYR6AWEkKi3hQV1e6pD1AFSMvZhpM4UTlq5KNpodaGjKCuzLvVIeQYA2nRFI6rMBAgQGyOKg4WmxlOcrowfsPO0bgoiuruPTvm9gdA+Vi/L5twxm2Pp+IR0gnHBFCy8m43snTXNuLNlgaIHAPKQVh/Z7W3LnNmMVBfPHZOSCgE+oQMNRrLeKBZgBp0AYnSyOAtI08VrnKnhL0DaTk7TQ+x7dJLY6mYuEOkAX8AT2DxtugphAOoM0T4bzfaYaCcDKTaUltwlYMgSFTqIkAEMQNqnGXxOD7PzQdMcIFxcjskpSonHq10qhieNvWeHpthAgKrAubt8ghURsMJns0LxNkSjjDQU59Op8gCNEXSEQzljS74DGPlFhukjE9vJSE14uHPoJQQbj8iaWamus3PGPhXMwEjd1aCBXePqsnMY0BmSz/ambrrtewmk4gwLWVFPveAhH7t6dWEIbhisTQVyyO+JkYM/UJ4L8h+cjgaMC14lxgAAAABJRU5ErkJggg=="
                                    />
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white position-relative shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </a>
        <div class="container-xl position-relative z-3" id="formmedireve">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-2">
                    <li class="breadcrumb-item text-gray-400"><a href="#">Medireve</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
            <div class="fs-1 fw-light text-gray-400">Contact Us</div>
            <div class="pt-4">
                <div class="fs-60 fw-light text-gray-400 mb-3">Get in touch</div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-border border-end border-white border-opacity-50 pe-lg-4">
                            <p class="text-gray-400">We are delighted you are interested in using our services. Please choose your preferred means of contact below, and we will do our best to deal with your enquiry as promptly as possible.</p>
                            <form  id="contactForm" action="send_mail.php" method="post" class="row g-md-3 g-2 pt-md-3 pb-lg-5 pb-4">
                                <input type="hidden" name="form_id" value="contactForm" />
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-text bg-gray-400 pe-0">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.13516 15.1C4.98516 14.45 5.93516 13.9375 6.98516 13.5625C8.03516 13.1875 9.13516 13 10.2852 13C11.4352 13 12.5352 13.1875 13.5852 13.5625C14.6352 13.9375 15.5852 14.45 16.4352 15.1C17.0185 14.4167 17.4727 13.6417 17.7977 12.775C18.1227 11.9083 18.2852 10.9833 18.2852 10C18.2852 7.78333 17.506 5.89583 15.9477 4.3375C14.3893 2.77917 12.5018 2 10.2852 2C8.06849 2 6.18099 2.77917 4.62266 4.3375C3.06432 5.89583 2.28516 7.78333 2.28516 10C2.28516 10.9833 2.44766 11.9083 2.77266 12.775C3.09766 13.6417 3.55182 14.4167 4.13516 15.1ZM10.2852 11C9.30182 11 8.47266 10.6625 7.79766 9.9875C7.12266 9.3125 6.78516 8.48333 6.78516 7.5C6.78516 6.51667 7.12266 5.6875 7.79766 5.0125C8.47266 4.3375 9.30182 4 10.2852 4C11.2685 4 12.0977 4.3375 12.7727 5.0125C13.4477 5.6875 13.7852 6.51667 13.7852 7.5C13.7852 8.48333 13.4477 9.3125 12.7727 9.9875C12.0977 10.6625 11.2685 11 10.2852 11ZM10.2852 20C8.90182 20 7.60182 19.7375 6.38516 19.2125C5.16849 18.6875 4.11016 17.975 3.21016 17.075C2.31016 16.175 1.59766 15.1167 1.07266 13.9C0.547656 12.6833 0.285156 11.3833 0.285156 10C0.285156 8.61667 0.547656 7.31667 1.07266 6.1C1.59766 4.88333 2.31016 3.825 3.21016 2.925C4.11016 2.025 5.16849 1.3125 6.38516 0.7875C7.60182 0.2625 8.90182 0 10.2852 0C11.6685 0 12.9685 0.2625 14.1852 0.7875C15.4018 1.3125 16.4602 2.025 17.3602 2.925C18.2602 3.825 18.9727 4.88333 19.4977 6.1C20.0227 7.31667 20.2852 8.61667 20.2852 10C20.2852 11.3833 20.0227 12.6833 19.4977 13.9C18.9727 15.1167 18.2602 16.175 17.3602 17.075C16.4602 17.975 15.4018 18.6875 14.1852 19.2125C12.9685 19.7375 11.6685 20 10.2852 20ZM10.2852 18C11.1685 18 12.0018 17.8708 12.7852 17.6125C13.5685 17.3542 14.2852 16.9833 14.9352 16.5C14.2852 16.0167 13.5685 15.6458 12.7852 15.3875C12.0018 15.1292 11.1685 15 10.2852 15C9.40182 15 8.56849 15.1292 7.78516 15.3875C7.00182 15.6458 6.28516 16.0167 5.63516 16.5C6.28516 16.9833 7.00182 17.3542 7.78516 17.6125C8.56849 17.8708 9.40182 18 10.2852 18ZM10.2852 9C10.7185 9 11.0768 8.85833 11.3602 8.575C11.6435 8.29167 11.7852 7.93333 11.7852 7.5C11.7852 7.06667 11.6435 6.70833 11.3602 6.425C11.0768 6.14167 10.7185 6 10.2852 6C9.85182 6 9.49349 6.14167 9.21016 6.425C8.92682 6.70833 8.78516 7.06667 8.78516 7.5C8.78516 7.93333 8.92682 8.29167 9.21016 8.575C9.49349 8.85833 9.85182 9 10.2852 9Z"
                                                        fill="#000C40"
                                                    />
                                                </svg>
                                            </span>
                                        <input type="text" name="name" class="form-control border-start-0 fw-light" placeholder="Your Full Name" required/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-text bg-gray-400 pe-0">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.2852 20C8.90182 20 7.60182 19.7375 6.38516 19.2125C5.16849 18.6875 4.11016 17.975 3.21016 17.075C2.31016 16.175 1.59766 15.1167 1.07266 13.9C0.547656 12.6833 0.285156 11.3833 0.285156 10C0.285156 8.61667 0.547656 7.31667 1.07266 6.1C1.59766 4.88333 2.31016 3.825 3.21016 2.925C4.11016 2.025 5.16849 1.3125 6.38516 0.7875C7.60182 0.2625 8.90182 0 10.2852 0C11.6685 0 12.9685 0.2625 14.1852 0.7875C15.4018 1.3125 16.4602 2.025 17.3602 2.925C18.2602 3.825 18.9727 4.88333 19.4977 6.1C20.0227 7.31667 20.2852 8.61667 20.2852 10V11.45C20.2852 12.4333 19.9477 13.2708 19.2727 13.9625C18.5977 14.6542 17.7685 15 16.7852 15C16.2018 15 15.6518 14.875 15.1352 14.625C14.6185 14.375 14.1852 14.0167 13.8352 13.55C13.3518 14.0333 12.806 14.3958 12.1977 14.6375C11.5893 14.8792 10.9518 15 10.2852 15C8.90182 15 7.72266 14.5125 6.74766 13.5375C5.77266 12.5625 5.28516 11.3833 5.28516 10C5.28516 8.61667 5.77266 7.4375 6.74766 6.4625C7.72266 5.4875 8.90182 5 10.2852 5C11.6685 5 12.8477 5.4875 13.8227 6.4625C14.7977 7.4375 15.2852 8.61667 15.2852 10V11.45C15.2852 11.8833 15.4268 12.25 15.7102 12.55C15.9935 12.85 16.3518 13 16.7852 13C17.2185 13 17.5768 12.85 17.8602 12.55C18.1435 12.25 18.2852 11.8833 18.2852 11.45V10C18.2852 7.76667 17.5102 5.875 15.9602 4.325C14.4102 2.775 12.5185 2 10.2852 2C8.05182 2 6.16016 2.775 4.61016 4.325C3.06016 5.875 2.28516 7.76667 2.28516 10C2.28516 12.2333 3.06016 14.125 4.61016 15.675C6.16016 17.225 8.05182 18 10.2852 18H15.2852V20H10.2852ZM10.2852 13C11.1185 13 11.8268 12.7083 12.4102 12.125C12.9935 11.5417 13.2852 10.8333 13.2852 10C13.2852 9.16667 12.9935 8.45833 12.4102 7.875C11.8268 7.29167 11.1185 7 10.2852 7C9.45182 7 8.74349 7.29167 8.16016 7.875C7.57682 8.45833 7.28516 9.16667 7.28516 10C7.28516 10.8333 7.57682 11.5417 8.16016 12.125C8.74349 12.7083 9.45182 13 10.2852 13Z"
                                                        fill="#000C40"
                                                    />
                                                </svg>
                                            </span>
                                        <input type="email" name="email" class="form-control border-start-0 fw-light" placeholder="Your Mail Adress" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Lütfen geçerli bir e-posta adresi girin." />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                            <span class="input-group-text bg-gray-400 pe-0">
                                            <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg" id="fi_1835948"><path d="m90.050781 395.949219c-7.167969 0-14.058593 1.789062-20.171875 5.148437-32.203125-41.28125-49.878906-92.5625-49.878906-145.097656 0-130.132812 105.867188-236 236-236 15.820312 0 31.632812 1.574219 47 4.679688 5.40625 1.09375 10.6875-2.40625 11.78125-7.820313s-2.40625-10.6875-7.820312-11.785156c-16.667969-3.367188-33.8125-5.074219-50.960938-5.074219-68.378906 0-132.667969 26.628906-181.019531 74.980469-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531 0 57.519531 19.53125 113.652344 55.089844 158.652344-4.578125 6.839844-7.039063 14.878906-7.039063 23.296875 0 11.21875 4.371094 21.765625 12.304688 29.695312 7.929687 7.933594 18.476562 12.304688 29.695312 12.304688s21.765625-4.371094 29.699219-12.304688c7.933594-7.929687 12.300781-18.480469 12.300781-29.699219 0-11.214843-4.367187-21.765624-12.300781-29.695312-7.933594-7.933594-18.480469-12.300781-29.699219-12.300781zm15.554688 57.554687c-4.152344 4.15625-9.679688 6.445313-15.554688 6.445313s-11.398437-2.289063-15.554687-6.445313-6.445313-9.679687-6.445313-15.554687c0-5.878907 2.289063-11.402344 6.445313-15.558594 4.152344-4.15625 9.679687-6.441406 15.554687-6.441406s11.398438 2.289062 15.554688 6.441406c4.15625 4.15625 6.445312 9.679687 6.445312 15.558594 0 5.875-2.289062 11.398437-6.445312 15.554687zm0 0"></path><path d="m456.902344 97.335938c10.871094-16.308594 9.125-38.605469-5.253906-52.984376-7.933594-7.929687-18.480469-12.300781-29.699219-12.300781s-21.765625 4.371094-29.699219 12.300781c-7.933594 7.933594-12.300781 18.480469-12.300781 29.699219s4.367187 21.765625 12.300781 29.699219 18.480469 12.300781 29.699219 12.300781c7.167969 0 14.058593-1.789062 20.171875-5.148437 32.203125 41.285156 49.878906 92.5625 49.878906 145.097656 0 130.132812-105.867188 236-236 236-15.664062 0-31.328125-1.542969-46.550781-4.589844-5.414063-1.082031-10.683594 2.429688-11.769531 7.84375-1.082032 5.417969 2.429687 10.683594 7.84375 11.769532 16.511718 3.300781 33.496093 4.976562 50.476562 4.976562 68.378906 0 132.667969-26.628906 181.019531-74.980469 48.351563-48.351562 74.980469-112.640625 74.980469-181.019531 0-57.523438-19.535156-113.660156-55.097656-158.664062zm-50.507813-7.726563c-4.15625-4.15625-6.445312-9.679687-6.445312-15.558594 0-5.875 2.289062-11.398437 6.445312-15.554687 4.152344-4.15625 9.679688-6.445313 15.554688-6.445313s11.402343 2.289063 15.558593 6.445313c8.574219 8.578125 8.574219 22.535156 0 31.113281-4.15625 4.152344-9.683593 6.441406-15.558593 6.441406-5.878907 0-11.402344-2.289062-15.554688-6.441406zm0 0"></path><path d="m214.734375 428c0 5.523438 4.480469 10 10 10h62.527344c5.523437 0 10-4.476562 10-10v-19.386719c13.148437-3.539062 25.71875-8.75 37.53125-15.554687l13.6875 13.6875c1.875 1.875 4.417969 2.929687 7.074219 2.929687 2.648437 0 5.195312-1.054687 7.070312-2.933593l44.195312-44.226563c3.902344-3.90625 3.902344-10.238281 0-14.140625l-13.671874-13.671875c6.804687-11.8125 12.015624-24.382813 15.554687-37.53125h19.3125c5.523437 0 10-4.476563 10-10v-62.527344c0-5.523437-4.476563-10-10-10h-19.316406c-3.539063-13.144531-8.746094-25.714843-15.550781-37.527343l13.597656-13.597657c1.875-1.875 2.929687-4.421875 2.929687-7.074219-.003906-2.652343-1.058593-5.199218-2.933593-7.074218l-44.230469-44.195313c-3.902344-3.902343-10.234375-3.902343-14.140625.003907l-13.578125 13.582031c-11.8125-6.804688-24.382813-12.015625-37.53125-15.554688v-19.207031c0-5.523438-4.476563-10-10-10h-62.527344c-5.519531 0-10 4.476562-10 10v19.210938c-13.144531 3.535156-25.714844 8.746093-37.527344 15.550781l-13.582031-13.582031c-3.902344-3.902344-10.234375-3.90625-14.140625-.003907l-44.226563 44.199219c-1.878906 1.875-2.933593 4.417969-2.933593 7.070312 0 2.652344 1.054687 5.199219 2.929687 7.074219l13.597656 13.597657c-6.804687 11.8125-12.015624 24.378906-15.554687 37.527343h-19.277344c-5.523437 0-10 4.476563-10 9.996094l-.035156 62.527344c-.003906 2.652343 1.050781 5.199219 2.925781 7.074219s4.417969 2.929687 7.074219 2.929687h19.3125c3.539063 13.148437 8.75 25.71875 15.554687 37.53125l-13.671874 13.671875c-3.902344 3.902344-3.90625 10.234375 0 14.140625l44.195312 44.226563c1.875 1.875 4.417969 2.933593 7.070312 2.933593h.003907c2.652343 0 5.195312-1.054687 7.070312-2.929687l13.683594-13.6875c11.816406 6.804687 24.386719 12.015625 37.53125 15.554687zm-33.609375-55.972656c-3.957031-2.558594-9.164062-2.003906-12.5 1.328125l-12.175781 12.175781-30.058594-30.082031 12.164063-12.167969c3.332031-3.332031 3.886718-8.539062 1.328124-12.496094-9.066406-14.03125-15.441406-29.410156-18.941406-45.714844-.992187-4.605468-5.0625-7.898437-9.777344-7.898437h-17.175781l.023438-42.527344h17.152343c4.714844 0 8.785157-3.289062 9.777344-7.898437 3.5-16.300782 9.875-31.679688 18.941406-45.710938 2.558594-3.957031 2.003907-9.164062-1.328124-12.496094l-12.085938-12.089843 30.082031-30.058594 12.074219 12.078125c3.335938 3.332031 8.539062 3.882812 12.5 1.328125 14.027344-9.066406 29.40625-15.441406 45.710938-18.941406 4.605468-.992188 7.898437-5.066407 7.898437-9.777344v-17.078125h42.527344v17.074219c0 4.714843 3.289062 8.789062 7.898437 9.777343 16.300782 3.503907 31.683594 9.875 45.710938 18.941407 3.957031 2.558593 9.164062 2.007812 12.496094-1.328125l12.078124-12.074219 30.082032 30.058594-12.085938 12.085937c-3.335937 3.335938-3.886718 8.542969-1.328125 12.5 9.066407 14.03125 15.4375 29.410156 18.941407 45.710938.988281 4.609375 5.0625 7.898437 9.777343 7.898437h17.183594v42.527344h-17.183594c-4.714843 0-8.785156 3.292969-9.777343 7.898437-3.5 16.300782-9.875 31.683594-18.941407 45.710938-2.558593 3.960938-2.003906 9.167969 1.328125 12.5l12.164063 12.164062-30.058594 30.082032-12.175781-12.171875c-3.335938-3.335938-8.542969-3.886719-12.5-1.328125-14.03125 9.066406-29.410156 15.4375-45.710938 18.941406-4.609375.992188-7.898437 5.0625-7.898437 9.777344v17.253906h-42.527344v-17.253906c0-4.710938-3.292969-8.785156-7.898437-9.777344-16.300782-3.5-31.679688-9.875-45.710938-18.941406zm0 0"></path><path d="m338.628906 256c0-45.5625-37.066406-82.628906-82.628906-82.628906s-82.628906 37.066406-82.628906 82.628906 37.066406 82.628906 82.628906 82.628906 82.628906-37.066406 82.628906-82.628906zm-145.257812 0c0-34.535156 28.09375-62.628906 62.628906-62.628906s62.628906 28.097656 62.628906 62.628906-28.09375 62.628906-62.628906 62.628906-62.628906-28.09375-62.628906-62.628906zm0 0"></path><path d="m348.078125 37.820312c2.632813 0 5.210937-1.070312 7.070313-2.929687 1.859374-1.871094 2.929687-4.449219 2.929687-7.082031 0-2.617188-1.066406-5.199219-2.929687-7.070313-1.859376-1.859375-4.4375-2.929687-7.070313-2.929687-2.640625 0-5.207031 1.070312-7.066406 2.929687-1.863281 1.871094-2.933594 4.441407-2.933594 7.070313 0 2.640625 1.070313 5.210937 2.933594 7.082031 1.859375 1.859375 4.425781 2.929687 7.066406 2.929687zm0 0"></path><path d="m164.359375 474.359375c-2.628906 0-5.210937 1.070313-7.070313 2.929687-1.859374 1.859376-2.929687 4.441407-2.929687 7.070313 0 2.640625 1.070313 5.210937 2.929687 7.070313 1.859376 1.859374 4.441407 2.929687 7.070313 2.929687s5.210937-1.070313 7.070313-2.929687c1.859374-1.859376 2.929687-4.441407 2.929687-7.070313s-1.070313-5.210937-2.929687-7.070313c-1.859376-1.859374-4.441407-2.929687-7.070313-2.929687zm0 0"></path></svg>
                                        </span>
                                        <select name="service" class="form-control py-2" required>
                                            <option value="">Select Service</option>
                                            <option value="Plastic">Plastic</option>
                                            <option value="Hair">Hair</option>
                                            <option value="Dental">Dental</option>
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
                                                    <path
                                                        d="M4.28516 12H12.2852V10H4.28516V12ZM4.28516 9H16.2852V7H4.28516V9ZM4.28516 6H16.2852V4H4.28516V6ZM0.285156 20V2C0.285156 1.45 0.48099 0.979167 0.872656 0.5875C1.26432 0.195833 1.73516 0 2.28516 0H18.2852C18.8352 0 19.306 0.195833 19.6977 0.5875C20.0893 0.979167 20.2852 1.45 20.2852 2V14C20.2852 14.55 20.0893 15.0208 19.6977 15.4125C19.306 15.8042 18.8352 16 18.2852 16H4.28516L0.285156 20ZM3.43516 14H18.2852V2H2.28516V15.125L3.43516 14Z"
                                                        fill="#000C40"
                                                    />
                                                </svg>
                                            </span>
                                        <input type="text" name="message" class="form-control border-start-0 fw-light" placeholder="Message" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required/>
                                        <label class="form-check-label fs-14 text-gray-400" for="flexCheckDefault"> Tick here if you do not wish to receive the latest news, offers, treatment and product information via email and SMS from Medireve Clinic. You can unsubscribe at any time, and you can read our full privacy policy here. </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="g-recaptcha" data-sitekey="6Ley1WgqAAAAAEcd7Qk_2gtnzuxjNvp-hD6a4rqR"></div>
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-teal text-primary w-100 h-100 fs-18">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.google.com/maps/place/Se%C3%A7kin+Sk.+No:2+Z+ofis/data=!4m7!3m6!1s0x14cab6dc702c74a3:0xd5bb66645f8b8c7a!8m2!3d41.0767492!4d28.971034!16s%2Fg%2F11vf4c7w2_!19sChIJo3QscNy2yhQReoyLX2Rmu9U?coh=219680&utm_campaign=tt-rcs&entry=tts&g_ep=EgoyMDI0MDkxOC4xKgBIAVAD">
                            <img src="{{ asset('front/img/map.png')}}" class="img-fluid rounded-5 mb-4" />
                            <div class="mb-4">
                                <div class="fs-18 fw-light text-teal pb-2">Istanbul Office</div>
                                <div class="fs-18 text-gray-400">Merkez Mahallesi, Seçkin Sokak, Z Ofis No:2 - 4A İç Kapı No: 210 Dap Vadisi Z Ofis Kağıthane/ İstanbul</div>
                            </div>
                            <div class="mb-4">
                                <div class="fs-18 fw-light text-teal pb-2">New York Office</div>
                                <div class="fs-18 text-gray-400">349 St John Avenue Suite B. Yonkers, New York 10704. USA</div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <a href="tel:+90 534 695 74 05" class="call-box d-flex align-items-center gap-4 rounded-pill px-4 py-2">
                                    <div class="icon flex-shrink-0">
                                        <svg width="40" height="16" viewBox="0 0 45 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.22321 17.3743L0.602679 12.7205C0.200893 12.3068 0 11.8242 0 11.2726C0 10.7211 0.200893 10.2384 0.602679 9.82476C3.54911 6.54984 6.94754 4.09365 10.798 2.45619C14.6484 0.81873 18.5491 0 22.5 0C26.4509 0 30.3432 0.81873 34.1769 2.45619C38.0106 4.09365 41.4174 6.54984 44.3973 9.82476C44.7991 10.2384 45 10.7211 45 11.2726C45 11.8242 44.7991 12.3068 44.3973 12.7205L39.7768 17.3743C39.4085 17.7535 38.9816 17.9604 38.4961 17.9948C38.0106 18.0293 37.567 17.8914 37.1652 17.5812L31.3393 13.0307C31.0714 12.8239 30.8705 12.5826 30.7366 12.3068C30.6027 12.031 30.5357 11.7208 30.5357 11.376V5.48118C29.2634 5.06751 27.9576 4.74002 26.6183 4.49871C25.279 4.2574 23.9062 4.13674 22.5 4.13674C21.0938 4.13674 19.721 4.2574 18.3817 4.49871C17.0424 4.74002 15.7366 5.06751 14.4643 5.48118V11.376C14.4643 11.7208 14.3973 12.031 14.2634 12.3068C14.1295 12.5826 13.9286 12.8239 13.6607 13.0307L7.83482 17.5812C7.43304 17.8914 6.9894 18.0293 6.50391 17.9948C6.01841 17.9604 5.59152 17.7535 5.22321 17.3743ZM10.4464 7.13588C9.47545 7.65297 8.53795 8.24763 7.63393 8.91985C6.72991 9.59207 5.79241 10.3419 4.82143 11.1692L6.83036 13.2376L10.4464 10.3419V7.13588ZM34.5536 7.2393V10.3419L38.1696 13.2376L40.1786 11.2726C39.2076 10.3763 38.2701 9.60069 37.3661 8.94571C36.4621 8.29072 35.5246 7.72192 34.5536 7.2393Z"
                                                fill="#2B3A8D"
                                            />
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column fw-light fs-18">
                                        <span>Call us directly at</span>
                                        <span>+90 534 695 74 05</span>
                                    </div>
                                </a>
                                <a href="https://wa.me/905346957401" class="write-box d-flex align-items-center gap-4 rounded-pill px-4 py-2">
                                    <div class="icon flex-shrink-0">
                                        <svg width="36" height="36" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M34.8718 5.94511C32.9921 4.05251 30.7546 2.5523 28.2897 1.53168C25.8246 0.511067 23.181 -0.00952856 20.5128 0.000132026C16.9459 0.00361701 13.4423 0.94364 10.3531 2.72606C7.26395 4.50847 4.69764 7.07073 2.91113 10.1562C1.12462 13.2417 0.180667 16.7422 0.173744 20.3069C0.166846 23.8718 1.09726 27.3758 2.87179 30.4682L0 41L10.7692 38.1813C13.7429 39.8346 17.0844 40.7158 20.4872 40.7438C25.8967 40.744 31.0872 38.6087 34.9287 34.8029C38.7705 30.9973 40.9526 25.829 41 20.4232C40.9821 17.7257 40.4313 15.0582 39.3797 12.5738C38.3282 10.0893 36.7962 7.83674 34.8718 5.94511ZM20.5128 37.2331C17.4813 37.2352 14.5052 36.4208 11.8974 34.8757L11.2821 34.4913L4.89744 36.1825L6.58974 29.9557L6.17949 29.315C3.99808 25.796 3.18395 21.5994 3.89133 17.5204C4.59872 13.4416 6.77849 9.76363 10.0177 7.18338C13.2569 4.60311 17.3305 3.29975 21.4669 3.5202C25.6033 3.74063 29.5154 5.46956 32.4615 8.37948C35.6821 11.5267 37.5256 15.8197 37.5897 20.3207C37.5492 24.8202 35.7321 29.1216 32.5338 32.2891C29.3359 35.4563 25.0154 37.2334 20.5128 37.2331ZM29.7692 24.5744C29.2564 24.3182 26.7692 23.0882 26.3077 22.9344C25.8462 22.7807 25.4872 22.6782 25.1538 23.1907C24.6523 23.8777 24.1128 24.5363 23.5385 25.1638C23.2564 25.5226 22.9487 25.5482 22.4359 25.1638C19.5121 24.0092 17.0762 21.8823 15.5385 19.142C15 18.2451 16.0513 18.2963 17.0256 16.3745C17.0977 16.2358 17.1351 16.0821 17.1351 15.926C17.1351 15.77 17.0977 15.6162 17.0256 15.4776C17.0256 15.2213 15.8718 12.7101 15.4615 11.7107C15.0513 10.7113 14.641 10.8651 14.3077 10.8395H13.3077C13.0486 10.8434 12.7933 10.9027 12.559 11.0131C12.3246 11.1236 12.1166 11.2828 11.9487 11.4801C11.3734 12.0392 10.9246 12.715 10.6327 13.462C10.3408 14.209 10.2125 15.0099 10.2564 15.8107C10.4172 17.7277 11.1396 19.5548 12.3333 21.0638C14.5185 24.3331 17.5131 26.9814 21.0256 28.7513C22.8679 29.826 25.009 30.2755 27.1282 30.0325C27.8338 29.8926 28.5023 29.6059 29.0897 29.1908C29.6774 28.7759 30.171 28.2419 30.5385 27.6238C30.879 26.8694 30.9862 26.0307 30.8462 25.2151C30.6154 24.9588 30.282 24.8307 29.7692 24.5744Z"
                                                fill="white"
                                            />
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column fw-light fs-18">
                                        <span>Write us on</span>
                                        <span>+90 534 695 74 01</span>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

