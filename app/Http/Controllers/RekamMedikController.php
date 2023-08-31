<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Poli;
use App\Models\RekamMedik;
use Illuminate\Http\Request;

class RekamMedikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $rekam_medik = RekamMedik::with('pegawai', 'poli')->get();
        // dd($rekam_medik);
        return view('rekam-medik.index', compact('nomor' ,'rekam_medik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $rekam_medik = Pegawai::all();
        $rekam_medik = Poli::all();
        return view('rekam-medik.form', compact('rekam_medik'));
        // return redirect('rekam-medik.form2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rekam_medik = new RekamMedik;

        $rekam_medik->no_rekmed = $request->NO_REKMED;
        $rekam_medik->no_kartu = $request->NO_KARTU;
        $rekam_medik->tgl_berobat = $request->TGL_BEROBAT;
        $rekam_medik->diagnosa = $request->DIAGNOSA;
        $rekam_medik->polis_id = $request->id_poli;
        $rekam_medik->nip = $request->nip;
        $rekam_medik->save();
        // $rekam_medik->saveid_poli();
        

        return redirect('/rekam-medik');
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
        $rekam_medik = RekamMedik::find($id);
        // $rekam_medik = Pegawai::find();
        // $rekam_medik = Poli::find();
        return view('rekam-medik.edit', compact('rekam_medik',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rekam_medik = RekamMedik::find($id);

        $rekam_medik->no_rekmed = $request->NO_REKMED;
        $rekam_medik->no_kartu = $request->NO_KARTU;
        $rekam_medik->tgl_berobat = $request->TGL_BEROBAT;
        $rekam_medik->diagnosa = $request->DIAGNOSA;
        $rekam_medik->nip = $request->nip;
        $rekam_medik->polis_id = $request->id_poli;
        $rekam_medik->save();

        return redirect('/rekam-medik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rekam_medik = RekamMedik::find($id);
        $rekam_medik->delete();

        return redirect('/rekam-medik');
    }
}
