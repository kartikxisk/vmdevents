@extends('layouts.app')

@section('title', 'Services — Events, Artists, Manpower & Branding | VMD')
@section('description', "VMD Events services: corporate event production, artist management, manpower deployment, fabrication and branding — delivered across India by one accountable team.")

@php
    $img = fn ($name) => \App\Providers\AppServiceProvider::imgUrl($name);
@endphp

@push('preload')
<link rel="preload" as="image" href="{{ $img($hero['image']) }}" fetchpriority="high">
@endpush

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => route('home')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => route('services')],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    {{-- ───── Hero ───── --}}
    <section class="relative flex min-h-[60vh] items-center overflow-hidden bg-black py-24 text-white md:min-h-128 md:py-32">
        <div data-hero-img class="hero-img absolute inset-0">
            <img src="{{ $img($hero['image']) }}" alt="VMD Events team producing brand promotions and corporate events across India" width="1920" height="1280" fetchpriority="high" decoding="async" class="h-full w-full object-cover opacity-60">
            <div class="absolute inset-0 bg-linear-to-b from-black/70 via-black/40 to-black"></div>
        </div>

        <div class="container-page relative z-10 pt-16 md:pt-24">
            <p class="hero-fade eyebrow mb-4 text-primary-500">{{ $hero['eyebrow'] }}</p>

            <h1 class="hero-fade heading-xl max-w-3xl" data-split-words>
                <span class="block">Everything we</span>
                <span class="block"><span class="text-primary-500">produce</span>.</span>
            </h1>

            <p class="hero-fade mt-6 max-w-2xl text-lg text-white/80" style="animation-delay: 0.2s">
                {{ $hero['subtitle'] }}
            </p>
        </div>

        <nav aria-label="Breadcrumb" class="absolute right-0 bottom-8 left-0 z-10">
            <ol class="container-page flex items-center gap-2 text-xs text-white/60">
                <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                <li aria-hidden="true">/</li>
                <li class="text-white/90">Services</li>
            </ol>
        </nav>
    </section>

    {{-- ───── Intro ───── --}}
    <x-section tone="primary">
        <div class="reveal mb-12 max-w-3xl text-center mx-auto">
            <p class="eyebrow mb-3 text-black/60">{{ $intro['eyebrow'] }}</p>
            <h2 class="heading-lg">{{ $intro['heading'] }}</h2>
            <p class="mt-6 text-lg text-black/75">{{ $intro['body'] }}</p>
        </div>

        <ul class="reveal-stagger mx-auto grid max-w-4xl gap-3 text-sm text-black/75 sm:grid-cols-3">
            @foreach ($intro['points'] as $point)
                <li class="flex items-start gap-3 rounded-2xl bg-white/40 p-5 backdrop-blur-sm">
                    <svg class="mt-1 h-4 w-4 shrink-0 text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M20 6L9 17l-5-5"/>
                    </svg>
                    {{ $point }}
                </li>
            @endforeach
        </ul>
    </x-section>

    {{-- ───── Service cards (reuses the work-page categories grid) ───── --}}
    @include('partials.work.categories', ['categories' => $categories])

    {{-- ───── CTA ───── --}}
    <x-section pad="none" class="pb-16 md:pb-24">
        <div class="reveal relative overflow-hidden rounded-cta bg-black px-6 py-16 text-center text-white md:py-28">
            <div class="float-blob pointer-events-none absolute top-1/2 left-1/2 h-80 w-112 rounded-full bg-primary-500/40 blur-3xl md:h-120 md:w-170"></div>

            <div class="relative">
                <p class="eyebrow mb-3 text-primary-500">{{ $cta['eyebrow'] }}</p>
                <h2 class="heading-md">{!! $cta['title'] !!}</h2>
                <p class="mx-auto mt-5 max-w-2xl text-base text-white/70">{{ $cta['body'] }}</p>
                <div class="mt-10">
                    <x-btn :href="route('contact')">
                        {{ $cta['button'] }}
                        <x-icon-arrow />
                    </x-btn>
                </div>
            </div>
        </div>
    </x-section>
@endsection
