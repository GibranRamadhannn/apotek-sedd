<x-app-layout>
    @section('title','List Order')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Order') }}
        </h2>
    </x-slot>

    <div class="p-1">
        <div class="max-w-screen mx-auto">
            <div class="overflow-hidden rounded-xl">
                <div class="p-4">
                    <div class="w-full bg-light-gray border border-white rounded-2xl min-h-screen">
                        <div class="p-3">
                            <div class="flex flex-col justify-center items-start gap-2">
                                <div class="w-full flex justify-between items-center">
                                    {{-- Search --}}
                                    <div class="relative">
                                        <input placeholder="Search..."
                                            class="input shadow-sm focus:border-2 border-gray-300 p-2 rounded-xl w-48 transition-all focus:w-52 outline-none placeholder:text-sm text-sm text-dark-gray placeholder:text-dark-gray"
                                            name="search" type="" />
                                    </div>
                                    {{-- Filters --}}
                                    <div class="p-2 flex justify-center items-center gap-2">
                                        <x-dropdown>
                                            <x-slot name="trigger">
                                                <x-buttons.filter-button id="filterOrder">Filter
                                                </x-buttons.filter-button>
                                            </x-slot>

                                            <x-slot name="content">
                                                <button type="button" class="filterOptions">
                                                    <x-dropdown-link>Latest</x-dropdown-link>
                                                    <x-dropdown-link>Oldest</x-dropdown-link>
                                                    <x-dropdown-link>Latest</x-dropdown-link>
                                                </button>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                </div>
                                @include('listorder.partial.ordertable')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>