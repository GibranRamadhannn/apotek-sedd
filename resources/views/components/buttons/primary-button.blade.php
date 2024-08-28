<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center p-3 bg-button
    bg-opacity-90 border border-transparent rounded-lg font-semibold text-sm text-white uppercase
    hover:bg-button2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>