<?php

namespace Artificertech\LaravelRenderable\Tests;

use Illuminate\Support\ServiceProvider;

class TestLaravelRenderableServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'laravel-renderable-testing');
    }
}
