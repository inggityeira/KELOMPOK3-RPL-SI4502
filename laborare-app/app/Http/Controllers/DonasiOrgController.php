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
        $request->validate([
            'nama_donasi' => 'required',
            'target_donasi' => 'required',
            'deskripsi_donasi' => 'required'
        ]);

        $donasi = new Donasi();
        $donasi->nama_donasi = $request->nama_donasi;
        $donasi->target_donasi = $request->target_donasi;
        $donasi ->deskripsi_donasi = $request->deskripsi_donasi;

        if ($request->hasFile('sampul_donasi')) {
            $request->file('sampul_donasi')->move('donasi/', $request->file('sampul_donasi')->getClientOriginalName());
            $donasi->sampul_donasi = $request->file('sampul_donasi')->getClientOriginalName();
            $new = $donasi->save();
            if ($new) {
                return back()->with('success', 'Donasi berhasil ditambahkan!');
            } else {
                return back()->with('failed', 'Donasi gagal ditambahkan');
            }
        }

    }

    // Halaman Detail Donasi
    public function detaildonasi()
    {
        return view('donasi-org.detaildonasi');
    }
}
