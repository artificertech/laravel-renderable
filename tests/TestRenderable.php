<?php

namespace Artificertech\LaravelRenderable\Tests;

use Artificertech\LaravelRenderable\RenderableComponent;

class TestRenderable extends RenderableComponent
{
    /**
     * Variable name this object will have in the rendered component.
     *
     * @var string
     */
    public string $renderAs = 'testRenderable';
}
