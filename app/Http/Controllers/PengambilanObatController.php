<?php

namespace App\Http\Controllers;

use App\Models\PengambilanObat;
use App\Models\Resep;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class PengambilanObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $ambil_obat = PengambilanObat::all();
        return view('super_admin.pengambilan-obat.index', compact('ambil_obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ambil_obat = Pegawai::all();
        $ambil_obat = Resep::all();
        return view('super_admin.pengambilan-obat.form', compact('ambil_obat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gen_idAmbil = IdGenerator::generate(['table' => 'pengambilan_obats','field' => 'id_ambil', 'length' => 8, 'prefix' => 'PP-']);


        $ambil_obat = new PengambilanObat;

        $ambil_obat->id_ambil = $gen_idAmbil;
        $ambil_obat->tgl = $request->TGL;
        $ambil_obat->nip = $request->nip;
        $ambil_obat->no_resep = $request->no_resep;
        $ambil_obat->ket = $request->KET;
        $ambil_obat->save();

        return redirect('/ambil-obat');
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
        $ambil_obat = PengambilanObat::find($id);
        $ambil_obat = Pegawai::all();
        $ambil_obat = Resep::all();
        return view('super_admin.pengambilan-obat.edit', compact('ambi_obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ambil_obat = PengambilanObat::find($id);

        $ambil_obat->id_ambil = $request->ID_AMBIL;
        $ambil_obat->tgl = $request->TGL;
        $ambil_obat->nip = $request->nip;
        $ambil_obat->no_resep = $request->no_resep;
        $ambil_obat->ket = $request->KET;
        $ambil_obat->save();

        return redirect('/ambil-obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ambil_obat = PengambilanObat::find($id);
        $ambil_obat->delete();

        return redirect('/ambil-obat');
    }
}
