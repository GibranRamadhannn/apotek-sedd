<div class="w-full bg-light-gray border border-white rounded-2xl col-span-4">
    <div class="p-3">
        <div class="flex flex-col justify-center items-start gap-2">
            @include('pos.partial.header-table-pos')
            {{-- tabel --}}
            <div class=" bg-white border-light-gray shadow-sm border rounded-t-xl p-3 w-full">
                @include('pos.partial.tabel-pos')
            </div>
        </div>
    </div>
</div>

{{-- Cart Section --}}
<div class="w-full bg-light-gray border border-white rounded-2xl col-span-2 flex flex-col justify-center">
    @include('pos.partial.cart-pos')
</div>