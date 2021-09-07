<?php

namespace Artificertech\LaravelRenderable\Tests;

use Artificertech\LaravelRenderable\LaravelRenderableServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelRenderableServiceProvider::class,
            TestLaravelRenderableServiceProvider::class,
        ];
    }
}
