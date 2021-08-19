<?php

namespace Artificertech\LaravelRenderable;

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
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'artificertech');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'artificertech');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-renderable.php', 'laravel-renderable');

        // Register the service the package provides.
        $this->app->singleton('laravel-renderable', function ($app) {
            return new LaravelRenderable;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-renderable'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel-renderable.php' => config_path('laravel-renderable.php'),
        ], 'laravel-renderable.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/artificertech'),
        ], 'laravel-renderable.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/artificertech'),
        ], 'laravel-renderable.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/artificertech'),
        ], 'laravel-renderable.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
