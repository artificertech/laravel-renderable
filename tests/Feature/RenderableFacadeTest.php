<?php

namespace Artificertech\LaravelRenderable\Tests\Feature;

use Artificertech\LaravelRenderable\Renderable;
use Artificertech\LaravelRenderable\Tests\TestCase;

class RenderableFacadeTest extends TestCase
{
    /** @test */
    public function renderable_facade_returns_renderable_object()
    {
        $this->assertInstanceOf(Renderable::class, app('renderable'));
    }
}
