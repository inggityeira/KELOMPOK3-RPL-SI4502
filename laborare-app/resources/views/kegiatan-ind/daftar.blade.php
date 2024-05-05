@php
    $user = \App\Models\User::where('id_user', session('loginId'))->first();
@endphp

@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}
    <div class="container">
        <style>
            .breadcrumb-item+.breadcrumb-item::before {
                color: white;
                font-size: 20px;
            }
        </style>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listkegiatan-Ind"
                        style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Kegiatan</strong></a>
                </li>
                <li class="breadcrumb-item active"><a href="/listkegiatan-Ind"
                        style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Detail
                            Kegiatan</strong></a>
                </li>
                <li class="breadcrumb-item active"><a href="/listkegiatan-Ind"
                        style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Daftar
                            Kegiatan</strong></a>
                </li>
            </ol>
        </nav>

        <div class="container my-3">
            <center>
                <p class="fs-4">{{ $kegiatan->nama_kegiatan }}</p>
                <img src="{{ asset('sampulkegiatan/' . $kegiatan->sampul_kegiatan) }}" alt="" class="img-fluid"
                    style="height: 100%; max-width: 400px">
            </center>
        </div>

        <div class="container px-5">
            <p class="text-center fs-4">Mohon Isi Formulir</p>
            <div class="card mx-5">
                <form action="{{ route('sukarelawanbaru') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body mx-5 px-5 my-3">
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label fw-semibold mb-0">Nama Lengkap</label>
                            <div style="background-color: #CBCBCB" class="p-2 px-3 rounded">{{ $user->nama_user }}</div>
                            <input name="id_user" type="number" hidden value="{{ $user->id_user }}">
                        </div>
                        <div class="mb-3">
                            <label for="nomor_telp" class="form-label fw-semibold mb-0">Nomor Telepon</label>
                            <input name="notelpon_sukarelawan" type="number" class="form-control py-2" id="nomor_telp"
                                style="background-color: #CBCBCB" required>
                        </div>
                        <div class="mb-3">
                            <label for="kontak_wali" class="form-label fw-semibold mb-0">Kontak Wali</label>
                            <input name="kontak_wali" type="number" class="form-control py-2" id="kontak_wali"
                                style="background-color: #CBCBCB" required>
                        </div>
                        <div class="mb-3">
                            <label for="kegiatan" class="form-label fw-semibold mb-0">Nama Kegiatan</label>
                            <select name="id_kegiatan" id="kegiatan" class="form-control" style="background-color:#CBCBCB"
                                required>
                                @foreach ($daftarKegiatan as $item)
                                    <option @if ($item->id_kegiatan == $kegiatan->id_kegiatan) selected @endif
                                        value="{{ $item->id_kegiatan }}">{{ $item->nama_kegiatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pas_foto" class="form-label fw-semibold mb-0">Pas Foto</label>
                            <input name="pas_foto" type="file" class="form-control py-2" id="pas_foto"
                                style="background-color: #CBCBCB" required>
                        </div>
                        <div class="mb-3">
                            <label for="sertifikat" class="form-label fw-semibold mb-0">Sertifikat</label>
                            <input name="sertifikat" type="file" class="form-control py-2" id="sertifikat"
                                style="background-color: #CBCBCB">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label fw-semibold mb-0">Alamat</label>
                            <textarea name="alamat_sukarelawan" id="alamat" cols="30" rows="4" class="form-control"
                                style="background-color:#CBCBCB" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="motivasi" class="form-label fw-semibold mb-0">Motivasi Mengikuti
                                Kegiatan</label>
                            <textarea name="motivasi" id="motivasi" cols="30" rows="4" class="form-control"
                                style="background-color:#CBCBCB" required></textarea>
                        </div>
                        <div class="my-4 text-end">
                            <button type="submit" class="btn btn-dark px-5 fs-5"
                                style="background-color: black">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection