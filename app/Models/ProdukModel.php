<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    use HasFactory;
    protected $table = 'produk_models'; // Ganti dengan nama tabel yang sesuai
    protected $primaryKey = 'produk_id';
    public $incrementing = false; // Non-auto-increment
    protected $keyType = 'string';
    protected $fillable = ['nama_produk', 'tipe', 'sku',  'stok', 'harga', 'deskripsi']; // Ganti dengan kolom yang sesuai
    public $timestamps = true;

    // Mutator untuk menyimpan harga sebagai angka normal
    // public function setHargaAttribute($value)
    // {
    //     $this->attributes['harga'] = preg_replace('/[^0-9]/', '', $value);
    // }

    // Accessor untuk menampilkan harga dalam format Rupiah
    public function getHargaAttribute($value)
    {
        return 'Rp' . number_format($value, 0, ',', '.');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($produk) {
            // Generate product ID
            $lastId = self::latest('created_at')->pluck('produk_id')->first();
            $nextId = $lastId ? intval(substr($lastId, 1)) + 1 : 1;
            $produk->produk_id = 'P' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
        });
    }
}
