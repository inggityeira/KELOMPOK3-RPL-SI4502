<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class halamanController extends Controller
{
    // kegiatan individu
    public function carikegiatan()
    {
        return view('kegiatan-ind.carikegiatan');
    }

    public function detailkegiatanInd($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);
        return view('kegiatan-ind.detailkegiatan', ['kegiatan' => $kegiatan]);
    }

    // kegiatan organisasi
    public function detailkegiatanOrg()
    {
        return view('kegiatan-org.detailkegiatan');
    }

    public function editkegiatanOrg()
    {
        return view('kegiatan-org.editkegiatan');
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

    public function editprofilInd()
    {
        return view('profil.editindividu');
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
        return view('rekruitasi.listsukarelawan');
    }
}
