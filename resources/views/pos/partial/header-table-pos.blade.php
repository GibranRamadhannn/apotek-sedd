<div class="w-full flex justify-between items-center">
  {{-- Search --}}
  <div class="relative">
    <input placeholder="Search..."
      class="input shadow-sm focus:border-2 border-gray-300 p-2 rounded-xl w-48 transition-all focus:w-52 outline-none placeholder:text-sm text-sm text-dark-gray placeholder:text-dark-gray"
      name="search" type="" />
  </div>
  {{-- Button --}}
  <div class="p-2 flex justify-center items-center gap-2">
    <div class="hidden" id="namaPelanggan">
      <div class="flex justify-between items-center gap-4">
        <div class="p-3 bg-white rounded-xl border-grayish-blue shadow-sm">
          <label for="namaPelanggan" class="text-sm font-normal" id="labelNamaPelanggan">Nama
            Pelanggan :</label>
        </div>
        <x-dropdown>
          <x-slot name="trigger">
            <x-buttons.edit-button id="pelangganButtonEdit"></x-buttons.edit-button>
          </x-slot>

          <x-slot name="content">
            @foreach ($nama_pelanggan as $nama)
            <button type="button" class="pelangganOptionEdit" data-nama="{{ $nama }}">
              <x-dropdown-link>{{ $nama }}</x-dropdown-link>
            </button>
            @endforeach
          </x-slot>
        </x-dropdown>
      </div>
    </div>
    <x-dropdown>
      <x-slot name="trigger">
        <x-buttons.primary-button id="pelangganButton" class="text-sm font-normal flex justify-center">
          Pelanggan
        </x-buttons.primary-button>
      </x-slot>

      <x-slot name="content">
        @foreach ($nama_pelanggan as $nama)
        <button type="button" class="pelangganOption" data-nama="{{ $nama }}">
          <x-dropdown-link>{{ $nama }}</x-dropdown-link>
        </button>
        @endforeach
      </x-slot>
    </x-dropdown>
  </div>
</div>