<?php

namespace App\Providers;

use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        Route::macro('withoutSession', function () {
            return Route::withoutMiddleware([
                StartSession::class,
                ShareErrorsFromSession::class,
                ValidateCsrfToken::class,
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (App::environment('production', 'staging')) {
            URL::forceScheme('https');
        }
    }
}
