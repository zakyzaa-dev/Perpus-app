<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $peminjamans = [
            [
                'id_anggota' => 1,
                'id_buku' => 1,
                'id_petugas' => 1,
                'tanggal_pinjam' => Date::now(),
                'tanggal_harus_kembali' => Date::now()->addDays(7),
                'status' => 'Dipinjam'
            ],
            [
                'id_anggota' => 5,
                'id_buku' => 3,
                'id_petugas' => 8,
                'tanggal_pinjam' => Date::now(),
                'tanggal_harus_kembali' => Date::now()->addDays(2),
                'status' => 'Dipinjam'
            ],
        ];

        foreach ($peminjamans as $item) {
            Peminjaman::create($item);
        }
    }
}
