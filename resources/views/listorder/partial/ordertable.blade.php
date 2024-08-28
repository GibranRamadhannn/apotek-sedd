<div class=" bg-white border-light-gray shadow-sm border rounded-t-xl p-3 w-full">
    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="border-b-2 border-gray-200 p-2 text-lg font-medium text-[#B4B4B8]">No</th>
                <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Order ID
                </th>
                <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Customer Name
                </th>
                <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Customer Type
                </th>
                <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Product
                </th>
                <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Bill
                </th>
                <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Status</th>
                <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($ as $) --}}
            <tr class="text-center">
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">1</td>
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">#0001</td>
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">M Gibran Ramadhan</td>
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">Member</td>
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">4 Items</td>
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">Rp 300.000</td>
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">Success</td>
                <td class="border-b border-light-grayish-blue p-2 text-base font-normal">
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>