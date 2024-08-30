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
            <div class="p-2 w-full">
                <ul class="flex flex-wrap text-sm font-medium text-center bg-bg shadow-sm border-dark-gray rounded-xl p-2"
                    id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist"
                    data-tabs-inactive-classes="text-grayish-cyan hover:text-black"
                    data-tabs-active-classes="text-black bg-white shadow-sm border-grayish-cyan">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 rounded-xl" id="allproduct-tab" data-tabs-target="#allproduct"
                            type="button" role="tab" aria-controls="allproduct" aria-selected="false">All
                            Products</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 rounded-xl" id="medicine-tab" data-tabs-target="#medicine"
                            type="button" role="tab" aria-controls="medicine" aria-selected="false">Medicine</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 rounded-xl" id="medictool-tab" data-tabs-target="#medictool"
                            type="button" role="tab" aria-controls="medictool" aria-selected="false">Medic
                            Tools</button>
                    </li>
                </ul>
            </div>
            {{-- Tabs Content --}}
            <div id="default-tab-content" class="w-full p-3 rounded-xl bg-white shadow-sm border-grayish-cyan">
                <div class="hidden" id="allproduct" role="tabpanel" aria-labelledby="allproduct-tab">
                    @include('stock.partial.all-product-table')
                </div>
                <div class="hidden" id="medicine" role="tabpanel" aria-labelledby="medicine-tab">
                    @include('stock.partial.product-medicine-table')
                </div>
                <div class="hidden" id="medictool" role="tabpanel" aria-labelledby="medictool-tab">
                    @include('stock.partial.product-medictool-table')
                </div>
                {{-- <div class="hidden p-2 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                    aria-labelledby="contacts-tab">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong
                            class="font-medium text-gray-800 dark:text-white">Contacts tab's associated
                            content</strong>. Clicking another tab will toggle the visibility of this one for the next.
                        The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>