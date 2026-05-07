{{-- ───── Service offerings grid ─────
     A clean three-up grid of icon cards. Hover lifts to match the rest
     of the site's card treatment.
--}}
<x-section id="offerings">
    <div class="reveal mb-12 max-w-2xl md:mb-16">
        <p class="eyebrow mb-3 text-ink-300">What's included</p>
        <h2 class="heading-lg">{{ $page['title'] }} services</h2>
        <p class="mt-4 text-base text-ink-300 md:text-lg">{{ $page['tagline'] }}</p>
    </div>

    <div class="reveal-stagger grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($page['offerings'] as $offering)
            <article class="surface-card lift group relative p-8">
                <span class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-500/10 text-primary-600 transition-colors duration-300 group-hover:bg-primary-500 group-hover:text-ink-500">
                    <x-service-icon :name="$offering['icon']" class="h-6 w-6" />
                </span>
                <h3 class="mb-3 text-xl font-semibold">{{ $offering['title'] }}</h3>
                <p class="text-sm leading-relaxed text-ink-300">{{ $offering['desc'] }}</p>
            </article>
        @endforeach
    </div>
</x-section>
