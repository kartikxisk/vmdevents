<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use App\Filament\Widgets\EnquiriesByService;
use App\Filament\Widgets\EnquiriesOverview;
use App\Filament\Widgets\EnquiriesTrend;
use App\Filament\Widgets\LatestEnquiries;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(\App\Filament\Auth\Login::class)
            ->brandName('VMD Events')
            ->brandLogo(asset('images/logo.png'))
            ->brandLogoHeight('2.25rem')
            ->favicon(asset('images/logo.png'))
            ->font('Figtree')
            ->colors([
                'primary' => [
                    50  => '#fff8ec',
                    100 => '#ffefd1',
                    200 => '#ffdba2',
                    300 => '#ffc06a',
                    400 => '#ffa840',
                    500 => '#ffa027',
                    600 => '#f08e10',
                    700 => '#c46e0c',
                    800 => '#9b5710',
                    900 => '#7d4811',
                    950 => '#432505',
                ],
            ])
            ->darkMode(false)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                EnquiriesOverview::class,
                LatestEnquiries::class,
                EnquiriesTrend::class,
                EnquiriesByService::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
