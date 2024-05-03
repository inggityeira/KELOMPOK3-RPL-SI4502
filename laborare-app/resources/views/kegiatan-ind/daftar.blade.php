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
                <p class="fs-4">Judul Kegiatan</p>
                <img src="{{ asset('img/1.png') }}" alt="" class="img-fluid" style="height: 100%; max-width: 400px">
            </center>
        </div>

        <div class="container px-5">
            <p class="text-center fs-4">Mohon Isi Formulir</p>
            <div class="card mx-5">
                <div class="card-body mx-5 px-5 my-3">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label fw-semibold mb-0">Nama Lengkap</label>
                        <input type="text" class="form-control py-2" id="nama_lengkap" style="background-color: #CBCBCB"
                            disabled value="{{ $user->nama_user }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold mb-0">Email</label>
                        <input type="email" class="form-control py-2" id="email" style="background-color: #CBCBCB">
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telp" class="form-label fw-semibold mb-0">Nomor Telepon</label>
                        <input type="text" class="form-control py-2" id="nomor_telp" style="background-color: #CBCBCB">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label fw-semibold mb-0">Kontak Wali</label>
                        <input type="text" class="form-control py-2" id="nama_lengkap" style="background-color: #CBCBCB">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label fw-semibold mb-0">Nama Kegiatan</label>
                        <input type="text" class="form-control py-2" id="nama_lengkap" style="background-color: #CBCBCB">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label fw-semibold mb-0">Pas Foto</label>
                        <input type="file" class="form-control py-2" id="nama_lengkap" style="background-color: #CBCBCB">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label fw-semibold mb-0">Alamat</label>
                        <textarea name="" id="" cols="30" rows="4" class="form-control"
                            style="background-color:#CBCBCB"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label fw-semibold mb-0">Motivasi Mengikuti Kegiatan</label>
                        <textarea name="" id="" cols="30" rows="4" class="form-control"
                            style="background-color:#CBCBCB"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection