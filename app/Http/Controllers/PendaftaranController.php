<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    function index(Request $request)
    {
        $nomor = 1;
        if ($request->has('search')) {
                    $pasien = Pasien::where('nm_pas','LIKE', '%'.$request->search.'%')->paginate(5);
                }
                else {
                    $pasien = Pasien::paginate(5);                
                }
        return view('Pendaftaran-pasien.index', compact('nomor', 'pasien'));
    }
}
