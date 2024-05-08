@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}

    <style>
        .kegiatan-banner {
            height: 250px;
        }

        .kegiatan-banner img {
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
                <li class="breadcrumb-item active"><a href="/listbaru-Org"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Kegiatan</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Banner --}}
    <div class="kegiatan-banner">
        <img src="{{ url('/img/Mask group.jpg') }}" class="img-fluid" alt="Kegiatan">
    </div>

    {{-- Judul --}}
    <div>
        <h1 class="judul"><strong>DAFTAR KEGIATAN</strong></h1>
    </div>

    {{-- Tombol Tambah Kegiatan --}}
    <div class="text-end">
        <a href="/kegiatanbaru-Org" class="btn btn-light fw-bolder"
            style="font-size:18px; margin-top:-70px; margin-right:130px;">+ Kegiatan</a>
    </div>

    {{-- List Kegiatan dari Database --}}
    <div class="p-5" style="margin-top:-30px;">
        <div class="container d-flex justify-content-center">
            <div class="row centered" style="flex-wrap: wrap; gap: 20px; justify-content: center;">
                @foreach ($kegiatan->items() as $key => $item)
                    <div class="card col-md-6 position-relative mb-4"
                        style="width: 300px; {{ $key == 0 && $kegiatan->count() == 1 ? 'margin-left: -320px;' : '' }} padding: 0; margin: 0; border-radius: 0px;">
                        <img src="{{ asset('sampulkegiatan/' . $item->sampul_kegiatan) }}" class="card-img-top"
                            alt="{{ $item->nama_kegiatan }}"
                            style="height: 180px; width: 100%; object-fit: cover; padding: 0; margin: 0;">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $item->nama_kegiatan }}</strong></h5>
                            <p class="card-text"><strong>{{ $item->tanggal_kegiatan }}</strong></p>
                            <a href="{{ route('detailkegiatan-Org', $item->id_kegiatan) }}" class="btn"
                                style="float: right; background-color:black; margin-top:-30px; color:white; width:100px; border-radius: 20px;">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="pagination-container d-flex justify-content-center">
        {{ $kegiatan->links('pagination::bootstrap-4') }}
    </div>

    <br>
@endsection
