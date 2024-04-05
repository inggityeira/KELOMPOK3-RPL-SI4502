<?php

use App\Http\Controllers\AuthManager;
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

// landing

Route::get('/', [AuthManager::class, 'landing']);
Route::get('/masuk', [AuthManager::class, 'masuk']);
Route::get('/daftar', [AuthManager::class, 'daftar']);
Route::get('/timkami', [AuthManager::class, 'timkami']);
Route::get('/home', [AuthManager::class, 'home']);

Route::post('/user-masuk', [AuthManager::class, 'userMasuk'])->name('user-masuk');

// kegiatan individu
Route::get('/carikegiatan', function () {
    return view('kegiatan-ind.carikegiatan');
});

Route::get('/detailkegiatan-Ind', function () {
    return view('kegiatan-ind.detailkegiatan');
});

Route::get('/listkegiatan-Ind', function () {
    return view('kegiatan-ind.listkegiatan');
});

// kegiatan organisasi
Route::get('/detailkegiatan-Org', function () {
    return view('kegiatan-org.detailkegiatan');
});

Route::get('/editkegiatan-Org', function () {
    return view('kegiatan-org.editkegiatan');
});

Route::get('/kegiatanbaru-Org', function () {
    return view('kegiatan-org.kegiatanbaru');
});

Route::get('/listbaru-Org', function () {
    return view('kegiatan-org.listkegiatan');
});

// profil individu
Route::get('/profil-Ind', function () {
    return view('profil.profilindividu');
});

Route::get('/editprofil-Ind', function () {
    return view('profil.editindividu');
});

// profil organisasi
Route::get('/profil-Org', function () {
    return view('profil.profilindividu');
});

Route::get('/editprofil-Org', function () {
    return view('profil.editorganisasi');
});

// donasi
Route::get('/listdonasi-Ind', function () {
    return view('donasi-ind.listdonasi');
});

// poin
Route::get('/jumlahpoin', function () {
    return view('poin.jumlahpoin');
});

// rekruitasi
Route::get('/listsukarelawan', function () {
    return view('rekruitasi.listsukarelawan');
});