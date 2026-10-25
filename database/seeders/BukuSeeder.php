<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukus = [
            [
                'judul_buku' => 'Solanin',
                'kode_buku' => 'BK-001',
                'penulis' => 'Inio Asano',
                'stok' => 10,
            ],
            [
                'judul_buku' => 'KOSMOS',
                'kode_buku' => 'BK-002',
                'penulis' => 'Carl Sagan',
                'stok' => 15,
            ],
            [
                'judul_buku' => 'Filosofi Teras',
                'kode_buku' => 'BK-003',
                'penulis' => 'Henry Manampiring',
                'stok' => 3,
            ],
            [
                'judul_buku' => 'Bumi',
                'kode_buku' => 'BK-004',
                'penulis' => 'Tere Liye',
                'stok' => 8,
            ],
            [
                'judul_buku' => 'Laskar Pelangi',
                'kode_buku' => 'BK-005',
                'penulis' => 'Andrea Hirata',
                'stok' => 12,
            ],
            [
                'judul_buku' => 'Atomic Habits',
                'kode_buku' => 'BK-006',
                'penulis' => 'James Clear',
                'stok' => 20,
            ],
            [
                'judul_buku' => 'Dunia Sophie',
                'kode_buku' => 'BK-007',
                'penulis' => 'Jostein Gaarder',
                'stok' => 5,
            ],
            [
                'judul_buku' => 'Sebuah Seni untuk Bersikap Bodo Amat',
                'kode_buku' => 'BK-008',
                'penulis' => 'Mark Manson',
                'stok' => 14,
            ],
            [
                'judul_buku' => 'Sapiens',
                'kode_buku' => 'BK-009',
                'penulis' => 'Yuval Noah Harari',
                'stok' => 7,
            ],
            [
                'judul_buku' => 'Gadis Kretek',
                'kode_buku' => 'BK-010',
                'penulis' => 'Ratih Kumala',
                'stok' => 9,
            ],
            [
                'judul_buku' => 'Cantik Itu Luka',
                'kode_buku' => 'BK-011',
                'penulis' => 'Eka Kurniawan',
                'stok' => 4,
            ],
            [
                'judul_buku' => 'Bicara Itu Ada Seninya',
                'kode_buku' => 'BK-012',
                'penulis' => 'Oh Su Hyang',
                'stok' => 11,
            ],
            [
                'judul_buku' => 'Perahu Kertas',
                'kode_buku' => 'BK-013',
                'penulis' => 'Dee Lestari',
                'stok' => 6,
            ],
            [
                'judul_buku' => 'Home Sweet Loan',
                'kode_buku' => 'BK-014',
                'penulis' => 'Almira Bastari',
                'stok' => 13,
            ],
            [
                'judul_buku' => 'Psychology of Money',
                'kode_buku' => 'BK-015',
                'penulis' => 'Morgan Housel',
                'stok' => 18,
            ],
            [
                'judul_buku' => 'Dilan 1990',
                'kode_buku' => 'BK-016',
                'penulis' => 'Pidi Baiq',
                'stok' => 10,
            ],
            [
                'judul_buku' => 'Laut Bercerita',
                'kode_buku' => 'BK-017',
                'penulis' => 'Leila S. Chudori',
                'stok' => 5,
            ],
            [
                'judul_buku' => 'Hujan',
                'kode_buku' => 'BK-018',
                'penulis' => 'Tere Liye',
                'stok' => 16,
            ],
            [
                'judul_buku' => 'Bumi Manusia',
                'kode_buku' => 'BK-019',
                'penulis' => 'Pramoedya Ananta Toer',
                'stok' => 7,
            ],
            [
                'judul_buku' => 'Dikta & Hukum',
                'kode_buku' => 'BK-020',
                'penulis' => 'Dhia\'an Farah',
                'stok' => 12,
            ],
        ];

        foreach ($bukus as $buku) {
            Buku::create($buku);
        }
    }
}
