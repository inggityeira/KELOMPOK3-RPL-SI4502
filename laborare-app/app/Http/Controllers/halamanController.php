<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kegiatan;
use App\Models\Sukarelawan;
use Illuminate\Http\Request;


class halamanController extends Controller
{
    // kegiatan individu
    public function daftarkegiatan($id)
    {
        $kegiatan = Kegiatan::find($id);
        $user = User::where('id_user', session('loginId'))->first();

        $daftarKegiatan = Kegiatan::all();
        return view('kegiatan-ind.daftar', [
            'kegiatan' => $kegiatan,
            'daftarKegiatan' => $daftarKegiatan,
            'user' => $user
        ]);
    }

    public function sukarelawanbaru(Request $request)
    {
        $sukarelawan = new Sukarelawan();
        $user = User::where('id_user', session('loginId'))->first();

        $sukarelawan->id_user = $user->id_user;
        $sukarelawan->notelpon_sukarelawan = $request->notelpon_sukarelawan;
        $sukarelawan->kontak_wali = $request->kontak_wali;
        $sukarelawan->alamat_sukarelawan = $request->alamat_sukarelawan;
        $sukarelawan->motivasi = $request->motivasi;
        $sukarelawan->id_kegiatan = $request->id_kegiatan;

        if ($request->hasFile('pas_foto')) {
            $request->file('pas_foto')->move('pasfoto/', $request->file('pas_foto')->getClientOriginalName());
            $sukarelawan->pas_foto = $request->file('pas_foto')->getClientOriginalName();
        }

        $sukarelawan->status_sukarelawan = 'Tidak Diterima';
        $sukarelawan->save();

        return redirect()->route('listkegiatan-Ind');
    }

    public function progresskegiatan()
    {
        $kegiatan = Kegiatan::whereHas('sukarelawan', function ($query) {
            $query->where('id_user', session('loginId'));
        })
            ->paginate(8);

        return view('kegiatan-ind.progress', compact('kegiatan'));
    }


    public function sertifikatkegiatan(Request $request, $id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);

        $sukarelawan = Sukarelawan::where('id_user', session('loginId'))
            ->where('id_kegiatan', $id_kegiatan)
            ->get();

        return view('kegiatan-ind.sertifikat', ['sukarelawan' => $sukarelawan, 'kegiatan' => $kegiatan]);
    }

    public function downloadsertif($filename)
    {
        $file_path = public_path('sertifikat/' . $filename);
        return response()->download($file_path);
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
        $user = User::where('id_user', session('loginId'))->first();

        return view(
            'profil.profilindividu',
            [
                'user' => $user
            ]
        );
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
        $sukarelawan = Sukarelawan::where('status_sukarelawan', '=', 'Tidak Diterima')->paginate(8);

        return view('rekruitasi.listsukarelawan', compact('sukarelawan'));
    }

    public function detailsukarelawan($id)
    {
        $sukarelawan = Sukarelawan::findOrFail($id);
        return view('rekruitasi.detailsukarelawan', [
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
