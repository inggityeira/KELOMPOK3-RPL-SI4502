@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .judul {
            font-size: 25px;
            color: white;
            padding: 5px;
            margin-bottom: 30px;
            /* margin-top: 20px; */
        }
    </style>
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    {{-- Breadscrumb --}}
    <div style="margin-top:30px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/listsukarelawan"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px; font-size:18px;">Rekruitasi</a>
                </li>
                <li class="breadcrumb-item"><a href=""
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;">Detail
                        Sukarelawan</a></li>
            </ol>
        </nav>
    </div>

    {{-- Judul --}}
    <div class="d-flex justify-content-center">
        <h1 class="judul"><strong>DETAIL SUKARELAWAN</strong></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-4" style="margin-right: 20px;">
                <img src="{{ asset('pasfoto/' . $sukarelawan->pas_foto) }}" alt="{{ $sukarelawan->user->nama_user }}"
                    style="width: 500px; border-radius: 10px;">
            </div>
            <div class="col-md-6" style="margin-left: -150px;">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <div class="form-control" id="nama">{{ $sukarelawan->user->nama_user }}</div>
                </div>
                <div class="form-group mt-2">
                    <label for="Nomor Telepon">Nomor Telepon</label>
                    <div class="form-control" id="no">{{ $sukarelawan->notelpon_sukarelawan }}</div>
                </div>
                <div class="form-group mt-2">
                    <label for="Kontak_Wali">Kontak Wali</label>
                    <div class="form-control" id="kontak">{{ $sukarelawan->kontak_wali }}</div>
                </div>
                <div class="form-group mt-2">
                    <label for="Alamat">Alamat</label>
                    <textarea class="form-control" rows="5" cols="77" readonly>{{ $sukarelawan->alamat_sukarelawan }}</textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="Motivasi">Motivasi Mengikuti Kegiatan</label>
                    <textarea class="form-control" rows="5" cols="77" readonly>{{ $sukarelawan->motivasi }}</textarea>
                </div>
                <div class="form-group center-button mt-4" style="display: flex; justify-content: end;">
                    <a href="{{ route('rekrut-sukarelawan', ['id' => $sukarelawan->id_sukarelawan]) }}" class="btn px-4"
                        style="background-color: white; color: black;"><strong>Rekrut</strong></a>
                </div>
            </div>
        </div>
    </div>



@endsection
