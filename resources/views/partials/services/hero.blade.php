{{-- ───── Service hero ─────
     Mirrors the home-page hero treatment: full-bleed image, dark scrim,
     warm gradient at the bottom, headline fade-in.
--}}
<section class="relative flex min-h-[70vh] items-center overflow-hidden bg-black py-24 text-white md:min-h-144 md:py-32">
    <div data-hero-img class="hero-img absolute inset-0">
        <img src="{{ $img($page['hero']) }}" alt="{{ $page['title'] }} services delivered by VMD Events across India" width="1920" height="1280" fetchpriority="high" decoding="async" class="h-full w-full object-cover opacity-70">
        <div class="absolute inset-0 bg-linear-to-b from-black/70 via-black/40 to-black"></div>
    </div>

    <div class="container-page relative z-10 pt-16 md:pt-24">
        <p class="hero-fade eyebrow mb-4 text-primary-500">{{ $page['eyebrow'] }}</p>

        <h1 class="hero-fade heading-xl max-w-3xl" data-split-words>
            <span class="block">{{ $page['title'] }}</span>
            <span class="block text-primary-500">in India.</span>
        </h1>

        <p class="hero-fade mt-6 max-w-2xl text-lg text-white/80" style="animation-delay: 0.2s">
            {{ $page['lede'] }}
        </p>

        <div class="hero-fade mt-10 flex flex-wrap items-center gap-4" style="animation-delay: 0.4s">
            <x-btn :href="route('contact')" class="group">
                Get In Touch
                <x-icon-arrow class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" />
            </x-btn>
            <a href="#offerings" class="text-sm font-medium text-white/70 underline-offset-4 hover:text-white hover:underline">
                See what's included ↓
            </a>
        </div>
    </div>

    <nav aria-label="Breadcrumb" class="absolute bottom-8 left-0 right-0 z-10">
        <ol class="container-page flex items-center gap-2 text-xs text-white/60">
            <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
            <li aria-hidden="true">/</li>
            <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
            <li aria-hidden="true">/</li>
            <li class="text-white/90">{{ $page['title'] }}</li>
        </ol>
    </nav>
</section>
