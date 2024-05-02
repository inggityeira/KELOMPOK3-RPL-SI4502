@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
@php
    $user = \App\Models\User::where('id_user', session('loginId'))->first();
@endphp

{{-- Breadscrumb --}}
<div style="margin-top:30px; margin-left:50px;">
    <style>
      .breadcrumb-item+.breadcrumb-item::before {
        color: white;
        font-size: 20px;
      }
    </style>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/listsukarelawan" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;"><strong>Rekruitasi</strong></a></li>
            <li class="breadcrumb-item"><a href="" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;"><strong>Rekrut Sukarelawan</strong></a></li>
        </ol>
    </nav>
</div>

<div class="d-flex flex-column align-items-center  text-center" >
    {{-- Foto Profil --}}
    @if($user->foto_profil != null)
            <img src="{{asset('fotoprofil/'.$user->foto_profil)}}" alt="Profile" style="border-radius: 50%; width: 250px; height: 250px;">
        @else
            <img src="{{asset('fotoprofil/kosong.png')}}" alt="Profile" style="border-radius: 50%; width: 250px; height: 250px;">
    @endif

    {{-- Nama dan Alamat --}}

</div>

{{-- Detail Profil --}}
<div class="container d-flex justify-content-center">
    <form style="width: 55%">
        <div class="mb-2">
            <label for="nama">Nama Lengkap</label>
            <div class=""><input type="text" class="card p-2" style="width: 100%; padding: 8px;"></div>
        </div>
        <div class="mb-2">
            <label for="kegiatan">Kegiatan</label>
            <div class="">
                <select class="card p-2" style="width: 100%; padding: 8px;">
                    <option value="meeting">Meeting</option>
                    <option value="presentasi">Presentasi</option>
                    <option value="training">Training</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="mb-2">
            <label for="status">Status Penerimaan</label>
            <div class="">
                <select class="card p-2" style="width: 100%; padding: 8px;">
                    <option value="diterima">Diterima</option>
                    <option value="ditolak">Ditolak</option>
                    <option value="menunggu">Menunggu</option>
                </select>
            </div>
        </div>
        <div class="form-group center-button mt-4">
                <a href="/rekrutsukarelawan" class="btn btn-outline-light px-4"><strong>Rekrut</strong></a>
            </div>
    </form>
</div>








@endsection
