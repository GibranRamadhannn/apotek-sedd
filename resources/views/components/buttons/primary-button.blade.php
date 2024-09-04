<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-blue-500 p-3 rounded-xl font-semibold
    text-sm text-white
    hover:bg-button2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>