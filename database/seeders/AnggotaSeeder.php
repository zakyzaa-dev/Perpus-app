<?php

namespace Database\Seeders;

use App\Models\Anggota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggotas = [
            // NewJeans (5 anggota)
            [
                'nisn' => '3120010001',
                'nama_anggota' => 'Minji',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII PPLG 1'
            ],
            [
                'nisn' => '3120010002',
                'nama_anggota' => 'Hanni',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII PPLG 1'
            ],
            [
                'nisn' => '3120010003',
                'nama_anggota' => 'Danielle',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI PPLG 2'
            ],
            [
                'nisn' => '3120010004',
                'nama_anggota' => 'Haerin',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI PPLG 2'
            ],
            [
                'nisn' => '3120010005',
                'nama_anggota' => 'Hyein',
                'jenis_kelamin' => 'P',
                'kelas' => 'X PPLG 3'
            ],

            // ILLIT (5 anggota)
            [
                'nisn' => '3120020001',
                'nama_anggota' => 'Yunah',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII Broadcasting 1'
            ],
            [
                'nisn' => '3120020002',
                'nama_anggota' => 'Minju',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII Broadcasting 1'
            ],
            [
                'nisn' => '3120020003',
                'nama_anggota' => 'Moka',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI Broadcasting 2'
            ],
            [
                'nisn' => '3120020004',
                'nama_anggota' => 'Wonhee',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI Broadcasting 2'
            ],
            [
                'nisn' => '3120020005',
                'nama_anggota' => 'Iroha',
                'jenis_kelamin' => 'P',
                'kelas' => 'X Broadcasting 3'
            ],

            // BabyMonster (5 anggota)
            [
                'nisn' => '3120030001',
                'nama_anggota' => 'Ruka',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII Animasi 1'
            ],
            [
                'nisn' => '3120030002',
                'nama_anggota' => 'Pharita',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII Animasi 1'
            ],
            [
                'nisn' => '3120030003',
                'nama_anggota' => 'Asa',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI Animasi 2'
            ],
            [
                'nisn' => '3120030004',
                'nama_anggota' => 'Ahyeon',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI Animasi 2'
            ],
            [
                'nisn' => '3120030005',
                'nama_anggota' => 'Chiquita',
                'jenis_kelamin' => 'P',
                'kelas' => 'X Animasi 3'
            ],

            // TWICE (5 anggota perwakilan)
            [
                'nisn' => '3120040001',
                'nama_anggota' => 'Nayeon',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII Akuntansi 1'
            ],
            [
                'nisn' => '3120040002',
                'nama_anggota' => 'Sana',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII Akuntansi 1'
            ],
            [
                'nisn' => '3120040003',
                'nama_anggota' => 'Jihyo',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI Manajemen 2'
            ],
            [
                'nisn' => '3120040004',
                'nama_anggota' => 'Mina',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI Manajemen 2'
            ],
            [
                'nisn' => '3120040005',
                'nama_anggota' => 'Tzuyu',
                'jenis_kelamin' => 'P',
                'kelas' => 'X Pemasaran 1'
            ],
        ];

        foreach ($anggotas as $anggota) {
            Anggota::create($anggota);
        }
    }
}
