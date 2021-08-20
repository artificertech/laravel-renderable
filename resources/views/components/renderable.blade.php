@props(['renderable'])

@php
$renderableData = array_merge($__data, ['attributes' => $attributes, $renderable->variableName() => $renderable]);

foreach ($__laravel_slots as $key => $value) {
    if ($key == '__default') {
        $key = 'slot';
    }
    $renderableData[$key] = $value;
}
@endphp

{!! $renderable->render()->with($renderableData) !!}
