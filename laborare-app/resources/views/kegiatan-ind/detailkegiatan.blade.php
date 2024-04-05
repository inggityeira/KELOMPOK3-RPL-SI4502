@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
Detail
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

    <div class="container px-5">
        <div class="card bg-white mx-5 border border-0 overflow-hidden">
            <div class="row g-0">
                <div class="col-5 overflow-hidden">
                    <img src="{{ asset('img/gendong.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-7">
                    <div class="container-fluid text-center my-4">
                        <h2 class="fw-semibold">Detail Kegiatan</h2>
                    </div>
                    <div class="card bg-black mx-4 pb-5">
                        <div class="text-center">
                            <p class="text-white fs-5 fw-semibold my-3">Gendong Untuk Kesetaraan</p>
                        </div>
                        <div class="container mb-4">
                            <div class="container">
                                <p class="text-white fw-semibold">Deskripsi Kegiatan</p>
                                <div class="card bg-white border border-0 p-3"
                                    style="font-size: 13px;  text-align: justify;">
                                    Metafora yang kuat yang menggambarkan dukungan dan solidaritas dalam mencapai kesetaraan
                                    gender atau hak asasi manusia. Istilah "gendong" menunjukkan tindakan memberi dukungan
                                    atau mengangkat beban bersama-sama, sementara "kesetaraan" menekankan pentingnya
                                    perlakuan yang adil dan setara bagi semua individu, tanpa memandang jenis kelamin, ras,
                                    agama, atau latar belakang lainnya
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="container">
                                <p class="text-white fw-semibold">Tanggal Kegiatan</p>
                                <div class="card bg-white border border-0 p-3" style="font-size: 13px">
                                    1 April - 15 Mei 2024
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center mt-3">
                        <button class="btn btn-lg bg-black text-white fw-semibold px-5">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@endsection