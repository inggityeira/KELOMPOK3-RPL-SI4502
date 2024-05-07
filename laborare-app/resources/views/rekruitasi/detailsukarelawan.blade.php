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
                    <div class="form-control" id="nama">{{ $sukarelawan->user->nama_user }}</div>
                </div>
                <div class="form-group mt-2">
                    <label for="Nomor Telepon">Nomor Telepon</label>
                    <div class="form-control" id="no">{{ $sukarelawan->notelpon_sukarelawan }}</div>
                </div>
                <div class="form-group mt-2">
                    <label for="Kontak_Wali">Kontak Wali</label>
                    <div class="form-control" id="kontak">{{ $sukarelawan->kontak_wali }}</div>
                </div>
                <div class="form-group mt-2">
                    <label for="Alamat">Alamat</label>
                    <textarea rows="5" cols="77" readonly>{{ $sukarelawan->alamat_sukarelawan }}</textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="Motivasi">Motivasi Mengikuti Kegiatan</label>
                    <textarea rows="5" cols="77" readonly>{{ $sukarelawan->motivasi }}</textarea>
                </div>
                <div class="form-group center-button mt-4" style="display: flex; justify-content: end;">
                    <a href="{{ route('rekrut-sukarelawan', ['id' => $sukarelawan->id_sukarelawan]) }}" class="btn px-4" style="background-color: white; color: black;"><strong>Rekrut</strong></a>
                </div>
            </form>                
        </div>
    </div>
</div>



@endsection

