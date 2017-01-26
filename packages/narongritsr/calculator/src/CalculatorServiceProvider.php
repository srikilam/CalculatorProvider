<?php

namespace Narongritsr\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
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
        $this->publishes([__DIR__.'/views' => base_path('resources/views/Narongritsr/Calculator'),]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Narongritsr\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views','calculator');
    }
}
