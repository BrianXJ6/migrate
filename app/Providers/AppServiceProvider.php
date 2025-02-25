<?php

namespace App\Providers;

use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        /** URL config */
        URL::forceScheme(config('app.protocol'));

        /** DB config */
        Schema::defaultStringLength(191);

        /** API Resource config */
        JsonResource::withoutWrapping();
    }
}
