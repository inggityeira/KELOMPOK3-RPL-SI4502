@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div class="container">
    <div class="row">
        <div class="col-md-6 pt-4">
            <img src="{{asset('pasfoto/'.$sukarelawan->pas_foto)}}" alt="Gambar" class="object-fill rounded-full">
        </div>
        
        <div class="col-md-6" style="margin-left: -150px;">
            <form action="" class="col-md-12">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="nama" class="form-control" id="nama" value="{{$sukarelawan->id_sukarelawan}}">
                </div>
                <div class="form-group mt-2">
                    <label for="Nomor Telepon">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="no" value="{{$sukarelawan->notelpon_sukarelawan}}">
                </div>
                <div class="form-group mt-2">
                    <label for="Kontak _Wali">Kontak Wali</label>
                    <input type="kontak" class="form-control" id="kontak" value="{{$sukarelawan->kontak_wali}}">
                </div>
                <div class="form-group mt-2">
                    <label for="Alamat">Alamat</label>
                    <textarea rows="5" cols="77">{{$sukarelawan->alamat_sukarelawan}}</textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="Motivasi">Motivasi Mengikuti Kegiatan</label>
                    <textarea rows="5" cols="77">{{$sukarelawan->motivasi}}</textarea>
                </div>
                <div class="form-group center-button mt-4" style="display: flex; justify-content: end;">
                    <a href="{{ route('rekrut', ['id' => $sukarelawan->id_sukarelawan]) }}" type="submit" class="btn px-4" style="background-color: white; color: black;"><strong>Rekrut</strong></a>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection

