{{-- ───── Intro / About this service ─────
     Mirrors the home About block: image card with overlaid stat,
     prose column on the right.
--}}
<x-section tone="primary">
    <div class="reveal mb-16 text-center">
        <p class="eyebrow mb-3 text-black/60">What we do</p>
        <h2 class="heading-lg">{{ $page['intro']['heading'] }}</h2>
    </div>

    <div class="grid gap-12 md:grid-cols-12 md:items-stretch md:gap-10">
        <figure class="reveal lift relative overflow-hidden rounded-card shadow-2xl md:col-span-7">
            @php $introAlt = $page['intro']['alt'] ?? $page['title']; @endphp
            <img src="{{ $img($page['intro']['image']) }}" alt="{{ $introAlt }}" width="1200" height="900" loading="lazy" decoding="async" class="mask-reveal aspect-4/3 w-full object-cover">
            <figcaption class="absolute inset-x-4 bottom-4 flex flex-col gap-4 rounded-2xl bg-black/70 px-5 py-4 text-white backdrop-blur-md sm:inset-x-6 sm:bottom-6 sm:flex-row sm:items-end sm:justify-between sm:px-6 sm:py-5">
                <div>
                    <span class="block text-4xl leading-none font-bold sm:text-5xl md:text-6xl">
                        <span data-counter="{{ $page['intro']['stat']['value'] }}">{{ $page['intro']['stat']['value'] }}</span><span class="text-primary-500">{{ $page['intro']['stat']['suffix'] }}</span>
                    </span>
                    <span class="mt-2 block text-sm font-medium text-white/80">
                        {!! $page['intro']['stat']['label'] !!}
                    </span>
                </div>
                <div class="flex items-center gap-2 text-xs font-medium text-white/70">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M12 22s8-7.5 8-13a8 8 0 1 0-16 0c0 5.5 8 13 8 13z"/><circle cx="12" cy="9" r="3"/>
                    </svg>
                    Delivered Pan-India
                </div>
            </figcaption>
        </figure>

        <div class="reveal-stagger flex flex-col justify-center gap-6 md:col-span-5">
            <p class="text-2xl leading-snug font-medium text-black/85">
                {{ $page['intro']['body'] }}
            </p>

            <ul class="space-y-3 text-sm text-black/75">
                @foreach (['End-to-end production ownership', 'Brand-safe, compliance-friendly delivery', 'National rollout with one accountable team'] as $point)
                    <li class="flex items-start gap-3">
                        <svg class="mt-1 h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M20 6L9 17l-5-5"/>
                        </svg>
                        {{ $point }}
                    </li>
                @endforeach
            </ul>

            <x-btn :href="route('contact')" size="sm" class="self-start bg-black! text-white! hover:bg-ink-400!">
                Talk to a producer
                <x-icon-arrow class="h-3.5 w-3.5" />
            </x-btn>
        </div>
    </div>
</x-section>
