<?php

namespace Artificertech\LaravelRenderable\Tests\Unit;

use Artificertech\LaravelRenderable\Concerns\IsRenderable;
use Artificertech\LaravelRenderable\Contracts\Renderable;
use Artificertech\LaravelRenderable\RenderableComponent;
use Artificertech\LaravelRenderable\Tests\TestCase;

class RenderableComponentTest extends TestCase
{
    /** @test */
    public function renderable_component_implements_renderable_interface()
    {
        $component = new RenderableComponent('laravel-renderable-testing::renderable-with-props');

        $this->assertTrue($component instanceof Renderable, 'RenderableComponent must impliment Renderable contract');
    }

    /** @test */
    public function renderable_component_uses_isrenderable_trait()
    {
        $component = new RenderableComponent('laravel-renderable-testing::renderable-with-props');

        $this->assertTrue(
            in_array(
                IsRenderable::class,
                class_uses($component)
            ),
            'RenderableComponent must use IsRenderable trait'
        );
    }
}
