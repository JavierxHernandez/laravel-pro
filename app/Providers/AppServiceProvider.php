<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
        View::composer(['posts.index','posts.create'], 'App\view\Composers\PostComposer');

        View::share('prueba', 'Mensaje de prueba en AppServiceProvider'); // Se comparte en todas las vistas
    }
}
