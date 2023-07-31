<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $obat = Obat::all();
        return view('obat.index', compact('nomor', 'obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('obat.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $obat = new Obat();

        $obat->kd_obat = $request->KD_OBAT;
        $obat->nm_obat = $request->NM_OBAT;
        $obat->tgl_kadarluasa = $request->TGL_KADARLUASA;
        $obat->satuan = $request->SATUAN;
        $obat->save();

        return redirect('/obat');
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
        $obat = Obat::find($id);
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obat = Obat::find($id);

        $obat->kd_obat = $request->KD_OBAT;
        $obat->nm_obat = $request->NM_OBAT;
        $obat->tgl_kadarluasa = $request->TGL_KADARLUASA;
        $obat->satuan = $request->SATUAN;
        $obat->save();

        return redirect('/obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $obat = Obat::find($id);
        $obat->delete();

        return redirect('/obat');
    }
}
