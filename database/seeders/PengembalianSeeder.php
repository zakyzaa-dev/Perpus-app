<?php

namespace Database\Seeders;

use App\Models\Pengembalian;
use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil data peminjaman yang statusnya 'Dikembalikan'
        $peminjamans = Peminjaman::where('status', 'Dikembalikan')->get();

        foreach ($peminjamans as $index => $peminjaman) {
            // Simulasi variasi tanggal pengembalian berdasarkan urutan data
            // Ada yang tepat waktu, ada yang terlambat beberapa hari
            $variasiHari = [0, 1, 3, 5, 2, 0, 4];
            $tambahHari = $variasiHari[$index % count($variasiHari)];

            // Tanggal kembali = tanggal harus kembali + variasi keterlambatan
            $tanggalHarusKembali = Date::parse($peminjaman->tanggal_harus_kembali);
            $tanggalKembali = (clone $tanggalHarusKembali)->addDays($tambahHari);

            // Hitung keterlambatan hari (jika tanggal kembali > tanggal harus kembali)
            $terlambatHari = max(0, $tanggalHarusKembali->diffInDays($tanggalKembali, false));

            // Jika tanggal kembali lebih awal atau sama dengan tanggal harus kembali, set terlambat 0
            if ($tanggalKembali->lessThanOrEqualTo($tanggalHarusKembali)) {
                $terlambatHari = 0;
            }

            // Hitung denda (misal: Rp1.000 per hari keterlambatan)
            $tarifDendaPerHari = 1000;
            $denda = $terlambatHari * $tarifDendaPerHari;

            Pengembalian::create([
                'id_peminjaman' => $peminjaman->id_peminjaman,
                'tanggal_kembali' => $tanggalKembali,
                'terlambat_hari' => $terlambatHari,
                'denda' => $denda,
            ]);
        }
    }
}
