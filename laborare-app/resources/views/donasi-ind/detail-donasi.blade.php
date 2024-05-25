@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .sampul-donasi {
            height: 270px;
            width: 650px;
        }

        .sampul-donasi img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    {{-- Breadscrumb --}}
    <div style="margin-top:25px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listdonasi-Ind"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Donasi</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ url()->current() }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Detail
                        Donasi</a>
                </li>
            </ol>
        </nav>
    </div>

    <div class="flex flex-col items-center text-center max-w-lg mx-auto">
        <h3 class="font-bold text-2xl mb-2"><strong>{{ $donasi->nama_donasi }}</strong></h3>
        <br>
        <div class="sampul-donasi">
            <img src="{{ asset('donasi/' . $donasi->sampul_donasi) }}" alt="{{ $donasi->nama_donasi }}" class="img-fluid">
        </div>

        <div class="flex justify-between w-full mt-4">
            <div class="row">
                <div class="text-start" style="flex: 1;">
                    <h4><strong>Donasi terkumpul</strong></h4>
                    <h4><strong>IDR {{ $jumalah_donatur }} dari {{ $donasi->target_donasi }}</strong></h4>
                </div>
                <div style="flex: 1; display: flex; align-items: center; justify-content: flex-end; margin-right: 20px;">
                    <h1 style="margin-right: 10px;"><strong>{{ $jumlah_donasi }}</strong></h1>
                    <div style="text-align: left;">
                        <h4>Orang</h4>
                        <h4>Berdonasi</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container px-4 bg-white" style="border-radius: 15px; width:800px;">
        <p class="text-black mt-3">
            {{ $donasi->deskripsi_donasi }}
        </p>
    </div>

    <div class="form-group float-end text-center" style="padding: 60px">
        <a href="{{ route('formulir', ['id' => $donasi->id_donasi]) }}" class="btn btn-light px-4 fs-6"
            style="width: 250px;
        height: 40px;
        line-height: 28px;
        font-size: 16px;
        text-align: center;
        border: none;
        text-decoration: none;
        color: black;
        background-color: white;">
            <strong>Donasi Sekarang!</strong></a>
    </div>





@endsection
