<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('dashboard.pelanggan.pelanggan', compact('pelanggan'));
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
            'nama_pelanggan' => 'required|string|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|string|max:255|email',
            'tipe' => 'required|string'
        ]);

        // Simpan data ke database
        Pelanggan::create($validated);

        // Redirect kembali ke halaman index
        return redirect()->route('dashboard.pelanggan.index');
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
    public function edit(string $id_member)
    {
        $pelanggan = Pelanggan::findOrFail($id_member);
        return view('dashboard.pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_member)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|string|max:255|email',
            'tipe' => 'required|string'
        ]);

        // Temukan data pelanggan
        $pelanggan = Pelanggan::findOrFail($id_member);

        // Perbarui data pelanggan
        $pelanggan->update($validated);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('dashboard.pelanggan.index')->with('success', 'Pelanggan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_member)
    {
        $pelanggan = Pelanggan::findOrFail($id_member);
        $pelanggan->delete();

        return redirect()->route('dashboard.pelanggan.index')->with('success', 'Pelanggan deleted successfully.');
    }
}
