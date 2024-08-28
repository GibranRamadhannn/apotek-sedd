<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MasterData;
use Illuminate\Http\Request;

class MasterDataTipe extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipe = MasterData::all();
        return view('master.tipe', compact('tipe'));
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
            'nama_tipe' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        MasterData::create($validated);

        // Redirect kembali ke halaman index
        return redirect()->route('master.tipe');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
