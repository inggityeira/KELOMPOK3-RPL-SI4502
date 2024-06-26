@extends('layouts.main')

@section('title', 'LABORARE | POIN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    {{-- Breadscrumb --}}
    <div style="margin-top:25px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/jumlahpoin"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Poin</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Judul --}}
    <div>
        <h5 class="text-center mt-4" style="font-weight: 600">POIN YANG TELAH DIKUMPULKAN</h5>
    </div>

    {{-- Poin User --}}
    <div class="container mx-auto px-4 bg-white mt-4"
        style="max-width: 600px; padding: 20px; display: flex; align-items: center; border-radius: 20px;">
        <img src="{{ asset('/img/poin.png') }}" alt="" style="margin-right: 20px;">
        <div>
            <h2 class="text-black">Total poin Anda saat ini</h2>
            <h1 class="text-black text-center" style="font-weight: bold;  letter-spacing: 15px;">{{ $total_poin }}</h1>
        </div>
    </div>

    <div class="text-center mt-4">
        <p style="font-size: 24px;">Terima kasih telah mengikuti kegiatan dan berdonasi di website Laborare.<br> Nantikan
            kejutan lainnya yang akan menanti Anda! </p>
    </div>


    <div class="form-group float-end text-center" style="padding: 20px">
        <a href="/tablepoint" class="btn btn-light px-4 fs-6"
            style="width: 280px;
        height: 40px;
        line-height: 28px;
        font-size: 16px;
        text-align: center;
        border: none;
        text-decoration: none;
        color: black;
        background-color: white;
        font-weight: bold;">Riwayat</a>
    </div>



@endsection
