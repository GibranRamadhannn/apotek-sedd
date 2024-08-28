<x-app-layout>
    @section('title','POS')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Point Of Sale') }}
        </h2>
    </x-slot>

    <div class="p-1">
        <div class="max-w-screen mx-auto">
            <div class="overflow-hidden rounded-xl">
                <div class="p-4 grid grid-cols-6 gap-2" x-data="posApp()">
                    @include('pos.partial.CardProdukPos')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function posApp() {
        return {
            cart: @json(session('cart', [])),
            addToCart(produk_id) {
                let quantity = this[`quantity_${produk_id}`];

                fetch('{{ route('pos.addToCart') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ produk_id, quantity })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.cart = data.cart;
                    }
                });
            },
            removeFromCart(produk_id) {
                fetch('{{ route('pos.removeFromCart') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ produk_id })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.cart = data.cart;
                    }
                });
            }
        }
    }
</script>