<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GolfServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('golfService', 'App\Services\Golf');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
