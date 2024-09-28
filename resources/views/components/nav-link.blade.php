@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center justify-center p-2 bg-[#2AC49E] text-white rounded-full transition
duration-200 ease-in-out group'
: 'inline-flex items-center justify-center p-2 bg-white text-raisin-black rounded-full transition
duration-200 ease-in-out group';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>