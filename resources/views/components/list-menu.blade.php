<li {{ $attributes->merge(['class'=>'hover:bg-button2 hover:shadow-sm hover:border-grayish-blue transition duration-150
    rounded-xl flex items-center justify-center border-grayish-blue group']) }}>
    <a {{ $attributes->merge(['class'=>'w-full p-3 text-grayish-cyan transition duration-75
        hover:text-white
        dark:text-white dark:hover:bg-gray-700 text-sm font-medium']) }}>
        {{ $slot }}
    </a>
</li>