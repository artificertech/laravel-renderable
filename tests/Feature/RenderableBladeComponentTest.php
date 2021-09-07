<?php

namespace Artificertech\LaravelRenderable\Tests\Feature;

use Artificertech\LaravelRenderable\Facades\Renderable;
use Artificertech\LaravelRenderable\Tests\TestCase;
use Artificertech\LaravelRenderable\Tests\TestRenderable;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

class RenderableBladeComponentTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function component_with_props_is_created_succesfully()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            ['renderable' => Renderable::component('laravel-renderable-testing::renderable-with-props')]
        )->assertDontSee('false');
    }

    /** @test */
    public function component_without_props_is_created_succesfully()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            ['renderable' => Renderable::component('laravel-renderable-testing::renderable-without-props')]
        )->assertDontSee('false');
    }

    /** @test */
    public function component_with_props_is_renders_slots()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            ['renderable' => Renderable::component('laravel-renderable-testing::renderable-with-props')]
        )->assertSeeInOrder([
            '<div>Extra Slot: <div>Extra Slot Content</div></div>',
            '<div>Default Slot: <div>Default Slot Content</div></div>'
        ], false);
    }

    /** @test */
    public function component_without_props_renders_slots()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            ['renderable' => Renderable::component('laravel-renderable-testing::renderable-without-props')]
        )->assertSeeInOrder([
            '<div>Extra Slot: <div>Extra Slot Content</div></div>',
            '<div>Default Slot: <div>Default Slot Content</div></div>'
        ], false);
    }

    /** @test */
    public function component_with_props_recieves_class_attributes()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            [
                'renderable' => Renderable::component(
                    'laravel-renderable-testing::renderable-with-props',
                    [
                        'classAttribute' => 'classAttribute',
                        'classAttribute2' => 'classAttribute2'
                    ]
                )
            ]
        )->assertSee(
            'classAttribute: classAttribute'
        )->assertSee(
            '<div classAttribute2="classAttribute2" staticAttribute2="test" dynamicAttribute2="test">',
            false
        );
    }

    /** @test */
    public function component_without_props_recieves_class_attributes()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            [
                'renderable' => Renderable::component(
                    'laravel-renderable-testing::renderable-without-props',
                    [
                        'classAttribute' => 'classAttribute',
                        'classAttribute2' => 'classAttribute2'
                    ]
                )
            ]
        )->assertSee(
            'classAttribute: classAttribute'
        )->assertSee(
            '<div classAttribute="classAttribute" classAttribute2="classAttribute2" staticAttribute="test" dynamicAttribute="test" staticAttribute2="test" dynamicAttribute2="test">',
            false
        );
    }

    /** @test */
    public function blade_attributes_override_class_attributes_on_component_with_props()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            [
                'renderable' => Renderable::component(
                    'laravel-renderable-testing::renderable-with-props',
                    [
                        'classAttribute' => 'classAttribute',
                        'classAttribute2' => 'classAttribute2',
                        'dynamicAttribute2' => "overriden"
                    ]
                )
            ]
        )->assertSee(
            '<div classAttribute2="classAttribute2" dynamicAttribute2="test" staticAttribute2="test">',
            false
        );
    }

    /** @test */
    public function blade_attributes_override_class_attributes_on_component_without_props()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            [
                'renderable' => Renderable::component(
                    'laravel-renderable-testing::renderable-without-props',
                    [
                        'classAttribute' => 'classAttribute',
                        'classAttribute2' => 'classAttribute2',
                        'dynamicAttribute2' => "overriden"
                    ]
                )
            ]
        )->assertSee(
            '<div classAttribute="classAttribute" classAttribute2="classAttribute2" dynamicAttribute2="test" staticAttribute="test" dynamicAttribute="test" staticAttribute2="test">',
            false
        );
    }

    /** @test */
    public function renderable_class_with_renderas_property_is_available_to_component_with_props()
    {
        $this->view(
            'laravel-renderable-testing::renderable-container',
            [
                'renderable' => new TestRenderable('laravel-renderable-testing::renderable-with-render-as-property')
            ]
        )->assertDontSee('false');
    }
}
