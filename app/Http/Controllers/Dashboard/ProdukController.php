<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MasterData;
use App\Models\ProdukModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display the produk view.
     */
    public function index()
    {
        // Menampilkan data produk di view
        $produks = ProdukModel::all();
        $nama_tipe = MasterData::pluck('nama_tipe');
        return view('dashboard.produk.index', compact('nama_tipe', 'produks'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string|max:255'
        ]);

        // Simpan data ke database
        ProdukModel::create($validated);

        // Redirect kembali ke halaman index
        return redirect()->route('dashboard.produk.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $produk_id)
    {
        $produks = ProdukModel::findOrFail($produk_id);
        return view('dashboard.produk.edit', compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $produk_id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string|max:255'
        ]);

        // Temukan data pelanggan
        $produks = ProdukModel::findOrFail($produk_id);

        // Perbarui data pelanggan
        $produks->update($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('dashboard.produk.index')->with('success', 'Produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $produk_id)
    {
        $produks = ProdukModel::findOrFail($produk_id);
        $produks->delete();

        return redirect()->route('dashboard.produk.index')->with('success', 'Produk deleted successfully.');
    }
}
