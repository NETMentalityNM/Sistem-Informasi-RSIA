<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $poli = Poli::all();
        return view('super_admin.poli.index', compact('nomor', 'poli'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super_admin.poli.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gen_idPoli = IdGenerator::generate(['table' => 'polis','field' => 'id_poli', 'length' => 8, 'prefix' => 'PP-']);


        $poli = new Poli;

        $poli->id_poli = $gen_idPoli;
        $poli->nm_poli = $request->NM_POLI;
        $poli->save();

        return redirect('/poli');
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
        $poli = Poli::find($id);
        return view('super_admin.poli.edit', compact('poli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $poli = Poli::find($id);
        
        $poli->id_poli = $request->ID_POLI;
        $poli->nm_poli = $request->NM_POLI;
        $poli->save();

        return redirect('/poli');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poli = Poli::find($id);
        $poli->delete();

        return redirect('/poli');
    }
    }
