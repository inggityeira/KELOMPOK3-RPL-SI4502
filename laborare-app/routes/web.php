<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\Individu;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\KegiatanInd;
use App\Http\Controllers\Organisasi;
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
    Route::get('/editkegiatan-Org', [halamanController::class, 'editkegiatanOrg']);
    Route::get('/kegiatanbaru-Org', [halamanController::class, 'kegiatanbaruOrg']);
    Route::post('/tambahkegiatan', [kegiatanController::class, 'kegiatan'])->name('tambahkegiatan');

    // profil organisasi
    Route::get('/profil-Org', [Organisasi::class, 'index'])->name('profil-organisasi');
    Route::get('/editprofil-Org/{id}', [Organisasi::class, 'edit'])->name('edit-organisasi');
    Route::post('/updateprofil-Org/{id}', [Organisasi::class, 'update'])->name('update-organisasi');

    // donasi organisasi
    Route::get('/listdonasi-Org', [halamanController::class, 'listdonasiOrg']);

    // rekruitasi
    Route::get('/listsukarelawan', [halamanController::class, 'listsukarelawan']);
});

// INDIVIDU
Route::middleware(['AuthCheck', 'individu'])->group(function () {
    // kegiatan individu
    Route::get('/listkegiatan-Ind', [KegiatanInd::class, 'listkegiatanInd'])->name('listkegiatan-Ind');
    Route:: get('/detailkegiatan-Ind/{id}', [halamanController::class, 'detailkegiatanInd'])->name('detailkegiatan-Ind');

    // profil individu
    Route::get('/profil-Ind', [halamanController::class, 'profilInd'])->name('profil-individu');
    Route::get('/editprofil-Ind/{id}', [Individu::class, 'editprofilInd'])->name('edit-individu');
    Route::post('/updateprofil-Ind/{id}', [Individu::class, 'storeprofilInd'])->name('editprofil-Ind');

    // donasi individu
    Route::get('/listdonasi-Ind', [halamanController::class, 'listdonasiInd']);
    
    // poin
    Route::get('/jumlahpoin', [halamanController::class, 'jumlahpoin']);
});
