<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
// use Spatie\Permission\Traits\HasRoles;
class AppServiceProvider extends ServiceProvider
{
    // use HasRoles;
    //this line

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
        //
        // Implicitly grant "Super Admin" role all permissions
    // This works in the app by using gate-related functions like auth()->user->can() and @can()
    Gate::before(function ($user, $ability) {
        return $user->hasRole('superadmin') ? true : null;
    });
    }
}
