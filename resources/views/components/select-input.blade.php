{{-- Component Properties begin:: --}}
@props(['disabled' => false]) {{-- Input Action default is Active --}}
{{-- Component Properties ::end --}}

{{-- Input Component begin:: --}}
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' =>"rounded-xl p-3
    border-light-grayish-blue bg-light-gray border-2
    text-grayish-cyan shadow-sm focus:border-button2
    focus:ring-bright-turqoise placeholder:text-grayish-blue"]) !!}>
    {{ $slot }}
</select>
{{-- Input Component ::end --}}