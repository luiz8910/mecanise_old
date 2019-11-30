<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PersonRepository::class, \App\Repositories\PersonRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\WorkshopRepository::class, \App\Repositories\WorkshopRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\RolesRepository::class, \App\Repositories\RolesRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\VehicleRepository::class, \App\Repositories\VehicleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CarRepository::class, \App\Repositories\CarRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
