<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\ProdukModel;
use Illuminate\Http\Request;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama_pelanggan = Pelanggan::pluck('nama_pelanggan');
        $produks = ProdukModel::all();
        return view('pos.pos', compact('produks', 'nama_pelanggan'));
    }


    public function addToCart(Request $request)
    {
        $produk = ProdukModel::where('produk_id', $request->produk_id)->first();

        $cart = session()->get('cart', []);

        if (isset($cart[$request->produk_id])) {
            $cart[$request->produk_id]['quantity'] += $request->quantity;
        } else {
            $cart[$request->produk_id] = [
                "name" => $produk->nama_produk,
                "price" => $produk->harga_jual,
                "quantity" => $request->quantity
            ];
        }

        session()->put('cart', $cart);

        return response()->json(['success' => 'Product added to cart successfully!', 'cart' => $cart]);
    }

    public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$request->produk_id])) {
            unset($cart[$request->produk_id]);
            session()->put('cart', $cart);
        }

        return response()->json(['success' => 'Product removed from cart successfully!', 'cart' => $cart]);
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
