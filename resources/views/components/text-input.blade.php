{{-- Component Properties begin:: --}}
@props(['disabled' => false]) {{-- Input Action default is Active --}}
{{-- Component Properties ::end --}}

{{-- Input Component begin:: --}}
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-3 border-light-grayish-blue bg-light-gray
border-2
text-grayish-cyan focus:border-button2 focus:ring-bright-turqoise rounded-xl shadow-sm
placeholder:text-grayish-blue']) !!}>
{{-- Input Component ::end --}}