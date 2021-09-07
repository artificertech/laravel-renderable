<?php

namespace Artificertech\LaravelRenderable;

use Illuminate\Support\Traits\Macroable;

class Renderable
{
    use Macroable;

    public function component($component, $attributes = [])
    {
        return new RenderableComponent($component, $attributes);
    }
}
