<?php

namespace Artificertech\LaravelRenderable\Tests\Unit;

use Artificertech\LaravelRenderable\Renderable;
use Artificertech\LaravelRenderable\RenderableComponent;
use Artificertech\LaravelRenderable\Tests\TestCase;

class RenderableTest extends TestCase
{
    /** @test */
    public function component_function_returns_instance_of_renderable_component()
    {
        $this->assertInstanceOf(
            RenderableComponent::class,
            (new Renderable)
                ->component('laravel-renderable-testing::renderable-with-props')
        );

        $this->assertInstanceOf(
            RenderableComponent::class,
            (new Renderable)
                ->component(
                    'laravel-renderable-testing::renderable-with-props',
                    [
                        'id' => 'with-props',
                    ]
                )
        );
    }
}
