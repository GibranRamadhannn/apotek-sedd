@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center justify-center p-3 w-24 bg-black rounded-xl text-xs font-normal text-white transition
duration-150 ease-in-out'
: 'inline-flex items-center justify-center p-3 w-24 bg-white rounded-xl text-xs font-normal text-dark-gray
hover:text-black transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>