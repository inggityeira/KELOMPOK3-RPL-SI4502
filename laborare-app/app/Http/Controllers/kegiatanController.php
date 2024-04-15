<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
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

        $kegiatan = new Kegiatan();
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
        $kegiatan = Kegiatan::query();
        $kegiatan = $kegiatan->paginate(8)->appends(request()->query());

        return view('kegiatan-org.listkegiatan', compact('kegiatan'));
    }
  

    public function viewUpdate($id_kegiatan){
        $keggiatan = Kegiatan::all();
        $organisasi = Kegiatan::findOrFail($id_kegiatan);
        return view('keggiatan.update', compact('organisasi','keggiatan'));
    }
  
    public function update(Request $request, $id_kegiatan)
    {
        $keggiatan = kegiatan::findOrFail($id_kegiatan);
        $keggiatan->update([
           'id_kegiatan' => $request->id_kegiatan,
           'nama_kegiatan' => $request->nama_kegiatan,
           'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
           'tanggal_kegiatan' => $request->tanggal_kegiatan,
           'kategori_kegiatan' => $request->kategori_kegiatan,
           'sampul_kegiatan' => $request->sampul_kegiatan,
           'status_kegiatan' => $request->status_kegiatan,
           'created_at' => $request->created_at,
           'updated_at' => $request->updated_at,
        ]);

        return redirect()->route('kegiatan.kegiatan')->with('Success','Data updated successfully');
    }
  
    public function delete(Request $request, $id_kegiatan)
    {
        $keggiatan = kegiatan::findOrFail($id_kegiatan);
        $keggiatan->delete();

        return redirect()->route('kegiatan.kegiatan')->with('Success','Data deleted successfully.');
    }
  
}


