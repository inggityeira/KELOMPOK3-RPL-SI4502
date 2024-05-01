@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
<div class="d-flex flex-column align-items-center  text-center" >
    {{-- Foto --}}
    @if($user->foto_profil != null)
            <img src="{{asset('fotoprofil/'.$user->foto_profil)}}" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
        @else
            <img src="/kosong.png" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
    @endif
    <div class="container d-flex justify-content-center">
        <form style="width: 55%">
            <div class="mb-2">
                <label for="nama_sukarewan">Nama</label>
                <div class="card p-2">{{ $user ->id_user }}</div>
            </div>
            <div class="mb-2">
                <label for="status">Kegiatan</label>
                <div class="card p-2">{{ $user ->id_kegiatan }}</div>
            </div>
            <div class="form-group row mt-2">
                <div class="col">
                    <label for="Status">Status Penerimaan</label>
                    <div class="card p-2">{{ $user ->status_sukarelawan}}</div>
                </div>

@endsection
