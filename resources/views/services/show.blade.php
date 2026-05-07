@extends('layouts.app')

@section('title', $page['meta_title'] ?? ($page['title'] . ' Company in India — VMD Events'))
@section('description', $page['meta_description'] ?? $page['lede'])
@section('og_image', asset('images/figma/' . $page['hero']))

@php
    $img = fn ($name) => \App\Providers\AppServiceProvider::imgUrl($name);
@endphp

@push('preload')
<link rel="preload" as="image" href="{{ $img($page['hero']) }}" fetchpriority="high">
@endpush

@push('schema')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'             => 'Service',
            'name'              => $page['title'],
            'serviceType'       => $page['title'],
            'description'       => $page['lede'],
            'provider'          => ['@id' => url('/') . '#organization'],
            'areaServed'        => ['@type' => 'Country', 'name' => 'India'],
            'url'               => url()->current(),
            'image'             => asset('images/figma/' . $page['hero']),
            'hasOfferCatalog'   => [
                '@type'         => 'OfferCatalog',
                'name'          => $page['title'] . ' offerings',
                'itemListElement' => array_map(fn ($o) => [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type'       => 'Service',
                        'name'        => $o['title'],
                        'description' => $o['desc'],
                    ],
                ], $page['offerings']),
            ],
        ],
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => route('home')],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => route('services')],
                ['@type' => 'ListItem', 'position' => 3, 'name' => $page['title'], 'item' => url()->current()],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    @include('partials.services.hero',     ['page' => $page, 'img' => $img])
    @include('partials.services.intro',    ['page' => $page, 'img' => $img])
    @include('partials.services.offerings',['page' => $page])
    @include('partials.services.related',  ['related' => $related])
    @include('partials.services.gallery',  ['page' => $page, 'img' => $img])
    @include('partials.services.cta',      ['page' => $page])
@endsection
