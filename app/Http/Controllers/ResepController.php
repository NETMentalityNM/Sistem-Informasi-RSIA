<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\RekamMedik;
use App\Models\Pegawai;
use App\Models\Obat;
use Illuminate\Http\Request;
use PDF;
use Image;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $resep = Resep::all();
        return view('resep.index', compact('nomor', 'resep'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $resep = RekamMedik::all();
        $resep = Obat::all();
        $resep = Pegawai::all();
        return view('resep.form', compact('resep'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $resep = new Resep;

        $resep->no_resep = $request->NO_RESEP;
        $resep->no_rekmed = $request->no_rekmed;
        $resep->kd_obat = $request->kd_obat;
        $resep->jumlah = $request->JUMLAH;
        $resep->nip = $request->nip;
        $resep->save();

        return redirect('/resep');
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
        $resep = Resep::find($id);
        $resep = RekamMedik::all();
        $resep = Obat::all();
        $resep = Pegawai::all();
        return view('resep.edit', compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $resep = Resep::find($id);

        $resep->no_resep = $request->NO_RESEP;
        $resep->no_rekmed = $request->NO_RESEP;
        $resep->kd_obat = $request->NO_RESEP;
        $resep->jumlah = $request->NO_RESEP;
        $resep->nip = $request->NO_RESEP;
        $resep->save();

        return redirect('/resep');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resep = Resep::find($id);
        $resep->delete();

        return redirect('/resep');
    }
}
