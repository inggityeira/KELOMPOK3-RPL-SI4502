@extends('layouts.main')

@section('title', 'LABORARE | PROFIL')

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
            <li class="breadcrumb-item"><a href="/profil-Ind" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;"><strong>Profil</strong></a></li>
        </ol>
    </nav>
</div>

<div class="d-flex flex-column align-items-center  text-center" >
    {{-- Foto Profil --}}
    @if($user->foto_profil != null)
            <img src="{{asset('fotoprofil/'.$user->foto_profil)}}" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
        @else
            <img src="{{asset('fotoprofil/kosong.png')}}" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
    @endif

    {{-- Nama dan Alamat --}}
    <div class="mt-4 text-center">
        <h1 class="fw-bolder text-uppercase" style="font-size: 48px">{{$user->nama_user}}</h1>
        <p style="width: 80%; margin-left: auto; margin-right: auto;">{{$user->alamat_user}}</p>
    </div>
</div>

{{-- Detail Profil --}}
<div class="container d-flex justify-content-center">
    <form style="width: 55%">
        <div class="mb-2">
            <label for="email">Email</label>
            <div class="card p-2">{{ $user ->email }}</div>
        </div>
        <div class="mb-2">
            <label for="no">Nomer Telepon</label>
            <div class="card p-2">{{ $user ->nomor_telepon }}</div>
        </div>
        <div class="form-group row mt-2">
            <div class="col">
                <label for="Usia">Usia</label>
                <div class="card p-2">{{ $user ->usia_user }}</div>
            </div>
            <div class="col mt-2">
                <label>Jenis Kelamin</label>
                <div>
                    <input type="radio" id="Pria" name="jenis_kelamin" value="Pria" {{ $user->jenis_kelamin == 'Pria' ? 'checked' : 'disabled' }} >
                    <label for="Pria">Pria</label>
                    
                    <input type="radio" id="Wanita" name="jenis_kelamin" value="Wanita" {{ $user->jenis_kelamin == 'Wanita' ? 'checked' : 'disabled' }} >
                    <label for="Wanita">Wanita</label>
                </div>
            </div>            
        </div>
        
        <div class="form-group float-end mt-4">
            <a href="{{ route('edit-individu', ['id' => $user->id_user]) }}" class="btn btn-outline-light px-4"><strong>Edit</strong></a>
            <a href="/logout" class="btn btn-danger px-3 ms-2"><strong>Keluar</strong></a>
        </div>
    </form>
</div>








@endsection