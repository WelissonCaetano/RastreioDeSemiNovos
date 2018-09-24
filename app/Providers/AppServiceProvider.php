<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\rastreio\IrastreioRepo',
            'App\Repositories\rastreio\rastreioRepo'
        );
        $this->app->bind(
            'App\Repositories\Automovel\IAutomovelRepo',
            'App\Repositories\Automovel\AutomovelRepo'
        );
    }
}
