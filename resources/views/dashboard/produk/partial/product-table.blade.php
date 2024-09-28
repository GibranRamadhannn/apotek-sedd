<table class="w-full capitalize table-fixed">
  <thead>
    <tr class="text-start">
      <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">No</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Produk ID</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">SKU</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Tipe</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Nama Produk</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Jumlah Stok</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Harga Jual</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Deskripsi Produk</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Added At</th>
      <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produks as $produk)
    <tr class="text-center">
      <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{ $loop->iteration }}
      </td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->produk_id }}
      </td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->sku }}</td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->tipe }}</td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->nama_produk }}</td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->stok }}</td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->harga }}</td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->deskripsi }}</td>
      <td class="border-b border-light-grayish-blue text-base font-normal">{{ $produk->created_at }} </td>
      <td class="border-b border-light-grayish-blue">
        <div class="p-2 flex justify-center items-center gap-2">
          <form method="POST" action="{{ route('dashboard.produk.destroy', $produk->produk_id) }}">
            @csrf
            @method('DELETE')
            <x-buttons.delete-button></x-buttons.delete-button>
          </form>

          {{-- Edit --}}
          <form method="POST" action="{{ route('dashboard.produk.update', $produk->produk_id) }}">
            @csrf
            @method('PATCH')
            <x-buttons.edit-button x-data="{ open: false }" x-on:click.prevent="$dispatch('open-modal', 'edit-produk')"
              focusable>
            </x-buttons.edit-button>

            {{-- Modal --}}
            <x-modal name="edit-produk">
              <div class="flex justify-center items-center">
                <div class="px-8 py-6 max-w-md">
                  {{-- Text --}}
                  <h2 class="text-lg font-medium text-gray-900 w-full mb-1">
                    {{ __('Update Your Product Data') }}
                  </h2>
                  <p class="mb-6 text-sm text-gray-600 w-full">
                    {{ __('Make sure your product data is correct!') }}
                  </p>

                  <form id="formEditProduk" method="POST"
                    action="{{ route('dashboard.produk.edit', $produk->produk_id) }}">
                    @csrf

                    {{-- SKU Produk --}}
                    <div class="mb-4">
                      <x-input-label for="sku" value="{{ __('SKU Produk') }}" />
                      <x-text-input id="sku" name="sku" type="text" class="mt-1 block w-full"
                        placeholder="{{ __('SKU Produk') }}" required />
                    </div>

                    {{-- Tipe Produk --}}
                    <div class="mb-4">
                      <x-input-label for="tipe" value="{{ __('Tipe Produk') }}" />
                      <x-text-input id="tipe" name="tipe" type="text" class="mt-1 block w-full"
                        placeholder="{{ __('Tipe Produk') }}" required />
                    </div>

                    {{-- Nama Produk --}}
                    <div class="mb-4">
                      <x-input-label for="nama_produk" value="{{ __('Nama Produk') }}" />
                      <x-text-input id="nama_produk" name="nama_produk" type="text" class="mt-1 block w-full"
                        placeholder="{{ __('Nama Produk') }}" required />
                    </div>

                    {{-- Stok Produk --}}
                    <div class="mb-4">
                      <x-input-label for="stok" value="{{ __('Stok Produk') }}" />
                      <x-text-input id="stok" name="stok" type="text" class="mt-1 block w-full"
                        placeholder="{{ __('Stok Produk') }}" required />
                    </div>

                    {{-- Button Submit --}}
                    <div>
                      <x-buttons.primary-button>{{ __('Submit Data') }}</x-buttons.primary-button>
                    </div>
                  </form>
                </div>
              </div>
            </x-modal>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>