<?php

namespace App\Providers;


use App\Models\User;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::useBootstrap();


        Gate::define('is_etudiant', function (User $user) {

            return $user->role->name == "etudiant";
        });

        Gate::define('is_admin', function (User $user) {
            return $user->role->name == "administrateur";
        });
    }
}
