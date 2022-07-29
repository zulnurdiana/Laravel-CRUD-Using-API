<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        // template paginator untuk boostrap
        Paginator::useBootstrapFive();

        // gate yang hanya bisa di akses oleh username admin
        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
    }
}
