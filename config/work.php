<?php

/*
|--------------------------------------------------------------------------
| Our Work — page content
|--------------------------------------------------------------------------
| Single source of truth for the /our-work page. Change copy or images
| here; the controller injects this into the view.
*/

return [
    'hero' => [
        'eyebrow'  => 'Our Portfolio',
        'title'    => 'Our Work.',
        'subtitle' => 'From luxury brand activation to bespoke corporate events, we craft experiences that captivate and inspire.',
        'image'    => 'imgRectangle80.png',
    ],

    'stats' => [
        ['value' => '15',  'suffix' => '+', 'label' => 'Years on the ground'],
        ['value' => '200', 'suffix' => '+', 'label' => 'Campaigns delivered'],
        ['value' => '40',  'suffix' => '+', 'label' => 'Brands served'],
        ['value' => '20',  'suffix' => '+', 'label' => 'Cities reached'],
    ],

    'categories' => [
        [
            'title' => 'Corporate Events',
            'slug'  => 'corporate-events',
            'image' => 'imgBusinesswomanReceivingAwardFromBusinessmanIn20250403212451Utc.png',
            'items' => ['Dealer meet', 'Press Conference', 'Award function', 'Product launch', 'BTL promotion', 'Brand promotion', 'Activation', 'Mall Promotion', 'RWA activities', 'Merchandise', 'Road show'],
        ],
        [
            'title' => 'Artist Management',
            'slug'  => 'artist-management',
            'image' => 'imgCrowdPeopleCelebratingPartyingWithTheirHands1.png',
            'items' => ['Singer', 'Comedian', 'Musician', 'Magician', 'Dance troupe', 'Anchor / Emcee', 'Live Band', 'Traditional and folk arts', 'Belly dancer', 'International acts', 'Special brand-based curation'],
        ],
        [
            'title' => 'Manpower Management',
            'slug'  => 'manpower-management',
            'image' => 'imgBarmanWithShaker1.png',
            'items' => ['Bartender', 'Mixologist & Juggler', "Professional BT's", "International BT's", 'Bar services', 'Bar consulting', 'Hostess', 'Male promoters', 'Female promoters'],
        ],
        [
            'title' => 'Fabrication & Branding',
            'slug'  => 'fabrication-branding',
            'image' => 'imgRectangle82.png',
            'items' => ['Booth Fabrication', 'Stage Build', 'Brand POSM', 'Signage & Vinyl', 'LED & Digital Walls', 'Set Construction', 'Install & Dismantle'],
        ],
    ],

    'sections' => [
        [
            'id'       => 'luxury-brand-activations',
            'eyebrow'  => 'Featured campaigns',
            'title'    => 'Luxury Brand Activations',
            'lede'     => 'Premium spirits, BMW lifestyle, and on-premise programmes for India\'s most discerning brands.',
            'projects' => [
                ['title' => 'DIAGEO Portfolio',                    'image' => 'imgRectangle117.png'],
                ['title' => 'DIY Session for Tanqueray & BMW',     'image' => 'imgRectangle121.png'],
                ['title' => 'Customized Brand POSM & Merchandise', 'image' => 'imgRectangle118.png'],
                ['title' => 'On-Premise Activations',              'image' => 'imgRectangle122.png'],
            ],
        ],
        [
            'id'       => 'corporate-events',
            'eyebrow'  => 'Stage & summit',
            'title'    => 'Corporate & Thematic Events',
            'lede'     => 'Dealer meets, product launches, conferences, and theme nights — produced end-to-end.',
            'projects' => [
                ['title' => 'Corporate Events',  'image' => 'imgRectangle119.png'],
                ['title' => 'Thematic Events',   'image' => 'imgRectangle123.png'],
                ['title' => 'Product Launch',    'image' => 'imgRectangle120.png'],
                ['title' => 'Conference',        'image' => 'imgRectangle124.png'],
            ],
        ],
    ],

    'cta' => [
        'eyebrow' => 'Got a brief?',
        'title'   => 'Let\'s build the<br>next one together.',
        'body'    => 'Tell us the brand, the audience, and the date — we\'ll come back with a creative direction within a week.',
        'button'  => 'Start a Project',
    ],
];
