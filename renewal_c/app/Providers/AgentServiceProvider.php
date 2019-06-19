<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider,
    Jenssegers\Agent\Agent;

class AgentServiceProvider extends ServiceProvider
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
        //
        $this->app->singleton('agent', function ($app) {
            return new Agent($app['request']->server->all());
        });
    }
}
