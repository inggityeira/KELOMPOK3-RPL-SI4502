<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Organisasi extends Controller
{
    public function index()
    {
        return view('profil.profilorganisasi');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('profil.editorganisasi', ['user' => $user]);
    }

    public function update(Request $request, $id_user)
    {
        // Validasi input

        // Cari pengguna berdasarkan id_user
        $user = User::find($id_user);

        // Update data pengguna
        $user->nama_user = $request->nama_user ?? $user->nama_user;
        $user->alamat_user = $request->alamat_user ?? $user->alamat_user;
        $user->penanggung_jawab = $request->penanggung_jawab ?? $user->penanggung_jawab;
        $user->email = $request->email ?? $user->email;
        $user->password = $request->password ?? $user->password;
        $user->situs_web = $request->situs_web ?? $user->situs_web;

        // Simpan perubahan
        $user->save();

        return redirect()->back();
    }
}