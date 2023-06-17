<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamMedikController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\PengambilanObatController;
use App\Http\Controllers\JenisDokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\JabatanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function() {
    //Manajemen Pasien Route
    Route::get('/pasien', [PasienController::class, 'index']);
    Route::get('/pasien/form', [PasienController::class, 'create']);
    Route::post('/pasien', [PasienController::class, 'store']);
    Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
    Route::put('/pasien/{id}', [PasienController::class, 'update']);
    Route::delete('/pasien/{id}', [PasienController::class, 'destroy']);

    //Manajemen Rekam-Medik
    Route::get('/rekam-medik', [RekamMedikController::class, 'index']);
    Route::get('/rekam-medik/form', [RekamMedikController::class, 'create']);
    Route::post('/rekam-medik', [RekamMedikController::class, 'store']);
    Route::get('/rekam-medik/edit/{id}', [RekamMedikController::class, 'edit']);
    Route::put('/rekam-medik/{id}', [RekamMedikController::class, 'update']);
    Route::delete('/rekam-medik/{id}', [RekamMedikController::class, 'destroy']);

    //Manajemen Resep
    Route::get('/resep', [ResepController::class, 'index']);
    Route::get('/resep/form', [ResepController::class, 'create']);
    Route::post('/resep', [ResepController::class, 'store']);
    Route::get('/resep/edit/{id}', [ResepController::class, 'edit']);
    Route::put('/resep/{id}', [ResepController::class, 'update']);
    Route::delete('/resep/{id}', [ResepController::class, 'destroy']);

    //Manajemen Pegawai
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/pegawai/form', [PegawaiController::class, 'create']);
    Route::post('/pegawai', [PegawaiController::class, 'store']);
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);
    Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy']);

    //Manajemen Poli
    Route::get('/poli', [PoliController::class, 'index']);
    Route::get('/poli/form', [PoliController::class, 'create']);
    Route::post('/poli', [PoliController::class, 'store']);
    Route::get('/poli/edit/{id}', [PoliController::class, 'edit']);
    Route::put('/poli/{id}', [PoliController::class, 'update']);
    Route::delete('/poli{id}', [PoliController::class, 'destroy']);

    //Manajemen Pengambilan Obat
    Route::get('/ambil-obat', [PengambilanObatController::class, 'index']);
    Route::get('/ambil-obat/form', [PengambilanObatController::class, 'create']);
    Route::post('/ambil-obat', [PengambilanObatController::class, 'store']);
    Route::get('/ambil-obat/edit/{id}', [PengambilanObatController::class, 'edit']);
    Route::put('/ambil-obat/{id}', [PengambilanObatController::class, 'update']);
    Route::delete('/ambil-obat/{id}', [PengambilanObatController::class, 'destroy']);

    //Manajemen Jenis Dokter
    Route::get('/jenis-dokter', [JenisDokterController::class, 'index']);
    Route::get('/jenis-dokter/form', [JenisDokterController::class, 'create']);
    Route::post('/jenis-dokter', [JenisDokterController::class, 'store']);
    Route::get('/jenis-dokter/edit/{id}', [JenisDokterController::class, 'edit']);
    Route::put('/jenis-dokter/{id}', [JenisDokterController::class, 'update']);
    Route::delete('/jenis-dokter/{id}', [JenisDokterController::class, 'destroy']);

    //Manajemen Obat
    Route::get('/obat', [ObatController::class, 'index']);
    Route::get('/obat/form', [ObatController::class, 'create']);
    Route::post('/obat', [ObatController::class, 'store']);
    Route::get('/obat/edit/{id}', [ObatController::class, 'edit']);
    Route::put('/obat/{id}', [ObatController::class, 'update']);
    Route::delete('/obat/{id}', [ObatController::class, 'destroy']);

    //Manajemen Jabatan
    Route::get('/jabatan', [JabatanController::class, 'index']);
    Route::get('/jabatan/form', [JabatanController::class, 'create']);
    Route::get('/jabatan', [JabatanController::class, 'store']);
    Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit']);
    Route::get('/jabatan/{id}', [JabatanController::class, 'update']);
    Route::get('/jabatan/{id}', [JabatanController::class, 'destroy']);

});
