<?php

namespace App\Providers;

use App\Http\ViewComposers as V;
use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composers([
            V\LinkJuicesComposer::class => 'common.linkJuice',
            V\BreadCrumbComposer::class => [
                'detail_hospital.index',
                'detail_hospital.access',
                'detail_hospital.calendar',
                'detail_hospital.photo',
                'detail_hospital.course.index',
                'detail_hospital.course.detail',
            ]
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
