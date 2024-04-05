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

    <center>
        @if($user->foto_profil != null)
            <img src="{{asset('fotoprofil/'.$user->foto_profil)}}" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
        @else
            <img src="{{asset('fotoprofil/kosong.png')}}" alt="Profile" style="border-radius: 50%; width: 150px; height: 150px;">
        @endif

        <h1 class="fw-bolder text-uppercase" style="font-size: 48px">{{ $user->nama_user }}</h1>
        <p style="width: 46%">{{ $user->alamat_user }}</p>
    </center>
    <div class="d-flex justify-content-center">
        <form style="width: 55%" method="POST" action="{{ route('update-organisasi', $user->id_user) }}">
            @csrf
            <div class="mb-2">
                <label for="penanggung_jawab" class="form-label">Penanggung Jawab</label>
                <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab"
                    value="{{ $user->penanggung_jawab }}">
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-2">
                <label for="situs_web" class="form-label">Situs Web</label>
                <input type="text" class="form-control" id="situs_web" name="situs_web" value="{{ $user->situs_web }}">
            </div>
            <div class="form-group float-end mt-4">
                <button type="submit" class="btn btn-outline-light px-4">Edit</button>
                <a class="btn btn-danger px-3 ms-2" href="/logout">Keluar</a>
            </div>
        </form>
    </div>

@endsection