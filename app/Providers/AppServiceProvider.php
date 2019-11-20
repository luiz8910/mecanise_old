<?php

namespace App\Providers;

use App\Traits\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    use Config;
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

        Schema::defaultStringLength(191);

        view()->composer('*', function ($view){

            if(Auth::check())
            {
                $user = Auth::user();

                $person = $user->person;

                $person->first_name = $this->first_name($person->name);

                $person->initials = $this->initials($person->name);

                $view->with('person', $person);
            }
        });
    }
}
