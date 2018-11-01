<?php

namespace InstantlyDigital\Visqual;

use Illuminate\Support\ServiceProvider;

class VisqualServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'visqual');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/instantlydigital/visqual'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('InstantlyDigital\Visqual\Controllers\VisqualController');
    }
}
