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
        }
    </style>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}

{{-- Breadscrumb --}}
<div style="margin-top:30px; margin-left:50px;">
    <style>
        .breadcrumb-item+.breadcrumb-item::before {
        color: white;
        font-size: 20px;
        }
    </style>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/listbaru-Org" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Kegiatan</strong></a></li>
            <li class="breadcrumb-item active" ><a href="{{ route('detailkegiatan-Org', ['id' => $kegiatan->id_kegiatan]) }}" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Detail Kegiatan</strong></a></li>
            <li class="breadcrumb-item active" ><a href="{{ route('laporsukarelawan-Org', ['id' => $kegiatan->id_kegiatan]) }}" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Sukarelawan</strong></a></li>
            <li class="breadcrumb-item active" ><a href="{{ url()->current() }}" style="font-size:18px; color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;"><strong>Laporkan</strong></a></li>
        </ol>
    </nav>
</div>

{{-- Judul --}}
<div class="d-flex justify-content-center">
    <h1 class="judul"><strong>LAPORKAN SUKARELAWAN</strong></h1>
</div>

{{-- Form Laporan --}}




@endsection