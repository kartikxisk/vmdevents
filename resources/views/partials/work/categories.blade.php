{{-- ───── Our Work — service categories ─────
     Replaces the old text-list block. Four visual cards link out to the
     service detail pages — same polish as the home services grid.
--}}
@php $img = fn ($name) => \App\Providers\AppServiceProvider::imgUrl($name); @endphp

<x-section id="categories">
    <div class="reveal mb-12 max-w-2xl md:mb-16">
        <p class="eyebrow mb-3 text-ink-300">Browse by service</p>
        <h2 class="heading-lg">What we produce.</h2>
        <p class="mt-4 text-base text-ink-300 md:text-lg">
            Every campaign on this page falls into one of four practices. Open any to see the full menu of capabilities and book a brief.
        </p>
    </div>

    <div class="reveal-stagger grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($categories as $cat)
            <a href="{{ route('service', $cat['slug']) }}" class="group lift surface-card relative block">
                <div class="aspect-4/5 overflow-hidden">
                    <img
                        src="{{ $img($cat['image']) }}"
                        alt="{{ $cat['title'] }}"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >
                    <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/10 to-transparent"></div>
                </div>

                <div class="absolute inset-x-0 bottom-0 p-6 text-white">
                    <p class="eyebrow mb-2 text-primary-500">{{ count($cat['items']) }} capabilities</p>
                    <div class="flex items-center justify-between gap-3">
                        <h3 class="text-xl font-semibold">{{ $cat['title'] }}</h3>
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-white/10 text-white transition-all duration-300 group-hover:translate-x-1 group-hover:bg-primary-500 group-hover:text-ink-500">
                            <x-icon-arrow class="h-3.5 w-3.5" />
                        </span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-section>
