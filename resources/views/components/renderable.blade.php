@props(['renderable'])

@php
$attributes = $attributes->merge($renderable->renderableAttributes());

if (!empty($renderable->renderAs)) {
    $attributes = $attributes->merge([$renderable->renderAs => $renderable]);
}
@endphp

<x-dynamic-component :component="$renderable->component()" :attributes="$attributes">

    @foreach ($__laravel_slots as $key => $value)
        @if ($key == '__default')
            @continue
        @endif

        <x-slot :name="$key">
            {{ $value }}
        </x-slot>
    @endforeach

    {{ $slot ?? '' }}
</x-dynamic-component>
