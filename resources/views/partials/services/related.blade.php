{{-- ───── Related services ─────
     Cross-link the other three service pages so visitors can pivot.
--}}
<x-section tone="ink">
    <div class="reveal mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="eyebrow mb-2 text-ink-300">Explore more</p>
            <h2 class="heading-md">Other things we produce.</h2>
        </div>
        <a href="{{ route('services') }}" class="text-sm font-medium text-ink-400 hover:text-ink-500">All services →</a>
    </div>

    <div class="reveal-stagger grid gap-6 md:grid-cols-3">
        @foreach ($related as $item)
            <a href="{{ route('service', $item['slug']) }}" class="group lift surface-card relative block">
                <div class="aspect-4/3 overflow-hidden">
                    <img
                        src="{{ \App\Providers\AppServiceProvider::imgUrl($item['image']) }}"
                        alt="{{ $item['title'] }}"
                        loading="lazy"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                    >
                </div>
                <div class="flex items-center justify-between gap-3 p-6">
                    <h3 class="text-lg font-semibold">{{ $item['title'] }}</h3>
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-ink-50 text-ink-500 transition-all duration-300 group-hover:translate-x-1 group-hover:bg-primary-500">
                        <x-icon-arrow class="h-3.5 w-3.5" />
                    </span>
                </div>
            </a>
        @endforeach
    </div>
</x-section>
