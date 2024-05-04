<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\Kegiatan;
use App\Models\Sukarelawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class halamanController extends Controller
{
    // kegiatan individu
    public function daftarkegiatan()
    {
        return view('kegiatan-ind.daftar');
    }

    public function progresskegiatan()
    {
        return view('kegiatan-ind.progress');
    }

    public function sertifikatkegiatan()
    {
        return view('kegiatan-ind.sertifikat');
    }

    public function detailkegiatanInd($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);
        return view('kegiatan-ind.detailkegiatan', ['kegiatan' => $kegiatan]);
    }

    // kegiatan organisasi
    public function detailkegiatanOrg($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);
        return view('kegiatan-org.detailkegiatan', ['kegiatan' => $kegiatan]);
    }

    public function editkegiatanOrg($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);
        return view('kegiatan-org.editkegiatan', ['kegiatan' => $kegiatan]);
    }

    public function kegiatanbaruOrg()
    {
        return view('kegiatan-org.kegiatanbaru');
    }

    public function listbaruOrg()
    {
        return view('kegiatan-org.listkegiatan');
    }

    // profil individu
    public function profilInd()
    {
        return view('profil.profilindividu');
    }

        // donasi individu
    public function listdonasiInd()
    {
        return view('donasi-ind.listdonasi');
    }

    // donasi organisasi
    public function listdonasiOrg()
    {
        return view('donasi-org.listdonasi');
    }

    // poin
    public function jumlahpoin()
    {
        return view('poin.jumlahpoin');
    }

    // rekruitasi
    public function listsukarelawan()
    {
        return view('rekruitasi.listsukarelawan', [ 
            'sukarelawan' => Sukarelawan::all(),
        ]);
    }

    public function detailsukarelawan($id)
    {
        $sukarelawan = Sukarelawan::findOrFail($id);
        return view('rekruitasi.detailsukarelawan',[
            'sukarelawan' => $sukarelawan
        ]);
    }

    public function rekrutsukarelawan()
    {
        return view('rekruitasi.rekrut');
    }
}
