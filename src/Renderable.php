<?php

namespace Artificertech\LaravelRenderable;

use Illuminate\Contracts\View\View;

interface Renderable
{
    /**
     * Get the view that represents the renderable object
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View;

    /**
     * Defines the variable name that this renderable class
     * will have when used with the x-renderable blade component
     *
     * @return string
     */
    public function variableName(): string;
}
