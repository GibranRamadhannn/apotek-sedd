<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-3 py-2 bg-white border-2
    border-button2 rounded-lg font-meidum text-xs text-dark-gray hover:border-button
    focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
    duration-150']) }}>
    {{ $slot }}
</button>