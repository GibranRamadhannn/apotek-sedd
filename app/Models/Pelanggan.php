<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans'; // Ganti dengan nama tabel yang sesuai
    protected $primaryKey = 'id_member';
    public $incrementing = false; // Non-auto-increment
    protected $keyType = 'string';
    protected $fillable = ['nama_pelanggan', 'telepon', 'email', 'tipe']; // Ganti dengan kolom yang sesuai
    public $timestamps = true;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($pelanggan) {
            // Generate ID Member with Custom Format
            $lastId = self::latest('created_at')->pluck('id_member')->first();
            $nextId = $lastId ? intval(substr($lastId, 2)) + 1 : 1;
            $pelanggan->id_member = 'ID' . str_pad($nextId, 4, '0', STR_PAD_LEFT);
        });
    }
}
