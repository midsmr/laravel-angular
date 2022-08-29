<?php
// Copyright (c) 2022 Jerry<midsmr@qq.com>.
namespace Midsmr\LaravelAngular\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Midsmr\LaravelAngular\LaravelAngular
 */
class LaravelAngular extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Midsmr\LaravelAngular\LaravelAngular::class;
    }
}
