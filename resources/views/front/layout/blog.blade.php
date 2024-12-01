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

    {!! seo()->for($blog) !!}

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
    <div class="hero hero-page bg-primary position-relative pb-0">
        <div class="shape-1 position-absolute top-0">
            <svg width="185" height="200" viewBox="0 0 185 249" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
                <path d="M82.4991 1.5C77.1658 55.1667 89.9991 179.7 183.999 248.5" stroke="#5969AE"/>
                <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
                <path d="M61.3893 1C64.5625 32.9393 56.927 107.054 1 148" stroke="#5969AE"/>
            </svg>
        </div>
        <a href="#"
           class="alert bg-blue-4 rounded-0 py-0 alert-dismissible fade show position-absolute start-0 top-0 end-0 z-3 d-md-block d-none"
           role="alert">
            <div class="container-xl d-flex align-items-center justify-content-between">
                <div class="m-auto d-flex align-items-center gap-4">
                    <div class="text-secondary">Recognized Leader in Hair Transplants</div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="icon">
                            <svg width="18" height="30" viewBox="0 0 18 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="18" height="30" transform="matrix(-1 0 0 1 18 0)"
                                      fill="url(#pattern0_29_1758)"/>
                                <defs>
                                    <pattern id="pattern0_29_1758" patternContentUnits="objectBoundingBox" width="1"
                                             height="1">
                                        <use xlink:href="#image0_29_1759"
                                             transform="matrix(0.0294118 0 0 0.0176471 0 -0.0117647)"/>
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
                            <svg width="18" height="30" viewBox="0 0 18 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="18" height="30" fill="url(#pattern0_29_1758)"/>
                                <defs>
                                    <pattern id="pattern0_29_1758" patternContentUnits="objectBoundingBox" width="1"
                                             height="1">
                                        <use xlink:href="#image0_29_1758"
                                             transform="matrix(0.0294118 0 0 0.0176471 0 -0.0117647)"/>
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
                <button type="button" class="btn-close btn-close-white position-relative shadow-none"
                        data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </a>
        <div class="container-xl position-relative z-3 text-white">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item text-gray-400"><a href="/">Medireve</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 pb-3">
                <div class="fs-44 fw-light pb-2">{{ $blog->title }}</div>
                <div class="dropdown share-btn position-absolute end-0 top-0 w-auto m-md-2">
                    <button class="d-flex align-items-center gap-2 text-white fs-15 fw-light" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="icon flex-shrink-0">
                            <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.2643 20.3192C14.4189 20.3192 13.7003 20.0233 13.1085 19.4315C12.5167 18.8397 12.2208 18.1211 12.2208 17.2757C12.2208 17.1573 12.2292 17.0347 12.2462 16.9079C12.2631 16.7811 12.2884 16.667 12.3222 16.5655L5.17006 12.4061C4.88262 12.6597 4.56137 12.8584 4.2063 13.0021C3.85122 13.1458 3.47924 13.2177 3.09035 13.2177C2.24494 13.2177 1.52634 12.9218 0.934556 12.33C0.342769 11.7382 0.046875 11.0196 0.046875 10.1742C0.046875 9.32881 0.342769 8.61022 0.934556 8.01843C1.52634 7.42664 2.24494 7.13075 3.09035 7.13075C3.47924 7.13075 3.85122 7.20261 4.2063 7.34633C4.56137 7.49005 4.88262 7.68872 5.17006 7.94234L12.3222 3.78292C12.2884 3.68147 12.2631 3.56734 12.2462 3.44053C12.2292 3.31372 12.2208 3.19113 12.2208 3.07278C12.2208 2.22736 12.5167 1.50877 13.1085 0.916978C13.7003 0.325191 14.4189 0.0292969 15.2643 0.0292969C16.1097 0.0292969 16.8283 0.325191 17.4201 0.916978C18.0119 1.50877 18.3077 2.22736 18.3077 3.07278C18.3077 3.91819 18.0119 4.63678 17.4201 5.22857C16.8283 5.82036 16.1097 6.11625 15.2643 6.11625C14.8754 6.11625 14.5034 6.04439 14.1483 5.90067C13.7933 5.75695 13.472 5.55828 13.1846 5.30466L6.03238 9.46408C6.0662 9.56553 6.09156 9.67966 6.10847 9.80647C6.12538 9.93328 6.13383 10.0559 6.13383 10.1742C6.13383 10.2926 6.12538 10.4152 6.10847 10.542C6.09156 10.6688 6.0662 10.7829 6.03238 10.8844L13.1846 15.0438C13.472 14.7902 13.7933 14.5915 14.1483 14.4478C14.5034 14.3041 14.8754 14.2322 15.2643 14.2322C16.1097 14.2322 16.8283 14.5281 17.4201 15.1199C18.0119 15.7117 18.3077 16.4303 18.3077 17.2757C18.3077 18.1211 18.0119 18.8397 17.4201 19.4315C16.8283 20.0233 16.1097 20.3192 15.2643 20.3192ZM15.2643 4.08727C15.5517 4.08727 15.7926 3.99005 15.9871 3.7956C16.1815 3.60116 16.2788 3.36021 16.2788 3.07278C16.2788 2.78534 16.1815 2.54439 15.9871 2.34995C15.7926 2.1555 15.5517 2.05828 15.2643 2.05828C14.9768 2.05828 14.7359 2.1555 14.5414 2.34995C14.347 2.54439 14.2498 2.78534 14.2498 3.07278C14.2498 3.36021 14.347 3.60116 14.5414 3.7956C14.7359 3.99005 14.9768 4.08727 15.2643 4.08727ZM3.09035 11.1887C3.37779 11.1887 3.61874 11.0915 3.81318 10.8971C4.00762 10.7026 4.10485 10.4617 4.10485 10.1742C4.10485 9.88678 4.00762 9.64584 3.81318 9.4514C3.61874 9.25695 3.37779 9.15973 3.09035 9.15973C2.80291 9.15973 2.56197 9.25695 2.36753 9.4514C2.17308 9.64584 2.07586 9.88678 2.07586 10.1742C2.07586 10.4617 2.17308 10.7026 2.36753 10.8971C2.56197 11.0915 2.80291 11.1887 3.09035 11.1887ZM15.2643 18.2902C15.5517 18.2902 15.7926 18.1929 15.9871 17.9985C16.1815 17.8041 16.2788 17.5631 16.2788 17.2757C16.2788 16.9882 16.1815 16.7473 15.9871 16.5528C15.7926 16.3584 15.5517 16.2612 15.2643 16.2612C14.9768 16.2612 14.7359 16.3584 14.5414 16.5528C14.347 16.7473 14.2498 16.9882 14.2498 17.2757C14.2498 17.5631 14.347 17.8041 14.5414 17.9985C14.7359 18.1929 14.9768 18.2902 15.2643 18.2902Z"
                                    fill="currentcolor"
                                />
                            </svg>
                        </div>
                        Share
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Facebook</a></li>
                        <li><a class="dropdown-item" href="#">Linkedin</a></li>
                        <li><a class="dropdown-item" href="#">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="d-flex align-items-center gap-md-3 gap-2 flex-wrap fs-14 pb-4">
                <span>{{ $blog->category->title }}</span>
                <span class="text-teal">·</span>
                <span>{{ $blog->created_at->format('l, F d Y.') }}</span>
                <span class="text-teal">·</span>
                <span class="text-teal">Updated on {{ $blog->updated_at->format('l, F d Y.') }}</span>
            </div>
            <div class="d-flex flex-lg-row flex-column gap-4 pt-3">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($blog->image) }}" class="img-fluid mb-lg-n5"/>
                <div class="d-flex flex-lg-column flex-row gap-3 fs-3 pb-lg-0 pb-3">
                    <a href="#" class="d-block">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="d-block">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="#" class="d-block">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end #hero -->

    <!-- section -->
    <section class="bg-gray-400 py-lg-5 py-4">
        <div class="container-xl pt-xl-5 pt-lg-4">
            @if(count($tableOfContents) > 0)
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="blog-bg-color rounded-1 p-4 mb-4">
                            <div class="p-lg-1">
                                <div class="d-flex align-items-center justify-content-between pb-3">
                                    <div class="fs-18 fw-light text-gray-800">Contents</div>
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_258_2199)">
                                            <path
                                                d="M25.3125 0H5.90625C4.97348 0 4.21875 0.754734 4.21875 1.6875V13.0781H1.6875C0.754734 13.0781 0 13.8329 0 14.7656V24.4688C0 25.8664 1.13358 27 2.53125 27H24.4688C25.8664 27 27 25.8664 27 24.4688V1.6875C27 0.754734 26.2453 0 25.3125 0ZM4.21875 24.4688C4.21875 25.4007 3.46317 26.1562 2.53125 26.1562C1.59933 26.1562 0.84375 25.4007 0.84375 24.4688V14.7656C0.84375 14.2999 1.22175 13.9219 1.6875 13.9219H4.21875V24.4688ZM8.85938 5.48438H15.1875C15.4208 5.48438 15.6094 5.67295 15.6094 5.90625C15.6094 6.13955 15.4208 6.32812 15.1875 6.32812H8.85938C8.62608 6.32812 8.4375 6.13955 8.4375 5.90625C8.4375 5.67295 8.62608 5.48438 8.85938 5.48438ZM22.3594 21.5156H8.85938C8.62608 21.5156 8.4375 21.327 8.4375 21.0938C8.4375 20.8605 8.62608 20.6719 8.85938 20.6719H22.3594C22.5927 20.6719 22.7812 20.8605 22.7812 21.0938C22.7812 21.327 22.5927 21.5156 22.3594 21.5156ZM22.3594 18.9844H8.85938C8.62608 18.9844 8.4375 18.7958 8.4375 18.5625C8.4375 18.3292 8.62608 18.1406 8.85938 18.1406H22.3594C22.5927 18.1406 22.7812 18.3292 22.7812 18.5625C22.7812 18.7958 22.5927 18.9844 22.3594 18.9844ZM22.3594 16.4531H8.85938C8.62608 16.4531 8.4375 16.2645 8.4375 16.0312C8.4375 15.798 8.62608 15.6094 8.85938 15.6094H22.3594C22.5927 15.6094 22.7812 15.798 22.7812 16.0312C22.7812 16.2645 22.5927 16.4531 22.3594 16.4531ZM22.3594 13.9219H8.85938C8.62608 13.9219 8.4375 13.7333 8.4375 13.5C8.4375 13.2667 8.62608 13.0781 8.85938 13.0781H22.3594C22.5927 13.0781 22.7812 13.2667 22.7812 13.5C22.7812 13.7333 22.5927 13.9219 22.3594 13.9219ZM22.3594 11.3906H8.85938C8.62608 11.3906 8.4375 11.202 8.4375 10.9688C8.4375 10.7355 8.62608 10.5469 8.85938 10.5469H22.3594C22.5927 10.5469 22.7812 10.7355 22.7812 10.9688C22.7812 11.202 22.5927 11.3906 22.3594 11.3906ZM22.3594 8.85938H8.85938C8.62608 8.85938 8.4375 8.6708 8.4375 8.4375C8.4375 8.2042 8.62608 8.01562 8.85938 8.01562H22.3594C22.5927 8.01562 22.7812 8.2042 22.7812 8.4375C22.7812 8.6708 22.5927 8.85938 22.3594 8.85938Z"
                                                fill="#2B3A8D"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_258_2199">
                                                <rect width="27" height="27" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <ul class="fs-14 ms-0 ps-3 d-flex flex-column gap-1">
                                    @foreach($tableOfContents as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div id="blog-content">
                {!! $blog->content !!}
            </div>
        </div>
    </section>
    <!-- end #section -->

    <!-- section -->
    <section class="bg-gray-400 py-lg-5 py-4">
        <div class="container-xl">
            <div class="fs-1 text-blue-4 pb-lg-5 pb-4">These Might Also Interest You</div>
            <div class="blog-tab-list row g-4">
                @foreach($relatedPosts as $post)
                    <div class="col-lg-4">
                        <a href="{{ route('blog.show', $post->slug) }}"
                           class="d-flex flex-column gap-4 hover-img-scale">
                            <div class="image overflow-hidden">
                                <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}"
                                     class="w-100 h-375px object-fit-cover mobile-img"
                                     alt="{{ $post->title }}"/>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div class="fs-4 fw-normal text-blue-3">{{ $post->title }}</div>
                                <div
                                    class="fw-light text-primary text-opacity-25">{{ $post->created_at->format('M d, Y') }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
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

