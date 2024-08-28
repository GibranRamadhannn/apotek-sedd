@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-2 border-light-gray text-dark-gray
bg-light-gray focus:border-button2 focus:ring-bright-turqoise rounded-lg shadow-sm placeholder:text-grayish-blue']) !!}>