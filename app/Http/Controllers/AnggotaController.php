<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anggota.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => ['string', 'max:10', 'required'],
            'nama_anggota' => ['string', 'max:100', 'required'],
            'jenis_kelamin' => ['in:L,P', 'required'],
            'kelas' => ['max:20', 'required', 'string']
        ]);

        $anggotaNew = Anggota::create($validated);

        return redirect()->route('anggota.index')->with('success', "Berhasil menambah data anggota $anggotaNew->nama_anggota");
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        $validated = $request->validate([
            'nisn' => ['string', 'max:10', 'required'],
            'nama_anggota' => ['string', 'max:100', 'required'],
            'jenis_kelamin' => ['in:L,P', 'required'],
            'kelas' => ['max:20', 'required', 'string']
        ]);

        $anggota->update($validated);

        return redirect()->route('anggota.index')->with('success', "Berhasil mengedit data anggota $anggota->nama_anggota");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        return back()->with('success', "Berhasil menghapus data anggota $anggota->nama_anggota");
    }
}
