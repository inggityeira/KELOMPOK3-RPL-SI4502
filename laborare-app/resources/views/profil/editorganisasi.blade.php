@extends('layouts.main')

@section('title', 'LABORARE | PROFIL')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
<div class="container">
        <nav style="--bs-breadcrumb-divider: ;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-white fw-semibold">Profil</a>
                </li>
                <li class="breadcrumb-item">></li>
                <li class="breadcrumb-item active text-white fw-semibold">Edit Profil</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex justify-content-center">
        <form style="width: 55%" method="POST" action="{{ route('update-organisasi', $user->id_user) }}">
            @csrf
            <div class="mb-2">
                <label for="nama_user" class="form-label">Nama Organisasi</label>
                <input type="text" class="form-control" id="nama_user" name="nama_user" value="{{ $user->nama_user }}">
            </div>
            <div class="mb-2">
                <label for="alamat_user" class="form-label">Alamat Organisasi</label>
                <textarea name="alamat_user" id="alamat_user" name="alamat_user" rows="3" class="form-control">{{ $user->alamat_user }}</textarea>
            </div>
            <div class="mb-2">
                <label for="foto_profil" class="form-label">Foto Profil</label>
                <input type="file" class="form-control" id="foto_profil">
            </div>
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
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-2">
                <label for="situs_web" class="form-label">Situs Web</label>
                <input type="text" class="form-control" id="situs_web" name="situs_web" value="{{ $user->situs_web }}">
            </div>
            <div class="form-group float-end mt-3">
                <button type="submit" class="btn btn-light px-4 fs-6" style="font-weight: 600">Perbarui</button>
            </div>
        </form>
    </div>

@endsection