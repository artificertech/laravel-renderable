@props(['renderable'])

{{ $renderable->render()->with($attributes->getAttributes())->with('attributes', $attributes)->with($renderable->variableName(), $renderable) }}
