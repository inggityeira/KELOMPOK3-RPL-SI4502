@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

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
            <li class="breadcrumb-item active"><a href="/listkegiatan-Ind" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Kegiatan</strong></a></li>
            <li class="breadcrumb-item active" ><a href="{{ url()->current() }}" style="font-size:18px; color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;"><strong>Detail Kegiatan</strong></a></li>
        </ol>
    </nav>
  </div>

  {{-- Konten Utama --}}
    <div class="container px-5" style="margin-top: 20px;">
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
                                    style="text-align: justify;">
                                    {{ $kegiatan->deskripsi_kegiatan }}
                                </div>
                            </div>
                        </div>
                        <div class="container mb-4">
                            <div class="container">
                                <p class="text-white fw-semibold">Tanggal Kegiatan</p>
                                <div class="card bg-white border border-0 p-3">
                                    {{ \Carbon\Carbon::parse($kegiatan->tanggal_kegiatan)->format('d M Y') }}
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="container">
                                <p class="text-white fw-semibold">Kategori</p>
                                <div class="card bg-white border border-0 p-3">
                                    {{ $kegiatan->kategori_kegiatan }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container d-flex justify-content-center my-3">
                        <a href="" class="btn btn-lg bg-black text-white fw-semibold px-5">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

