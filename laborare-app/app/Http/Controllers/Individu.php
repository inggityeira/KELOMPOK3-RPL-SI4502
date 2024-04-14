<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Individu extends Controller
{
    // Halaman edit profil
    public function editprofilInd($id)
    {
        $user = User::find($id);
        return view('profil.editindividu', ['user' => $user]);
    }

    public function storeprofilInd(Request $request, $id_user)
    {
        // Cari pengguna berdasarkan id_user
        $user = User::find($id_user);

        // Update data pengguna
        $user->nama_user = $request->nama_user ?? $user->nama_user;
        $user->alamat_user = $request->alamat_user ?? $user->alamat_user;
        $user->nomor_telepon = $request->nomor_telepon ?? $user->nomor_telepon;
        $user->email = $request->email ?? $user->email;
        $user->usia_user = $request->usia_user ?? $user->usia_user;
        $user->jenis_kelamin = $request->jenis_kelamin ?? $user->jenis_kelamin;

        if ($request->hasFile('foto_profil')) {
            $request->file('foto_profil')->move('fotoprofil/', $request->file('foto_profil')->getClientOriginalName());
            $user->foto_profil = $request->file('foto_profil')->getClientOriginalName();
        }

        // Simpan perubahan
        $user->save();

        return redirect()->route('profil-individu');

    }

}
