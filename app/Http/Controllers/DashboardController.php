<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Petugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPetugas = Petugas::count();
        $jumlahAnggota = Anggota::count();
        $jumlahBuku = Buku::count();

        return view('dashboard', compact('jumlahAnggota', 'jumlahBuku', 'jumlahPetugas'));
    }
}
