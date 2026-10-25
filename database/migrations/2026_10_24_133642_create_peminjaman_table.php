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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_harus_kembali');
            $table->foreignId('id_anggota')->constrained('anggota', 'id_anggota')->cascadeOnDelete();
            $table->foreignId('id_buku')->constrained('buku', 'id_buku')->cascadeOnDelete();
            $table->foreignId('id_petugas')->constrained('petugas', 'id_petugas')->cascadeOnDelete();
            $table->enum('status', ['Dipinjam', 'Dikembalikan'])->default('Dipinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
