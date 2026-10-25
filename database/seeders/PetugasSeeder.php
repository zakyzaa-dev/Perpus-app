<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Petugas;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petugass = [
            [
                'nama_petugas' => 'Hanni Pham',
                'username' => 'phamy',
                'jabatan' => 'Kepala perpustakaan'
            ],
            [
                'nama_petugas' => 'Zaky RFN',
                'username' => 'kyzaa',
                'jabatan' => 'Staff'
            ],
        ];

        foreach ($petugass as $petugas) {
            Petugas::create($petugas);
        }

    }
}
