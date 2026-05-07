{{-- ───── Closing CTA — "Let's Talk" ─────
     Continues the dark background from the gallery above so the two
     sections read as one closing block. Centered, minimal, with the
     primary orange CTA dropping anchor on the warm glow.
--}}
<section class="relative overflow-hidden bg-black pt-12 pb-24 text-white md:pt-16 md:pb-32">
    {{-- Warm radial glow behind the headline. --}}
    <div aria-hidden="true" class="float-blob pointer-events-none absolute top-1/2 left-1/2 h-96 w-136 -translate-x-1/2 -translate-y-1/2 rounded-full bg-primary-500/40 blur-3xl md:h-120 md:w-176"></div>

    <div class="container-page relative z-10">
        <div class="reveal mx-auto max-w-3xl text-center">
            <p class="eyebrow mb-4 text-primary-500">{{ $page['cta']['eyebrow'] ?? 'Get in touch' }}</p>
            <h2 class="text-5xl font-semibold tracking-tight md:text-7xl">Let's Talk.</h2>
            <p class="mx-auto mt-5 max-w-xl text-base text-white/70">
                {{ $page['cta']['body'] ?? "Tell us the brief. We'll come back with a plan." }}
            </p>
            <div class="mt-10">
                <x-btn :href="route('contact')" data-enquiry-open>
                    {{ $page['cta']['button'] ?? 'Contact us' }}
                    <x-icon-arrow />
                </x-btn>
            </div>
        </div>
    </div>
</section>
