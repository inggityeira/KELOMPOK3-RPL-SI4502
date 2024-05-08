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
    public function daftarkegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);
        $daftarKegiatan = Kegiatan::all();
        return view('kegiatan-ind.daftar', [
            'kegiatan' => $kegiatan,
            'daftarKegiatan' => $daftarKegiatan
        ]);
    }

    public function sukarelawanbaru(Request $request)
    {
        $sukarelawan = new Sukarelawan();
        $sukarelawan->id_user = $request->id_user;
        $sukarelawan->notelpon_sukarelawan = $request->notelpon_sukarelawan;
        $sukarelawan->kontak_wali = $request->kontak_wali;
        $sukarelawan->alamat_sukarelawan = $request->alamat_sukarelawan;
        $sukarelawan->motivasi = $request->motivasi;
        $sukarelawan->id_kegiatan = $request->id_kegiatan;

        if ($request->hasFile('pas_foto')) {
            $image = $request->file('pas_foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('pas_foto'), $imageName);
            $sukarelawan->pas_foto = $imageName;
        }

        if ($request->hasFile('sertifikat')) {
            $image = $request->file('sertifikat');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('sertifikat'), $imageName);
            $sukarelawan->sertifikat = $imageName;
        } else {
            $sukarelawan->sertifikat = '';
        }

        $sukarelawan->status_sukarelawan = 'Tidak Diterima';
        $sukarelawan->poin = 0;
        $sukarelawan->save();

        return redirect()->route('listkegiatan-Ind');
    }

    public function progresskegiatan()
    {
        $kegiatan = Kegiatan::query();
        $kegiatan = $kegiatan->join('sukarelawan', 'sukarelawan.id_kegiatan', '=', 'kegiatan.id_kegiatan')->where('id_user', '=',session('loginId'))->paginate(6)->appends(request()->query());
        return view('kegiatan-ind.progress', compact('kegiatan'));
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
            'sukarelawan' => Sukarelawan::paginate(8),
        ]);
    }

    public function detailsukarelawan($id)
    {
        $sukarelawan = Sukarelawan::findOrFail($id);
        return view('rekruitasi.detailsukarelawan',[
            'sukarelawan' => $sukarelawan,
        ]);
    }

    public function rekrutsukarelawan($id)
    {
        $sukarelawan = Sukarelawan::findOrFail($id);
        $kegiatan = Kegiatan::find($sukarelawan->id_kegiatan);
        $semuaKegiatan = Kegiatan::all();

        return view('rekruitasi.rekrut', [
            'sukarelawan' => $sukarelawan,
            'kegiatan' => $kegiatan,
            'semuaKegiatan' => $semuaKegiatan,
        ]);
    }
}
