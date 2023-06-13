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
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id('id_pelaporan');
            $table->unsignedBigInteger('id_obat');
            $table->foreign('id_obat')->references('id_obat')->on('obats');
            $table->integer('jumlah_obat_awal');
            $table->integer('jumlah_obat_akhir');
            $table->integer('total_penjualan');
            $table->date('tanggal_laporan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaporans');
    }
};
