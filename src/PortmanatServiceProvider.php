<?php

namespace Alishov\Portmanat;

use Illuminate\Support\ServiceProvider;

class PortmanatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Migration');
        $this->loadRoutesFrom(__DIR__.'/Routes/routes.php');
        $this->publishes([
            __DIR__.'/Config/portmanat.php' => config_path('portmanat.php'),
        ]);
        $this->publishes([
            __DIR__.'/Controller/PortmanatController.php' => app_path('Http/Controllers/PortmanatController.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('portmanat', function () {
            return new \Alishov\Portmanat\Portmanat;
        });
    }
}
