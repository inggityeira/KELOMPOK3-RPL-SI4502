<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donasiindividu extends Controller
{
    public function formulirdonasi()
    {
        $donasi = Donasi::find(2);
        // dd($donasi->sampul_donasi);
        return view('donasi-ind.formulirdonasi', compact('donasi'));
    }
        public function pembayarandonasi(Request $request)
    {
        $nominal = $request->nominal;
        $pesan = $request->pesan;
        return view('donasi-ind.pembayarandonasi', compact('nominal', 'pesan'));
    }
    public function pembayarandonasi_store(Request $request)
    {
        $donasi = Donatur::create([
            "id_user"=>session('loginId'),
            "pesan"=>$request->pesan,
            "nominal"=>$request->nominal,
            "id_donasi"=>"2"
         ]);
         return redirect('/listdonasi-Ind');
    }
}

