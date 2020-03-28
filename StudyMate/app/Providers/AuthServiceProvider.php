<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //gate for the admin enviorment
        Gate::define('admin', function ($user) 
        {
            if ( $user->role == 'admin') {
                return true;
            }
            return false;
        });

        //gate for the deadline manager
        Gate::define('deadline', function ($user) 
        {
            if ( $user->role == 'deadline') {
                return true;
            }
            return false;
        });
    }
}
