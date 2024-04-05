<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    // halaman
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

    // masuk database
    public function userMasuk(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required|min:5|max:20'
        ]);

        if(Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Anda tidak bisa masuk!');
    }

}
