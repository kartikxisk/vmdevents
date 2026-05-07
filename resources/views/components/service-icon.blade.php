@props(['name'])

@php
    $paths = [
        'mic'       => '<path d="M12 2a3 3 0 0 0-3 3v6a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"/><path d="M5 11a7 7 0 0 0 14 0"/><path d="M12 18v4"/><path d="M8 22h8"/>',
        'spark'     => '<path d="M12 2v6"/><path d="M12 16v6"/><path d="M2 12h6"/><path d="M16 12h6"/><path d="M5.6 5.6l4.2 4.2"/><path d="M14.2 14.2l4.2 4.2"/><path d="M18.4 5.6l-4.2 4.2"/><path d="M9.8 14.2l-4.2 4.2"/>',
        'note'      => '<path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/>',
        'flame'     => '<path d="M12 2s4 5 4 9a4 4 0 0 1-8 0c0-1.5.5-3 1.5-4 .5 1 1.5 1.5 2.5 1.5C12 6 12 4 12 2z"/><path d="M8 14a4 4 0 0 0 8 0"/>',
        'sparkle'   => '<path d="M12 3l1.8 5.4L19 10l-5.2 1.6L12 17l-1.8-5.4L5 10l5.2-1.6z"/><path d="M19 17l.7 2.1L22 20l-2.3.9L19 23l-.7-2.1L16 20l2.3-.9z"/>',
        'globe'     => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18"/><path d="M12 3a14 14 0 0 1 0 18"/><path d="M12 3a14 14 0 0 0 0 18"/>',
        'briefcase' => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 13h18"/>',
        'rocket'    => '<path d="M12 2c4 2 6 6 6 10l-2 4-4-2-4 2-2-4c0-4 2-8 6-10z"/><circle cx="12" cy="10" r="2"/><path d="M9 18l-2 3"/><path d="M15 18l2 3"/>',
        'trophy'    => '<path d="M8 4h8v6a4 4 0 0 1-8 0V4z"/><path d="M8 6H5a2 2 0 0 0 0 4h3"/><path d="M16 6h3a2 2 0 0 1 0 4h-3"/><path d="M10 14h4v3h-4z"/><path d="M8 21h8"/>',
        'flag'      => '<path d="M5 21V4"/><path d="M5 4h12l-2 4 2 4H5"/>',
    ];
    $svg = $paths[$name] ?? $paths['sparkle'];
@endphp

<svg {{ $attributes->class(['h-6 w-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    {!! $svg !!}
</svg>
