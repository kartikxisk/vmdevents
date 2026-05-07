{{-- ───── Service gallery — 5-up mosaic on a dark gradient ─────
     Two rows: row 1 is an asymmetric 5/7 split, row 2 is a 4/4/4 split.
     Sits on a black-to-warm gradient that flows directly into the
     "Let's Talk" CTA below — together they form the page's closing block.
--}}
<section class="relative bg-black pt-24 pb-12 text-white md:pt-32 md:pb-16">
    {{-- Soft warm orange glow that radiates from the bottom of the section. --}}
    <div aria-hidden="true" class="pointer-events-none absolute right-0 -bottom-40 left-0 z-0 mx-auto h-96 w-full max-w-4xl rounded-full bg-primary-500/30 blur-3xl"></div>

    <div class="container-page relative z-10">
        <div class="reveal mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between md:mb-14">
            <div class="max-w-2xl">
                <p class="eyebrow mb-3 text-primary-500">In Action</p>
                <h2 class="heading-lg">{{ $page['title'] }} on the floor.</h2>
            </div>
            <p class="max-w-xs text-sm text-white/60 sm:text-right">
                A glimpse of recent {{ strtolower($page['title']) }} work delivered for our partners.
            </p>
        </div>

        @php $items = $page['gallery']; @endphp

        <div class="reveal-stagger grid grid-cols-12 gap-3 md:gap-5">
            {{-- Row 1: asymmetric 5 / 7 split --}}
            @if (! empty($items[0]))
                <a href="{{ route('work') }}" class="group lift relative col-span-12 block overflow-hidden rounded-card sm:col-span-5">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ $img($items[0]['image']) }}" alt="{{ $items[0]['title'] }}" loading="lazy" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-black/70 via-black/10 to-transparent"></div>
                    <span class="pointer-events-none absolute bottom-4 left-5 text-sm font-semibold tracking-tight md:text-base">{{ $items[0]['title'] }}</span>
                </a>
            @endif

            @if (! empty($items[1]))
                <a href="{{ route('work') }}" class="group lift relative col-span-12 block overflow-hidden rounded-card sm:col-span-7">
                    <div class="aspect-16/10 overflow-hidden">
                        <img src="{{ $img($items[1]['image']) }}" alt="{{ $items[1]['title'] }}" loading="lazy" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-black/70 via-black/10 to-transparent"></div>
                    <span class="pointer-events-none absolute bottom-4 left-5 text-sm font-semibold tracking-tight md:text-base">{{ $items[1]['title'] }}</span>
                </a>
            @endif

            {{-- Row 2: 4 / 4 / 4 thirds --}}
            @foreach (array_slice($items, 2, 3) as $item)
                <a href="{{ route('work') }}" class="group lift relative col-span-12 block overflow-hidden rounded-card sm:col-span-6 lg:col-span-4">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ $img($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="pointer-events-none absolute inset-0 bg-linear-to-t from-black/70 via-black/10 to-transparent"></div>
                    <span class="pointer-events-none absolute bottom-4 left-5 text-sm font-semibold tracking-tight md:text-base">{{ $item['title'] }}</span>
                </a>
            @endforeach
        </div>

        <div class="reveal mt-8 flex justify-end">
            <a href="{{ route('work') }}" class="group inline-flex items-center gap-2 text-sm font-medium text-white/80 transition-colors hover:text-primary-500">
                See All
                <x-icon-arrow class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" />
            </a>
        </div>
    </div>
</section>
