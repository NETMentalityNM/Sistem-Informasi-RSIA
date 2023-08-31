<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pegawai = Pegawai::count();
        $obat    = Obat::count();

        return view('beranda', compact('pegawai', 'obat'));
    }

    public function user()
    {   
        $user = User::all();
        return view('layouts.master_2', compact('user'));
    }
}
