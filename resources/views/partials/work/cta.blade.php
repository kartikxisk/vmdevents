{{-- ───── Our Work — closing CTA ─────
     Same dark CTA pill used on home and the service pages.
--}}
<x-section pad="none" class="pb-16 md:pb-24">
    <div class="reveal relative overflow-hidden rounded-cta bg-black px-6 py-16 text-center text-white md:py-28">
        <div class="float-blob pointer-events-none absolute top-1/2 left-1/2 h-80 w-112 rounded-full bg-primary-500/40 blur-3xl md:h-120 md:w-170"></div>

        <div class="relative">
            <p class="eyebrow mb-3 text-primary-500">{{ $cta['eyebrow'] }}</p>
            <h2 class="heading-md">{!! $cta['title'] !!}</h2>
            <p class="mx-auto mt-5 max-w-2xl text-base text-white/70">{{ $cta['body'] }}</p>
            <div class="mt-10">
                <x-btn :href="route('contact')">
                    {{ $cta['button'] }}
                    <x-icon-arrow />
                </x-btn>
            </div>
        </div>
    </div>
</x-section>
