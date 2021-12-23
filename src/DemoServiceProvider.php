<?php
namespace dat\demo;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     */
    public function register()
    {
        //
        $this->mergeConfigFrom(__DIR__.'/config2.php', 'blogpackage');

    }

    public function boot()
    {
        //
//        dd('Kiểm tra Package');
        $modulePath = __DIR__ . '/../demo/';
        $moduleName = 'Demo';

        // boot route
//        if (File::exists($modulePath."routes/routes.php")) {
//            $this->loadRoutesFrom($modulePath."/routes/routes.php");
//        }
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
//        $this->publishes([
//            __DIR__.'/resources/assets' => public_path('blogpackage'),
//        ], 'assets');

        if ($this->app->runningInConsole()) {
            // Publish assets
            $this->publishes([
                __DIR__.'/resources/assets' => public_path('blogpackage'),
            ], 'assets');

            $this->publishes([
                __DIR__ . '/config2.php' => config_path('config2.php'),
            ], 'config');
            $this->publishes([
                __DIR__.'/resources/views' => resource_path('views/vendor/datdemo'),
            ], 'views');
        }

        $this->loadViewsFrom(__DIR__.'/resources/views', 'DatView');

    }
}
