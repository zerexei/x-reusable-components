@props([
    'placeholder' => ''
])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
