<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Pelanggan') }}
    </h2>
  </x-slot>

  @section('title','Pelanggan')

  <div class="p-1 mt-4">
    <div class="max-w-screen mx-auto bg-light-gray rounded-3xl">
      <div class="overflow-hidden rounded-xl">
        <div class="p-6">
          <div class="inline-flex items-center gap-4 w-full">
            {{-- Title --}}
            <h3 class="font-medium text-black text-lg">Data Pelanggan</h3>
            {{-- Search --}}
            <div class="relative">
              <input placeholder="Search..."
                class="input shadow-sm focus:border-2 border-gray-300 p-2 rounded-xl w-48 transition-all focus:w-52 outline-none placeholder:text-sm text-sm text-dark-gray placeholder:text-dark-gray"
                name="search" type="" />
            </div>
            {{-- Buttons --}}
            <div class="p-3">
              <div class="flex flex-col justify-start items-start gap-4">
                {{-- Button Group --}}
                <div class="flex items-center gap-2">
                  {{-- Tambah Data --}}
                  <x-third-button x-data="{ open: false }"
                    x-on:click.prevent="$dispatch('open-modal', 'tambah-pelanggan')" class="items-center justify-center"
                    focusable>{{
                    __('Tambah Pelanggan') }}
                  </x-third-button>
                  {{-- Modal --}}
                  <x-modal name="tambah-pelanggan">
                    <div class="flex justify-center items-center">
                      <div class="px-8 py-6 max-w-md">
                        {{-- Text --}}
                        <h2 class="text-lg font-medium text-gray-900 w-full mb-1">
                          {{ __('Input Your Customer Data') }}
                        </h2>
                        <p class="mb-6 text-sm text-gray-600 w-full">
                          {{ __('Make sure your customer data is correct!') }}
                        </p>

                        <form id="formAddPelanggan" method="POST" action="{{ route('dashboard.pelanggan.store') }}">
                          @csrf

                          {{-- nama --}}
                          <div class="mb-4">
                            <x-input-label for="nama_pelanggan" value="{{ __('Nama Pelanggan') }}" />
                            <x-text-input id="nama_pelanggan" name="nama_pelanggan" type="text"
                              class="mt-1 block w-full" placeholder="{{ __('Masukkan Nama Pelanggan') }}" required />
                          </div>

                          {{-- Telepon --}}
                          <div class="mb-4">
                            <x-input-label for="telepon" value="{{ __('Telepon') }}" />
                            <x-text-input id="telepon" name="telepon" type="text" class="mt-1 block w-full"
                              placeholder="{{ __('Masukkan Nomor Telepon Pelanggan') }}" required />
                          </div>

                          {{-- Email --}}
                          <div class="mb-4">
                            <x-input-label for="email" value="{{ __('E-Mail') }}" />
                            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full"
                              placeholder="{{ __('Masukkan E-mail Pelanggan') }}" required />
                          </div>

                          {{-- Tipe --}}
                          <div class="mb-4">
                            <x-input-label for="tipe" value="{{ __('Tipe Pelanggan') }}" />
                            <x-text-input id="tipe" name="tipe" type="text" class="mt-1 block w-full"
                              placeholder="{{ __('Masukkan Tipe Pelanggan') }}" required />
                          </div>

                          {{-- Button Submit --}}
                          <div>
                            <x-buttons.third-button>{{ __('Submit Data') }}</x-buttons.third-button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </x-modal>
                  {{-- Cetak Label --}}
                  <x-buttons.secondary-button class="items-center justify-center">{{
                    __('Cetak Label') }}
                  </x-buttons.secondary-button>
                </div>
              </div>
            </div>
          </div>
          {{-- Tabel --}}
          <div class="p-3">
            <table class="w-full capitalize table-fixed">
              <thead>
                <tr class="text-start">
                  <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">No</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">ID Member</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Nama</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Telepon</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">E-Mail</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Tipe</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pelanggan as $pelanggan)
                <tr class="text-center">
                  <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{ $loop->iteration }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pelanggan->id_member }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pelanggan->nama_pelanggan }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pelanggan->telepon }}</td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pelanggan->email }} </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pelanggan->tipe }} </td>
                  <td class="border-b border-light-grayish-blue">
                    <div class="p-2 flex justify-center items-center gap-2">
                      <form method="POST" action="{{ route('dashboard.pelanggan.destroy', $pelanggan->id_member) }}">
                        @csrf
                        @method('DELETE')
                        <x-buttons.delete-button></x-buttons.delete-button>
                      </form>

                      {{-- Edit --}}
                      <form method="POST" action="{{ route('dashboard.pelanggan.update', $pelanggan->id_member) }}">
                        @csrf
                        @method('PATCH')
                        <x-buttons.edit-button x-data="{ open: false }"
                          x-on:click.prevent="$dispatch('open-modal', 'edit-pelanggan')" focusable>
                        </x-buttons.edit-button>

                        {{-- Modal --}}
                        <x-modal name="edit-pelanggan">
                          <div class="flex justify-center items-center">
                            <div class="px-8 py-6 max-w-md">
                              {{-- Text --}}
                              <h2 class="text-lg font-medium text-gray-900 w-full mb-1">
                                {{ __('Update Your Data') }}
                              </h2>
                              <p class="mb-6 text-sm text-gray-600 w-full">
                                {{ __('Make sure your data is correct!') }}
                              </p>

                              <form id="formAddPelanggan" method="POST"
                                action="{{ route('dashboard.pelanggan.update', $pelanggan->id_member) }}">
                                @csrf
                                @method('PATCH')

                                {{-- nama --}}
                                <div class="mb-4">
                                  <x-input-label for="nama_pelanggan" value="{{ __('Nama Pelanggan') }}" />
                                  <x-text-input id="nama_pelanggan" name="nama_pelanggan" type="text"
                                    class="mt-1 block w-full" placeholder="{{ __('Masukkan Nama Pelanggan') }}"
                                    required />
                                </div>

                                {{-- Telepon --}}
                                <div class="mb-4">
                                  <x-input-label for="telepon" value="{{ __('Telepon') }}" />
                                  <x-text-input id="telepon" name="telepon" type="text" class="mt-1 block w-full"
                                    placeholder="{{ __('Masukkan Nomor Telepon Pelanggan') }}" required />
                                </div>

                                {{-- Email --}}
                                <div class="mb-4">
                                  <x-input-label for="email" value="{{ __('E-Mail') }}" />
                                  <x-text-input id="email" name="email" type="text" class="mt-1 block w-full"
                                    placeholder="{{ __('Masukkan E-mail Pelanggan') }}" required />
                                </div>

                                {{-- Tipe --}}
                                <div class="mb-4">
                                  <x-input-label for="tipe" value="{{ __('Tipe Pelanggan') }}" />
                                  <x-text-input id="tipe" name="tipe" type="text" class="mt-1 block w-full"
                                    placeholder="{{ __('Masukkan Tipe Pelanggan') }}" required />
                                </div>

                                {{-- Button Submit --}}
                                <div>
                                  <x-buttons.third-button>{{ __('Update Data') }}</x-buttons.third-button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </x-modal>
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
  </div>
  </div>

</x-app-layout>