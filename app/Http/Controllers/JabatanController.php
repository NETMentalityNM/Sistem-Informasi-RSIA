<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $jabatan = Jabatan::all();
        return view('jabatan.index', compact('nomor', 'jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jabatan = new Jabatan;

        $jabatan->id_jabatan = $request->ID_JABATAN;
        $jabatan->posisi_jabatan = $request->POSISI_JABATAN;
        $jabatan->save();

        return redirect('/jabatan');
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
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jabatan = Jabatan::find($id);

        $jabatan->id_jabatan = $request->ID_JABATAN;
        $jabatan->posisi_jabatan = $request->POSISI_JABATAN;
        $jabatan->save();

        return redirect('/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return redirect('/jabatan');
    }
}
