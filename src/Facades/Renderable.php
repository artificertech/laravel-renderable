<?php

namespace Artificertech\LaravelRenderable\Facades;

use Illuminate\Support\Facades\Facade;

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
