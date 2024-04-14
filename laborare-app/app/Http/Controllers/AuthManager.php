<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    // HALAMAN
    public function home()
    {
        return view('home');
    }

    public function landing()
    {
        return view('landing.landing');
    }

    public function timkami()
    {
        return view('landing.timkami');
    }

    public function masuk()
    {
        return view('landing.masuk');
    }

    public function daftar()
    {
        return view('landing.daftar');
    }

    // LOGIN
    public function userMasuk(Request $request)
    {

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:20'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id_user);
                if ($request->has('remember')){
                    $minutes=1440;
                    $response = new Response('Set Cookie');
                    $response->withCookie(cookie('remember_token', $user->getRememberToken(), $minutes));
                }
                return redirect('home');
            } else {
                return back()->with('fail', 'Password yang anda masukan salah.');
            }
        }else{
            return back()->with('fail', 'Email ini belum terdaftar.');
        }

    }

    // REGISTER
    public function userDaftar(Request $request)
    {
        $request->validate([
            'nama_user'=>'required',
            'alamat_user'=>'required',
            'nomor_telepon'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);

        $user= new User();
        $user->nama_user = $request->nama_user;
        $user->alamat_user = $request->alamat_user;
        $user->nomor_telepon = $request->nomor_telepon;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->peran_user = 'Individu';

        if ($request->hasFile('foto_profil')) {
            $request->file('foto_profil')->move('fotoprofil/', $request->file('foto_profil')->getClientOriginalName());
            $user->foto_profil = $request->file('foto_profil')->getClientOriginalName();
        }
        
        $daftar = $user->save();
        if($daftar){
            return back()->with('success', 'You have successfully signed up.');
        }else{
            return back()->with('fail', 'Something wrong.');
        }
    }

    // Logout
    public function logout()
    {
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }

}
