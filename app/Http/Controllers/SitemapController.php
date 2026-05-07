<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $today = now()->toDateString();

        $urls = [
            ['loc' => route('home'),     'changefreq' => 'weekly',  'priority' => '1.0'],
            ['loc' => route('work'),     'changefreq' => 'monthly', 'priority' => '0.9'],
            ['loc' => route('services'), 'changefreq' => 'monthly', 'priority' => '0.9'],
            ['loc' => route('about'),    'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('contact'),  'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => route('privacy'),  'changefreq' => 'yearly',  'priority' => '0.3'],
            ['loc' => route('terms'),    'changefreq' => 'yearly',  'priority' => '0.3'],
        ];

        foreach (array_keys(config('service_pages')) as $slug) {
            $urls[] = [
                'loc'        => route('service', $slug),
                'changefreq' => 'monthly',
                'priority'   => '0.8',
            ];
        }

        return response()
            ->view('sitemap', ['urls' => $urls, 'lastmod' => $today])
            ->header('Content-Type', 'application/xml');
    }
}
