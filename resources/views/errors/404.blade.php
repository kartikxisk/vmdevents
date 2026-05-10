@extends('layouts.app')

@section('title', "Page not found — VMD Events")
@section('description', "The page you're looking for has wandered off-stage. Browse our work, explore services, or get in touch.")

@push('preload')
<style>
    .error-glow {
        position: absolute;
        top: -8rem;
        right: -10rem;
        width: 36rem;
        height: 36rem;
        border-radius: 9999px;
        background: radial-gradient(closest-side, rgb(255 160 39 / 0.35), transparent 70%);
        filter: blur(60px);
        z-index: -1;
        pointer-events: none;
    }
    .error-numeral {
        font-size: clamp(10rem, 22vw, 22rem);
        font-weight: 800;
        line-height: 0.9;
        letter-spacing: -0.05em;
        text-align: center;
        background: linear-gradient(135deg, #ffa027 0%, #f08e10 55%, #080808 100%);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        animation: hero-fade 0.9s var(--ease-soft) both;
    }
</style>
@endpush

@php
    $popular = [
        ['label' => 'Our Work',          'href' => route('work'),    'desc' => 'Recent activations & campaigns'],
        ['label' => 'Corporate Events',  'href' => route('service', 'corporate-events'),    'desc' => 'Conferences, launches, off-sites'],
        ['label' => 'Artist Management', 'href' => route('service', 'artist-management'),   'desc' => 'Bollywood & indie talent'],
        ['label' => 'Get in touch',      'href' => route('contact'), 'desc' => "Tell us about your event"],
    ];
@endphp

<section class="relative isolate overflow-hidden">
    <div aria-hidden="true" class="error-glow"></div>

    <div class="container-content section-pad-lg pt-32 md:pt-40">
        <div class="grid items-center gap-12 md:grid-cols-12">
            {{-- Left: copy --}}
            <div class="md:col-span-7">
                <p class="eyebrow text-primary-600">Error 404</p>

                <h1 class="heading-xl mt-4 text-ink-500" data-split-words>
                    This page took a wrong turn.
                </h1>

                <p class="mt-6 max-w-xl text-lg text-ink-300 md:text-xl">
                    The link you followed is broken, or the page has been moved.
                    No drama — let's get you back to something useful.
                </p>

                <div class="mt-10 flex flex-wrap items-center gap-4">
                    <x-btn :href="route('home')">
                        <span>Back to home</span>
                        <x-icon-arrow class="h-4 w-4" />
                    </x-btn>

                    <a href="{{ route('contact') }}"
                       class="inline-flex items-center gap-2 text-base font-semibold text-ink-500 underline-offset-4 hover:text-primary-600 hover:underline">
                        Or tell us what you needed
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- Right: massive 404 mark --}}
            <div class="relative md:col-span-5">
                <div class="error-numeral select-none" aria-hidden="true">404</div>
                <p class="mt-4 text-center text-sm uppercase tracking-[0.3em] text-ink-200">
                    Stage left, exit only
                </p>
            </div>
        </div>

        {{-- Popular destinations --}}
        <div class="mt-20 md:mt-28">
            <h2 class="text-sm font-semibold uppercase tracking-[0.3em] text-ink-300">
                Popular destinations
            </h2>

            <ul class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($popular as $link)
                    <li>
                        <a href="{{ $link['href'] }}"
                           class="group lift block h-full rounded-card bg-white p-6 shadow-soft">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="text-base font-semibold text-ink-500 group-hover:text-primary-600">
                                        {{ $link['label'] }}
                                    </p>
                                    <p class="mt-1 text-sm leading-relaxed text-ink-300">
                                        {{ $link['desc'] }}
                                    </p>
                                </div>
                                <span aria-hidden="true"
                                      class="mt-1 text-ink-200 transition-transform duration-300 group-hover:translate-x-1 group-hover:text-primary-500">
                                    &rarr;
                                </span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

