<?php

namespace Foostart\Sample;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
      include __DIR__ . '/routes/routes.php';
        $this->app->make('Foostart\Sample\SampleController');
        $this->loadViewsFrom(__DIR__.'/views', 'sample'); 
         $this->publishes([__DIR__.'/public' => public_path('foostart'),], 'public');   
            
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
