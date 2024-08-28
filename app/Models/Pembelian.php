<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelians'; // Ganti dengan nama tabel yang sesuai
    protected $primaryKey = 'id_pembelian';
    public $incrementing = false; // Non-auto-increment
    protected $keyType = 'string';
    protected $fillable = ['nama_supplier', 'no_referensi', 'tgl_pembelian', 'dokumentasi', 'termin_pembayaran']; // Ganti dengan kolom yang sesuai
    public $timestamps = true;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($pembelian) {
            // Ambil tanggal dari created_at
            $tanggal = now()->format('Ymd'); // format YYYYMMDD

            // Ambil ID pembelian terakhir berdasarkan tanggal yang sama
            $lastPembelian = self::whereDate('created_at', now()->toDateString())
                ->latest('created_at')
                ->pluck('id_pembelian')
                ->first();

            // Pisahkan nomor urut terakhir dari ID pembelian terakhir
            $lastNumber = $lastPembelian ? intval(substr($lastPembelian, -4)) : 0;

            // Tambahkan 1 ke nomor urut terakhir
            $nextNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);

            // Gabungkan untuk membuat ID Pembelian
            $pembelian->id_pembelian = 'PUR-' . $tanggal . '-' . $nextNumber;
        });
    }
}
