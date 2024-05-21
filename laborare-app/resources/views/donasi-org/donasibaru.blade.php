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

        .formNewDonasi {
            width: 70%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 15px;
        }

        button {
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
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
                <li class="breadcrumb-item active"><a href="/donasibaru-Org"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Donasi Baru</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Judul --}}
    <div class="d-flex justify-content-center">
        <h1 class="judul"><strong>TAMBAH DONASI</strong></h1>
    </div>

    {{-- Form Donasi Baru --}}
    <div class="formNewDonasi">
        <form action="{{ route('tambahdonasi') }}" method="POST" enctype="multipart/form-data">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @csrf
            
            <div class="mb-3">
                <label class="form-label">Nama Donasi</label>
                <input type="text" name="nama_donasi" class="form-control" style="background-color: #CBCBCB;">
            </div>
            <div class="mb-3">
                <label class="form-label">Target Donasi</label>
                <input type="number" name="target_donasi" class="form-control" style="background-color: #CBCBCB;">
            </div>
            <div class="mb-3">
                <label class="form-label">Sampul Donasi</label>
                <input type="file" name="sampul_donasi" class="form-control" style="background-color: #CBCBCB;">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Donasi</label>
                <input type="text" name="deskripsi_donasi" class="form-control"
                    style="height: 150px; background-color: #CBCBCB;">
            </div>
            <button type="submit"
                style="float: right; background-color:black; color:white; width:150px;"><strong>Tambah</strong></button>
        </form>
    </div>





@endsection
