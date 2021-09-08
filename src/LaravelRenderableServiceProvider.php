<?php

namespace Artificertech\LaravelRenderable;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelRenderableServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-renderable');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    public function register()
    {
        // Register the service the package provides.
        $this->app->singleton('renderable', function ($app) {
            return new Renderable;
        });

        $this->registerTagCompiler();
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Registering package commands.
        $this->commands([\Artificertech\LaravelRenderable\Console\Commands\MakeRenderableCommand::class]);
    }

    protected function registerTagCompiler()
    {
        if (method_exists($this->app['blade.compiler'], 'precompiler')) {
            $this->app['blade.compiler']->precompiler(function ($string) {
                return app(RenderableTagCompiler::class, ['aliases' => ['renderable' => 'laravel-renderable::components.renderable']])->compile($string);
            });
        }
    }
}
