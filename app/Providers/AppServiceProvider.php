<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //MySQL pre 5.7.7 or MariaDB pre 10.2.2 does not support key indexes longer than 767 bytes
        //Hence since we're using utf8mb4, the default string index takes up 1020 which throws an error.
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
