@extends('layouts.app')

@section('title', 'Our Work — Brand Activations & Events in India | VMD')
@section('description', 'Selected VMD Events campaigns: luxury brand activations for Diageo, BMW and Tanqueray, plus dealer meets, product launches and award nights across India.')

@push('preload')
<link rel="preload" as="image" href="{{ \App\Providers\AppServiceProvider::imgUrl($hero['image']) }}" fetchpriority="high">
@endpush

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => route('home')],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Our Work', 'item' => route('work')],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    @include('partials.work.hero',       ['hero' => $hero])
    @include('partials.work.stats',      ['stats' => $stats])
    @include('partials.work.categories', ['categories' => $categories])
    @include('partials.work.projects',   ['sections' => $sections])
    @include('partials.work.cta',        ['cta' => $cta])
    @include('partials.work.clients')
@endsection
