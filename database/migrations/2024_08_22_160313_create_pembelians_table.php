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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->string('id_pembelian', 50)->primary();
            $table->string('nama_supplier', 100);
            $table->bigInteger('no_referensi');
            $table->date('tgl_pembelian');
            $table->string('dokumentasi', 255)->nullable();
            $table->string('termin_pembayaran', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
