{{-- Modal & Button - Tambah Data begin::--}}
<button x-data="{ open: false }" x-on:click.prevent="$dispatch('open-modal', 'tambah-produk')"
  class="justify-center inline-flex items-center px-3 py-2 border bg-dark-lime-green border-transparent rounded-lg font-medium text-xs text-white hover:bg-lime-green transition ease-in-out duration-150"
  focusable>{{
  __('Tambah
  Produk') }}
</button> {{-- Modal Button Trigger --}}

{{-- Modal Component begin:: --}}
<x-modal name="tambah-produk">
  {{-- Modal Content begin:: --}}
  <div class="flex justify-center items-center p-2">
    <div class="p-2 w-full flex flex-col">
      {{-- Modal Content - Header begin:: --}}
      <div class="space-y-2 border-b py-4">
        {{-- Modal Content - Header - Title & Close Button begin:: --}}
        <div class="inline-flex justify-between w-full items-center">
          {{-- Modal Content - Header - Title begin:: --}}
          <h2 class="text-lg font-semibold text-raisin-black w  -full">
            {{ __('Input Your Product Data') }}
          </h2>
          {{-- Modal Content - Header - Title ::end --}}

          {{-- Modal Content - Header - Close Button begin:: --}}
          <button x-on:click="show = false" type="button"
            class="text-grayish-cyan hover:text-grayish-magenta text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          {{-- Modal Content - Header - Close Button ::end --}}
        </div>
        {{-- Modal Content - Header - Title & Close Button ::end --}}

        {{-- Modal Content - Header - Warning begin:: --}}
        <p class="text-sm text-dark-gray w-full">
          {{ __('Make sure your product data is correct!') }}
        </p>
        {{-- Modal Content - Header - Warning ::end --}}
      </div>
      {{-- Modal Content - Header ::end --}}

      {{-- Modal Content - Body Begin:: --}}
      <div class="py-4">
        {{-- Modal Content - Body - Forms Begin:: --}}
        <form id="formTambahProduk" method="POST" action="{{ route('dashboard.produk.store') }}">
          @csrf

          {{-- Modal Content - Body - Items SKU Produk Begin:: --}}
          <div class="mb-4">
            {{-- Modal Content - Body - Items SKU Produk - Label Begin:: --}}
            <div class="flex items-center">
              <x-input-label for="sku" value="{{ __('SKU Produk') }}" />
              @error('sku')
              <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
              @enderror
            </div>
            {{-- Modal Content - Body - Items SKU Produk - Label ::end --}}
            {{-- Modal Content - Body - Items SKU Produk - Input Begin:: --}}
            <x-text-input id="sku" name="sku" class="mt-1 block w-full" placeholder="{{ __('Input SKU Product') }}" />
            {{-- Modal Content - Body - Items SKU Produk - Input ::end --}}
          </div>
          {{-- Modal Content - Body - Items SKU Produk ::end --}}

          {{-- Modal Content - Body - Items Product Type begin::--}}
          <div class="mb-4">
            {{-- Modal Content - Body - Items Product Type - label begin::--}}
            <div class="flex items-center">
              <x-input-label for="tipe" value="{{ __('Produk Type') }}" />
              @error('tipe')
              <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
              @enderror
            </div>
            {{-- Modal Content - Body - Items Product Type - label ::end--}}
            {{-- Modal Content - Body - Items Product Type - Select Input begin::--}}
            <x-select-input id="tipe" name="tipe" autocomplete="product-type" class="mt-1 block w-full">
              @foreach ($nama_tipe as $tipe)
              <option>{{ $tipe }}</option>
              @endforeach
            </x-select-input>
            {{-- Modal Content - Body - Items Product Type - Select Input ::end--}}
          </div>
          {{-- Modal Content - Body - Items Product Type begin::--}}

          {{-- Modal Content - Body - Items Product Name begin::--}}
          <div class="mb-4">
            {{-- Modal Content - Body - Items Product Name - label begin::--}}
            <div class="flex items-center">
              <x-input-label for="nama_produk" value="{{ __('Product Name') }}" />
              @error('nama_produk')
              <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
              @enderror
            </div>
            {{-- Modal Content - Body - Items Product Name - label ::end--}}
            {{-- Modal Content - Body - Items Product Name - Input begin::--}}
            <x-text-input id="nama_produk" name="nama_produk" class="mt-1 block w-full"
              placeholder="{{ __('Input Product Name') }}" />
            {{-- Modal Content - Body - Items Product Name - Input ::end--}}
          </div>
          {{-- Modal Content - Body - Items Product Name ::end--}}

          {{-- Modal Content - Body - Items Product Stock begin::--}}
          <div class="mb-4">
            {{-- Modal Content - Body - Items Product Stock - Label begin::--}}
            <div class="flex items-center">
              <x-input-label for="stok" value="{{ __('Stock Product') }}" />
              @error('stok')
              <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
              @enderror
            </div>
            {{-- Modal Content - Body - Items Product Stock - Label::end--}}
            {{-- Modal Content - Body - Items Product Stock - Input begin::--}}
            <x-text-input id="stok" name="stok" class="mt-1 block w-full"
              placeholder="{{ __('Input Product Stock') }}" />
            {{-- Modal Content - Body - Items Product Stock - Input ::end--}}
          </div>
          {{-- Modal Content - Body - Items Product Stock ::end--}}

          {{-- Modal Content - Body - Items Product Price begin::--}}
          <div class="mb-4">
            {{-- Modal Content - Body - Items Product Price - Label begin:: --}}
            <div class="flex items-center">
              <x-input-label for="harga" value="{{ __('Product Price (/pcs)') }}" />
              @error('harga')
              <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
              @enderror
            </div>
            {{-- Modal Content - Body - Items Product Price - Label ::end --}}
            {{-- Modal Content - Body - Items Product Price - Input begin:: --}}
            <x-text-input id="harga" name="harga" class="mt-1 block w-full"
              value="{{ old('harga', $produk->harga ?? '') }}" placeholder="{{ __('Input Product Price') }}" />
            {{-- Modal Content - Body - Items Product Price - Input ::end --}}
          </div>
          {{-- Modal Content - Body - Items Product Price ::end--}}

          {{-- Modal Content - Body - Items Product Desc begin:: --}}
          <div class="mb-4">
            {{-- Modal Content - Body - Items Product Desc - Label begin:: --}}
            <div class="flex items-center">
              <x-input-label for="deskripsi" value="{{ __('Product Description') }}" />
              @error('deskripsi')
              <span class="ml-2 text-red-600 text-sm">{{ $message }}</span>
              @enderror
            </div>
            {{-- Modal Content - Body - Items Product Desc - Label ::end --}}
            {{-- Modal Content - Body - Items Product Desc - Input begin:: --}}
            <x-text-input id="deskripsi" name="deskripsi" class="mt-1 block w-full h-24"
              placeholder="{{ __('Explain your product') }}" />
            {{-- Modal Content - Body - Items Product Desc - Input ::end --}}
          </div>
          {{-- Modal Content - Body - Items Product Desc ::end --}}

          {{-- Modal Content - Body - Items Button Submit begin:: --}}
          <x-buttons.primary-button>{{ __('Submit Data') }}</x-buttons.primary-button>
          {{-- Modal Content - Body - Items Button Submit ::end --}}
        </form>
        {{-- Modal Content - Body - Forms ::end --}}
      </div>
      {{-- Modal Content - Body ::end --}}
    </div>
  </div>
  {{-- Modal Content ::end --}}
</x-modal>
{{-- Modal Component ::end --}}
{{-- Modal & Button - Tambah Data ::end--}}

{{-- Cetak Label --}}
<x-buttons.secondary-button class="items-center justify-center">{{
  __('Cetak Label') }}</x-buttons.secondary-button>