<x-app-layout>
    @section('title','Stock')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stock') }}
        </h2>
    </x-slot>

    <div class="p-1">
        <div class="max-w-screen mx-auto">
            <div class="overflow-hidden rounded-xl">
                <div class="p-4 w-full">
                    @include('stock.partial.base-layout')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>