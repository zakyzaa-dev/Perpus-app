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
            [
                'nisn' => '1234567890',
                'nama_anggota' =>'Choi Jiwoo',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII PPLG 3'
            ],
            [
                'nisn' => '9825729107',
                'nama_anggota' =>'Stella',
                'jenis_kelamin' => 'P',
                'kelas' => 'XII PPLG 3'
            ],
            [
                'nisn' => '9827829107',
                'nama_anggota' =>'Haneul',
                'jenis_kelamin' => 'P',
                'kelas' => 'XI BS 3'
            ],
        ];

        foreach ($anggotas as $anggota) {
            Anggota::create($anggota);
        }
    }
}
