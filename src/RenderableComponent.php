<?php

namespace Artificertech\LaravelRenderable;

use Artificertech\LaravelRenderable\Concerns\IsRenderable;
use Artificertech\LaravelRenderable\Contracts\Renderable;

class RenderableComponent implements Renderable
{
    use IsRenderable;

    /**
     * The blade component that will be rendered.
     *
     * @var string
     */
    public string $component;

    /**
     * Create a new Renderable component.
     *
     * @param string $component the blade component string.
     * @param array $attributes the attributes that will be passed to the blade component.
     */
    public function __construct(string $component, $attributes = [])
    {
        $this->component = $component;

        $this->renderableAttributes = $attributes;
    }
}
