<?php

namespace Mustafaalansary\laravelSpatiePermissionUuid;

use Illuminate\Support\ServiceProvider;

class LaravelSpatiePermissionUuidServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\Install::class,
        ]);
    }


}
