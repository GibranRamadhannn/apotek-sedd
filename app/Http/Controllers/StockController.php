<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allProducts()
    {
        $produks = ProdukModel::all();
        return view('stock.stock', compact('produks'));
    }

    public function medicine()
    {
        $produks = ProdukModel::where('tipe', 'medicine')->get();
        return view('stock.stock', compact('produks'));
    }

    public function medicTools()
    {
        $produks = ProdukModel::where('tipe', 'Medic Tools');
        return view('stock.stock', compact('produks'));
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
        //
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
