<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Pembelian') }}
    </h2>
  </x-slot>

  @section('title','Pembelian')

  <div class="p-1 mt-4">
    <div class="max-w-screen mx-auto bg-light-gray rounded-3xl">
      <div class="overflow-hidden rounded-xl">
        <div class="p-6">
          <div class="inline-flex items-center gap-4 w-full">
            {{-- Title --}}
            <h3 class="font-medium text-black text-lg">Data Pembelian</h3>
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
                    x-on:click.prevent="$dispatch('open-modal', 'tambah-pembelian')" class="items-center justify-center"
                    focusable>{{
                    __('Tambah Pembelian') }}
                  </x-third-button>
                  {{-- Modal --}}
                  <x-modal name="tambah-pembelian">
                    <div class="flex justify-center items-center">
                      <div class="px-8 py-6 max-w-md">
                        {{-- Text --}}
                        <h2 class="text-lg font-medium text-gray-900 w-full mb-1">
                          {{ __('Form Pembelian') }}
                        </h2>
                        <p class="mb-6 text-sm text-gray-600 w-full">
                          {{ __('Make sure your data is correct!') }}
                        </p>

                        <form id="formAddPembelian" method="POST" action="{{ route('dashboard.pembelian.store') }}"
                          enctype="multipart/form-data">
                          @csrf

                          {{-- Supplier --}}
                          <div class="mb-4">
                            <x-input-label for="nama_supplier" value="{{ __('Nama Supplier') }}" />
                            <x-text-input id="nama_supplier" name="nama_supplier" type="text" class="mt-1 block w-full"
                              placeholder="{{ __('Masukkan Nama Supplier') }}" required />
                          </div>

                          {{-- No Referensi --}}
                          <div class="mb-4">
                            <x-input-label for="no_referensi" value="{{ __('Nomor Referensi (Optional)') }}" />
                            <x-text-input id="no_referensi" name="no_referensi" type="text" class="mt-1 block w-full"
                              placeholder="{{ __('Masukkan Nomor Referensi') }}" />
                          </div>

                          {{-- Tanggal Pembelian --}}
                          <div class="mb-4">
                            <x-input-label for="tgl_pembelian" value="{{ __('Tanggal Pembelian') }}" />
                            <x-text-input id="tgl_pembelian" name="tgl_pembelian" type="date" class="mt-1 block w-full"
                              placeholder="{{ __('Masukkan Tanggal Pembelian') }}" required />
                          </div>

                          {{-- Dokumen --}}
                          <div class="mb-4">
                            <x-input-label for="dokumentasi" value="{{ __('Dokumentasi') }}" />
                            <x-text-input id="dokumentasi" name="dokumentasi" type="file" class="mt-1 block w-full"
                              placeholder="{{ __('Upload Dokumentasi') }}" />
                          </div>

                          {{-- Termin --}}
                          <div class="mb-4">
                            <x-input-label for="termin_pembayaran" value="{{ __('Termin Pembayaran') }}" />
                            <x-text-input id="termin_pembayaran" name="termin_pembayaran" type="text"
                              class="mt-1 block w-full" placeholder="{{ __('Termin Pembayaran') }}" />
                          </div>

                          {{-- Button Submit --}}
                          <div>
                            <x-buttons.third-button>{{ __('Submit Data') }}</x-buttons.third-button>
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
          <div class="p-3">
            <table class="w-full capitalize table-fixed">
              <thead>
                <tr class="text-start">
                  <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">No</th>
                  <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">ID Pembelian</th>
                  <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Supplier</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">No Referensi</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Tanggal Pembelian</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Termin Pembayaran</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Dokumentasi</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Added At</th>
                  <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pembelian as $pembelian)
                <tr class="text-center">
                  <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{ $loop->iteration }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pembelian->id_pembelian }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pembelian->nama_supplier }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pembelian->no_referensi }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pembelian->tgl_pembelian }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pembelian->termin_pembayaran
                    }} </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pembelian->dokumentasi }}
                  </td>
                  <td class="border-b border-light-grayish-blue text-base font-normal">{{ $pembelian->created_at }}
                  </td>
                  <td class="border-b border-light-grayish-blue">
                    <div class="p-2 flex justify-center items-center gap-2">
                      <form method="POST" action="{{ route('dashboard.pembelian.destroy', $pembelian->id_pembelian) }}">
                        @csrf
                        @method('DELETE')
                        <x-buttons.delete-button></x-buttons.delete-button>
                      </form>

                      {{-- Edit --}}
                      <form method="POST" action="{{ route('dashboard.pembelian.update', $pembelian->id_pembelian) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <x-buttons.edit-button x-data="{ open: false }"
                          x-on:click.prevent="$dispatch('open-modal', 'edit-pembelian')" focusable>
                        </x-buttons.edit-button>

                        {{-- Modal --}}
                        <x-modal name="edit-pembelian">
                          <div class="flex justify-center items-center">
                            <div class="px-8 py-6 max-w-md">
                              {{-- Text --}}
                              <h2 class="text-lg font-medium text-gray-900 w-full mb-1">
                                {{ __('Form Update Data Pembelian') }}
                              </h2>
                              <p class="mb-6 text-sm text-gray-600 w-full">
                                {{ __('Make sure your data is correct!') }}
                              </p>

                              <form id="formUpdatePembelian" method="POST"
                                action="{{ route('dashboard.pembelian.update',$pembelian->id_pembelian) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                {{-- Supplier --}}
                                <div class="mb-4">
                                  <x-input-label for="nama_supplier" value="{{ __('Nama Supplier') }}" />
                                  <x-text-input id="nama_supplier" name="nama_supplier" type="text"
                                    class="mt-1 block w-full" placeholder="{{ __('Masukkan Nama Supplier') }}"
                                    required />
                                </div>

                                {{-- No Referensi --}}
                                <div class="mb-4">
                                  <x-input-label for="no_referensi" value="{{ __('Nomor Referensi (Optional)') }}" />
                                  <x-text-input id="no_referensi" name="no_referensi" type="text"
                                    class="mt-1 block w-full" placeholder="{{ __('Masukkan Nomor Referensi') }}" />
                                </div>

                                {{-- Tanggal Pembelian --}}
                                <div class="mb-4">
                                  <x-input-label for="tgl_pembelian" value="{{ __('Tanggal Pembelian') }}" />
                                  <x-text-input id="tgl_pembelian" name="tgl_pembelian" type="date"
                                    class="mt-1 block w-full" placeholder="{{ __('Masukkan Tanggal Pembelian') }}"
                                    required />
                                </div>

                                {{-- Dokumen --}}
                                <div class="mb-4">
                                  <x-input-label for="dokumentasi" value="{{ __('Dokumentasi') }}" />
                                  <x-text-input id="dokumentasi" name="dokumentasi" type="file"
                                    class="mt-1 block w-full" placeholder="{{ __('Upload Dokumentasi') }}" />
                                </div>

                                {{-- Termin --}}
                                <div class="mb-4">
                                  <x-input-label for="termin_pembayaran" value="{{ __('Termin Pembayaran') }}" />
                                  <x-text-input id="termin_pembayaran" name="termin_pembayaran" type="text"
                                    class="mt-1 block w-full" placeholder="{{ __('Termin Pembayaran') }}" />
                                </div>

                                {{-- Button Submit --}}
                                <div>
                                  <x-buttons.third-button>{{ __('Submit Data') }}</x-buttons.third-button>
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
</x-app-layout>