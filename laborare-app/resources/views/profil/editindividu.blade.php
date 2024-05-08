@extends('layouts.main')

@section('title', 'LABORARE | PROFIL')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    {{-- Breadscrumb --}}
    <div style="margin-top:30px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/profil-Ind"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;font-size:18px;">Profil</a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('edit-individu', ['id' => $user->id_user]) }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;">Edit
                        Profil</a></li>
            </ol>
        </nav>
    </div>

    {{-- Form Update --}}
    <div class="container d-flex justify-content-center">
        <form style="width: 55%" method="POST" action="{{ route('editprofil-Ind', $user->id_user) }}"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-2">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_user" value="{{ $user->nama_user }}">
            </div>

            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat_user" id="alamat_user" name="alamat_user" class="form-control">{{ $user->alamat_user }}</textarea>
            </div>

            <div class="mb-2">
                <label for="foto">Foto Profil</label>
                <input type="file" class="form-control" name="foto_profil">
            </div>

            <div class="mb-2">
                <label for="no">Nomor Telepon</label>
                <input type="tel" class="form-control" name="nomor_telepon" value="{{ $user->nomor_telepon }}">
            </div>

            <div class="mb-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>

            <div class="form-group row mt-2">
                <div class="col">
                    <label for="Usia">Usia</label>
                    <input type="number" class="form-control" name="usia_user" value="{{ $user->usia_user }}">
                </div>
                <div class="col mt-2">
                    <label>Jenis Kelamin</label>
                    <div>
                        <input type="radio" id="Pria" name="jenis_kelamin" value="Pria"
                            {{ $user->jenis_kelamin == 'Pria' ? 'checked' : '' }}>
                        <label for="Pria">Pria</label>

                        <input type="radio" id="Wanita" name="jenis_kelamin" value="Wanita"
                            {{ $user->jenis_kelamin == 'Wanita' ? 'checked' : '' }}>
                        <label for="Wanita">Wanita</label>
                    </div>
                </div>
            </div>

            <div class="form-group float-end mt-3">
                <button type="submit" class="btn btn-light px-4 fs-6" style="font-weight: 600">Perbarui</button>
            </div>
        </form>
    </div>

@endsection
