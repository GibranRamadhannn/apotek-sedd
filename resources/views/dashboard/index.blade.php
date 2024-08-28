<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('title','Dashboard')

    {{-- Panel Status --}}
    <div class="p-1">
        <div class="max-w-screen mx-auto">
            <div class="overflow-hidden rounded-xl">
                <div class="p-4 grid grid-cols-4 gap-2">
                    {{-- Today Sale --}}
                    <div class="w-full bg-light-gray border border-white rounded-2xl">
                        <div class="flex flex-col justify-center items-start p-2 gap-2">
                            <div class="p-4 w-full">
                                <div class="flex justify-between items-center">
                                    <label for="todaySale" class="font-semibold text-lg text-dark-gray">Penjualan Hari
                                        Ini
                                    </label>
                                    <svg fill="#76d51f" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                        <path
                                            d="M15.2,68.2L29.4,51c0.4-0.7,0.4-1.5,0-2.1l-14.2-17c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.6,0.5-1,1-1h20.7c0.6,0,1.1,0.2,1.4,0.7L53,49c0.4,0.6,0.4,1.4,0,2.1l-14.8,18c-0.3,0.4-0.9,0.7-1.4,0.7H16.1c-0.6,0-1-0.4-1-1C15,68.6,15.1,68.3,15.2,68.2z" />
                                        <path
                                            d="M46.8,68.2L60.9,51c0.4-0.7,0.4-1.5,0-2.1l-14.2-17c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.6,0.5-1,1-1h20.7c0.6,0,1.1,0.2,1.4,0.7l14.9,18c0.4,0.6,0.4,1.4,0,2.1l-14.8,18c-0.3,0.4-0.9,0.7-1.4,0.7H47.6c-0.6,0-1-0.4-1-1C46.6,68.6,46.7,68.3,46.8,68.2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-4 w-full">
                                <div class="flex justify-between items-center gap-4">
                                    <h1 class="font-bold text-xl text-very-dark-gray m-1">Rp
                                    </h1>
                                    <p class="text-sm font-normal m-1">Total Penjualan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Month Sale --}}
                    <div class="w-full bg-light-gray border border-white rounded-2xl">
                        <div class="flex flex-col justify-center items-start p-2 gap-2">
                            <div class="p-4 w-full">
                                <div class="flex justify-between items-center">
                                    <label for="todaySale" class="font-semibold text-lg text-dark-gray">Penjualan Bulan
                                        Ini
                                    </label>
                                    <svg fill="#76d51f" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                        <path
                                            d="M15.2,68.2L29.4,51c0.4-0.7,0.4-1.5,0-2.1l-14.2-17c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.6,0.5-1,1-1h20.7c0.6,0,1.1,0.2,1.4,0.7L53,49c0.4,0.6,0.4,1.4,0,2.1l-14.8,18c-0.3,0.4-0.9,0.7-1.4,0.7H16.1c-0.6,0-1-0.4-1-1C15,68.6,15.1,68.3,15.2,68.2z" />
                                        <path
                                            d="M46.8,68.2L60.9,51c0.4-0.7,0.4-1.5,0-2.1l-14.2-17c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.6,0.5-1,1-1h20.7c0.6,0,1.1,0.2,1.4,0.7l14.9,18c0.4,0.6,0.4,1.4,0,2.1l-14.8,18c-0.3,0.4-0.9,0.7-1.4,0.7H47.6c-0.6,0-1-0.4-1-1C46.6,68.6,46.7,68.3,46.8,68.2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="p-4 w-full">
                                <div class="flex justify-between items-center gap-4">
                                    <h1 class="font-bold text-xl text-very-dark-gray m-1">Rp
                                    </h1>
                                    <p class="text-sm font-normal m-1">Total Penjualan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Product Total --}}
                    <div class="w-full bg-light-gray border border-white rounded-2xl">
                        <div class="flex flex-col justify-center items-start p-2 gap-2">
                            <div class="p-4 w-full">
                                <div class="flex justify-between items-center">
                                    <label for="todaySale" class="font-semibold text-lg text-dark-gray">Total
                                        Produk</label>
                                    <svg width="22" height="22" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="m0 0h32v32h-32z" />
                                            <path
                                                d="m19 1.73205081 7.8564065 4.53589838c1.8564064 1.07179677 3 3.05255889 3 5.19615241v9.0717968c0 2.1435935-1.1435936 4.1243556-3 5.1961524l-7.8564065 4.5358984c-1.8564065 1.0717968-4.1435935 1.0717968-6 0l-7.85640646-4.5358984c-1.85640646-1.0717968-3-3.0525589-3-5.1961524v-9.0717968c0-2.14359352 1.14359354-4.12435564 3-5.19615241l7.85640646-4.53589838c1.8564065-1.07179677 4.1435935-1.07179677 6 0zm4.0203166 9.82532719c-.259282-.4876385-.8647807-.672758-1.3524192-.4134761l-5.6794125 3.0187491-5.6793299-3.0187491c-.4876385-.2592819-1.09313718-.0741624-1.35241917.4134761-.25928198.4876385-.07416246 1.0931371.41347603 1.3524191l5.61827304 2.9868539.0000413 6.7689186c0 .5522848.4477153 1 1 1 .5522848 0 1-.4477152 1-1l-.0000413-6.7689186 5.6183556-2.9868539c.4876385-.259282.6727581-.8647806.4134761-1.3524191z"
                                                fill="#0aa1fa" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full p-4">
                                <div class="flex justify-between items-center gap-4">
                                    <h1 class="font-bold text-xl text-very-dark-gray m-1">{{ $totalProduk
                                        }}
                                    </h1>
                                    <p class="text-sm font-normal m-1">Produk Tersimpan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Month Return --}}
                    <div class="w-full bg-light-gray border border-white rounded-2xl">
                        <div class="flex flex-col justify-center items-start p-2 gap-2">
                            <div class="p-4 w-full">
                                <div class="flex justify-between items-center">
                                    <label for="todaySale" class="font-semibold text-lg text-dark-gray">Pengembalian
                                        Bulan Ini</label>
                                    <svg width="23" height="23" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h48v48H0z" fill="none" />
                                        <g id="Shopicon">
                                            <path
                                                d="M10,22v2c0,7.72,6.28,14,14,14s14-6.28,14-14s-6.28-14-14-14h-4V4l-8,8l8,8v-6h4c5.514,0,10,4.486,10,10s-4.486,10-10,10 s-10-4.486-10-10v-2H10z"
                                                fill="#fa5151" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-4 w-full">
                                <div class="flex justify-between items-center gap-4">
                                    <h1 class="font-bold text-xl text-very-dark-gray m-1">
                                    </h1>
                                    <p class="text-sm font-normal m-1">Produk - <span
                                            class="text-soft-red">Dikembalikan</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Data --}}
    <div class="p-1 mt-4">
        <div class="max-w-screen min-h-screen mx-auto bg-light-gray rounded-t-6xl border-white shadow-lg">
            <div class="overflow-hidden rounded-xl">
                <div class="grid grid-cols-3 gap-2 m-3">
                    {{-- Tabel --}}
                    <div class="p-2 rounded-xl col-span-2">
                        <div class="p-3 inline-flex items-center justify-between gap-4 w-full bg-white rounded-full">
                            <h3 class="font-medium text-gray-800 text-lg ml-2">Penjualan Hari Ini</h3>
                            <div class="relative mr-2">
                                <input placeholder="Search..."
                                    class="input focus:border-2 bg-light-gray border-grayish-blue p-2 rounded-xl w-48 transition-all focus:w-52 outline-none placeholder:text-sm text-sm text-dark-gray placeholder:text-dark-gray shadow-sm"
                                    name="search" type="" />
                            </div>
                        </div>
                        <table class="w-full capitalize table-fixed mt-3">
                            <thead>
                                <tr>
                                    <th class="p-2 border-b border-bg text-sm font-medium text-dark-gray">No
                                    </th>
                                    <th class="p-2 border-b border-bg text-sm font-medium text-dark-gray">No Invoice
                                    </th>
                                    <th class="p-2 border-b border-bg text-sm font-medium text-dark-gray">Status
                                        Transaksi</th>
                                    <th class="p-2 border-b border-bg text-sm font-medium text-dark-gray">Nilai
                                        Transaksi</th>
                                    <th class="p-2 border-b border-bg text-sm font-medium text-dark-gray">Print
                                        Invoice
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="p-2 text-sm border-b border-bg font-normal text-black">1</td>
                                    <td class="text-sm border-b border-bg font-normal text-black">2</td>
                                    <td class="text-sm border-b border-bg font-normal text-black">3</td>
                                    <td class="text-sm border-b border-bg font-normal text-black">4</td>
                                    <td class="text-sm border-b border-bg font-normal text-black">5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Panel--}}
                    <div class="p-4 rounded-xl">
                        <div class="flex flex-col justify-center gap-2">
                            {{-- Total Pelanggan --}}
                            <div class="bg-white rounded-xl border-light-gray shadow-sm">
                                <div class="p-2 flex flex-col justify-start items-center">
                                    <div class="p-2 flex flex-col justify-center items-start w-full">
                                        <div class="w-full p-2 flex justify-between items-center gap-2">
                                            <label for="totalPelanggan" class="font-medium text-lg text-dark-gray">Total
                                                Pelanggan
                                            </label>
                                            <a href="/pelanggan"
                                                class="font-medium text-base text-dark-gray hover:text-button2">See
                                                More</a>
                                        </div>
                                        <div class="w-full p-2 flex justify-between items-center gap-2">
                                            <h1 class="font-medium text-base text-very-dark-gray m-1">{{
                                                $totalPelanggan
                                                }}
                                            </h1>
                                            <p class="text-sm font-normal m-1">Pelanggan Terdata</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>