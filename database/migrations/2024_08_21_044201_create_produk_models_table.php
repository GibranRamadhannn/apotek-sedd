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
        Schema::create('produk_models', function (Blueprint $table) {
            $table->id();
            $table->string('produk_id')->unique();
            $table->string('sku');
            $table->string('tipe');
            $table->string('nama_produk');
            $table->integer('stok');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_models');
    }
};
