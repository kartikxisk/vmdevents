{{-- ───── Our Work — hero ─────
     Mirrors the home/services hero treatment for visual consistency:
     full-bleed image, dark scrim, eyebrow + headline + lede, breadcrumb.
--}}
@php $img = fn ($name) => \App\Providers\AppServiceProvider::imgUrl($name); @endphp

<section class="relative flex min-h-[70vh] items-center overflow-hidden bg-black py-24 text-white md:min-h-144 md:py-32">
    <div data-hero-img class="hero-img absolute inset-0">
        <img src="{{ $img($hero['image']) }}" alt="Selected brand activations and corporate events produced by VMD Events across India" width="1920" height="1280" fetchpriority="high" decoding="async" class="h-full w-full object-cover opacity-60">
        <div class="absolute inset-0 bg-linear-to-b from-black/70 via-black/40 to-black"></div>
    </div>

    <div class="container-page relative z-10 pt-16 md:pt-24">
        <p class="hero-fade eyebrow mb-4 text-primary-500">{{ $hero['eyebrow'] }}</p>

        <h1 class="hero-fade heading-xl max-w-3xl" data-split-words>
            <span class="block">Crafting</span>
            <span class="block">moments that <span class="text-primary-500">last</span>.</span>
        </h1>

        <p class="hero-fade mt-6 max-w-xl text-lg text-white/80" style="animation-delay: 0.2s">
            {{ $hero['subtitle'] }}
        </p>

        <div class="hero-fade mt-10 flex flex-wrap items-center gap-5" style="animation-delay: 0.4s">
            <x-btn :href="route('contact')" class="group">
                Start a Project
                <x-icon-arrow class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" />
            </x-btn>
            <a href="#categories" class="text-sm font-medium text-white/70 underline-offset-4 hover:text-white hover:underline">
                Browse by service ↓
            </a>
        </div>
    </div>

    <nav aria-label="Breadcrumb" class="absolute right-0 bottom-8 left-0 z-10">
        <ol class="container-page flex items-center gap-2 text-xs text-white/60">
            <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
            <li aria-hidden="true">/</li>
            <li class="text-white/90">Our Work</li>
        </ol>
    </nav>
</section>
