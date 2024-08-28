<table class="w-full table-auto">
 <thead>
  <tr>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">No</th>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Produk ID</th>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Nama Produk
   </th>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Tipe Produk
   </th>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Deskripsi
    Produk
   </th>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Harga Jual
   </th>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Stok Produk
   </th>
   <th class="border-b-2 border-gray-200 p-2 text-sm font-medium text-[#B4B4B8]">Aksi</th>
  </tr>
 </thead>
 <tbody>
  @foreach ($produks as $produk)
  <tr class="text-center">
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{ $loop->iteration
    }}</td>
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{ $produk->produk_id }}</td>
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal" {{ $produk->nama_produk }}></td>
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal" {{ $produk->tipe }}></td>
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{
    $produk->deskripsi }}</td>
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{ $produk->harga
    }}</td>
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal">{{ $produk->stok }}</td>
   <td class="border-b border-light-grayish-blue p-2 text-base font-normal">

   </td>
  </tr>
  @endforeach
 </tbody>
</table>