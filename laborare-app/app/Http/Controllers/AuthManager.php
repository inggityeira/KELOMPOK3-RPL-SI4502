<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

}
