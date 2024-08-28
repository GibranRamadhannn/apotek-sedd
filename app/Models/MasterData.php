<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterData extends Model
{
    use HasFactory;
    protected $table = 'master_data_tipe'; // Ganti dengan nama tabel yang sesuai
    protected $fillable = ['nama_tipe', 'status']; // Ganti dengan kolom yang sesuai
}
