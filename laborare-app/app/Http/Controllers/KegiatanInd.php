<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanInd extends Controller
{
    public function listkegiatanInd(Request $request){
        $kegiatan = Kegiatan::query();
    
        if ($request->has('search')){
            $kegiatan->where('nama_kegiatan', 'LIKE', '%' .$request->search.'%');
        }
    
        if ($request->has('kategori') && $request->kategori != 'Semua'){
            $kegiatan->where('kategori_kegiatan', $request->kategori);
        }
    
        $kegiatan = $kegiatan->paginate(6)->appends(request()->query());
    
        return view('kegiatan-ind.listkegiatan', compact('kegiatan'));
    }
    public function listkegiatandiikutiInd(Request $request){
        $kegiatan = Kegiatan::query();
        $kegiatan = $kegiatan->join('sukarelawan', 'sukarelawan.id_kegiatan', '=', 'kegiatan.id_kegiatan')->where('id_user', '=',session('loginId'))->paginate(6)->appends(request()->query());
    
        return view('kegiatan-ind.progress', compact('kegiatan'));
    }
    
    
    
    
}
