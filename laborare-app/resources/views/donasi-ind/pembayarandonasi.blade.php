@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .judul {
            font-size: 25px;
            color: white;
            padding: 5px;
            margin-bottom: 30px;
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
                <li class="breadcrumb-item active"><a href="{{ route('detail-donasi', ['id' => $donasi->id_donasi]) }}"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Detail
                        Donasi</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ route('formulir', ['id' => $donasi->id_donasi]) }}"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Formulir
                        Donasi</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ url()->current() }}"
                    style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Pembayaran</a>
            </li>
            </ol>
        </nav>
    </div>

    {{-- Judul --}}
    <div class="d-flex justify-content-center">
        <h1 class="judul"><strong>Informasi Pembayaran</strong></h1>
    </div>

    {{-- KONTEN UTAMA --}}
    <div class="d-flex flex-column align-items-center">
        <img src="{{ url('/img/barcode.jpeg') }}" alt="donasi" width="350px;">
        <div class="text-center" style="width: 600px; margin-top:30px; margin-bottom:30px;">
            <p style="font-size: 20px;">Kode QR ini bisa di-scan dengan semua aplikasi yang mendukung QRIS seperti GoPay.
                OVO, DANA, LinkAja dan lainnya.</p>
        </div>
        <a href="/listdonasi-Ind" class="btn btn-light text-dark" style="width: 150px;"><strong>SELESAI</strong></a>
    </div>

@endsection
