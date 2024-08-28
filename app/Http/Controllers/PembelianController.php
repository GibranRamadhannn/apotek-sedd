<?php

namespace App\Http\Controllers;

use App\Models\Pembelian as ModelsPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelian = ModelsPembelian::all();
        return view('dashboard.pembelian.pembelian', compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_supplier' => 'required|string|max:255',
            'no_referensi' => 'required|string|max:255',
            'tgl_pembelian' => 'required|date',
            'dokumentasi' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            'termin_pembayaran' => 'required|string|max:255'
        ]);

        // Menangani file dokumentasi jika ada
        if ($request->hasFile('dokumentasi')) {
            $file = $request->file('dokumentasi');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('dokumen', $filename, 'public'); // Simpan file ke storage
            $validated['dokumentasi'] = $filename; // Tambahkan nama file ke data yang divalidasi
        }

        // Simpan data ke database
        ModelsPembelian::create($validated);

        // Redirect kembali ke halaman index
        return redirect()->route('dashboard.pembelian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pembelian)
    {
        $pembelian = ModelsPembelian::findOrFail($id_pembelian);
        return view('dashboard.pembelian.edit', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pembelian)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_supplier' => 'required|string|max:255',
            'no_referensi' => 'required|string|max:255',
            'tgl_pembelian' => 'required|date',
            'dokumentasi' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            'termin_pembayaran' => 'required|string|max:255'
        ]);

        // Temukan data pembelian
        $pembelian = ModelsPembelian::findOrFail($id_pembelian);

        // Menangani file dokumentasi jika ada
        if ($request->hasFile('dokumentasi')) {
            // Hapus file lama jika ada
            if ($pembelian->dokumentasi) {
                Storage::disk('public')->delete('dokumen/' . $pembelian->dokumentasi);
            }

            $file = $request->file('dokumentasi');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('dokumen', $filename, 'public'); // Simpan file ke storage
            $validated['dokumentasi'] = $filename; // Tambahkan nama file ke data yang divalidasi
        }

        // Perbarui data pembelian
        $pembelian->update($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('dashboard.pembelian.index')->with('success', 'Pembelian updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_pembelian)
    {
        $pembelian = ModelsPembelian::findOrFail($id_pembelian);
        $pembelian->delete();

        return redirect()->route('dashboard.pembelian.index')->with('success', 'Pembelian deleted successfully.');
    }
}
