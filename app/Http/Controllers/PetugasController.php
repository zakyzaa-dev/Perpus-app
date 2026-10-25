<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugass = Petugas::all();
        return view('petugas.index', compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_petugas' => ['required', 'string', 'max:100'],
            'jabatan' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:50', 'unique:petugas,username'],
        ]);

        $petugasNew = Petugas::create($validated);
        return redirect()->route('petugas.index')->with('success', $petugasNew);
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petuga)
    {
        $petuga->delete();
        return back()->with('success', "Berhasil menghapus petugas $petuga->nama_petugas");
    }
}
