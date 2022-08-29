<?php
// Copyright (c) 2022 Jerry<midsmr@qq.com>.
namespace Midsmr\LaravelAngular;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelAngularServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-angular')
            ->hasViews()
            ->hasAssets();
    }
}
