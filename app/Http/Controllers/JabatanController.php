<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Svg\Tag\Rect;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nomor = 1;
        if ($request->has('search')) {
            $jabatan = Jabatan::where('posisi_jabatan','LIKE', '%'.$request->search.'%')->paginate(5);
        }
        else {
            $jabatan = Jabatan::paginate(5);                
        }
        // $jabatan = Jabatan::simplePaginate(5);
        return view('super_admin.jabatan.index', compact('nomor', 'jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('super_admin.jabatan.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gen_idJabatan = IdGenerator::generate(['table' => 'jabatans','field' => 'id_jabatan', 'length' => 6, 'prefix' => 'JBT-']);

        $jabatan = new Jabatan;

        $jabatan->id_jabatan = $gen_idJabatan;
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
        return view('super_admin.jabatan.edit', compact('jabatan'));
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
