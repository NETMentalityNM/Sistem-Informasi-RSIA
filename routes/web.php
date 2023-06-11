<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
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

    //Manajemen Rekam-Medik
Route::get('/rekam-medik', [RekamMedikController::class, 'index']);

    //Manajemen Resep
Route::get('/resep', [ResepController::class, 'index']);

    //Manajemen Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);

    //Manajemen Poli
Route::get('/poli', [PoliController::class, 'index']);

    //Manajemen Pengambilan Obat
Route::get('/ambil-obat', [PengambilanObatController::class, 'index']);

    //Manajemen Jenis Dokter
Route::get('/jenis-dokter', [JenisDokterController::class, 'index']);

    //Manajemen Obat
Route::get('/obat', [ObatController::class, 'index']);

    //Manajemen Jabatan
Route::get('/jabatan', [JabatanController::class, 'index']);

});
