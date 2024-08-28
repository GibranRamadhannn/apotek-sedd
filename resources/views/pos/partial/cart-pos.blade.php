{{-- Cart - Product --}}
<div class="p-3">
    {{-- Heading --}}
    <div class="bg-white rounded-xl border-grayish-blue shadow-sm">
        <div class="flex items-center justify-between gap-2">
            {{-- Title --}}
            <div class="p-2">
                <label for="cart" class="text-very-dark-gray font-medium text-lg">Your Cart</label>
            </div>
            {{-- No Order --}}
            <div class="p-2">
                <p class="text-dark-gray font-base text-sm">Order #3243</p>
            </div>
        </div>
    </div>

    {{-- Product Section --}}
    <div class="p-2">
        <div>
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama Produk</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Quantity</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="item in cart" :key="item.produk_id">
                        <tr>
                            <td class="border px-4 py-2" x-text="item.name"></td>
                            <td class="border px-4 py-2" x-text="item.price"></td>
                            <td class="border px-4 py-2" x-text="item.quantity"></td>
                            <td class="border px-4 py-2">
                                <button class="bg-red-500 text-white px-4 py-2"
                                    @click="removeFromCart(item.produk_id)">Remove</button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
</div>