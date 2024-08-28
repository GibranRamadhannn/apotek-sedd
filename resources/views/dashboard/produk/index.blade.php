<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Produk') }}
    </h2>
  </x-slot>

  @section('title','Produk')

  <div class="p-1 mt-4">
    <div class="max-w-screen mx-auto bg-light-gray rounded-3xl">
      <div class="overflow-hidden rounded-xl">
        <div class="p-6">
          <div class="inline-flex items-center gap-4 w-full">
            {{-- Title --}}
            <h3 class="font-medium text-black text-lg">Data Product</h3>
            {{-- Search --}}
            <div class="relative">
              <input placeholder="Search..."
                class="input shadow-sm focus:border-2 border-gray-300 p-2 rounded-xl w-48 transition-all focus:w-52 outline-none placeholder:text-sm text-sm text-dark-gray placeholder:text-dark-gray"
                name="search" type="" />
            </div>
            {{-- Button --}}
            <div class="p-3">
              <div class="flex flex-col justify-start items-start gap-4">
                {{-- Button Group --}}
                <div class="flex items-center gap-2">
                  @include('dashboard.produk.partial.button-group')
                </div>
              </div>
            </div>
          </div>
          {{-- Tabel --}}
          <div class="p-3">
            @include('dashboard.produk.partial.product-table')
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>