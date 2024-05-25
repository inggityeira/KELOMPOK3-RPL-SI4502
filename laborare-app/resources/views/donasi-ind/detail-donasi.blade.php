@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}
    <div style="margin-top:30px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;font-size:18px;">Donasi</a>
                </li>
                <li class="breadcrumb-item"><a href=""
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;">Detail Donasi</a></li>
            </ol>
        </nav>
    </div>
    <div class="flex flex-col items-center text-center max-w-lg mx-auto">
        <h3 class="font-bold text-2xl mb-2">{{$donasi->nama_donasi}}: Donasi</h3>
        <img src="{{ asset('donasi/') }}" alt="Profile" class="w-full h-auto">

        <div class="flex justify-between w-full mt-4">
            <div class="text-start">
                <h4 class="font-bold">Donasi terkumpul</h4>
                <h4 class="font-bold">IDR {{$jumalah_donatur}} dari {{$donasi->target_donasi}}</h4>
            </div>
            <div class="text-end flex items-center"> <!-- Menambahkan flex dan items-center di sini -->
                <div>
                    <h4 class="font-bold">{{$jumlah_donasi}}</h4>
                    <p>Orang Berdonasi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 bg-white">
       <p class="text-black mt-3">
        {{$donasi->deskripsi_donasi}}
       </p>
    </div>

    <div class="form-group float-end text-center" style="padding: 60px">
        <a type="submit" class="btn btn-light px-4 fs-6" style="width: 380px;
        height: 40px;
        line-height: 28px;
        font-size: 16px;
        text-align: center;
        border: none;
        text-decoration: none;
        color: black;
        background-color: white;">Donasi Sekarang</a>
    </div>





@endsection
