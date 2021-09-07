<?php

namespace Artificertech\LaravelRenderable;

use Artificertech\LaravelRenderable\Concerns\IsRenderable;
use Artificertech\LaravelRenderable\Contracts\Renderable;

class RenderableComponent implements Renderable
{
    use IsRenderable;

    /**
     * The blade component that will be rendered
     *
     * @var string
     */
    public string $component;

    public function __construct($component, $attributes = [])
    {
        $this->component = $component;

        $this->renderableAttributes = $attributes;
    }
}
