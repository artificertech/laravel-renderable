<?php

namespace Artificertech\LaravelRenderable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Artificertech\LaravelRenderable\RenderableComponent component(String $callback, array $attributes = []) Create a new Renderable component
 *
 * @see Artificertech\LaravelRenderable\Renderable
 */
class Renderable extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'renderable';
    }
}
