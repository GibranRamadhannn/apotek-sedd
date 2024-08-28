<div class="w-full bg-light-gray border border-white rounded-2xl">
    <div class="p-3">
        <div class="flex flex-col justify-center items-start gap-2">
            <div class="w-full flex justify-between items-center px-2">
                {{-- Search --}}
                <div class="relative">
                    <x-search-button></x-search-button>
                </div>
            </div>
            {{-- Tabs --}}
            <div class="p-2 w-full flex flex-col gap-4">
                <ul
                    class="flex items-center justify-start gap-4 text-sm font-medium border border-bright-turqoise shadow-sm rounded-xl bg-bg p-2">
                    <li>
                        <button onclick="switchTab('all')" id="tab-all"
                            class="relative flex items-center justify-center gap-2 px-3 py-3 rounded-xl text-sm font-medium">All
                            Products</button>
                    </li>
                    <li>
                        <button onclick="switchTab('medicine')" id="tab-medicine"
                            class="relative flex items-center justify-center gap-2 px-3 py-3 rounded-xl text-sm font-medium">Medicine</button>
                    </li>
                    <li>
                        <button onclick="switchTab('tools')" id="tab-tools"
                            class="relative flex items-center justify-center gap-2 px-3 py-3 rounded-xl text-sm font-medium">Medic
                            Tools</button>
                    </li>
                </ul>

                <div id="content-all" style="display: block;">
                    @include('stock.partial.all-product-table')
                </div>
                <div id="content-medicine" style="display: none;">
                    @include('stock.partial.product-medicine-table')
                </div>
                <div id="content-tools" style="display: none;">
                    @include('stock.partial.product-medictool-table')
                </div>
            </div>
        </div>
    </div>
</div>
</div>