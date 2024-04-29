<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class kegiatanController extends Controller
{
    public function kegiatan(Request $request)
    {
        $request->validate([
            'activityName'=>'required',
            'activityDate' => 'required|date',
            'activityCover'=>'required',
            'activityStatus'=>'required',
            'activityCategory'=>'required',
            'activityDescription'=>'required',
        ]);

        $kegiatan = new Kegiatan();
        $kegiatan->nama_kegiatan = $request->activityName;
        $kegiatan->deskripsi_kegiatan = $request->activityDescription;
        $kegiatan->tanggal_kegiatan = $request->activityDate;
        $kegiatan->kategori_kegiatan = $request->activityCategory;
        $kegiatan->status_kegiatan = $request->activityStatus;
        if ($request->hasFile('activityCover')) {
            $request->file('activityCover')->move('sampulkegiatan/', $request->file('activityCover')->getClientOriginalName());
            $kegiatan->sampul_kegiatan = $request->file('activityCover')->getClientOriginalName();
        $new = $kegiatan->save();
        if ($new){
            return view()->with('success', 'Data berhasil ditambahkan!');
        }else{
            return back()->with('failed', 'Data gagal ditambahkan');
        }
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


