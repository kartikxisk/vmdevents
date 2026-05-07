<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/',                  [PageController::class, 'home'])->name('home');
Route::get('/our-work',          [PageController::class, 'work'])->name('work');
Route::get('/services',          [PageController::class, 'services'])->name('services');
Route::get('/about',             [PageController::class, 'about'])->name('about');
Route::get('/contact',           [PageController::class, 'contact'])->name('contact');
Route::get('/privacy',           [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms',             [PageController::class, 'terms'])->name('terms');
Route::get('/services/{slug}',   [PageController::class, 'service'])
    ->whereIn('slug', ['artist-management', 'corporate-events', 'manpower-management', 'fabrication-branding'])
    ->name('service');

Route::get('/sitemap.xml',       [SitemapController::class, 'index']);

Route::post('/enquiry', [EnquiryController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('enquiry.store');
