<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="grid grid-cols-3 bg-white">
        <div class="w-full min-h-screen shadow-lg">
            <div class="p-8">
                {{-- Header --}}
                <div class="flex justify-start items-center m-2">
                    <x-application-logo />
                    <h1 class="font-semibold text-lg text-black">Apotek by SEDD</h1>
                </div>

                {{-- Login Form --}}
                <div class="justify-start items-center m-2">
                    <div class="p-2">
                        {{-- Label --}}
                        <h1 class="font-bold text-2xl text-black">@yield('label')</h1>
                        {{-- Register --}}
                        <div>
                            <h1 class="font-medium text-base text-grayish-cyan">@yield('switch-teks')
                                <span>
                                    <a href="@yield('switch-route')"
                                        class="hover:text-button2 text-button font-medium text-base">@yield('switch-link')
                                    </a>
                                </span>
                            </h1>
                        </div>
                        {{-- Content --}}
                        <div class="mb-8 mt-8">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Image --}}
        <div class="w-full h-auto bg-gray-400 col-span-2 bg-cover flex flex-col justify-end items-center"
            style="background-image: url('assets/img/login-bg.jpg')">
            <div class="p-2">
                <div class="bg-opacity-20 bg-black">
                    <div class="p-2">
                        {{-- Quotes --}}
                        <p class="text-white font-bold text-5xl">“Poisons and medicine are often the same substance
                            given with different intents.”
                        </p>
                        {{-- Quoter --}}
                        <div class="flex justify-between items-center mt-4">
                            <div>
                                <p class="text-white font-medium text-2xl">Peter Mere Latham</p>
                            </div>
                            <div>
                                <p class="text-white font-medium text-2xl">19 Century English Physician and Educator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>