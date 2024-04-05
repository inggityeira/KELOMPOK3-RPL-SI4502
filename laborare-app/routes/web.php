<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\halamanController;
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
});

Route::get('/logout', [AuthManager::class, 'logout']);
Route::get('/home', [AuthManager::class, 'home'])->middleware('AuthCheck');

// ORGANISASI
Route::middleware(['AuthCheck', 'organisasi'])->group(function () {
    // kegiatan organisasi
    Route::get('/listbaru-Org', [halamanController::class, 'listbaruOrg']);
    Route::get('/editkegiatan-Org', [halamanController::class, 'editkegiatanOrg']);
    Route::get('/kegiatanbaru-Org', [halamanController::class, 'kegiatanbaruOrg']);
    Route::get('/detailkegiatan-Org', [halamanController::class, 'detailkegiatanOrg']);
    // profil organisasi
    Route::get('/profil-Org/{id}', [Organisasi::class, 'index'])->name('profil-organisasi');
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
    Route::get('/carikegiatan', [halamanController::class, 'carikegiatan']);
    Route::get('/listkegiatan-Ind', [halamanController::class, 'listkegiatanInd']);
    Route::get('/detailkegiatan-Ind', [halamanController::class, 'detailkegiatanInd']);
    // profil individu
    Route::get('/profil-Ind', [halamanController::class, 'profilInd']);
    Route::get('/editprofil-Ind', [halamanController::class, 'editprofilInd']);
    // donasi individu
    Route::get('/listdonasi-Ind', [halamanController::class, 'listdonasiInd']);
    // poin
    Route::get('/jumlahpoin', [halamanController::class, 'jumlahpoin']);
});