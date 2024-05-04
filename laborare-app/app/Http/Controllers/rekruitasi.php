<?php

namespace App\Http\Controllers;

use App\Models\Sukarelawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class rekruitasi extends Controller
{
    // Halaman Rekruitasi
    public function rekrutsukarelawan(Request $request,$id){
        $sukarelawan = Sukarelawan::find($id);
        $sukarelawan->id_kegiatan = $request->kegiatan_sukarelawan;
        $sukarelawan->status_sukarelawan = $request->status_sukarelawan;
        $sukarelawan->save();

        return back();
}

    // // Halaman edit profil
    // public function edit($id)
    // {
    //     $user = User::find($id);
    //     return view('profil.editorganisasi', ['user' => $user]);
    // }

    public function update(Request $request, $id_sukarelawan)
    {

        // Cari sukarelawan berdasarkan id_sukarelawan
        $sukarelawan = Sukarelawan::find($id_sukarelawan);

        // Update data pengguna
        $sukarelawan->id_sukarelawan = $request->id_sukarelawan ?? $sukarelawan->id_sukarelawan;
        $sukarelawan->id_kegiatan = $request->id_kegiatan ?? $sukarelawan->id_kegiatan;
        $sukarelawan->status_sukarelawan = $request->status_sukarelawan ?? $sukarelawan->status_sukarelawan;

        if ($request->hasFile('pas_foto')) {
            $request->file('pas_foto')->move('pas_foto/', $request->file('pas_foto')->getClientOriginalName());
            $sukarelawan->pas_foto = $request->file('[pas_foto')->getClientOriginalName();
        }

        // Simpan perubahan
        $sukarelawan->save();

        return redirect()->route('listsukarelawan');
    }
}
