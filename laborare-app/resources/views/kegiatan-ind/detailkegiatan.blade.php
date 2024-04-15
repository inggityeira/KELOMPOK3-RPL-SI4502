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
                    <img src="{{ asset('sampulkegiatan/' . $kegiatan->sampul_kegiatan) }}" alt="" class="img-fluid"
                        style="height: 100%">
                </div>
                <div class="col-7">
                    <div class="container-fluid text-center my-4">
                        <h2 class="fw-semibold">Detail Kegiatan</h2>
                    </div>
                    <div class="card bg-black mx-4 pb-5">
                        <div class="text-center">
                            <p class="text-white fs-5 fw-semibold my-3">{{ $kegiatan->nama_kegiatan }}</p>
                        </div>
                        <div class="container mb-4">
                            <div class="container">
                                <p class="text-white fw-semibold">Deskripsi Kegiatan</p>
                                <div class="card bg-white border border-0 p-3"
                                    style="font-size: 13px;  text-align: justify;">
                                    {{ $kegiatan->deskripsi_kegiatan }}
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="container">
                                <p class="text-white fw-semibold">Tanggal Kegiatan</p>
                                <div class="card bg-white border border-0 p-3" style="font-size: 13px">
                                    {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center my-3">
                        <button class="btn btn-lg bg-black text-white fw-semibold px-5">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

