@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .judul{
            font-size:25px;
            color: white;
            padding: 5px;
            margin-bottom: 30px;
            margin-top: 20px;
        }
    </style>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}

{{-- Breadscrumb --}}
<div style="margin-top:30px; margin-left:50px;">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/listbaru-Org" style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Kegiatan</a></li>
            <li class="breadcrumb-item active" ><a href="{{ route('detailkegiatan-Org', ['id' => $kegiatan->id_kegiatan]) }}" style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Detail Kegiatan</a></li>
            <li class="breadcrumb-item active" ><a href="{{ route('laporsukarelawan-Org', ['id' => $kegiatan->id_kegiatan]) }}" style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Sukarelawan</a></li>
            <li class="breadcrumb-item active" ><a href="{{ url()->current() }}" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Laporkan</a></li>
        </ol>
    </nav>
</div>

{{-- Judul --}}
<div class="d-flex justify-content-center">
    <h1 class="judul"><strong>LAPORKAN SUKARELAWAN</strong></h1>
</div>

{{-- Form Laporan --}}
<div style="display: flex; justify-content: center; align-items: center;">
    <div style="width: 700px;">
        <form action="{{ route('laporkan', ['id' => $sukarelawan->id_sukarelawan]) }}" method="POST" enctype="multipart/form-data">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Sukarelawan</label>
                <div class="card p-2">{{ $sukarelawan->user->nama_user }}</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <div class="card p-2">{{ $sukarelawan->notelpon_sukarelawan }}</div>
            </div>

            <div class="mb-3">
                <label class="form-label">Sertifikat</label>
                <input type="file" class="form-control" name="sertifikat">
            </div>

            <div class="row g-3 mb-3">
                <div class="col">
                    <label for="Usia">Poin</label>
                    <select class="form-select" name="poin">
                        <option selected>Pilih Poin</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                      </select>
                </div>
                <div class="col mt-5">
                    <input class="form-check-input" type="checkbox" name="tugas_selesai" style="margin-right: 5px;">
                    <label style="color: white;">Tugas Selesai</label>
                </div>            
            </div>

            <div class="form-group float-end mt-3">
                <button type="submit" class="btn btn-light px-4 fs-6" style="font-weight: 600">Laporkan</button>
            </div>

        </form>
    </div>
</div>





@endsection