<?php

namespace App\Providers;

use App\Models\OffresDemploies;
use App\Observers\OffresDemploiesObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        OffresDemploies::observe(OffresDemploiesObserver::class);
       
    }
}
