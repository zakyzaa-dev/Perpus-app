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
            // Member NewJeans
            [
                'nama_petugas' => 'Kim Minji',
                'username' => 'minji.bears',
                'jabatan' => 'Wakil Kepala'
            ],
            [
                'nama_petugas' => 'Danielle Marsh',
                'username' => 'dani.marsh',
                'jabatan' => 'Staff Administrasi'
            ],
            [
                'nama_petugas' => 'Kang Haerin',
                'username' => 'haerin.cat',
                'jabatan' => 'Staff Pelayanan'
            ],
            [
                'nama_petugas' => 'Lee Hyein',
                'username' => 'hyein.maknae',
                'jabatan' => 'Staff Pelayanan'
            ],
            // Member LE SSERAFIM
            [
                'nama_petugas' => 'Kim Chaewon',
                'username' => 'chaewon.ssammu',
                'jabatan' => 'Supervisor'
            ],
            [
                'nama_petugas' => 'Miyawaki Sakura',
                'username' => 'sakura.chan',
                'jabatan' => 'Arsiparis'
            ],
            [
                'nama_petugas' => 'Huh Yunjin',
                'username' => 'jennifer.huh',
                'jabatan' => 'Staff Humas'
            ],
            [
                'nama_petugas' => 'Nakamura Kazuha',
                'username' => 'kazuha.zuha',
                'jabatan' => 'Staff Administrasi'
            ],
            [
                'nama_petugas' => 'Hong Eunchae',
                'username' => 'eunchae.smile',
                'jabatan' => 'Staff Pelayanan'
            ],
            // Tambahan Penggenap ke-13
            [
                'nama_petugas' => 'Kanggoro',
                'username' => 'kang.ro',
                'jabatan' => 'Keamanan'
            ],
            [
                'nama_petugas' => 'Bambang',
                'username' => 'bamss',
                'jabatan' => 'Teknisi IT'
            ],
        ];

        foreach ($petugass as $petugas) {
            Petugas::create($petugas);
        }
    }
}
