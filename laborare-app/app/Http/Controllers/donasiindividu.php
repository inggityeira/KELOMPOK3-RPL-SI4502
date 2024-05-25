<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use Illuminate\Http\Request;

class donasiindividu extends Controller
{
    // Halaman Formulir Donasi
    public function formulirdonasi($id_donasi)
    {
        $donasi = Donasi::find($id_donasi);
        return view('donasi-ind.formulirdonasi', compact('donasi'));
    }


    public function pembayarandonasi(Request $request)
    {
        $nominal = $request->nominal;
        $pesan = $request->pesan;
        return view('donasi-ind.pembayarandonasi', compact('nominal', 'pesan'));
    }

    
    public function pembayarandonasi_store(Request $request, $id_donasi)
    {
        $donasi = Donatur::create([
            "id_user" => session('loginId'),
            "pesan" => $request->pesan,
            "nominal" => $request->nominal,
            "id_donasi" => $id_donasi
        ]);
        return redirect('/listdonasi-Ind');
    }
}
