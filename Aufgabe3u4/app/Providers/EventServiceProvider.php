<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Beispiel-Events und Listener, wenn benötigt
    ];

    public function boot(): void
    {
        parent::boot();
        // Zusätzliche Event-Registrierungen, wenn benötigt
    }
}
