@extends('layouts.main')

@section('title', 'LABORARE | PROFIL')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
<div class="container">
        <nav style="--bs-breadcrumb-divider: ;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/profil-Ind" class="text-decoration-none text-white fw-semibold">Profil</a>
                </li>
                <li class="breadcrumb-item">></li>
                <li class="breadcrumb-item active text-white fw-semibold">Edit Profil</li>
            </ol>
        </nav>
    </div>
<div class="container d-flex justify-content-center">
    <form action="" class="col-md-6">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" style="height: 100px">
        </div>
        <div>
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group mt-2">
            <label for="no">Nomer Telepon</label>
            <input type="tel" class="form-control" id="no">
        </div>
        <div class="form-group row mt-2">
            <div class="col">
                <label for="Usia">Usia</label>
                <input type="number" class="form-control" id="Usia">
            </div>
            <div class="col mt-2">
                <label>Jenis Kelamin</label>
                <div>
                    <input type="radio" id="Pria" name="jenis_kelamin" value="Pria">
                    <label for="Pria">Pria</label>
                    <input type="radio" id="Wanita" name="jenis_kelamin" value="Wanita">
                    <label for="Wanita">Wanita</label>
                </div>
            </div>
        </div>
        <div class="form-group mt-4">
            <a href="" type="submit" class="btn btn-danger mr-2">Perbarui</a>
        </div>
    </form>
</div>

@endsection