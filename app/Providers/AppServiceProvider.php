<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Inclure la facade "Schema"
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // solution pour erreur ou access violation 1071 la clé est trop longue
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
