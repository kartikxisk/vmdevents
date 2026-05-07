@php
    $img       = fn ($name) => \App\Providers\AppServiceProvider::imgUrl($name);
    $eyebrow   = $eyebrow   ?? 'Trusted by 200+ brands';
    $heading   = $heading   ?? "Brands we've worked with";
    $direct    = $direct    ?? config('clients.direct');
    $agencies  = $agencies  ?? config('clients.agencies');
    $showCta   = $showCta   ?? false;
    $tone      = $tone      ?? 'surface';
@endphp

<x-section pad="lg" :tone="$tone">
    <div class="reveal mb-12 text-center">
        <p class="eyebrow mb-3 text-ink-300">{{ $eyebrow }}</p>
        <h2 class="heading-md">{{ $heading }}</h2>
    </div>

    @foreach ([['Direct clients', $direct, '50s', false], ['Through agencies', $agencies, '60s', true]] as [$label, $logos, $duration, $reverse])
        <p @class(['eyebrow mb-5 text-ink-300', 'mt-14' => !$loop->first])>{{ $label }}</p>
        <div class="marquee-pause container-bleed overflow-hidden mask-[linear-gradient(to_right,transparent,black_8%,black_92%,transparent)]">
            <div class="marquee" style="--marquee-duration: {{ $duration }}{{ $reverse ? '; animation-direction: reverse' : '' }}">
                @foreach (array_merge($logos, $logos) as $logo)
                    <div class="mx-3 flex h-32 w-56 shrink-0 items-center justify-center rounded-2xl bg-white shadow-soft transition-transform duration-500 hover:-translate-y-1">
                        <img src="{{ $img($logo['file']) }}" alt="{{ $logo['name'] }} — VMD Events client" loading="lazy" decoding="async" class="max-h-14 max-w-36 object-contain grayscale transition-all duration-500 group-hover:grayscale-0">
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- Named-clients sentence — gives crawlers crawlable text alongside the logo wall. --}}
    <p class="mt-10 text-center text-sm text-ink-300">
        Direct and agency-led campaigns for brands including
        @php $allNames = collect(array_merge($direct, $agencies))->pluck('name')->unique()->reject(fn ($n) => in_array($n, ['Direct client', 'Agency partner'], true))->values(); @endphp
        {{ $allNames->slice(0, -1)->implode(', ') }}@if ($allNames->count() > 1) and {{ $allNames->last() }}@endif.
    </p>

    @if ($showCta)
        <div class="mt-10 text-center">
            <x-btn href="{{ route('work') }}" size="sm">See our work</x-btn>
        </div>
    @endif
</x-section>
