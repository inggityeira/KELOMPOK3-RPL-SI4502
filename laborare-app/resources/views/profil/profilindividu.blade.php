@extends('layouts.main')

@section('title', 'LABORARE | PROFIL')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@php
    $user = \App\Models\User::where('id_user', session('loginId'))->first();
@endphp

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div class="container">
        <nav style="--bs-breadcrumb-divider: ;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/profil-Ind" class="text-decoration-none text-white fw-semibold">Profil</a>
                </li>
            </ol>
        </nav>
    </div>

<div class="d-flex flex-column align-items-center mt-5 text-center">
    @if($user->foto_profil != null)
            <img src="{{asset('fotoprofil/'.$user->foto_profil)}}" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
        @else
            <img src="{{asset('fotoprofil/kosong.png')}}" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
    @endif
    <div class="mt-4">
        <h2 class="fw-bolder">{{$user->nama_user}}</h2>
        <p>{{$user->alamat_user}}</p>
    </div>
</div>

<div class="container d-flex justify-content-center">
    <form action="" class="col-md-6">
        <div class="form-group">
            <label for="email">Email</label>
            <div class="card p-2">{{ $user ->email }}</div>
        </div>
        <div class="form-group mt-2">
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
                    <input type="radio" id="Pria" name="jenis_kelamin" value="Pria" {{ $user->jenis_kelamin == 'Pria' ? 'checked' : '' }}>
                    <label for="Pria">Pria</label>
                    
                    <input type="radio" id="Wanita" name="jenis_kelamin" value="Wanita" {{ $user->jenis_kelamin == 'Wanita' ? 'checked' : '' }}>
                    <label for="Wanita">Wanita</label>
                </div>
            </div>            
        </div>
        <div class="form-group mt-4">
            <a href="/editprofil-Ind" type="submit" class="btn btn-light mr-2">Edit</a>
            <a href="/logout" type="submit" class="btn btn-danger">Keluar</a>
        </div>
    </form>
</div>








@endsection