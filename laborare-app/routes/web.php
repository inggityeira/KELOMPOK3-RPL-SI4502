<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\Individu;
use App\Http\Controllers\KegiatanBaruController;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\KegiatanInd;
use App\Http\Controllers\Organisasi;
use App\Http\Controllers\rekruitasi;
use App\Http\Controllers\detaildonasi;
use App\Http\Controllers\donasiindividu;
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

// GENERAL
Route::middleware(['alreadyLoggedIn'])->group(function () {
    Route::get('/', [AuthManager::class, 'landing']);
    Route::get('/daftar', [AuthManager::class, 'daftar']);
    Route::get('/timkami', [AuthManager::class, 'timkami']);
    Route::get('/masuk', [AuthManager::class, 'masuk'])->name('masuk');
    Route::post('/user-masuk', [AuthManager::class, 'userMasuk'])->name('user-masuk');
    Route::post('/user-daftar', [AuthManager::class, 'userDaftar'])->name('user-daftar');
});

Route::get('/logout', [AuthManager::class, 'logout']);
Route::get('/home', [AuthManager::class, 'home'])->middleware('AuthCheck');

// ORGANISASI
Route::middleware(['AuthCheck', 'organisasi'])->group(function () {
    // kegiatan organisasi
    Route::get('/listbaru-Org', [kegiatanController::class, 'openList'])->name('listkegiatan-Org');
    Route::get('/detailkegiatan-Org/{id}', [halamanController::class, 'detailkegiatanOrg'])->name('detailkegiatan-Org');
    Route::get('/kegiatanbaru-Org', [halamanController::class, 'kegiatanbaruOrg']);
    Route::get('/editkegiatan-Org/{id}', [halamanController::class, 'editkegiatanOrg'])->name('editkegiatan-Org');
    Route::get('/laporsukarelawan-Org/{id}', [kegiatanController::class, 'laporsukarelawan'])->name('laporsukarelawan-Org');
    Route::get('/formlapor/{id_kegiatan}/{id}', [kegiatanController::class, 'formlaporan'])->name('formlaporan-Org');
    Route::post('/laporkan/{id}', [kegiatanController::class, 'laporkan'])->name('laporkan');
    Route::post('/updatekegiatan/{id}', [kegiatanController::class, 'update'])->name('updatekegiatan');
    Route::post('/tambahkegiatan', [kegiatanController::class, 'kegiatan'])->name('tambahkegiatan');
    Route::post('/hapuskegiatan/{id}', [kegiatanController::class, 'hapus'])->name('hapuskegiatan');

    // profil organisasi
    Route::get('/profil-Org', [Organisasi::class, 'index'])->name('profil-organisasi');
    Route::get('/editprofil-Org/{id}', [Organisasi::class, 'edit'])->name('edit-organisasi');
    Route::post('/updateprofil-Org/{id}', [Organisasi::class, 'update'])->name('update-organisasi');

    // donasi organisasi
    Route::get('/listdonasi-Org', [halamanController::class, 'listdonasiOrg']);

    // rekruitasi
    Route::get('/listsukarelawan', [halamanController::class, 'listsukarelawan']);
    Route::get('/detailsukarelawan/{id}', [halamanController::class, 'detailsukarelawan'])->name('detail-sukarelawan');
    Route::get('/rekrutsukarelawan/{id}', [halamanController::class, 'rekrutsukarelawan'])->name('rekrut');
    Route::put('/rekrutsukarelawan/{id}', [rekruitasi::class, 'rekrutsukarelawan'])->name('rekrut-sukarelawan');
});

// INDIVIDU
Route::middleware(['AuthCheck', 'individu'])->group(function () {
    // kegiatan individu
    Route::get('/listkegiatan-Ind', [KegiatanInd::class, 'listkegiatanInd'])->name('listkegiatan-Ind');
    Route::get('/detailkegiatan-Ind/{id}', [halamanController::class, 'detailkegiatanInd'])->name('detailkegiatan-Ind');
    Route::get('/daftarkegiatan/{id}', [halamanController::class, 'daftarkegiatan'])->name('daftarkegiatan');
    Route::post('/daftarkegiatan', [halamanController::class, 'sukarelawanbaru'])->name('sukarelawanbaru');
    Route::get('/progresskegiatan', [halamanController::class, 'progresskegiatan'])->name('progresskegiatan');
    Route::get('/sertifikatkegiatan/{id}', [halamanController::class, 'sertifikatkegiatan'])->name('sertifikatkegiatan');
    Route::get('/downloadsertif/{filename}', [halamanController::class, 'downloadsertif'])->name('download.sertif');


    // profil individu
    Route::get('/profil-Ind', [halamanController::class, 'profilInd'])->name('profil-individu');
    Route::get('/editprofil-Ind/{id}', [Individu::class, 'editprofilInd'])->name('edit-individu');
    Route::post('/updateprofil-Ind/{id}', [Individu::class, 'storeprofilInd'])->name('editprofil-Ind');

    // donasi individu
    Route::get('/listdonasi-Ind', [halamanController::class, 'listdonasiInd']);
    Route::get('/detaildonasi', [detaildonasi::class, 'detaildonasi'])->name('detaildonasi');
    Route::get('/formulir', [donasiindividu::class, 'formulirdonasi']);
    Route::get('/pembayaran', [donasiindividu::class, 'pembayarandonasi']);

    // poin
    Route::get('/jumlahpoin', [halamanController::class, 'jumlahpoin']);
    Route::get('/tablepoint', [halamanController::class, 'tablepoint']);
});
