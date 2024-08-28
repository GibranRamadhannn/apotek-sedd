{{-- Tambah Data --}}
<x-third-button x-data="{ open: false }" x-on:click.prevent="$dispatch('open-modal', 'tambah-produk')"
  class="items-center justify-center" focusable>{{
  __('Tambah
  Produk') }}
</x-third-button>
{{-- Modal - Tambah Data --}}
<x-modal name="tambah-produk">
  <div class="flex justify-center items-center">
    <div class="px-8 py-6 max-w-md">
      {{-- Text --}}
      <h2 class="text-lg font-medium text-gray-900 w-full mb-1">
        {{ __('Input Your Product Data') }}
      </h2>
      <p class="mb-6 text-sm text-gray-600 w-full">
        {{ __('Make sure your product data is correct!') }}
      </p>

      <form id="formTambahProduk" method="POST" action="{{ route('dashboard.produk.store') }}">
        @csrf
        {{-- SKU Produk --}}
        <div class="mb-4">
          <div class="flex items-center">
            <x-input-label for="sku" value="{{ __('SKU Produk') }}" />
            @error('sku')
            <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <x-text-input id="sku" name="sku" type="text" class="mt-1 block w-full"
            placeholder="{{ __('SKU Produk') }}" />
        </div>

        {{-- Tipe Produk --}}
        <div class="mb-4">
          <div class="flex items-center">
            <x-input-label for="tipe" value="{{ __('Produk Type') }}" />
            @error('tipe')
            <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <select id="tipe" name="tipe" autocomplete="product-type"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            @foreach ($nama_tipe as $tipe)
            <option>{{ $tipe }}</option>
            @endforeach
          </select>
        </div>

        {{-- Nama Produk --}}
        <div class="mb-4">
          <div class="flex items-center">
            <x-input-label for="nama_produk" value="{{ __('Product Name') }}" />
            @error('nama_produk')
            <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <x-text-input id="nama_produk" name="nama_produk" type="text" class="mt-1 block w-full"
            placeholder="{{ __('Nama Produk') }}" />
        </div>

        {{-- Stok Produk --}}
        <div class="mb-4">
          <div class="flex items-center">
            <x-input-label for="stok" value="{{ __('Stock Product') }}" />
            @error('stok')
            <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <x-text-input id="stok" name="stok" type="text" class="mt-1 block w-full"
            placeholder="{{ __('Stok Produk') }}" />
        </div>

        {{-- Harga Produk --}}
        <div class="mb-4">
          <div class="flex items-center">
            <x-input-label for="harga" value="{{ __('Product Price /pcs') }}" />
            @error('harga')
            <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <x-text-input id="harga" name="harga" type="text" class="mt-1 block w-full"
            value="{{ old('harga', $produk->harga ?? '') }}" placeholder="{{ __('Masukkan harga jual produk') }}" />
        </div>

        {{-- Deskripsi Produk --}}
        <div class="mb-4">
          <div class="flex items-center">
            <x-input-label for="deskripsi" value="{{ __('Product Description') }}" />
            @error('deskripsi')
            <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
            @enderror
          </div>
          <x-text-input id="deskripsi" name="deskripsi" type="text" class="mt-1 block w-full"
            placeholder="{{ __('Masukkan deskripsi produk') }}" />
        </div>

        {{-- Button Submit --}}
        <div>
          <x-buttons.primary-button>{{ __('Submit Data') }}</x-buttons.primary-button>
        </div>
      </form>
    </div>
  </div>
</x-modal>
{{-- Cetak Label --}}
<x-buttons.secondary-button class="items-center justify-center">{{
  __('Cetak Label') }}</x-buttons.secondary-button>