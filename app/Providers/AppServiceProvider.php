<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\MaintenanceModeManager;
use Illuminate\Contracts\Foundation\MaintenanceMode;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MaintenanceMode::class, function ($app) {
            return $app->make(MaintenanceModeManager::class);
        });
    }

    public function boot()
    {
        //
    }
}
