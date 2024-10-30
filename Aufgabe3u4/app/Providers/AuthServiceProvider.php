<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Mappings für Models und Policies
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
