<!DOCTYPE html>
<html lang="en">
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

    {!! seo()->for($doctor) !!}

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

    <!-- hero -->
    <div class="hero hero-page bg-primary position-relative overflow-hidden">
        <div class="shape-1 position-absolute top-0">
            <svg width="185" height="200" viewBox="0 0 185 249" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE" />
                <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE" />
                <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE" />
                <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE" />
            </svg>
        </div>
        <a href="#" class="alert bg-blue-4 rounded-0 py-0 alert-dismissible fade show position-absolute start-0 top-0 end-0 z-3 d-md-block d-none" role="alert">
            <div class="container-xl d-flex align-items-center justify-content-between">
                <div class="m-auto d-flex align-items-center gap-4">
                    <div class="text-secondary">Recognized Leader in Hair Transplants</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="icon">
                            <svg width="18" height="30" viewBox="0 0 18 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="18" height="30" transform="matrix(-1 0 0 1 18 0)" fill="url(#pattern0_29_1758)" />
                                <defs>
                                    <pattern id="pattern0_29_1758" patternContentUnits="objectBoundingBox" width="1" height="1">
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
        <div class="container-xl position-relative z-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-md-4 mb-3">
                    <li class="breadcrumb-item text-gray-400"><a href="/">Medireve</a></li>
                    <li class="breadcrumb-item text-gray-400"><a href="/doctors">Doctors</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $doctor->name }}</li>
                </ol>
            </nav>
            <div class="fs-54 fw-semibold ls-n1 text-white pb-2">{{ $doctor->name }}</span></div>
            <p class="text-white mb-0 pb-lg-5 pb-md-0 pb-5">{{ $doctor->job_title }}</p>
            <br class="d-xl-block d-none" />
            <br class="d-lg-block d-none" />
        </div>
    </div>
    <!-- end #hero -->

    <!-- section -->
    <section class="bg-gray-400 position-relative z-3">
        <div class="container-xl">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a href="#" class="doctor-detail-page-item d-block border border-black border-opacity-10 p-lg-5 p-4 pt-lg-0 pt-4 text-gray-800">
                        <div class="image mb-4 mt-lg-n5">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($doctor->image) }}" class="doctor-list-img w-100 h-500px object-fit-cover mt-lg-n5" />
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <div class="fs-4 fw-light">{{ $doctor->name }}</div>
                            <span class="fw-light fs-15">{{ $doctor->job_title }}</span>
                        </div>
                        <hr class="my-4 border-black border-opacity-25 opacity-100" />
                        <div class="d-flex flex-column gap-1">
                            <div class="fs-15 fw-light">EDUCATION</div>
                            <span class="fs-14 fw-light">{!! $doctor->education  !!}</span>
                        </div>
                    </a>
                    <!--
                    <div class="d-flex align-items-center gap-3 pt-4">
                        <a href="https://www.youtube.com/channel/UCgr9idjLmFxTBCGAYHkS5AA" class="w-40px h-40px bg-blue-3 rounded-circle d-flex align-items-center justify-content-center text-gray-400">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div> -->
                </div>
                <div class="col-lg-8">
                    <div class="ps-xl-5 pt-xl-5 text-blue-3">
                        <div class="fs-1 fw-normal pb-4">About</div>
                        {!! $doctor->content !!}
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item border-0 overflow-hidden mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button p-4 text-white d-flex align-items-center gap-3 bg-blue-3 shadow-none fw-normal fs-18" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="icon flex-shrink-0">
                                            <svg width="30" height="30" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M36.75 22.421V28C36.75 31.2489 35.4594 34.3647 33.1621 36.6621C30.8647 38.9594 27.7489 40.25 24.5 40.25C21.2511 40.25 18.1353 38.9594 15.8379 36.6621C13.5406 34.3647 12.25 31.2489 12.25 28V26.11C9.33786 25.6875 6.67483 24.2317 4.74712 22.0084C2.81941 19.7851 1.75563 16.9426 1.75 14V3.5C1.75 3.03587 1.93437 2.59075 2.26256 2.26256C2.59075 1.93437 3.03587 1.75 3.5 1.75H8.75C9.21413 1.75 9.65925 1.93437 9.98744 2.26256C10.3156 2.59075 10.5 3.03587 10.5 3.5C10.5 3.96413 10.3156 4.40925 9.98744 4.73744C9.65925 5.06563 9.21413 5.25 8.75 5.25H5.25V14C5.25 16.3206 6.17187 18.5462 7.81282 20.1872C9.45376 21.8281 11.6794 22.75 14 22.75C16.3206 22.75 18.5462 21.8281 20.1872 20.1872C21.8281 18.5462 22.75 16.3206 22.75 14V5.25H19.25C18.7859 5.25 18.3408 5.06563 18.0126 4.73744C17.6844 4.40925 17.5 3.96413 17.5 3.5C17.5 3.03587 17.6844 2.59075 18.0126 2.26256C18.3408 1.93437 18.7859 1.75 19.25 1.75H24.5C24.9641 1.75 25.4092 1.93437 25.7374 2.26256C26.0656 2.59075 26.25 3.03587 26.25 3.5V14C26.2444 16.9426 25.1806 19.7851 23.2529 22.0084C21.3252 24.2317 18.6621 25.6875 15.75 26.11V28C15.75 30.3206 16.6719 32.5462 18.3128 34.1872C19.9538 35.8281 22.1794 36.75 24.5 36.75C26.8206 36.75 29.0462 35.8281 30.6872 34.1872C32.3281 32.5462 33.25 30.3206 33.25 28V22.421C32.0824 22.0082 31.0983 21.1959 30.4716 20.1277C29.845 19.0594 29.6162 17.8041 29.8256 16.5835C30.035 15.3629 30.6692 14.2556 31.6161 13.4573C32.563 12.6591 33.7615 12.2213 35 12.2213C36.2384 12.2213 37.437 12.6591 38.3839 13.4573C39.3308 14.2556 39.965 15.3629 40.1744 16.5835C40.3838 17.8041 40.155 19.0594 39.5284 20.1277C38.9017 21.1959 37.9176 22.0082 36.75 22.421Z"
                                                    fill="#E7E5F2"
                                                />
                                            </svg>
                                        </div>
                                        Experience
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-gray-400">
                                        <ul class="ps-3 d-flex flex-column gap-3">

                                            <div class="d-flex flex-column">
                                                <div class="text-blue-4">
                                                {!! $doctor->experience !!}
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button p-4 text-white d-flex align-items-center gap-3 bg-blue-3 shadow-none fw-normal fs-18 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="icon flex-shrink-0">
                                            <svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M37.4972 36.7659C37.7876 36.7659 38.0624 36.635 38.2453 36.4093C38.4281 36.1837 38.4994 35.8878 38.4394 35.6037L37.833 32.7339C38.1784 32.3998 38.3955 31.9333 38.3955 31.4146C38.3955 30.8686 38.1523 30.3843 37.7749 30.0479V20.0818L35.3439 21.5862V30.0479C34.9664 30.3843 34.7232 30.8686 34.7232 31.4146C34.7232 31.9334 34.9403 32.3999 35.2857 32.7339L34.6792 35.6037C34.6192 35.8878 34.6906 36.1838 34.8734 36.4093C35.0563 36.6349 35.331 36.7659 35.6214 36.7659H37.4972ZM38.3212 14.2663L22.5063 4.47637C22.0431 4.19107 21.521 4.04785 20.9989 4.04785C20.4768 4.04785 19.9543 4.19095 19.4939 4.47637L3.67878 14.2663C3.25648 14.5276 3 14.9891 3 15.4858C3 15.9826 3.25648 16.4443 3.67878 16.706L19.4938 26.496C19.9542 26.7816 20.4767 26.9245 20.9988 26.9245C21.5209 26.9245 22.0431 26.7814 22.5062 26.496L38.3212 16.706C38.7435 16.4444 39 15.9826 39 15.4858C39 14.9891 38.7435 14.5274 38.3212 14.2663ZM20.9988 29.3553C20.0137 29.3553 19.0522 29.0817 18.2141 28.563L8.98909 22.852V32.6859C8.98909 35.5963 14.3686 37.9524 20.9988 37.9524C27.6314 37.9524 33.0105 35.5963 33.0105 32.6859V22.852L23.7858 28.563C22.9477 29.0817 21.984 29.3553 20.9988 29.3553Z"
                                                    fill="#E7E5F2"
                                                />
                                            </svg>
                                        </div>
                                        Education
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-gray-400">{!! $doctor->education !!}</div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 overflow-hidden mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button p-4 text-white d-flex align-items-center gap-3 bg-blue-3 shadow-none fw-normal fs-18 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="icon flex-shrink-0">
                                            <svg width="36" height="36" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.03198e-07 28.875C9.93308e-07 33.2244 3.52577 36.75 7.875 36.75H34.125C38.4744 36.75 42 33.2244 42 28.875V5.25H10.5V28.875H5.25V10.5H0L8.03198e-07 28.875ZM15.75 10.5H36.75V15.75H15.75V10.5ZM36.75 21H15.75V26.25H36.75V21Z" fill="#E7E5F2" />
                                            </svg>
                                        </div>
                                        Languages:
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-gray-400">
                                        {!! $doctor->languages !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end #section -->


    {{ \Filament\Facades\Filament::renderHook('filament-fabricator.scripts.start') }}

    @foreach (\Z3d0X\FilamentFabricator\Facades\FilamentFabricator::getScripts() as $name => $path)
        @if (\Illuminate\Support\Str::of($path)->startsWith('<'))
            {!! $path !!}
        @else
            <script defer src="{{ $path }}"></script>
        @endif
    @endforeach

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

