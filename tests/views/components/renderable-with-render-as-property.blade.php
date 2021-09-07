@props(['testRenderable'])

test_renderable_is_instance_of_TestRenderable:
{{ $testRenderable instanceof \Artificertech\LaravelRenderable\Tests\TestRenderable ? 'true' : 'false' }}
