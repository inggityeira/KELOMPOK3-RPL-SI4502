@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .donasi-banner {
            height: 250px;
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
    <div style="margin-top:25px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listdonasi-Org"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Donasi</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Banner --}}
    <div class="donasi-banner">
        <img src="{{ url('/img/Donasi.jpg') }}" class="img-fluid" alt="donasi">
    </div>

    {{-- Judul --}}
    <div>
        <h1 class="judul"><strong>DAFTAR DONASI</strong></h1>
    </div>

    {{-- Tombol Tambah Donasi --}}
    <div class="text-end">
        <a href="" class="btn btn-light fw-bolder" style="font-size:18px; margin-top:-70px; margin-right:130px;">+
            Donasi</a>
    </div>

    {{-- List Donasi dari Database --}}
    <div class="p-5" style="margin-top:-30px;">
        <div class="container d-flex justify-content-center">
            <div class="row centered" style="flex-wrap: wrap; gap: 20px; justify-content: center;">
                @foreach ($donasi->items() as $key => $item)
                    <div class="card col-md-6 position-relative mb-4"
                        style="width: 300px; {{ $key == 0 && $donasi->count() == 1 ? 'margin-left: -320px;' : '' }} padding: 0; margin: 0; border-radius: 0px;">
                        <img src="{{ asset('donasi/' . $item->sampul_donasi) }}" class="card-img-top"
                            alt="{{ $item->nama_donasi }}"
                            style="height: 180px; width: 100%; object-fit: cover; padding: 0; margin: 0;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $item->nama_donasi }}</strong></h5>
                            <p class="card-text"><strong>Rp{{ $totalNominals[$item->id_donasi] ?? 0 }} / Rp{{ $item->target_donasi }}</strong></p>
                            <a href="" class="btn"
                                style="float: right; background-color:black; color:white; width:100px; border-radius: 20px;">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="pagination-container d-flex justify-content-center">
        {{ $donasi->links('pagination::bootstrap-4') }}
    </div>

    <br>

@endsection
