@extends('layouts.app')

@section('title', 'Brand Promotions & Event Management India | VMD Events')
@section('description', 'VMD Events is a Delhi-based brand experience agency. We produce corporate events, manage artists, and deploy on-ground manpower for brands across India.')

@push('preload')
<link rel="preload" as="image" href="{{ \App\Providers\AppServiceProvider::imgUrl('imgRectangle80.png') }}" fetchpriority="high">
@endpush

@php
    $img = fn ($name) => \App\Providers\AppServiceProvider::imgUrl($name);

    $services = [
        [
            'title'   => 'Corporate Events',
            'slug'    => 'corporate-events',
            'image'   => 'imgBusinesswomanReceivingAwardFromBusinessmanIn20250403212451Utc.png',
            'tagline' => 'Dealer meets, launches, conferences, and award nights produced with boardroom precision.',
            'items'   => ['Dealer meet', 'Product Launch', 'Conferences', 'Award nights'],
            'count'   => 10,
        ],
        [
            'title'   => 'Artist Management',
            'slug'    => 'artist-management',
            'image'   => 'imgCrowdPeopleCelebratingPartyingWithTheirHands1.png',
            'tagline' => "India's best singers, bands, comedians, and dance troupes — curated and show-managed.",
            'items'   => ['Singers & Bands', 'Comedians', 'Musicians & DJs', 'Dance Troupes'],
            'count'   => 11,
        ],
        [
            'title'   => 'Manpower Management',
            'slug'    => 'manpower-management',
            'image'   => 'imgRectangle84.png',
            'tagline' => 'Bartenders, mixologists, hostesses, and promoters deployed across India.',
            'items'   => ['Bartenders', 'Mixologists', 'Hostesses', 'Promoters'],
            'count'   => 9,
        ],
        [
            'title'   => 'Fabrication & Branding',
            'slug'    => 'fabrication-branding',
            'image'   => 'imgRectangle82.png',
            'tagline' => 'Booths, stages, signage, and brand environments — designed and installed in-house.',
            'items'   => ['Booth Builds', 'Stage Fabrication', 'POSM & Signage', 'LED Walls'],
            'count'   => 7,
        ],
    ];

    $faqs = [
        ['q' => 'What does VMD Events do?', 'a' => 'VMD Events is a Delhi-based brand experience agency. We produce corporate events, manage artists, deploy on-ground manpower (bartenders, hostesses, promoters), and fabricate booths, stages and signage — for brands across India.'],
        ['q' => 'Where is VMD Events based and which cities do you serve?', 'a' => 'Our head office is in Palam Colony, New Delhi. We have produced campaigns in 20+ Indian cities and routinely mobilise crews and artists across major metros and tier-2 towns.'],
        ['q' => 'How quickly can VMD mobilise manpower for an activation?', 'a' => 'For metros, we can deploy briefed bartenders, hostesses and promoters within the same week. Larger multi-city rollouts are typically planned 2–3 weeks in advance.'],
        ['q' => 'What is the typical lead time for a corporate event or product launch?', 'a' => 'A standard mid-scale corporate event needs 4–6 weeks from brief to delivery. Conferences and dealer meets at 1,000+ headcount are best planned 8–12 weeks out.'],
        ['q' => 'Which brands has VMD worked with?', 'a' => "We've delivered campaigns for Diageo, IDFC First Bank, IndusInd Bank, HDFC Bank, Beam Global, Barbeque Nation, Indian Oil and more — directly and through agency partners."],
        ['q' => 'How do I share a brief with VMD?', 'a' => 'Use the contact form, email Dipender@vmdevents.com, or call +91 95409 08009. Share your audience, date, scale and city — we revert with a creative direction within a week.'],
    ];

    $gallery = [
        ['image' => 'imgRectangle96.png', 'title' => 'DIY Sessions',     'alt' => 'VMD-produced DIY mixology session for a premium spirits brand'],
        ['image' => 'imgRectangle97.png', 'title' => 'Luxury Brands',    'alt' => 'Luxury brand activation produced by VMD Events in India'],
        ['image' => 'imgRectangle98.png', 'title' => 'Activation',       'alt' => 'On-ground brand activation managed by VMD Events'],
        ['image' => 'imgRectangle99.png', 'title' => 'Brand POSM',       'alt' => 'Custom brand POSM and merchandise fabricated by VMD Events'],
    ];
@endphp

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(fn ($f) => [
        '@type'          => 'Question',
        'name'           => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ], $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    {{-- ───── Hero ───── --}}
    <section class="relative flex min-h-[80vh] items-center overflow-hidden bg-black py-24 text-white md:min-h-180 md:py-32">
        <div data-hero-img class="hero-img absolute inset-0">
            <img src="{{ $img('imgRectangle80.png') }}" alt="Brand activation produced by VMD Events for a corporate client in India" width="1920" height="1280" fetchpriority="high" decoding="async" class="h-full w-full object-cover opacity-70">
            <div class="absolute inset-0 bg-linear-to-b from-black/60 via-black/30 to-black"></div>
        </div>

        <div class="container-page relative z-10 pt-16 md:pt-24">
            <h1 class="hero-fade heading-xl max-w-3xl" data-split-words>
                <span class="block">Brand promotions &</span>
                <span class="block">events <span class="text-primary-500">across India.</span></span>
            </h1>
            <p class="hero-fade mt-6 max-w-xl text-lg text-white/80" style="animation-delay: 0.25s">
                Brand promotions, artists, and on-ground execution — produced end-to-end across India.
            </p>
            <div class="hero-fade mt-10" style="animation-delay: 0.45s">
                <x-btn :href="route('contact')" class="group">
                    Get In Touch
                    <x-icon-arrow class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" />
                </x-btn>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/50" aria-hidden="true">
            <div class="flex h-10 w-6 justify-center rounded-full border border-white/30 pt-2">
                <span class="block h-2 w-1 animate-bounce rounded-full bg-white/70"></span>
            </div>
        </div>
    </section>

    {{-- ───── Logo Marquees ───── --}}
    @include('partials.clients', ['showCta' => true])

    {{-- ───── About ───── --}}
    <x-section id="about" tone="primary">
        <div class="reveal mb-16 text-center">
            <p class="eyebrow mb-3 text-black/60">Who we are</p>
            <h2 class="heading-lg">About Us</h2>
        </div>

        <div class="grid gap-12 md:grid-cols-12 md:items-stretch md:gap-10">
            {{-- Image card with stat overlay --}}
            <figure class="reveal lift relative overflow-hidden rounded-card shadow-2xl md:col-span-7">
                <img src="{{ $img('imgBarmanWithShaker1.png') }}" alt="VMD Events bartenders staffing a brand activation in India" width="1200" height="900" loading="lazy" decoding="async" class="aspect-4/3 w-full object-cover">
                <figcaption class="absolute inset-x-4 bottom-4 flex flex-col gap-4 rounded-2xl bg-black/70 px-5 py-4 text-white backdrop-blur-md sm:inset-x-6 sm:bottom-6 sm:flex-row sm:items-end sm:justify-between sm:px-6 sm:py-5">
                    <div>
                        <span class="block text-4xl font-bold leading-none sm:text-5xl md:text-6xl"><span data-counter="15">15</span><span class="text-primary-500">+</span></span>
                        <span class="mt-2 block text-sm font-medium text-white/80">years of professional<br>industry experience</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs font-medium text-white/70">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                            <path d="M12 22s8-7.5 8-13a8 8 0 1 0-16 0c0 5.5 8 13 8 13z"/><circle cx="12" cy="9" r="3"/>
                        </svg>
                        Delhi · 2014
                    </div>
                </figcaption>
            </figure>

            {{-- Right column --}}
            <div class="reveal-stagger flex flex-col justify-center gap-8 md:col-span-5">
                <p class="text-2xl leading-snug font-medium text-black/85">
                    We design promotions, produce events, and place the right people on the ground — so brands can show up unforgettably.
                </p>

                <ul class="space-y-3 text-sm text-black/75">
                    @foreach (['200+ campaigns delivered across India', 'Trusted by Diageo, IDFC, IndusInd, HDFC', 'In-house artist & manpower roster'] as $point)
                        <li class="flex items-start gap-3">
                            <svg class="mt-1 h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6L9 17l-5-5"/>
                            </svg>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>

                <x-btn :href="route('contact')" size="sm" class="self-start bg-black! text-white! hover:bg-ink-400!">
                    Work with us
                    <x-icon-arrow class="h-3.5 w-3.5" />
                </x-btn>
            </div>
        </div>
    </x-section>

    {{-- ───── Services ───── --}}
    <x-section id="services">
        <div class="reveal mb-12 flex flex-col gap-4 md:mb-16 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                <p class="eyebrow mb-3 text-ink-300">What we do</p>
                <h2 class="heading-lg">Services</h2>
                <p class="mt-4 text-base text-ink-300 md:text-lg">
                    Four practices, one accountable team — from creative concept to last-mile execution across India.
                </p>
            </div>
            <a href="{{ route('work') }}" class="text-sm font-medium text-ink-500 underline-offset-4 hover:text-primary-600 hover:underline">
                See the work →
            </a>
        </div>

        <div class="reveal-stagger grid gap-6 md:grid-cols-2 md:gap-8">
            @foreach ($services as $svc)
                <a href="{{ route('service', $svc['slug']) }}" class="group tilt relative flex flex-col overflow-hidden rounded-card bg-black text-white shadow-soft">
                    {{-- Image with gradient + overlaid title --}}
                    <div class="relative overflow-hidden">
                        <div class="aspect-16/10 overflow-hidden md:aspect-3/2">
                            <img
                                src="{{ $img($svc['image']) }}"
                                alt="{{ $svc['title'] }}"
                                loading="lazy"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                            >
                        </div>
                        <div class="absolute inset-0 bg-linear-to-t from-black via-black/50 to-transparent"></div>

                        <div class="absolute right-0 bottom-0 left-0 flex items-end justify-between gap-4 p-6 md:p-8">
                            <div>
                                <p class="eyebrow mb-2 text-primary-500">{{ $svc['count'] }} capabilities</p>
                                <h3 class="text-2xl font-semibold leading-tight md:text-3xl">{{ $svc['title'] }}</h3>
                            </div>
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white/10 text-white backdrop-blur-md transition-all duration-300 group-hover:translate-x-1 group-hover:bg-primary-500 group-hover:text-ink-500">
                                <x-icon-arrow class="h-4 w-4" />
                            </span>
                        </div>
                    </div>

                    {{-- Content panel --}}
                    <div class="flex flex-1 flex-col gap-5 bg-ink-500 p-6 md:p-8">
                        <p class="text-base leading-relaxed text-white/75">{{ $svc['tagline'] }}</p>

                        <ul class="flex flex-wrap gap-2">
                            @foreach ($svc['items'] as $item)
                                <li class="rounded-full border border-white/10 bg-white/5 px-3 py-1.5 text-xs font-medium text-white/85">
                                    {{ $item }}
                                </li>
                            @endforeach
                            @if ($svc['count'] > count($svc['items']))
                                <li class="rounded-full bg-primary-500/15 px-3 py-1.5 text-xs font-medium text-primary-500">
                                    +{{ $svc['count'] - count($svc['items']) }} more
                                </li>
                            @endif
                        </ul>

                        <span class="mt-auto inline-flex items-center gap-2 text-sm font-medium text-white/70 transition-colors duration-300 group-hover:text-primary-500">
                            Explore service
                            <x-icon-arrow class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-1" />
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </x-section>

    {{-- ───── FAQ ───── --}}
    <x-section>
        <div class="grid gap-12 md:grid-cols-[1fr_2fr] md:gap-16">
            <div class="reveal">
                <h2 class="heading-md">Frequently<br>Asked Questions</h2>
                <p class="mt-4 text-sm text-ink-300">Have another question? Please contact our team!</p>
                <x-btn :href="route('contact')" size="sm" class="mt-6">Contact Our Team</x-btn>
            </div>

            <div class="reveal-stagger space-y-3">
                @foreach ($faqs as $i => $faq)
                    <details class="faq-item group rounded-3xl bg-black px-5 py-4 text-white transition-colors hover:bg-ink-400 md:rounded-full md:px-7 md:py-5" @if($i === 0) open @endif>
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4">
                            <span class="text-sm font-medium md:text-base">{{ $faq['q'] }}</span>
                            <span class="faq-icon flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-white/10">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg>
                            </span>
                        </summary>
                        <div class="faq-body">
                            <p class="pt-4 text-sm leading-relaxed text-white/70">{{ $faq['a'] }}</p>
                        </div>
                    </details>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- ───── Our Work ───── --}}
    <x-section id="work">
        <h2 class="reveal heading-lg mb-3 text-center">Our Work</h2>
        <p class="reveal mx-auto mb-12 max-w-2xl text-center text-sm text-ink-300">
            A selection of campaigns, activations, and events we've produced for our partners.
        </p>

        <div class="reveal-stagger grid grid-cols-2 gap-4 md:grid-cols-4 md:gap-6">
            @foreach ($gallery as $shot)
                <a href="{{ route('work') }}" class="group lift relative block overflow-hidden rounded-card bg-black">
                    <img src="{{ $img($shot['image']) }}" alt="{{ $shot['alt'] }}" loading="lazy" decoding="async" class="aspect-3/4 w-full object-cover grayscale transition-all duration-700 group-hover:scale-105 group-hover:grayscale-0">
                    <div class="absolute inset-x-0 bottom-0 translate-y-full bg-linear-to-t from-black/80 to-transparent p-5 text-white opacity-0 transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100">
                        <div class="text-sm font-semibold">{{ $shot['title'] }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </x-section>

    {{-- ───── CTA ───── --}}
    <x-section id="contact" pad="none" class="pb-16 md:pb-24">
        <div class="reveal relative overflow-hidden rounded-cta bg-black px-6 py-16 text-center text-white md:py-28">
            <div class="float-blob pointer-events-none absolute left-1/2 top-1/2 h-80 w-[28rem] rounded-full bg-primary-500/40 blur-3xl md:h-120 md:w-170"></div>

            <div class="relative">
                <p class="eyebrow mb-3 text-primary-500">Got a brief?</p>
                <h2 class="heading-md">Let's build the next<br>brand moment together.</h2>
                <p class="mx-auto mt-5 max-w-2xl text-base text-white/70">
                    Tell us the brand, the audience and the date — we'll come back with a creative direction within a week.
                </p>
                <div class="mt-10">
                    <x-btn :href="route('contact')">
                        Start a Project
                        <x-icon-arrow />
                    </x-btn>
                </div>
            </div>
        </div>
    </x-section>
@endsection
