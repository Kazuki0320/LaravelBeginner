<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
	    app()->singleton('App\Services\Test.php');
	    echo "<b><MyServiceProvider/register></b><br>";
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo "<b><MyServiceProvider/boot></b>";
    }
}
