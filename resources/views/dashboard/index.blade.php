<x-app-layout>
    {{-- Header begin:: --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- Header ::end --}}
    {{-- Title Web Page begin:: --}}
    @section('title','Dashboard')
    {{-- Title Web Page ::end --}}

    {{-- Panel Status begin::--}}
    <div class="p-1">
        {{-- Layout begin:: --}}
        <div class="max-w-screen mx-auto">
            <div class="overflow-hidden rounded-xl">
                {{-- Card Layout begin:: --}}
                <div class="p-4 grid grid-cols-5 gap-2">

                    {{-- Revenue Card begin:: --}}
                    <div class="w-full rounded-2xl col-span-2 justify-center flex items-center p-3">
                        {{-- Content begin:: --}}
                        <div class="w-full h-full flex flex-col justify-between">
                            <label for="revenue" class="font-semibold text-2xl text-raisin-black">Revenue
                            </label>

                            <div class="flex-col justify-between items-start flex">
                                <h1 class="font-bold text-4xl text-raisin-black">Rp 1.500.000
                                </h1>
                                {{-- Filter Range Date begin:: --}}
                                <div class="flex items-center justify-start text-center gap-2">
                                    <p class="text-base font-semibold text-raisin-black font-poppins">
                                        Jun 1 -Aug 31, 2024
                                    </p>
                                    <button>
                                        <svg class="w-6 h-6 text-raisin-black hover:scale-110 hover:text-button2"
                                            viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.7502 3.56V2C16.7502 1.59 16.4102 1.25 16.0002 1.25C15.5902 1.25 15.2502 1.59 15.2502 2V3.5H8.75023V2C8.75023 1.59 8.41023 1.25 8.00023 1.25C7.59023 1.25 7.25023 1.59 7.25023 2V3.56C4.55023 3.81 3.24023 5.42 3.04023 7.81C3.02023 8.1 3.26023 8.34 3.54023 8.34H20.4602C20.7502 8.34 20.9902 8.09 20.9602 7.81C20.7602 5.42 19.4502 3.81 16.7502 3.56Z" />
                                            <path
                                                d="M20 9.83984H4C3.45 9.83984 3 10.2898 3 10.8398V16.9998C3 19.9998 4.5 21.9998 8 21.9998H16C19.5 21.9998 21 19.9998 21 16.9998V10.8398C21 10.2898 20.55 9.83984 20 9.83984ZM9.21 18.2098C9.11 18.2998 9 18.3698 8.88 18.4198C8.76 18.4698 8.63 18.4998 8.5 18.4998C8.37 18.4998 8.24 18.4698 8.12 18.4198C8 18.3698 7.89 18.2998 7.79 18.2098C7.61 18.0198 7.5 17.7598 7.5 17.4998C7.5 17.2398 7.61 16.9798 7.79 16.7898C7.89 16.6998 8 16.6298 8.12 16.5798C8.36 16.4798 8.64 16.4798 8.88 16.5798C9 16.6298 9.11 16.6998 9.21 16.7898C9.39 16.9798 9.5 17.2398 9.5 17.4998C9.5 17.7598 9.39 18.0198 9.21 18.2098ZM9.42 14.3798C9.37 14.4998 9.3 14.6098 9.21 14.7098C9.11 14.7998 9 14.8698 8.88 14.9198C8.76 14.9698 8.63 14.9998 8.5 14.9998C8.37 14.9998 8.24 14.9698 8.12 14.9198C8 14.8698 7.89 14.7998 7.79 14.7098C7.7 14.6098 7.63 14.4998 7.58 14.3798C7.53 14.2598 7.5 14.1298 7.5 13.9998C7.5 13.8698 7.53 13.7398 7.58 13.6198C7.63 13.4998 7.7 13.3898 7.79 13.2898C7.89 13.1998 8 13.1298 8.12 13.0798C8.36 12.9798 8.64 12.9798 8.88 13.0798C9 13.1298 9.11 13.1998 9.21 13.2898C9.3 13.3898 9.37 13.4998 9.42 13.6198C9.47 13.7398 9.5 13.8698 9.5 13.9998C9.5 14.1298 9.47 14.2598 9.42 14.3798ZM12.71 14.7098C12.61 14.7998 12.5 14.8698 12.38 14.9198C12.26 14.9698 12.13 14.9998 12 14.9998C11.87 14.9998 11.74 14.9698 11.62 14.9198C11.5 14.8698 11.39 14.7998 11.29 14.7098C11.11 14.5198 11 14.2598 11 13.9998C11 13.7398 11.11 13.4798 11.29 13.2898C11.39 13.1998 11.5 13.1298 11.62 13.0798C11.86 12.9698 12.14 12.9698 12.38 13.0798C12.5 13.1298 12.61 13.1998 12.71 13.2898C12.89 13.4798 13 13.7398 13 13.9998C13 14.2598 12.89 14.5198 12.71 14.7098Z" />
                                        </svg>
                                    </button>
                                </div>
                                {{-- Filter Range Date ::end --}}
                            </div>
                        </div>
                        {{-- Content ::end --}}
                    </div>
                    {{-- Revenue Card ::end--}}

                    {{-- Customers begin:: --}}
                    <div class="w-full rounded-2xl bg-black justify-center flex items-center p-3">
                        <div class="w-full h-full flex flex-col justify-between">
                            <label for="customers" class="font-semibold text-xl text-white">Customers
                            </label>
                            {{-- Content Start --}}
                            <div class="flex-col justify-between items-start flex">
                                <h1 class="font-bold text-3xl text-lime-green">1.200
                                </h1>
                                {{-- Filter Range Date Start --}}
                                <div class="flex items-center justify-start text-center gap-2">
                                    <p class="text-sm font-semibold text-grayish-magenta font-poppins">
                                        Jun 1 -Aug 31, 2024
                                    </p>
                                    <button>
                                        <svg class="w-6 h-6 text-grayish-magenta hover:scale-110 hover:text-lime-green"
                                            viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.7502 3.56V2C16.7502 1.59 16.4102 1.25 16.0002 1.25C15.5902 1.25 15.2502 1.59 15.2502 2V3.5H8.75023V2C8.75023 1.59 8.41023 1.25 8.00023 1.25C7.59023 1.25 7.25023 1.59 7.25023 2V3.56C4.55023 3.81 3.24023 5.42 3.04023 7.81C3.02023 8.1 3.26023 8.34 3.54023 8.34H20.4602C20.7502 8.34 20.9902 8.09 20.9602 7.81C20.7602 5.42 19.4502 3.81 16.7502 3.56Z" />
                                            <path
                                                d="M20 9.83984H4C3.45 9.83984 3 10.2898 3 10.8398V16.9998C3 19.9998 4.5 21.9998 8 21.9998H16C19.5 21.9998 21 19.9998 21 16.9998V10.8398C21 10.2898 20.55 9.83984 20 9.83984ZM9.21 18.2098C9.11 18.2998 9 18.3698 8.88 18.4198C8.76 18.4698 8.63 18.4998 8.5 18.4998C8.37 18.4998 8.24 18.4698 8.12 18.4198C8 18.3698 7.89 18.2998 7.79 18.2098C7.61 18.0198 7.5 17.7598 7.5 17.4998C7.5 17.2398 7.61 16.9798 7.79 16.7898C7.89 16.6998 8 16.6298 8.12 16.5798C8.36 16.4798 8.64 16.4798 8.88 16.5798C9 16.6298 9.11 16.6998 9.21 16.7898C9.39 16.9798 9.5 17.2398 9.5 17.4998C9.5 17.7598 9.39 18.0198 9.21 18.2098ZM9.42 14.3798C9.37 14.4998 9.3 14.6098 9.21 14.7098C9.11 14.7998 9 14.8698 8.88 14.9198C8.76 14.9698 8.63 14.9998 8.5 14.9998C8.37 14.9998 8.24 14.9698 8.12 14.9198C8 14.8698 7.89 14.7998 7.79 14.7098C7.7 14.6098 7.63 14.4998 7.58 14.3798C7.53 14.2598 7.5 14.1298 7.5 13.9998C7.5 13.8698 7.53 13.7398 7.58 13.6198C7.63 13.4998 7.7 13.3898 7.79 13.2898C7.89 13.1998 8 13.1298 8.12 13.0798C8.36 12.9798 8.64 12.9798 8.88 13.0798C9 13.1298 9.11 13.1998 9.21 13.2898C9.3 13.3898 9.37 13.4998 9.42 13.6198C9.47 13.7398 9.5 13.8698 9.5 13.9998C9.5 14.1298 9.47 14.2598 9.42 14.3798ZM12.71 14.7098C12.61 14.7998 12.5 14.8698 12.38 14.9198C12.26 14.9698 12.13 14.9998 12 14.9998C11.87 14.9998 11.74 14.9698 11.62 14.9198C11.5 14.8698 11.39 14.7998 11.29 14.7098C11.11 14.5198 11 14.2598 11 13.9998C11 13.7398 11.11 13.4798 11.29 13.2898C11.39 13.1998 11.5 13.1298 11.62 13.0798C11.86 12.9698 12.14 12.9698 12.38 13.0798C12.5 13.1298 12.61 13.1998 12.71 13.2898C12.89 13.4798 13 13.7398 13 13.9998C13 14.2598 12.89 14.5198 12.71 14.7098Z" />
                                        </svg>
                                    </button>
                                </div>
                                {{-- Filter Range Date End --}}
                            </div>
                            {{-- Content Start --}}
                        </div>
                    </div>
                    {{-- Customers ::end--}}

                    {{-- Total Products begin:: --}}
                    <div
                        class="w-full bg-white border-2 border-button shadow-sm rounded-2xl justify-center flex items-center p-3">
                        {{-- Content begin:: --}}
                        <div class="w-full h-full flex flex-col justify-between">
                            <div class="flex justify-between items-center">
                                {{-- Label --}}
                                <label for="totalProducts" class="font-semibold text-xl text-dark-gray">Total Products
                                </label>
                                {{-- Button See More --}}
                                <a href="{{ route('dashboard.produk.index') }}" title="See More">
                                    <svg class="w-7 h-7 hover:scale-110" viewBox="0 0 32 32"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="m0 0h32v32h-32z" />
                                            <path
                                                d="m19 1.73205081 7.8564065 4.53589838c1.8564064 1.07179677 3 3.05255889 3 5.19615241v9.0717968c0 2.1435935-1.1435936 4.1243556-3 5.1961524l-7.8564065 4.5358984c-1.8564065 1.0717968-4.1435935 1.0717968-6 0l-7.85640646-4.5358984c-1.85640646-1.0717968-3-3.0525589-3-5.1961524v-9.0717968c0-2.14359352 1.14359354-4.12435564 3-5.19615241l7.85640646-4.53589838c1.8564065-1.07179677 4.1435935-1.07179677 6 0zm4.0203166 9.82532719c-.259282-.4876385-.8647807-.672758-1.3524192-.4134761l-5.6794125 3.0187491-5.6793299-3.0187491c-.4876385-.2592819-1.09313718-.0741624-1.35241917.4134761-.25928198.4876385-.07416246 1.0931371.41347603 1.3524191l5.61827304 2.9868539.0000413 6.7689186c0 .5522848.4477153 1 1 1 .5522848 0 1-.4477152 1-1l-.0000413-6.7689186 5.6183556-2.9868539c.4876385-.259282.6727581-.8647806.4134761-1.3524191z"
                                                fill="#0aa1fa" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            {{-- Data Products --}}
                            <div class="flex-col justify-between items-start flex">
                                <h1 class="font-bold text-3xl text-raisin-black">{{ $totalProduk
                                    }}
                                </h1>
                                <p class="text-base font-semibold m-1 text-grayish-magenta">Saved Products</p>
                            </div>
                            {{-- Data Products --}}
                        </div>
                        {{-- Content ::end --}}
                    </div>
                    {{-- Total Products ::end --}}

                    {{-- Total Return begin:: --}}
                    <div
                        class="w-full bg-white border-2 border-soft-red shadow-sm rounded-2xl justify-center flex items-center p-3">
                        <div class="w-full h-full flex flex-col justify-between">
                            <div class="flex justify-between items-center">
                                <label for="totalReturns" class="font-semibold text-xl text-dark-gray">Total Returns
                                </label>
                                <button>
                                    <svg class="hover:scale-110 w-7 h-7" viewBox="0 0 48 48"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h48v48H0z" fill="none" />
                                        <g id="Shopicon">
                                            <path d="M10,22v2c0,7.72,6.28,14,14,14s14-6.28,14-14s-6.28-14-14-14h-4V4l-8,8l8,8v-6h4c5.514,0,10,4.486,10,10s-4.486,10-10,10
                                        s-10-4.486-10-10v-2H10z" fill="#fa5151" />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            {{-- Content Start --}}
                            <div class="flex-col justify-between items-start flex">
                                <h1 class="font-bold text-3xl text-raisin-black">200
                                </h1>
                                {{-- Filter Range Date Start --}}
                                <div class="flex items-center justify-start text-center gap-2">
                                    <p class="text-sm font-semibold text-grayish-magenta font-poppins">
                                        Jun 1 -Aug 31, 2024
                                    </p>
                                    <button>
                                        <svg class="w-6 h-6 text-grayish-magenta hover:scale-110 hover:text-soft-red"
                                            viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.7502 3.56V2C16.7502 1.59 16.4102 1.25 16.0002 1.25C15.5902 1.25 15.2502 1.59 15.2502 2V3.5H8.75023V2C8.75023 1.59 8.41023 1.25 8.00023 1.25C7.59023 1.25 7.25023 1.59 7.25023 2V3.56C4.55023 3.81 3.24023 5.42 3.04023 7.81C3.02023 8.1 3.26023 8.34 3.54023 8.34H20.4602C20.7502 8.34 20.9902 8.09 20.9602 7.81C20.7602 5.42 19.4502 3.81 16.7502 3.56Z" />
                                            <path
                                                d="M20 9.83984H4C3.45 9.83984 3 10.2898 3 10.8398V16.9998C3 19.9998 4.5 21.9998 8 21.9998H16C19.5 21.9998 21 19.9998 21 16.9998V10.8398C21 10.2898 20.55 9.83984 20 9.83984ZM9.21 18.2098C9.11 18.2998 9 18.3698 8.88 18.4198C8.76 18.4698 8.63 18.4998 8.5 18.4998C8.37 18.4998 8.24 18.4698 8.12 18.4198C8 18.3698 7.89 18.2998 7.79 18.2098C7.61 18.0198 7.5 17.7598 7.5 17.4998C7.5 17.2398 7.61 16.9798 7.79 16.7898C7.89 16.6998 8 16.6298 8.12 16.5798C8.36 16.4798 8.64 16.4798 8.88 16.5798C9 16.6298 9.11 16.6998 9.21 16.7898C9.39 16.9798 9.5 17.2398 9.5 17.4998C9.5 17.7598 9.39 18.0198 9.21 18.2098ZM9.42 14.3798C9.37 14.4998 9.3 14.6098 9.21 14.7098C9.11 14.7998 9 14.8698 8.88 14.9198C8.76 14.9698 8.63 14.9998 8.5 14.9998C8.37 14.9998 8.24 14.9698 8.12 14.9198C8 14.8698 7.89 14.7998 7.79 14.7098C7.7 14.6098 7.63 14.4998 7.58 14.3798C7.53 14.2598 7.5 14.1298 7.5 13.9998C7.5 13.8698 7.53 13.7398 7.58 13.6198C7.63 13.4998 7.7 13.3898 7.79 13.2898C7.89 13.1998 8 13.1298 8.12 13.0798C8.36 12.9798 8.64 12.9798 8.88 13.0798C9 13.1298 9.11 13.1998 9.21 13.2898C9.3 13.3898 9.37 13.4998 9.42 13.6198C9.47 13.7398 9.5 13.8698 9.5 13.9998C9.5 14.1298 9.47 14.2598 9.42 14.3798ZM12.71 14.7098C12.61 14.7998 12.5 14.8698 12.38 14.9198C12.26 14.9698 12.13 14.9998 12 14.9998C11.87 14.9998 11.74 14.9698 11.62 14.9198C11.5 14.8698 11.39 14.7998 11.29 14.7098C11.11 14.5198 11 14.2598 11 13.9998C11 13.7398 11.11 13.4798 11.29 13.2898C11.39 13.1998 11.5 13.1298 11.62 13.0798C11.86 12.9698 12.14 12.9698 12.38 13.0798C12.5 13.1298 12.61 13.1998 12.71 13.2898C12.89 13.4798 13 13.7398 13 13.9998C13 14.2598 12.89 14.5198 12.71 14.7098Z" />
                                        </svg>
                                    </button>
                                </div>
                                {{-- Filter Range Date End --}}
                            </div>
                            {{-- Content End --}}
                        </div>
                    </div>
                    {{-- Total Return ::end --}}
                </div>
                {{-- Card Layout ::end --}}
            </div>
        </div>
        {{-- Layout ::end --}}
    </div>
    {{-- Panel Status ::end--}}

    {{-- Showing Data - Dashboard Start --}}
    <div class="mt-4">
        {{-- Content Start --}}
        <div class="max-w-screen min-h-screen mx-auto bg-very-light-gray border-2 rounded-l-6xl border-light-gray">
            <div class="overflow-hidden rounded-xl">
                <div class="grid grid-cols-3 gap-1 p-1">
                    {{-- Left Section Start --}}
                    <div class="p-2 rounded-xl col-span-2 flex flex-col">
                        {{-- Heading Start --}}
                        <div class="p-3 w-full bg-white rounded-full shadow-sm">
                            <div class="p-1 w-full flex justify-between items-center">
                                {{-- Label --}}
                                <h3 class="font-medium text-raisin-black text-xl">Penjualan Hari Ini
                                </h3>
                                {{-- Search Bar --}}
                                <div class="relative mr-2">
                                    <x-search-button></x-search-button>
                                </div>
                            </div>
                        </div>
                        {{-- Heading End --}}

                        {{-- Table Start --}}
                        <div class="overflow-x-auto p-2 bg-white rounded-xl mt-2">
                            <table class="w-full text-sm text-left text-grayish-cyan dark:text-gray-400">
                                <thead class="text-xs text-very-dark-gray dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">Product name</th>
                                        <th scope="col" class="px-4 py-3">Category</th>
                                        <th scope="col" class="px-4 py-3">Brand</th>
                                        <th scope="col" class="px-4 py-3">Description</th>
                                        <th scope="col" class="px-4 py-3">Price</th>
                                        <th scope="col" class="px-4 py-3">
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-dark-gray whitespace-nowrap dark:text-white">
                                            Apple iMac 21&#34;</th>
                                        <td class="px-4 py-3">PC</td>
                                        <td class="px-4 py-3">Apple</td>
                                        <td class="px-4 py-3">200</td>
                                        <td class="px-4 py-3">$1499</td>
                                        <td class="px-4 py-3 flex items-center justify-end">
                                            <button id="apple-imac-21-dropdown-button"
                                                data-dropdown-toggle="apple-imac-21-dropdown"
                                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-dark-gray hover:text-raisin-black rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-21-dropdown"
                                                class="hidden z-10 w-44 bg-light-gray rounded-xl divide-y divide-gray-100 shadow-sm dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-dark-gray dark:text-gray-200"
                                                    aria-labelledby="apple-imac-20-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-grayish-blue dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-grayish-blue dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#"
                                                        class="block py-2 px-4 text-sm text-soft-red hover:bg-grayish-blue dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-dark-gray whitespace-nowrap dark:text-white">
                                            Apple iMac 20&#34;</th>
                                        <td class="px-4 py-3">PC</td>
                                        <td class="px-4 py-3">Apple</td>
                                        <td class="px-4 py-3">200</td>
                                        <td class="px-4 py-3">$1499</td>
                                        <td class="px-4 py-3 flex items-center justify-end">
                                            <button id="apple-imac-20-dropdown-button"
                                                data-dropdown-toggle="apple-imac-20-dropdown"
                                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-dark-gray hover:text-raisin-black rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-20-dropdown"
                                                class="hidden z-10 w-44 bg-light-gray rounded-xl divide-y divide-gray-100 shadow-sm dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-dark-gray dark:text-gray-200"
                                                    aria-labelledby="apple-imac-20-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-grayish-blue dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-grayish-blue dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#"
                                                        class="block py-2 px-4 text-sm text-soft-red hover:bg-grayish-blue dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                                aria-label="Table navigation">
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                    Showing
                                    <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                                    of
                                    <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                                </span>
                                <ul class="inline-flex items-stretch -space-x-px">
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Previous</span>
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Next</span>
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- Table End --}}

                    {{-- Right Section Start--}}
                    <div class="p-3 rounded-xl">
                        {{-- Recent Activity Start --}}
                        <div class="bg-white rounded-xl border-light-gray shadow-md p-4">
                            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                                <div class="mx-auto max-w-3xl space-y-6 sm:space-y-8">
                                    {{-- Data Start --}}
                                    <div class="flex items-center justify-center bg-light-gray p-2 w-full rounded-xl">
                                        <label for="recentActivity" class="text-raisin-black font-semibold text-xl">Your
                                            Recent Activity
                                        </label>
                                    </div>
                                    <ol class="relative border-s border-gray-200 dark:border-gray-700">
                                        <li class="mb-10 ms-6">
                                            <span
                                                class="absolute -start-2.5 flex h-5 w-5 items-center justify-center rounded-full bg-primary-100 ring-8 ring-lime-green dark:bg-primary-900 dark:ring-gray-900">
                                                <svg class="h-3 w-3 text-primary-800 dark:text-primary-300"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 11.917 9.724 16.5 19 7.5" />
                                                </svg>
                                            </span>
                                            <span
                                                class="inline-flex items-center rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                                <svg class="me-1 h-3 w-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                02 February 2024
                                            </span>
                                            <h3
                                                class="mb-0.5 mt-2 text-lg font-semibold text-primary-800 dark:text-primary-300">
                                                Your request has been registered</h3>
                                            <p class="text-base font-normal text-primary-700 dark:text-primary-300">
                                                Please
                                                pack the product and accessories received in the original packaging.
                                                The
                                                courier will contact you to pick up the package from the specified
                                                address.
                                            </p>
                                        </li>

                                        <li class="mb-10 ms-6">
                                            <span
                                                class="absolute -start-2.5 flex h-5 w-5 items-center justify-center rounded-full bg-gray-100 ring-8 ring-lime-green dark:bg-gray-800 dark:ring-gray-900">
                                                <svg class="h-3 w-3 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 11.917 9.724 16.5 19 7.5" />
                                                </svg>
                                            </span>
                                            <h3
                                                class="mb-1.5 text-lg font-semibold leading-none text-gray-900 dark:text-white">
                                                Pick up product from the address</h3>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                Estimated time
                                                2 February 2024 - 5 February 2024.</p>
                                        </li>

                                        <li class="mb-10 ms-6">
                                            <span
                                                class="absolute -start-2.5 flex h-5 w-5 items-center justify-center rounded-full bg-gray-100 ring-8 ring-lime-green dark:bg-gray-800 dark:ring-gray-900">
                                                <svg class="h-3 w-3 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 11.917 9.724 16.5 19 7.5" />
                                                </svg>
                                            </span>
                                            <h3
                                                class="mb-1.5 text-lg font-semibold leading-none text-gray-900 dark:text-white">
                                                Product check</h3>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">We
                                                will
                                                carefully check the product and inform you as soon as possible if
                                                you are
                                                eligible for a refund.</p>
                                        </li>

                                        <li class="ms-6">
                                            <span
                                                class="absolute -start-2.5 flex h-5 w-5 items-center justify-center rounded-full bg-gray-100 ring-8 ring-lime-green dark:bg-gray-800 dark:ring-gray-900">
                                                <svg class="h-3 w-3 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 11.917 9.724 16.5 19 7.5" />
                                                </svg>
                                            </span>
                                            <h3
                                                class="mb-1.5 text-lg font-semibold leading-none text-gray-900 dark:text-white">
                                                Refund the amount</h3>
                                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">We
                                                will return
                                                the amount depending on the option chosen.</p>
                                        </li>
                                    </ol>
                                    {{-- Data End --}}
                                </div>
                            </div>
                        </div>
                        {{-- Recent Activity End --}}
                    </div>
                    {{-- Right Section End--}}
                </div>
                {{-- Left Section Start --}}
            </div>
        </div>
    </div>
    {{-- Content End --}}
    </div>
    {{-- Showing Data - Dashboard End --}}
</x-app-layout>