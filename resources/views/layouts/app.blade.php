<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Apotek by SEDD - @yield('title')</title>
    {{--
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="{{ asset('js/pelanggan-pos.js') }}"></script>
    <script defer src="{{ asset('js/add-to-cart-pos.js') }}"></script>
    <script defer src="{{ asset('js/tabs-stock.js') }}"></script>
    <script defer src="{{ asset('js/avoid-close-modal-alert-form.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-bg">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="flex justify-start items-center">
            {{-- Header label --}}
            <div class="max-w-7xl p-6 sm:px-5 lg:px-7">
                {{ $header }}
            </div>
            <div class="h-6 border-r-2 border-dark-gray"></div>
            {{-- Breadcrumbs --}}
            <div class="p-4 leading-tight">
                @isset($breadcrumbs)
                @include('layouts.breadcrumb')
                @endisset
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        {{-- Footer --}}
        @include('layouts.footer')
    </div>
</body>

</html>