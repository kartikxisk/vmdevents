<?php

/*
|--------------------------------------------------------------------------
| Service Pages — content
|--------------------------------------------------------------------------
| Single source of truth for the four /services/* pages. The PageController
| pulls the matching slug into the shared service view.
*/

return [

    'artist-management' => [
        'title'            => 'Artist Management',
        'meta_title'       => 'Artist Management Company in India — Singers, Bands & DJs | VMD',
        'meta_description' => "Book India's top singers, bands, comedians, DJs and dance troupes through VMD Events. Curated rosters, contracted, and show-managed end-to-end.",
        'eyebrow'          => 'Our Services',
        'tagline'          => 'Curated talent. Show-ready execution.',
        'lede'             => "From intimate brand evenings to stadium-scale productions, we curate, contract, and produce the right artists for the moment — handling everything from rider negotiation to stage call.",
        'hero'             => 'imgCrowdPeopleCelebratingPartyingWithTheirHands1.png',

        'intro'    => [
            'heading' => 'A roster built for every brand brief.',
            'body'    => 'Our in-house roster spans India\'s best singers, comedians, musicians, dancers, magicians, and emcees — alongside international acts available on call. We pair the right voice with your audience, then run the show end-to-end so the brand stays front and centre.',
            'image'   => 'imgRectangle92.png',
            'alt' => 'Live artist performing at a brand show produced by VMD Events',
            'stat'    => ['value' => '500', 'suffix' => '+', 'label' => "Live shows<br>delivered nationally"],
        ],

        'offerings' => [
            ['icon' => 'mic',     'title' => 'Singers & Live Bands',        'desc' => 'Playback, indie, classical, and curated wedding-circuit artists.'],
            ['icon' => 'spark',   'title' => 'Comedians & Anchors',         'desc' => 'Stand-up acts, brand emcees, and hosts with corporate polish.'],
            ['icon' => 'note',    'title' => 'Musicians & DJs',             'desc' => 'Sit-down dinners to high-energy after-parties — fully production-ready.'],
            ['icon' => 'flame',   'title' => 'Magicians & Specialty Acts',  'desc' => 'Close-up magic, illusionists, fire performers, and aerialists.'],
            ['icon' => 'sparkle', 'title' => 'Dance Troupes & Folk Arts',   'desc' => 'Bollywood, contemporary, traditional, and regional choreography.'],
            ['icon' => 'globe',   'title' => 'International Acts',          'desc' => 'Headline international talent sourced and routed for India dates.'],
        ],

        'gallery' => [
            ['image' => 'imgRectangle96.png', 'title' => 'Live Music Nights'],
            ['image' => 'imgRectangle97.png', 'title' => 'Brand Evenings'],
            ['image' => 'imgRectangle98.png', 'title' => 'Festival Headliners'],
            ['image' => 'imgRectangle99.png', 'title' => 'Curated Performances'],
            ['image' => 'imgRectangle92.png', 'title' => 'Stage Productions'],
        ],

        'cta' => [
            'eyebrow' => 'Book Your Artist',
            'title'   => 'Ready to bring the<br>right artist on stage?',
            'body'    => 'Tell us your audience, format, and date — we\'ll come back with a curated artist shortlist within 48 hours.',
            'button'  => 'Request a Shortlist',
        ],
    ],

    'corporate-events' => [
        'title'            => 'Corporate Events',
        'meta_title'       => 'Corporate Event Management Company in India — VMD Events',
        'meta_description' => 'VMD Events produces dealer meets, product launches, conferences and award nights across India — for banking, spirits, automotive and FMCG brands.',
        'eyebrow'          => 'Our Services',
        'tagline'          => 'Boardroom precision. Stage-ready scale.',
        'lede'             => 'Dealer meets, product launches, conferences, and award nights — produced with the discipline corporate brands expect, and the showmanship audiences remember.',
        'hero'             => 'imgBusinesswomanReceivingAwardFromBusinessmanIn20250403212451Utc1.png',

        'intro'    => [
            'heading' => 'Every detail. Every delegate. Every time.',
            'body'    => 'For over a decade we\'ve produced corporate events for India\'s most regulated industries — banking, spirits, automotive, FMCG. From scripting and stage design to delegate logistics and post-event reporting, we run the brief like a programme, not a one-off.',
            'image'   => 'imgRectangle119.png',
            'alt' => 'Corporate event award ceremony stage produced by VMD Events',
            'stat'    => ['value' => '200', 'suffix' => '+', 'label' => 'Corporate events<br>produced since 2014'],
        ],

        'offerings' => [
            ['icon' => 'briefcase', 'title' => 'Dealer & Channel Meets',  'desc' => 'Multi-city rollouts with consistent staging, comms, and AV.'],
            ['icon' => 'rocket',    'title' => 'Product Launches',        'desc' => 'Reveal moments engineered for press, social, and sales floors.'],
            ['icon' => 'mic',       'title' => 'Conferences & Summits',   'desc' => 'Plenaries, breakouts, and delegate flows for 100–5,000+ guests.'],
            ['icon' => 'trophy',    'title' => 'Award Functions',         'desc' => 'Tightly scripted ceremonies with cinematic stage design.'],
            ['icon' => 'flag',      'title' => 'Brand Activations',       'desc' => 'BTL, mall, RWA, and on-premise programmes at national scale.'],
            ['icon' => 'sparkle',   'title' => 'Theme Nights & Galas',    'desc' => 'Annual day, founder events, off-sites, and incentive trips.'],
        ],

        'gallery' => [
            ['image' => 'imgRectangle117.png', 'title' => 'Dealer Meet'],
            ['image' => 'imgRectangle120.png', 'title' => 'Product Launch'],
            ['image' => 'imgRectangle123.png', 'title' => 'Award Night'],
            ['image' => 'imgRectangle124.png', 'title' => 'Conference'],
            ['image' => 'imgRectangle121.png', 'title' => 'Brand Activation'],
        ],

        'cta' => [
            'eyebrow' => 'Plan Your Event',
            'title'   => 'Have a corporate event<br>on the calendar?',
            'body'    => 'Share your brief — date, audience, scale — and our producers will revert with a creative direction and budget framework.',
            'button'  => 'Start the Brief',
        ],
    ],

    'manpower-management' => [
        'title'            => 'Manpower Management',
        'meta_title'       => 'Bartenders, Mixologists & Hostesses Across India — VMD Events',
        'meta_description' => 'VMD Events deploys vetted bartenders, mixologists, hostesses and promoters across India for hospitality and brand activations. Same-week mobilisation in metros.',
        'eyebrow'          => 'Our Services',
        'tagline'          => 'The right people. Every shift. Every city.',
        'lede'             => 'Bartenders, mixologists, hostesses, promoters and bar consultants — vetted, trained, and deployed across India\'s premium hospitality and brand circuits.',
        'hero'             => 'imgBarmanWithShaker1.png',

        'intro'    => [
            'heading' => 'On-ground execution, run like a roster.',
            'body'    => 'We manage a trained pool of bar and promotional talent — from celebrity mixologists to multilingual hostesses — and deploy them with full uniforming, briefing, and shift management. Brands tell us the venue and the volume; we put the right people on the floor.',
            'image'   => 'imgBarmanWithShaker.png',
            'alt' => 'VMD Events bartender preparing a cocktail at a brand activation',
            'stat'    => ['value' => '15', 'suffix' => '+', 'label' => 'Years building India\'s<br>bar talent network'],
        ],

        'offerings' => [
            ['icon' => 'flame',     'title' => 'Bartenders & Mixologists',          'desc' => 'Award-circuit talent, classic to molecular, on-demand.'],
            ['icon' => 'sparkle',   'title' => "Professional & International BT's", 'desc' => 'Flair, juggling, and showmanship for headline activations.'],
            ['icon' => 'briefcase', 'title' => 'Bar Services & Setup',              'desc' => 'Full bar build-out — equipment, glassware, garnish, and crew.'],
            ['icon' => 'note',      'title' => 'Bar Consulting',                    'desc' => 'Menu design, costing, and bar SOPs for hotels and outlets.'],
            ['icon' => 'mic',       'title' => 'Hostesses & Emcee Support',         'desc' => 'Front-of-house, registration, and brand ambassador staffing.'],
            ['icon' => 'flag',      'title' => 'Male & Female Promoters',           'desc' => 'Mall, on-premise, and event-day promotional manpower.'],
        ],

        'gallery' => [
            ['image' => 'imgRectangle84.png', 'title' => 'Mixology Stations'],
            ['image' => 'imgRectangle92.png', 'title' => 'Bar Activations'],
            ['image' => 'imgRectangle85.png', 'title' => 'Hostess Brigades'],
            ['image' => 'imgRectangle93.png', 'title' => 'Mall Promotions'],
            ['image' => 'imgRectangle94.png', 'title' => 'On-Premise Crew'],
        ],

        'cta' => [
            'eyebrow' => 'Staff Your Activation',
            'title'   => 'Need crew on the floor<br>this week?',
            'body'    => 'Tell us city, dates, and headcount — we shortlist, brief, and deploy. Same-week mobilisation across major Indian metros.',
            'button'  => 'Request Manpower',
        ],
    ],

    'fabrication-branding' => [
        'title'            => 'Fabrication & Branding',
        'meta_title'       => 'Event Fabrication & Branding — Booths, Stages, LED & POSM | VMD',
        'meta_description' => 'VMD Events fabricates booths, stages, signage, LED walls and brand environments in-house. Pan-India install crews and TAT-disciplined delivery.',
        'eyebrow'          => 'Our Services',
        'tagline'          => 'Built on time. Branded on brief.',
        'lede'             => 'Stages, booths, signage, and brand environments — fabricated in-house and installed across India with production-grade finish and TAT discipline.',
        'hero'             => 'imgRectangle82.png',

        'intro'    => [
            'heading' => 'From sketch to stage — under one roof.',
            'body'    => 'Our fabrication studio handles the full pipeline: 3D design, structural drawings, CNC and metal work, finishing, on-site install, and dismantle. Every brand element — booths, façades, POSM, vinyls, LED walls — is built to brand-book tolerance.',
            'image'   => 'imgRectangle83.png',
            'alt' => 'Custom-fabricated brand booth installed by VMD Events',
            'stat'    => ['value' => '1000', 'suffix' => '+', 'label' => 'Branded sq. ft<br>installed every month'],
        ],

        'offerings' => [
            ['icon' => 'briefcase', 'title' => 'Booth & Stage Fabrication',      'desc' => 'Modular and custom builds for exhibitions, launches, and roadshows.'],
            ['icon' => 'spark',     'title' => 'Brand POSM & Merchandise',       'desc' => 'Standees, danglers, table tops, and on-pack — produced at scale.'],
            ['icon' => 'sparkle',   'title' => 'Signage & Vinyl',                'desc' => 'Façade branding, wayfinding, retail vinyls, and acrylic signage.'],
            ['icon' => 'rocket',    'title' => 'LED & Digital Walls',            'desc' => 'P2 to P6 LED, anamorphic content, and AV-integrated stages.'],
            ['icon' => 'flame',     'title' => 'Set & Theme Construction',       'desc' => 'Themed bars, photo-ops, immersive sets, and brand worlds.'],
            ['icon' => 'flag',      'title' => 'Install, Dismantle & Logistics', 'desc' => 'PAN-India install crews, transport, and on-site supervision.'],
        ],

        'gallery' => [
            ['image' => 'imgRectangle118.png', 'title' => 'Brand POSM'],
            ['image' => 'imgRectangle122.png', 'title' => 'On-Premise Branding'],
            ['image' => 'imgRectangle86.png',  'title' => 'Booth Builds'],
            ['image' => 'imgRectangle87.png',  'title' => 'Signage Systems'],
            ['image' => 'imgRectangle88.png',  'title' => 'LED & Stage Sets'],
        ],

        'cta' => [
            'eyebrow' => 'Brief Our Studio',
            'title'   => 'Have a build<br>going to floor?',
            'body'    => 'Send the design intent and venue — we revert with a costed BoM, timeline, and install crew plan.',
            'button'  => 'Get a Build Quote',
        ],
    ],

];
