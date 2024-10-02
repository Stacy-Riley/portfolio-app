<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
DB::listen(function($query) {
    if ($query->time > 100) {  // Adjust the threshold to what you consider "slow" (in milliseconds)
        Log::info('Slow query detected: ' . $query->sql, [
            'bindings' => $query->bindings,
            'time' => $query->time,
        ]);
    }
});
class AppServiceProvider extends ServiceProvider
{

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
    }
}
