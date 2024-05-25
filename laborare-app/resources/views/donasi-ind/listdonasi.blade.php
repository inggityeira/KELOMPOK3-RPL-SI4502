@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .donasi-banner {
            height: 300px;
        }

        .donasi-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .judul {
            font-size: 25px;
            margin-top: 40px;
            margin-left: 130px;
        }
        .pagination-container .pagination .page-link {
            color: white;
            background-color: black;
            border-color: white;
        }
    </style>
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}
    
    {{-- Breadscrumb --}}
    <div style="margin-top:20px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ 'listdonasi-Ind' }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Donasi</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Banner --}}
<div class="donasi-banner" style="position: relative; text-align: center;">
    <h2 style="position: absolute; top: 100px; left: 20%; color: white;  padding: 10px;">
        <strong>Tindakan Kecil, Dampak Besar: Donasikan Sekarang!</strong>
    </h2>
    <img src="{{ url('/img/DonasiInd.jpg') }}" class="img-fluid" alt="donasi">
</div>


    {{-- Judul --}}
    <div>
        <h1 class="judul"><strong>Bergabunglah Dalam Memberi,</strong></h1>
    </div>

    <div class="container px-5 text-center">
        <center class="px-4">
            <div class="row justify-content-center align-items-center">
                @foreach ($donasi as $item)
                    <div class="col-4">
                        <div class="card rounded-0 mb-3" style="width: 24rem;">
                            <img src="{{ asset('donasi/' . $item->sampul_donasi) }}" class="card-img-top object-fit-cover"
                                style="max-height: 250px">
                            <div class="card-body">
                                <h5 class="card-title text-start fw-semibold">{{ $item->nama_donasi }}</h5>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="container rounded-pill py-2 my-auto me-4" style="background-color: #e8e8e8">
                                        <p class="m-0">Donasi : {{ $totalNominals[$item->id_donasi] ?? 'Rp 0' }} /
                                            {{ $item->target_donasi }}</p>
                                    </div>
                                    <a href="{{ route('detail-donasi', ['id' => $item->id_donasi]) }}"
                                        class="btn btn-dark rounded-pill px-4 py-2">
                                        <span style="font-size: 10px">DETAIL</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Pagination --}}
            <div class="pagination-container d-flex justify-content-center">
                {{ $donasi->links('pagination::bootstrap-4') }}
            </div>
        </center>
        
    </div>
@endsection
