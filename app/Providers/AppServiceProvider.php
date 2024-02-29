<?php

namespace App\Providers;

use App\Models\Vehicle;
use App\Observers\VehicleObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
    }

    public function boot(): void
    {
        Vehicle::observe(VehicleObserver::class);
    }
}
