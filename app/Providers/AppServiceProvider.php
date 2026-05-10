<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Resolves a figma asset basename (e.g. "imgRectangle80.png") to the
        // best available URL, preferring WebP when a sibling file exists.
        // Caches the file_exists() lookup per request.
        Blade::directive('img', function ($expression) {
            return "<?php echo \\App\\Providers\\AppServiceProvider::imgUrl($expression); ?>";
        });
    }

    public static function imgUrl(string $name): string
    {
        static $cache = [];
        if (isset($cache[$name])) {
            return $cache[$name];
        }
        $webpName = preg_replace('/\.(png|jpe?g)$/i', '.webp', $name);
        $webpPath = public_path('images/figma/' . $webpName);
        $finalName = ($webpName !== $name && is_file($webpPath)) ? $webpName : $name;
        return $cache[$name] = asset('images/figma/' . $finalName);
    }
}
