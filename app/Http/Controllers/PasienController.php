<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $pasien = Pasien::all();
        return view('pasien.index', compact('nomor', 'pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pasien = new Pasien;

        $pasien->no_kartu      = $request->NO_KARTU;
        $pasien->nik_pas       = $request->NIK_PAS;
        $pasien->nm_pas        = $request->NM_PAS;
        $pasien->umur_pas      = $request->UMUR_PAS;
        $pasien->hp_pas        = $request->HP_PAS;
        $pasien->alamat_pas    = $request->ALAMAT_PAS;
        $pasien->status_pasien = $request->STATUS_PAS;
        $pasien->foto = "default.jpg";
        $pasien->save();

        return redirect('/pasien');

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
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasien = Pasien::find($id);

        $pasien->no_kartu      = $request->NO_KARTU;
        $pasien->nik_pas       = $request->NIK_PAS;
        $pasien->nm_pas        = $request->NM_PAS;
        $pasien->umur_pas      = $request->UMUR_PAS;
        $pasien->hp_pas        = $request->HP_PAS;
        $pasien->alamat_pas    = $request->ALAMAT_PAS;
        $pasien->status_pasien = $request->STATUS_PAS;
        $pasien->save();

        return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('/pasien');
    }
}
