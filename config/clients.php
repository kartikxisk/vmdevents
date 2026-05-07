<?php

/*
|--------------------------------------------------------------------------
| Clients — shared client logos
|--------------------------------------------------------------------------
| Used by both the home page ("Brands we've worked with") and the
| our-work page ("Our Prestigious Client") via partials.clients.
|
| Each entry: ['file' => 'imgX.png', 'name' => 'Brand']. The name powers
| descriptive alt text — required for image search and screen readers.
| Logos whose name we do not yet have on file fall back to GENERIC_LABEL,
| which the partial filters out of the named-clients sentence.
*/

$genericAgency = 'Agency partner';
$genericDirect = 'Direct client';

return [
    'direct' => [
        ['file' => 'imgBarbequeNationLogoVectorSvg.png',                         'name' => 'Barbeque Nation'],
        ['file' => 'imgIndusindBankLogoPngSeeklogo71354RemovebgPreview2.png',   'name' => 'IndusInd Bank'],
        ['file' => 'imgUnitedSpiritsLogo22.png',                                 'name' => 'United Spirits'],
        ['file' => 'imgIdfcFirstBankLogoUpscayl4XUpscaylStandard4X.png',         'name' => 'IDFC First Bank'],
        ['file' => 'imgSingerLogo.png',                                          'name' => 'Singer'],
        ['file' => 'imgHdfcBankLimitedSymbol2.png',                              'name' => 'HDFC Bank'],
        ['file' => 'imgIndianOilLogoSvg3.png',                                   'name' => 'Indian Oil'],
        ['file' => 'imgImages.png',                                              'name' => $genericDirect],
    ],

    'agencies' => [
        ['file' => 'imgBeamGlobalSpiritsWineIncLogoUpscayl4XUpscaylStandard4X4.png', 'name' => 'Beam Global Spirits & Wine'],
        ['file' => 'imgLogoAlcobrew2RemovebgPreview2.png',                            'name' => 'Alcobrew'],
        ['file' => 'imgJagatjitIndustriesLtd600RemovebgPreview2.png',                 'name' => 'Jagatjit Industries'],
        ['file' => 'imgPartnerLogo72.png',                                            'name' => $genericAgency],
        ['file' => 'imgDownloadUpscayl4XUpscaylStandard4X2.png',                      'name' => $genericAgency],
        ['file' => 'img832D34Dc25B44E44A8A33Fcd1Edea9A62.png',                        'name' => $genericAgency],
        ['file' => 'img5Ecaa0C5Aa31Fc00045D67822.png',                                'name' => $genericAgency],
    ],
];
