@extends('layouts.main')

@section('title', 'LABORARE | PROFIL')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

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
                <li class="breadcrumb-item"><a href="/profil-Org"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;">Profil</a>
                </li>
            </ol>
        </nav>
    </div>

    <center>
        {{-- Foto Profil --}}
        @if ($user->foto_profil != null)
            <img src="{{ asset('fotoprofil/' . $user->foto_profil) }}" alt="Profile"
                style="border-radius: 50%; width: 150px; height: 150px;">
        @else
            <img src="{{ asset('fotoprofil/kosong.png') }}" alt="Profile"
                style="border-radius: 50%; width: 150px; height: 150px;">
        @endif

        {{-- Nama dan Alamat --}}
        <h1 class="fw-bolder text-uppercase" style="font-size: 48px">{{ $user->nama_user }}</h1>
        <p style="width: 46%">{{ $user->alamat_user }}</p>
    </center>

    {{-- Detail Profil --}}
    <div class="d-flex justify-content-center">
        <form style="width: 55%" method="POST" action="{{ route('update-organisasi', $user->id_user) }}">
            @csrf
            <div class="mb-2">
                <label for="penanggung_jawab" class="form-label">Penanggung Jawab</label>
                <div class="card p-2">{{ $user->penanggung_jawab }}</div>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <div class="card p-2">{{ $user->email }}</div>
            </div>
            <div class="mb-2">
                <label for="situs_web" class="form-label">Situs Web</label>
                <div class="card p-2">{{ $user->situs_web }}</div>
            </div>
            <div class="form-group float-end mt-4">
                <a href="{{ route('edit-organisasi', ['id' => $user->id_user]) }}"
                    class="btn btn-outline-light px-4"><strong>Edit</strong></a>
                <a class="btn btn-danger px-3 ms-2" href="/logout">Keluar</a>
            </div>
        </form>
    </div>

@endsection
