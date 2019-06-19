<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\ApiRequestService;

class ApiRequestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ApiRequest', function($app)
        {
            return new ApiRequestService();
        });
    }
}
