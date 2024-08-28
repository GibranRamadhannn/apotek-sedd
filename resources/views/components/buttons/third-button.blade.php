<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-3 py-2 bg-button
    bg-opacity-90 border border-transparent rounded-lg font-medium text-xs text-white
    hover:bg-button2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>