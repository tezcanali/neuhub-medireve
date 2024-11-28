@props(['page'])
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

