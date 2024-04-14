<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kegiatanController extends Controller
{
    public function kegiatan(Request $request)
    {
        $request->validate([
            'namaKegiatan'=>'reuired|not_in:0',
            'tanggalKegiatan'=>'required',
            'sampulKegiatan'=>'required',
            'statusKegiatan'=>'required',
            'kategoriKegiatan'=>'required',
            'sampulKegiatan'=>'required',
            'deskripsiKegiatan'=>'required',
            'noidKegiatan'=>'required',
            'buatKegiatan'=>'required',
            'editKegiatan'=>'required'
        ]);

        $kegiatan = new kegiatan();
        $kegiatan->id_kegiatan = $request->noidKegiatan;
        $kegiatan->nama_kegiatan = $request->namaKegiatan;
        $kegiatan->deskripsi_kegiatan = $request->deskripsiKegiatan;
        $kegiatan->tanggal_kegiatan = $request->tanggalKegiatan;
        $kegiatan->kategori_kegiatan = $request->kategoriKegiatan;
        $kegiatan->sampul_kegiatan = $request->sampulKegiatan;
        $kegiatan->status_kegiatan = $request->statusKegiatan;
        $kegiatan->created_at = $request->buatKegiatan;
        $kegiatan->updated_at = $request->editKegiatan;

        $new = $kegiatan->save();
        if ($new){
            return back()->with('success', 'Data saved successfully!');
        }else{
            return back()->with('failed', 'Something wrong.');
        }
        }
    public function openList(){
        $keggiatan = keggiatan::all();

        return view('keggiatan.listKeggiatan', compact('keggiatan'));
    }


    
}
