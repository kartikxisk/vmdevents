<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $defaultTitle       = 'Brand Promotions, Events & Artist Management India — VMD Events';
        $defaultDescription = 'VMD Events is a Delhi-based agency producing brand promotions, corporate events, artist management and on-ground manpower across India.';
        $canonical          = url()->to(request()->path() === '/' ? '/' : request()->path());
        $ogImage            = trim($__env->yieldContent('og_image')) ?: asset('images/figma/imgRectangle80.png');
    @endphp

    <title>@yield('title', $defaultTitle)</title>
    <meta name="description" content="@yield('description', $defaultDescription)">
    <link rel="canonical" href="{{ $canonical }}">
    <meta name="robots" content="index, follow, max-image-preview:large">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="VMD Events">
    <meta property="og:title" content="@yield('title', $defaultTitle)">
    <meta property="og:description" content="@yield('description', $defaultDescription)">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_IN">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', $defaultTitle)">
    <meta name="twitter:description" content="@yield('description', $defaultDescription)">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @stack('preload')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('partials.schema-organization')
    @stack('schema')
</head>
<body class="relative overflow-x-clip antialiased">
    {{-- Thin warm gradient bar that fills as the user scrolls down the page. --}}
    <div aria-hidden="true" class="scroll-progress"></div>

    {{-- Ambient warm-orange glow that bleeds in across every page. --}}
    <div aria-hidden="true" class="page-glow"></div>

    @include('partials.nav')

    <main class="relative">
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.enquiry-modal')

    @stack('scripts')
</body>
</html>
