<?php

namespace Artificertech\LaravelRenderable;

use Illuminate\Support\Traits\Macroable;

class Renderable
{
    use Macroable;

    /**
     * Create a new Renderable component.
     *
     * @param string $component the blade component string
     * @param array $attributes the attributes that will be passed to the blade component
     * @return RenderableComponent
     */
    public function component(string $component, $attributes = [])
    {
        return new RenderableComponent($component, $attributes);
    }
}
