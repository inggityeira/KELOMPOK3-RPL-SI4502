<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Organisasi extends Controller
{
    // Halaman Profil
    public function index()
    {
        $user = User::where('id_user', session('loginId'))->first();

        return view('profil.profilorganisasi',
        [
            'user' => $user
        ]);
    }

    // Halaman edit profil
    public function edit($id)
    {
        $user = User::find($id);
        return view('profil.editorganisasi', ['user' => $user]);
    }

    public function update(Request $request, $id_user)
    {

        // Cari pengguna berdasarkan id_user
        $user = User::find($id_user);

        // Update data pengguna
        $user->nama_user = $request->nama_user ?? $user->nama_user;
        $user->alamat_user = $request->alamat_user ?? $user->alamat_user;
        $user->nomor_telepon = $request->nomor_telepon ?? $user->nomor_telepon;
        $user->penanggung_jawab = $request->penanggung_jawab ?? $user->penanggung_jawab;
        $user->email = $request->email ?? $user->email;
        $user->situs_web = $request->situs_web ?? $user->situs_web;

        if ($request->hasFile('foto_profil')) {
            $request->file('foto_profil')->move('fotoprofil/', $request->file('foto_profil')->getClientOriginalName());
            $user->foto_profil = $request->file('foto_profil')->getClientOriginalName();
        }

        // Simpan perubahan
        $user->save();

        return redirect()->route('profil-organisasi');
    }
}