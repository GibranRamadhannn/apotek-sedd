<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProdukController;
use App\Http\Controllers\ListOrder;
use App\Http\Controllers\Master\MasterDataTipe;
use App\Http\Controllers\Master\MasterDataUser;
use App\Http\Controllers\MasterDataRoleAccountController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\Pembelian;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use App\Http\Middleware\BreadcrumbMiddleware;
use App\Models\Master\MasterDataRoleAccount;
use App\Models\Pembelian as ModelsPembelian;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware('auth', 'verified')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        // Produk
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
        Route::post('/produk/tambah-produk', [ProdukController::class, 'store'])->name('produk.store');
        Route::delete('/produk/{produk_id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
        Route::get('/produk/{produk_id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
        Route::patch('/produk/produk/{produk_id}', [ProdukController::class, 'update'])->name('produk.update');

        // Pelanggan
        Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
        Route::post('/pelanggan/tambah-pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
        Route::delete('/pelanggan/{id_member}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
        Route::get('/pelanggan/{id_member}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
        Route::patch('/pelanggan/pelanggan/{id_member}', [PelangganController::class, 'update'])->name('pelanggan.update');

        // Pembelian
        Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
        Route::post('/pembelian/tambah-pembelian', [PembelianController::class, 'store'])->name('pembelian.store');
        Route::delete('/pembelian/{id_pembelian}', [PembelianController::class, 'destroy'])->name('pembelian.destroy');
        Route::get('/pembelian/{id_pembelian}/edit', [PembelianController::class, 'edit'])->name('pembelian.edit');
        Route::patch('/pembelian/pembelian/{id_pembelian}', [PembelianController::class, 'update'])->name('pembelian.update');
    });

    // POS
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos/add-to-cart', [POSController::class, 'addToCart'])->name('pos.addToCart');
    Route::post('/pos/remove-from-cart', [POSController::class, 'removeFromCart'])->name('pos.removeFromCart');
    Route::get('/pos/cart', [POSController::class, 'getCart'])->name('pos.getCart');

    // List Order
    // Route::get('/list-order', [Lis::class, 'index'])->name('listorder.index');

    // Stock
    // Stock Routes
    Route::get('/stock', [StockController::class, 'allProducts'])->name('stock.all');
    // Route::get('/stock/medicine', [StockController::class, 'medicine'])->name('stock.medicine');
    // Route::get('/stock/tools', [StockController::class, 'medicTools'])->name('stock.tools');


    // Master Data
    Route::prefix('master')->name('master.')->group(function () {
        Route::get('/tipe', [MasterDataTipe::class, 'index'])->name('tipe');
        Route::post('/tipe/tambah-tipe', [MasterDataTipe::class, 'store'])->name('tipe.store');
        Route::get('/user', [MasterDataUser::class, 'index'])->name('user.index');
        Route::post('/user/tambah-user', [RegisteredUserController::class, 'store'])->name('user.store');
        Route::get('/role', [MasterDataRoleAccountController::class, 'index'])->name('role.index');
        Route::post('/role/tambah-role', [MasterDataRoleAccountController::class, 'store'])->name('role.store');
    });

    // BreadCrumb
    Route::middleware([BreadcrumbMiddleware::class])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/produk', [ProdukController::class, 'index'])->name('dashboard.produk.index');
        Route::get('/tipe', [MasterDataTipe::class, 'index'])->name('master.tipe');
        Route::get('/pelanggan', [PelangganController::class, 'index'])->name('dashboard.pelanggan.index');
        Route::get('/pembelian', [PembelianController::class, 'index'])->name('dashboard.pembelian.index');
        Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
        Route::get('/list-order', [ListOrder::class, 'index'])->name('listorder.index');
        Route::get('/stock', [StockController::class, 'allProducts'])->name('stock.index');
    });
});

require __DIR__ . '/auth.php';
