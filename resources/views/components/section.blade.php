@props([
    'tone' => 'surface',
    'pad' => 'normal',
    'width' => 'page',
])

@php
    $tones = [
        'surface' => 'bg-surface',
        'primary' => 'bg-primary-500 text-ink-500',
        'dark'    => 'bg-black text-white',
        'ink'     => 'bg-ink-50',
    ];
    $pads = [
        'normal' => 'section-pad',
        'lg'     => 'section-pad-lg',
        'none'   => '',
    ];
    $widths = [
        'page'    => 'container-page',
        'content' => 'container-content',
        'prose'   => 'container-prose',
    ];
@endphp

<section {{ $attributes->class([$tones[$tone] ?? $tones['surface'], $pads[$pad] ?? $pads['normal']]) }}>
    <div class="{{ $widths[$width] ?? $widths['page'] }}">
        {{ $slot }}
    </div>
</section>
