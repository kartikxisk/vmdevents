<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function work(): View
    {
        return view('our-work', [
            'hero'       => config('work.hero'),
            'stats'      => config('work.stats'),
            'categories' => config('work.categories'),
            'sections'   => config('work.sections'),
            'cta'        => config('work.cta'),
        ]);
    }

    public function services(): View
    {
        return view('services-index', [
            'hero'       => config('services_index.hero'),
            'intro'      => config('services_index.intro'),
            'cta'        => config('services_index.cta'),
            'categories' => config('work.categories'),
        ]);
    }

    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function privacy(): View
    {
        return view('privacy');
    }

    public function terms(): View
    {
        return view('terms');
    }

    public function service(string $slug): View
    {
        $page = config("service_pages.$slug");

        abort_unless($page, 404);

        return view('services.show', [
            'slug' => $slug,
            'page' => $page,
            'related' => collect(config('service_pages'))
                ->except($slug)
                ->map(fn ($p, $s) => [
                    'slug'  => $s,
                    'title' => $p['title'],
                    'image' => $p['hero'],
                ])
                ->values()
                ->all(),
        ]);
    }
}
