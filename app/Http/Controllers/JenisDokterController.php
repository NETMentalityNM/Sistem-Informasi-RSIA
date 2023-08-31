<?php

namespace App\Http\Controllers;

use App\Models\JenisDokter;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Poli;

class JenisDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $jenis_dokter = JenisDokter::all();
        return view('jenis-dokter.index', compact('nomor', 'jenis_dokter')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis_dokter = Pegawai::all();
        $jenis_dokter = Poli::all();
        return view('jenis-dokter.form', compact('jenis_dokter'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jenis_dokter = new JenisDokter();

        $jenis_dokter->no_jenisDokter = $request->NO_JENISDOKTER;
        $jenis_dokter->nip = $request->NO_JENISDOKTER;
        $jenis_dokter->no_jenisDokter = $request->NO_JENISDOKTER;
        $jenis_dokter->save();

        return redirect('/jenis-dokter');
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
        //
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
