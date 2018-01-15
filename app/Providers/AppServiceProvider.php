<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use BaseRepo;
use DbRepo;

use CryptoRepo;
use WalletRepo;
use OrderRepo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */


    public function boot()
    {
       Schema::defaultStringLength(191);    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BaseRepo::class, DbRepo::class);
        $this->app->singleton(BaseRepo::class, CryptoRepository::class);
        $this->app->singleton(BaseRepo::class, WalletRepo::class);
        $this->app->singleton(BaseRepo::class, OrderRepo::class);
    }
}
