<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

    public function storeprofilInd(Request $request){
       

        $loginuser = \App\Models\User::where('id_user', session('loginId'))->first();
        $id = $loginuser->id_user;

        $user = User::find($id);

        $user->nama_user = $request->nama;
        $user->alamat_user = $request->alamat;
        $user->email = $request->email;
        $user->nomor_telepon = $request->no;
        $user->usia_user = $request->usia;
        $user->jenis_kelamin = $request->jenis_kelamin;

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
        
       
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
