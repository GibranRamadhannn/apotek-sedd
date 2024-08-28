<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_data_user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengguna');
            $table->string('alamat_email');
            $table->integer('nomor_handphone')->nullable();
            $table->string('role_account');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_data_user');
    }
};
