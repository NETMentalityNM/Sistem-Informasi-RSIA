<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('nomor', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = Jabatan::all();
        return view('pegawai.form', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pegawai = new Pegawai;

        // dd($request->all());

        $pegawai->nip = $request->NIP;
        $pegawai->nm_pegawai = $request->NM_PEGAWAI;
        $pegawai->umur_pegawai = $request->UMUR_PEGAWAI;
        $pegawai->alamat_pegawai = $request->ALAMAT_PEGAWAI;
        $pegawai->hp_pegawai = $request->HP_PEGAWAI;
        $pegawai->jabatans_id = $request->id_jabatan;
        $pegawai->save();

        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::find($id);
        $jabatan = Jabatan::all();
        return view('pegawai.edit', compact('pegawai', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
