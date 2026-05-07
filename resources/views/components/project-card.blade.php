@props([
    'title',
    'image',
    'href' => '#',
    'aspect' => 'aspect-4/3',
])

<a href="{{ $href }}" {{ $attributes->class(['group lift surface-card relative block']) }}>
    <div class="{{ $aspect }} overflow-hidden">
        <img
            src="{{ \App\Providers\AppServiceProvider::imgUrl($image) }}"
            alt="{{ $title }}"
            loading="lazy"
            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
        >
    </div>
    <div class="flex items-center justify-between gap-3 p-5">
        <h3 class="text-base font-semibold">{{ $title }}</h3>
        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-ink-50 text-ink-500 transition-all duration-300 group-hover:bg-primary-500 group-hover:translate-x-1">
            <x-icon-arrow class="h-3.5 w-3.5" />
        </span>
    </div>
</a>
