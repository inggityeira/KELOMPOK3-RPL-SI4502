<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\User;
use Illuminate\Http\Request;

class donasiindividu extends Controller
{
    // Halaman Formulir Donasi
    public function formulirdonasi($id_donasi)
    {
        $donasi = Donasi::find($id_donasi);
        $user = User::where('id_user', session('loginId'))->first();
        return view('donasi-ind.formulirdonasi', compact('donasi', 'user'));
    }

    // Halaman pembayaran
    public function pembayarandonasi($id_donasi)
    {
        $donasi = Donasi::find($id_donasi);
        return view('donasi-ind.pembayarandonasi', compact('donasi'));
    }

    // Input ke tabel donatur
    public function pembayarandonasi_store(Request $request, $id_donasi)
    {
        $donatur = new Donatur();
        $user = User::where('id_user', session('loginId'))->first();

        $donatur->id_user = $user->id_user;
        $donatur->pesan = $request->pesan;
        $donatur->nominal = $request->nominal;
        $donatur->id_donasi = $id_donasi;

        $donatur->save();

        return redirect()->route('pembayarandonasi', ['id' => $id_donasi]);
    }
}
