<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\ProdukModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung total produk
        $totalProduk = ProdukModel::count();
        $totalPelanggan = Pelanggan::count();
        return view('dashboard.index', compact('totalProduk', 'totalPelanggan'));
    }
}
