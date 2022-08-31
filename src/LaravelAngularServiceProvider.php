<?php
// Copyright (c) 2022 Jerry<midsmr@qq.com>.
namespace Midsmr\LaravelAngular;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAngularServiceProvider extends PackageServiceProvider
{
    public function registeringPackage()
    {
        $this->app->singleton(LaravelAngular::class, function () {
            return new LaravelAngular();
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-angular')
            ->hasViews()
            ->hasAssets();
    }
}
