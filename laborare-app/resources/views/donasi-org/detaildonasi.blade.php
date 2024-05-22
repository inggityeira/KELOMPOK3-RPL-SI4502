@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        body {
            color: black;
        }

        .judul {
            font-size: 25px;
            color: white;
            padding: 5px;
            margin-bottom: 30px;
        }

        .detailDonasi {
            width: 70%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .isi {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #CBCBCB;
        }

        .mb-2 {
            width: 70%;
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
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Donasi</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ url()->current() }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Detail
                        Donasi</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Judul --}}
    <div class="d-flex justify-content-center">
        <h1 class="judul"><strong>DETAIL DONASI</strong></h1>
    </div>

    {{-- Informasi Detail Donasi --}}
    <div class="detailDonasi">
        <div class="image" style="text-align: center;">
            <img src="{{ asset('donasi/' . $donasi->sampul_donasi) }}" alt="{{ $donasi->nama_donasi }}" height="250px">
            <h2 style="margin-top: 30px;"><strong>{{ $donasi->nama_donasi }}</strong></h2>
        </div>

        <div class="mb-2 mt-3">
            <label>Target Donasi</label>
            <p class="isi">{{ $donasi->formatted_target_donasi }}</p>
        </div>

        <div class="mb-2">
            <label><strong>Donasi Terkumpul</strong></label>
            <p class="isi" style="background-color: #959393;">
                <strong>{{ $totalNominals[$donasi->id_donasi] ?? 'Rp 0' }}</strong>
            </p>
        </div>

        <div class="mb-2">
            <label>Status Donasi</label>
            <p class="isi"
                @if ($donasi->status_donasi == 'Belum') style="color: red;"
                @elseif($donasi->status_donasi == 'Berjalan') style="color: blue;"
                @elseif($donasi->status_donasi == 'Selesai') style="color: green;" @endif>
                {{ $donasi->status_donasi }}</p>
        </div>

        <div class="mb-2">
            <label>Deskripsi Donasi</label>
            <p class="isi">{{ $donasi->deskripsi_donasi }}</p>
        </div>

        <div>
            <a href="{{ route('editdonasi-Org', ['id' => $donasi->id_donasi]) }}" class="btn" style="background-color:black; color:white; width:150px;">Edit</a>
            <form action="{{ route('hapusdonasi', $donasi->id_donasi) }}" method="POST" style="display: inline-block;">
                @csrf
                <button type="submit" class="btn btn-danger px-5" onclick="return confirm('Ada yakin ingin menghapus donasi ini?')">Hapus</button>
            </form>
        </div>
        
    </div>

@endsection
