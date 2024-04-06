<?php

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
Route::get('/', function () {
    return view('landing.landing');
});

Route::get('/masuk', function () {
    return view('landing.masuk');
});

Route::get('/daftar', function () {
    return view('landing.daftar');
});

Route::get('/timkami', function () {
    return view('landing.timkami');
});

Route::get('/home', function () {
    return view('home');
});

// kegiatan individu
Route::get('/carikegiatan', function () {
    return view('kegiatan-ind.carikegiatan');
});

Route:: get('/detailkegiatan-Ind/{id}', [halamanController :: class, 'detailkegiatanInd']);

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