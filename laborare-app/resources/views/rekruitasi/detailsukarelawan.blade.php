@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div class="container d-flex justify-content-center">
    <form action="" class="col-md-6">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="nama" class="form-control" id="nama">
        </div>
        <div class="form-group mt-2">
            <label for="Nomor Telepon">Nomor Telepon</label>
            <input type="tel" class="form-control" id="no">
        </div>
        <div class="form-group mt-2">
            <label for="Kontak _Wali">Kontak Wali</label>
            <input type="kontak" class="form-control" id="kontak">
        </div>
        <div class="form-group mt-2">
            <label for="Alamat">Alamat</label>
            <input type="tel" class="form-control" id="no">
        </div>
        <div class="form-group mt-2">
            <label for="Motivasi">Motivasi Mengikuti Kegiatan</label>
            <input type="motiv" class="form-control" id="motiv">
        </div>
</div>

@endsection
DETAIL SUKARELAWAN