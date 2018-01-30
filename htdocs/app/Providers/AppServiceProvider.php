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
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
        \App\Repositories\User\IUser::class,
        \App\Repositories\User\UserRepository::class);
        
        $this->app->singleton(
        \App\Repositories\Yometer\IYomerter::class,
        \App\Repositories\Yometer\YomerterRepository::class);
    }
}
