{{-- Sitewide Organization + LocalBusiness JSON-LD.
     One graph keeps the entity unambiguous to search engines. --}}
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'         => 'Organization',
            '@id'           => url('/') . '#organization',
            'name'          => 'VMD Events',
            'legalName'     => 'VMD Promotion & Events',
            'url'           => url('/'),
            'logo'          => asset('images/figma/imgGroup.png'),
            'image'         => asset('images/figma/imgRectangle80.png'),
            'description'   => 'Delhi-based brand experience agency producing brand promotions, corporate events, artist management and on-ground manpower across India.',
            'foundingDate'  => '2014',
            'sameAs'        => array_values(array_filter(config('social', []))),
            'contactPoint'  => [
                [
                    '@type'             => 'ContactPoint',
                    'telephone'         => '+91-95409-08009',
                    'contactType'       => 'customer service',
                    'email'             => 'Dipender@vmdevents.com',
                    'areaServed'        => 'IN',
                    'availableLanguage' => ['en', 'hi'],
                ],
            ],
        ],
        [
            '@type'             => 'LocalBusiness',
            '@id'               => url('/') . '#localbusiness',
            'name'              => 'VMD Events',
            'image'             => asset('images/figma/imgRectangle80.png'),
            'url'               => url('/'),
            'telephone'         => '+91-95409-08009',
            'email'             => 'Dipender@vmdevents.com',
            'priceRange'        => '₹₹₹',
            'parentOrganization' => ['@id' => url('/') . '#organization'],
            'address'           => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'J-81, Raj Nagar-1, Old Mehrauli Road, Near Arya Samaj Mandir, Palam Colony',
                'addressLocality' => 'New Delhi',
                'postalCode'      => '110045',
                'addressRegion'   => 'DL',
                'addressCountry'  => 'IN',
            ],
            'geo'               => [
                '@type'     => 'GeoCoordinates',
                'latitude'  => 28.598416,
                'longitude' => 77.0926898,
            ],
            'openingHoursSpecification' => [
                [
                    '@type'     => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                    'opens'     => '10:00',
                    'closes'    => '19:00',
                ],
            ],
            'areaServed'        => [
                '@type' => 'Country',
                'name'  => 'India',
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
