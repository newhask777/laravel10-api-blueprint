<?php

namespace App\Services\Date\Provider;

use App\Services\Date\DateCheck;
use Illuminate\Support\ServiceProvider;

class DateCheckServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('dateCheck',DateCheck::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
