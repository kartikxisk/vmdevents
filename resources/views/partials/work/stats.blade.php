{{-- ───── Our Work — impact stats ─────
     Sits directly under the hero, on the warm primary tone, to give the
     portfolio page immediate credibility before the project grids.
--}}
<x-section tone="primary" pad="normal">
    <div class="reveal-stagger grid grid-cols-2 gap-8 sm:grid-cols-4 sm:gap-6">
        @foreach ($stats as $stat)
            <div class="text-center sm:text-left">
                <span class="block text-5xl leading-none font-bold text-black md:text-6xl">
                    <span data-counter="{{ $stat['value'] }}">{{ $stat['value'] }}</span><span class="text-white">{{ $stat['suffix'] }}</span>
                </span>
                <span class="mt-3 block text-sm font-medium text-black/70">
                    {{ $stat['label'] }}
                </span>
            </div>
        @endforeach
    </div>
</x-section>
