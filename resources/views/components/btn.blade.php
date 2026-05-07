@props([
    'href' => null,
    'variant' => 'primary',
    'size' => 'md',
])

@php
    $sizes = [
        'sm' => 'btn-sm',
        'md' => 'btn-md',
    ];

    $variants = [
        'primary' => 'btn-primary',
    ];

    $classes = ['btn', $sizes[$size] ?? $sizes['md'], $variants[$variant] ?? $variants['primary']];
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class($classes) }}>{{ $slot }}</a>
@else
    <button type="button" {{ $attributes->class($classes) }}>{{ $slot }}</button>
@endif
