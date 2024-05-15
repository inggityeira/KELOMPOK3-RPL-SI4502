<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class detaildonasi extends Controller
{
    public function detaildonasi()
    {
        return view('donasi-Ind.detaildonasi');
    }
}
