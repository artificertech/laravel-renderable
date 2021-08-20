<?php

namespace Artificertech\LaravelRenderable\Tests;

use Artificertech\LaravelRenderable\Tests\Stubs\TestRenderable;
use Illuminate\Support\Facades\View;

class RenderableComponentTest extends TestCase
{
    /** @test */
    public function renderable_with_props_is_created_succesfully()
    {
        $result = trim(
            View::file(__DIR__ . '/stubs/renderable-container.blade.php')
                ->with(
                    'renderable',
                    new TestRenderable(__DIR__ . '/stubs/renderable-with-props.blade.php')
                )->render()
        );

        $this->assertStringNotContainsString('false', $result);
    }

    /** @test */
    public function renderable_without_props_is_created_succesfully()
    {
        $result = trim(
            View::file(__DIR__ . '/stubs/renderable-container.blade.php')
                ->with(
                    'renderable',
                    new TestRenderable(__DIR__ . '/stubs/renderable-without-props.blade.php')
                )->render()
        );

        $this->assertStringNotContainsString('false', $result);
    }
}
