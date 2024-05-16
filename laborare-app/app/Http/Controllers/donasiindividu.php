<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donasiindividu extends Controller
{
    public function formulirdonasi()
    {
        return view('donasi-ind.formulirdonasi');
    }
        public function pembayarandonasi()
    {
        return view('donasi-ind.pembayarandonasi');
    }
}

