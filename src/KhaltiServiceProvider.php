<?php

namespace Anoop\Khalti;

use Illuminate\Support\ServiceProvider;

class KhaltiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Anoop\Khalti\KhaltiController');
        $this->loadViewsFrom(__DIR__.'/views', 'khalti');
    }
}
