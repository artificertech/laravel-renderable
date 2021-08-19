@props(['renderable'])

@php
$renderableData = ['attributes' => $attributes, $renderable->variableName() => $renderable];

foreach ($__laravel_slots as $key => $value) {
    if ($key == '__default') {
        $key = 'slot';
    }
    $renderableData[$key] = $value;
}
@endphp

<div>
    {{ $renderable->render()->with($attributes->getAttributes())->with($renderableData) }}
</div>
