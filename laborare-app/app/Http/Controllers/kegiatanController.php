<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

// Controller khusus role Organisasi
class kegiatanController extends Controller
{
    // Membuat kegiatan baru
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
            return back()->with('success', 'Kegiatan berhasil ditambahkan!');
        }else{
            return back()->with('failed', 'Kegiatan gagal ditambahkan');
        }
        }
    }

    // Membuka halaman list kegiatan
    public function openList(){
        $kegiatan = Kegiatan::query();
        $kegiatan = $kegiatan->paginate(8)->appends(request()->query());

        return view('kegiatan-org.listkegiatan', compact('kegiatan'));
    }
  
    // Melakukan update data kegiatan
    public function update(Request $request, $id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);
        $kegiatan->nama_kegiatan = $request->activityName ?? $kegiatan->nama_kegiatan;
        $kegiatan->deskripsi_kegiatan = $request->activityDescription ?? $kegiatan->deskripsi_kegiatan;
        $kegiatan->tanggal_kegiatan = $request->activityDate ?? $kegiatan->tanggal_kegiatan;
        $kegiatan->kategori_kegiatan = $request->activityCategory ?? $kegiatan->kategori_kegiatan;
        $kegiatan->status_kegiatan = $request->activityStatus ?? $kegiatan->status_kegiatan;

        if ($request->hasFile('activityCover')) {
            $request->file('activityCover')->move('sampulkegiatan/', $request->file('activityCover')->getClientOriginalName());
            $kegiatan->sampul_kegiatan = $request->file('activityCover')->getClientOriginalName();
        }
        $update = $kegiatan->save();

        if ($update){
            return back()->with('success', 'Kegiatan berhasil diperbarui!');
        }else{
            return back()->with('failed', 'Kegiatan gagal diperbarui');
        }
        
    }
  
    // Melakukan delete kegiatan
    public function hapus($id_kegiatan)
    {
        $kegiatan = Kegiatan::find($id_kegiatan);
        $kegiatan->delete();

        return redirect()->route('listkegiatan-Org');
    }
  
}


