@extends('layouts.main')

@section('title', 'LABORARE | SERTIFIKAT')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
<style>
      .kegiatan-banner{
        height:250px;
      }
      .kegiatan-banner img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
      }
      .judul{
        font-size:25px;
        margin-top: 40px;
        text-align: center;
      }
      .pagination-container .pagination .page-link {
        color: white;
        background-color: black;
        border-color: white;
      }
      .status-label {
        position: absolute;
        top: 10px;
        right: 10px;
        color: white;
        padding: 5px 10px;
        border-radius: 10px;
        font-size: 12px;
    }
</style>

@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
SERTIFIKAT
{{-- Breadscrumb --}}
<div style="margin-top:25px; margin-left:50px;">
  <style>
    .breadcrumb-item+.breadcrumb-item::before {
      color: white;
      font-size: 20px;
    }
  </style>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="/listbaru-Org" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Kegiatan > </strong></a><a href="" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Sertifikat</strong></a></li>
      </ol>
  </nav>
</div>


{{-- Judul --}}
<div>
  <h1 class="judul"><strong>SERTIFIKAT KEGIATAN</strong></h1>
</div>
{{-- List Kegiatan dari Database --}}
<div class="p-5" style="margin-top:-30px;">
  <div class="container d-flex justify-content-center">
    <div class="row centered" style="flex-wrap: wrap; gap: 20px; justify-content: center;">
      <img src="{{asset('img/sertifikat.jpg')}}" alt="">
    </div>
  </div>
</div>
<br>

@endsection