<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    // kegiatan individu
    public function carikegiatan()
    {
        return view('kegiatan-ind.carikegiatan');
    }

    public function detailkegiatanInd()
    {
        return view('kegiatan-ind.detailkegiatan');
    }

    public function listkegiatanInd()
    {
        return view('kegiatan-ind.listkegiatan');
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
