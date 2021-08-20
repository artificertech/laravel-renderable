@props(['action', 'staticAttribute', 'dynamicAttribute'])

staticAttribute_is_a_variable:
{{ isset($staticAttribute) && $staticAttribute === 'test' ? 'true' : 'false' }}

dynamicAttribute_is_a_variable:
{{ isset($dynamicAttribute) && $dynamicAttribute === 'test' ? 'true' : 'false' }}

staticAttribute2_is_not_a_variable:
{{ isset($staticAttribute2) ? 'false' : 'true' }}

dynamicAttribute2_is_not_a_variable:
{{ isset($dynamicAttribute2) ? 'false' : 'true' }}

attributes_variable_exists:
{{ isset($attributes) ? 'true' : 'false' }}

attributes_instance_of_attributesBag:
{{ is_a($attributes, '\Illuminate\View\ComponentAttributeBag') ? 'true' : 'false' }}

staticAttribute_is_not_in_attributes_bag:
{{ $attributes->has('staticAttribute') ? 'false' : 'true' }}

dynamicAttribute_is_not_in_attributes_bag:
{{ $attributes->has('dynamicAttribute') ? 'false' : 'true' }}

staticAttribute2_is_in_attributes_bag:
{{ $attributes->has('staticAttribute2') ? 'true' : 'false' }}

dynamicAttribute2_is_in_attributes_bag:
{{ $attributes->has('dynamicAttribute2') ? 'true' : 'false' }}
