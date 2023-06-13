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
        Schema::create('penyedias', function (Blueprint $table) {
            $table->id('id_obat_disiapkan');
            $table->unsignedBigInteger('id_resep');
            $table->foreign('id_resep')->references('id_resep')->on('reseps');
            $table->string('nama_obat');
            $table->string('deskripsi_obat');
            $table->date('kadaluarsa');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penydias');
    }
};
