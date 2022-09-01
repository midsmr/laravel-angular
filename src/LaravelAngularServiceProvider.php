<?php
// Copyright (c) 2022 Jerry<midsmr@qq.com>.
namespace Midsmr\LaravelAngular;

use Illuminate\Support\ServiceProvider;

class LaravelAngularServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/views' => base_path("resources/views/vendor/angular"),
            ], "angular-views");

            $this->publishes([
                __DIR__ . '/../resources/dist' => public_path("vendor/angular"),
            ], "angular-assets");
        }
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'angular');
    }
}
