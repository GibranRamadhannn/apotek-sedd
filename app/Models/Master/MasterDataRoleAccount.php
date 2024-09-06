<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDataRoleAccount extends Model
{
    use HasFactory;
    protected $table = 'master_data_role_accounts'; // Ganti dengan nama tabel yang sesuai
    protected $fillable = ['role-name', 'status']; // Ganti dengan kolom yang sesuai
    protected $primaryKey = 'role-name';
    public $incrementing = false; // Non-auto-increment
    protected $keyType = 'string';
    public $timestamps = true;
}
