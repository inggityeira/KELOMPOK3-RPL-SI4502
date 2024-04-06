<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanInd extends Controller
{
    public function listkegiatan(Request $request){
        if ($request->has('search')){
            $kegiatan = Kegiatan::where('nama_kegiatan', 'LIKE', '%' .$request->search.'%')->paginate(6);
        }else{
            $kegiatan = Kegiatan::paginate(6);
        }

        return view('kegiatan-ind.listkegiatan', compact('kegiatan'));
    }
}
