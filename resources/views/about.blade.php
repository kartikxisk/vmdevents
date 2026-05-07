@extends('layouts.app')

@section('title', 'About VMD Events — Brand Experience Agency in New Delhi')
@section('description', 'With 15+ years of expertise, VMD Events transforms ideas into immersive brand experiences. Delhi-headquartered team serving clients pan-India.')

@push('preload')
<link rel="preload" as="image" href="{{ \App\Providers\AppServiceProvider::imgUrl('imgRectangle80.png') }}" fetchpriority="high">
@endpush

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => route('home')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => route('about')],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@php
    $img = fn ($name) => \App\Providers\AppServiceProvider::imgUrl($name);

    $stats = [
        ['value' => '15+',       'label' => 'Years of Industry Experience'],
        ['value' => '50+',       'label' => 'Top Brands Partnered With'],
        ['value' => 'New Delhi', 'label' => 'Headquartered, serving clients Pan-India'],
        ['value' => '40+',       'label' => 'Creative & Operations Experts on Our Team'],
        ['value' => '250+',      'label' => 'Successful Events & Activations Executed'],
        ['value' => '∞',         'label' => 'Passion for Crafting Unforgettable Experiences'],
    ];

    $services = [
        'Brand Promotions & Activations (B2B & B2C)',
        'Corporate Events',
        'Artist Management',
        'Manpower Management',
    ];

    $gallery = [
        ['file' => 'imgDsc06758.png',  'span' => 'row-span-2', 'alt' => 'VMD Events team on a brand activation set'],
        ['file' => 'imgDsc9637.png',   'span' => '',           'alt' => 'Stage build by VMD fabrication studio'],
        ['file' => 'imgDsc068331.png', 'span' => 'row-span-2', 'alt' => 'Live performance produced by VMD Events'],
        ['file' => 'imgDsc09573.png',  'span' => '',           'alt' => 'Corporate event ceremony managed by VMD'],
        ['file' => 'imgDsc196.png',    'span' => 'row-span-2', 'alt' => 'Brand showcase stage with VMD lighting design'],
        ['file' => 'imgDsc3757.png',   'span' => '',           'alt' => 'VMD bartender at a premium spirits activation'],
        ['file' => 'imgDsc068161.png', 'span' => '',           'alt' => 'On-ground VMD crew during an event setup'],
        ['file' => 'imgDsc9667.png',   'span' => 'row-span-2', 'alt' => 'Hostess team deployed by VMD Manpower Management'],
        ['file' => 'imgDsc067871.png', 'span' => '',           'alt' => 'VMD-fabricated booth at a brand exhibition'],
        ['file' => 'imgDsc68162.png',  'span' => '',           'alt' => 'VMD-produced product launch in India'],
        ['file' => 'imgDsc3842.png',   'span' => '',           'alt' => 'Award night ceremony stage produced by VMD'],
    ];
@endphp

@section('content')
    {{-- ───── Hero ───── --}}
    <section class="relative flex min-h-[70vh] items-end overflow-hidden bg-black pb-16 pt-32 text-white md:min-h-[90vh] md:pb-24 md:pt-44">
        <div class="hero-img absolute inset-0">
            <img src="{{ $img('imgRectangle80.png') }}" alt="VMD Events brand experience team producing a corporate event in New Delhi" width="1920" height="1280" fetchpriority="high" decoding="async" class="h-full w-full object-cover opacity-60">
            <div class="absolute inset-0 bg-linear-to-b from-black/60 via-black/30 to-black"></div>
        </div>

        <div class="container-page relative z-10">
            <h1 class="hero-fade heading-xl">
                <span class="block">We Make</span>
                <span class="block">Magic Happen</span>
            </h1>
        </div>
    </section>

    {{-- ───── Intro + Stats ───── --}}
    <x-section pad="lg">
        <p class="reveal mx-auto max-w-3xl text-center text-lg leading-snug text-ink-400 sm:text-2xl md:text-[28px]">
            With 15+ years of expertise, <span class="font-semibold text-ink-500">VMD</span> transforms ideas into immersive brand experiences through collaboration, strategy, and flawless execution.
        </p>

        <div class="reveal-stagger mt-12 grid gap-4 sm:grid-cols-2 md:mt-20 md:grid-cols-3 md:gap-6">
            @foreach ($stats as $stat)
                <div class="lift surface-card flex min-h-44 flex-col justify-end p-6 md:h-56 md:p-8">
                    <div class="text-5xl font-medium leading-none text-black sm:text-6xl md:text-[68px]">{{ $stat['value'] }}</div>
                    <div class="mt-3 text-sm text-ink-400 md:mt-4 md:text-lg">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- ───── What We Do ───── --}}
    <section class="rounded-t-[2rem] bg-black text-white md:rounded-t-[3rem]">
        <div class="container-page py-16 md:py-32">
            <div class="grid gap-10 md:grid-cols-2 md:gap-16">
                <div class="reveal">
                    <h2 class="heading-lg">What We Do</h2>
                    <p class="mt-6 max-w-md text-base leading-relaxed text-white/80 md:mt-10 md:text-lg">
                        At VMD, we deliver complete event and marketing solutions — from brand activations and corporate events to artist management, manpower, and custom fabrication — handled with creativity and precision.
                    </p>
                </div>

                <ul class="reveal-stagger flex flex-col self-center divide-y divide-white/10">
                    @foreach ($services as $service)
                        <li class="py-4 text-2xl font-semibold tracking-tight md:py-6 md:text-4xl">{{ $service }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- ───── Gallery mosaic ───── --}}
        <div class="container-page pb-16 md:pb-24">
            <div class="reveal-stagger grid auto-rows-[140px] grid-cols-2 gap-3 sm:auto-rows-[180px] sm:gap-4 md:grid-cols-4 md:gap-5">
                @foreach ($gallery as $shot)
                    <figure class="lift {{ $shot['span'] }} group relative overflow-hidden rounded-2xl md:rounded-card">
                        <img src="{{ $img($shot['file']) }}" alt="{{ $shot['alt'] }}" loading="lazy" decoding="async"
                             class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </figure>
                @endforeach
            </div>
        </div>

        {{-- ───── Let's Connect CTA ───── --}}
        <div class="container-page relative pb-20 pt-8 text-center md:pb-40 md:pt-12">
            <div class="float-blob pointer-events-none absolute left-1/2 top-1/2 h-72 w-[24rem] rounded-full bg-primary-500/30 blur-3xl md:h-96 md:w-[40rem]"></div>

            <div class="relative">
                <h2 class="heading-xl">Let's Connect</h2>
                <div class="mt-8 md:mt-10">
                    <x-btn :href="route('contact')">Contact us</x-btn>
                </div>
            </div>
        </div>
    </section>
@endsection
