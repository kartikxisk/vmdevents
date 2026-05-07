@props([
    'eyebrow' => null,
    'as' => 'h2',
    'align' => 'left',
])

@php
    $alignment = $align === 'center' ? 'text-center' : 'text-left';
@endphp

<header @class(['mb-10', $alignment])>
    @if ($eyebrow)
        <p class="eyebrow mb-3 text-ink-300">{{ $eyebrow }}</p>
    @endif
    <{{ $as }} {{ $attributes->class(['heading-md']) }}>
        {{ $slot }}
    </{{ $as }}>
</header>
