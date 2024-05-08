@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        body {
            color: #000;
        }

        .containerutama {
            width: 70%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        .isi {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .containerutama .image {
            text-align: center;
        }

        .class-button {
            text-align: right;
        }

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
    <div style="margin-top:30px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listbaru-Org"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Kegiatan</a></li>
                <li class="breadcrumb-item active"><a href="{{ url()->current() }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Detail
                        Kegiatan</a></li>
            </ol>
        </nav>
    </div>

    {{-- Judul --}}
    <div class="d-flex justify-content-center">
        <h1 class="judul"><strong>DETAIL KEGIATAN</strong></h1>
    </div>

    {{-- Informasi Detail Kegiatan --}}
    <div class="containerutama">
        {{-- Sampul Kegiatan --}}
        <div class="image">
            <img src="{{ asset('sampulkegiatan/' . $kegiatan->sampul_kegiatan) }}" alt="{{ $kegiatan->nama_kegiatan }}"
                height="200px">
        </div>

        <div class="row g-2">

            <div class="col-12">
                <label for="activityName"><strong>Nama Kegiatan</strong></label>
                <p class="isi" style="background-color: #CBCBCB;">{{ $kegiatan->nama_kegiatan }}</p>
            </div>

            <div class="col-12">
                <label for="activityDate"><strong>Tanggal Kegiatan</strong></label>
                <p class="isi" style="background-color: #CBCBCB;">{{ $kegiatan->tanggal_kegiatan }}</p>
            </div>

            <div class="col-12">
                <label for="activityStatus"><strong>Status Kegiatan</strong></label>
                <p class="isi" style="background-color: #CBCBCB;">{{ $kegiatan->status_kegiatan }}</p>
            </div>

            <div class="col-12">
                <label for="activityCategory"><strong>Kategori Kegiatan</strong></label>
                <p class="isi" style="background-color: #CBCBCB;">{{ $kegiatan->kategori_kegiatan }}</p>
            </div>

            <div class="col-12">
                <label for="activityDescription"><strong>Deskripsi Kegiatan</strong></label>
                <p class="isi" style="background-color: #CBCBCB;">{{ $kegiatan->deskripsi_kegiatan }}</p>
            </div>

            <div class="class-button">
                <a href="{{ route('laporsukarelawan-Org', ['id' => $kegiatan->id_kegiatan]) }}"
                    class="btn btn-outline-dark px-4" style="border: 3px solid;"><strong>Sukarelawan</strong></a>
                <a href="{{ route('editkegiatan-Org', ['id' => $kegiatan->id_kegiatan]) }}" class="btn"
                    style="background-color:black; color:white; width:150px;">Edit</a>
                <form action="{{ route('hapuskegiatan', $kegiatan->id_kegiatan) }}" method="POST"
                    style="display: inline-block;">
                    @csrf
                    <button type="submit" class="btn btn-danger px-5"
                        onclick="return confirm('Ada yakin ingin menghapus kegiatan ini?')">Hapus</button>
                </form>
            </div>

        </div>
    </div>

@endsection
