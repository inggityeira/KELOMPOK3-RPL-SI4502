<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Donatur;
use Illuminate\Http\Request;

class DonasiOrgController extends Controller
{
    // Halaman list donasi
    public function listdonasiOrg()
    {
        $donasi = Donasi::paginate(8)->appends(request()->query());
        $totalNominals = [];

        foreach ($donasi as $item) {
            $totalNominal = Donatur::where('id_donasi', $item->id_donasi)
                ->sum('nominal');
            $totalNominals[$item->id_donasi] = $totalNominal;
        }

        return view('donasi-org.listdonasi', compact('donasi', 'totalNominals'));
    }

    // Halaman Donasi Baru
    public function donasibaru()
    {
        return view('donasi-org.donasibaru');
    }

    // Membuat donasi baru
    public function addDonasi(Request $request)
    {
        
    }
}
