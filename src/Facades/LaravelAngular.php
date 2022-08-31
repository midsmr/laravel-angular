<?php
// Copyright (c) 2022 Jerry<midsmr@qq.com>.
namespace Midsmr\LaravelAngular\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Midsmr\LaravelAngular\LaravelAngular
 * @method static string helloWorld()
 */
class LaravelAngular extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Midsmr\LaravelAngular\LaravelAngular::class;
    }
}
