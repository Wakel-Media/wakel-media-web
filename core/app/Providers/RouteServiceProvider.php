<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Laramin\Utility\VugiChugi;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */

    protected $namespace = 'App\Http\Controllers';

    protected string $domain = '';

    protected string $domainExtension = '';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        $this->domain = env('DOMAIN');
        $this->domain = env('DOMAIN_EXTENSION');

        Route::get('maintenance-mode', 'App\Http\Controllers\SiteController@maintenance')->name('maintenance');
    }

    /**
     * Define the routes of the application
     */
    public function map()
    {
        $this->mapWebsiteApiRoutes();
        $this->mapMobileV1ApiRoutes();
    }

    private function mapWebsiteApiRoutes()
    {
        Route::namespace($this->namespace)->middleware(VugiChugi::mdNm())->group(function () {
            Route::prefix('api')
                ->middleware(['api', 'maintenance'])
                ->group(base_path('routes/api.php'));

            Route::middleware(['web', 'maintenance'])
                ->namespace('Gateway')
                ->prefix('ipn')
                ->name('ipn.')
                ->group(base_path('routes/ipn.php'));

            Route::middleware(['web'])
                ->namespace('Admin')
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));

            Route::middleware(['web', 'maintenance'])
                ->prefix('user')
                ->group(base_path('routes/user.php'));

            Route::middleware(['web', 'maintenance'])
                ->group(base_path('routes/web.php'));
        });
    }

    private function mapMobileV1ApiRoutes()
    {
        Route::namespace($this->namespace)->middleware(VugiChugi::mdNm())->group(function () {

            Route::prefix("api/v1")
                ->middleware(["api"])
                ->group(base_path("routes/api/v1/mobile/api.php"));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}