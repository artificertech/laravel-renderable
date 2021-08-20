<x-renderable :renderable="$renderable" staticAttribute="test" :dynamicAttribute="'test'" staticAttribute2="test"
    :dynamicAttribute2="'test'">
    <x-slot name="extraSlot">
        <div>Extra Slot Content</div>
    </x-slot>

    <div>Default Slot Content</div>
</x-renderable>
