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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins antialiased">
    {{-- Code Start Here --}}
    <div class=" bg-white grid grid-cols-2 gap-2">
        {{-- Login Panel Start --}}
        <div class="h-screen p-10 rounded-3xl">
            <div class="rounded-3xl h-full p-2 overflow-hidden flex flex-col gap-2 justify-center items-center">
                {{-- Top Start --}}
                <div class="justify-center items-center flex flex-col p-2 border-b-2 border-light-grayish-blue w-2/3">
                    <div class="w-full">
                        {{-- Logo --}}
                        <div class="flex justify-start items-center">
                            <x-application-logo />
                            <h1 class="font-semibold text-2xl text-black">Apotek by SEDD</h1>
                        </div>
                        {{-- Label --}}
                        <h1 class="font-bold text-2xl text-raisin-black">@yield('label')</h1>
                        {{-- Register --}}
                        <div>
                            <h1 class="font-medium text-base text-grayish-cyan">@yield('switch-teks')
                                <span>
                                    <a href="@yield('switch-route')"
                                        class="hover:text-dark-lime-green text-raisin-black font-medium text-base">@yield('switch-link')
                                    </a>
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
                {{-- Top End --}}

                {{-- Top Start --}}
                <div class="justify-center items-center p-2 flex w-2/3">
                    {{-- Forms Login --}}
                    <div class="w-full">
                        {{ $slot }}
                    </div>
                </div>
                {{-- Top End --}}
            </div>
        </div>
        {{-- Login Panel Start --}}

        {{-- Image Panel Start --}}
        <div class="p-3 rounded-3xl">
            <div class="rounded-3xl bg-cover h-full" style="background-image: url('assets/img/login-bg.jpg')">
                {{-- Quotes Start --}}
                <div class="p-4">
                    <div class="text-start p-4 w-full">
                        <label class="text-white font-bold text-5xl font-playfair-display italic">Poisons
                            and
                            Medicine
                        </label>
                        <p class="text-white font-semibold text-3xl text-end">are often the same thing, given in
                            different proportions
                        </p>
                    </div>
                </div>
                {{-- Quotes End --}}
            </div>
        </div>
        {{-- Image Panel End --}}
    </div>
    {{-- Code End --}}
</body>

</html>