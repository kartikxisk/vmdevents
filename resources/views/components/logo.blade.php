@props([
    'class' => 'h-10 w-auto',
])

<a href="{{ route('home') }}" {{ $attributes->only('aria-label') ?: 'aria-label="VMD home"' }}>
    <img src="{{ asset('images/logo.png') }}" alt="VMD Promotion & Events" class="{{ $class }}" width="78" height="46">
</a>
