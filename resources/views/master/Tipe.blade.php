<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipe Produk') }}
        </h2>
    </x-slot>

    @section('title','Master Tipe')

    <div class="py-8">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-7">
                    <div class="flex flex-col justify-start items-start gap-4">

                        {{-- Label --}}
                        <label for="tabelDataDashboard" class="text-2xl font-semibold text-black">Data Tipe
                            Produk</label>

                        {{-- Tambah Data --}}
                        <div class="flex items-center gap-2">
                            <div x-data="{ open: false }">

                                {{-- Button Trigger Modal --}}
                                <x-third-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'tambah-tipe')"
                                    class="items-center justify-center" focusable>{{
                                    __('Tambah
                                    Data') }}
                                </x-third-button>

                                {{-- Modal --}}
                                <x-modal name="tambah-tipe">
                                    <div class="flex justify-center items-center">
                                        <div class="px-8 py-6 max-w-md">

                                            {{-- Heading --}}
                                            <h2 class="text-lg font-medium text-gray-900 w-full mb-1">
                                                {{ __('Input Your Data') }}
                                            </h2>
                                            <p class="mb-6 text-sm text-gray-600 w-full">
                                                {{ __('Make sure your data is correct!') }}
                                            </p>

                                            {{-- Form --}}
                                            <form id="formTambahData" method="POST"
                                                action="{{ route('master.tipe.store') }}">
                                                @csrf

                                                {{-- Nama Tipe --}}
                                                <div class="mb-4">
                                                    <x-input-label for="nama_tipe" value="{{ __('Nama Tipe') }}" />
                                                    <x-text-input id="nama_tipe" name="nama_tipe" type="text"
                                                        class="mt-1 block w-full"
                                                        placeholder="{{ __('Masukkan Nama Tipe') }}" required />
                                                </div>

                                                {{-- Status Data --}}
                                                <div class="mb-4">
                                                    <x-input-label for="status" value="{{ __('Status Data') }}" />
                                                    <x-text-input id="status" name="status" type="status"
                                                        class="mt-1 block w-full"
                                                        placeholder="{{ __('Masukkan Status Data') }}" required />
                                                </div>

                                                {{-- Button Submit --}}
                                                <div>
                                                    <x-buttons.primary-button>{{ __('Submit Data') }}
                                                    </x-buttons.primary-button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </x-modal>

                            </div>
                        </div>

                    </div>
                </div>

                {{-- Tabel --}}
                <div class="p-6">
                    <table class="w-full font-poppins capitalize table-fixed">

                        {{-- Table Head --}}
                        <thead>
                            <tr class="text-start">
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">No</th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Nama Tipe</th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Status Tipe
                                </th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Created At
                                </th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Aksi</th>
                            </tr>
                        </thead>

                        {{-- Table Body --}}
                        <tbody>
                            @foreach ($tipe as $tipe)
                            <tr class="text-center">
                                <td class="border-b border-gray-200 p-2 text-base font-normal">{{$loop->iteration }}
                                </td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">{{$tipe->nama_tipe }}
                                </td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">{{ $tipe->status }}</td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">{{$tipe->created_at}}
                                </td>
                                <td class="border-b border-gray-200">
                                    <div class="p-2 flex justify-center items-center gap-2">
                                        <div
                                            class="w-8 h-8 rounded-full bg-red-500 hover:scale-105 group flex items-center justify-center">
                                            <x-buttons.delete-button></x-buttons.delete-button>
                                        </div>
                                        <div
                                            class="w-8 h-8 rounded-full bg-button hover:scale-105 group flex items-center justify-center">
                                            <x-buttons.edit-button></x-buttons.edit-button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>