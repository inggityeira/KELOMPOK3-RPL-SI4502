@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Activity</title>
    <style>
        body {
            color: #000;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #000;
            padding: 20px;
            border-radius: 5px;
        }
        .containerbawah {
            width: 70%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 15px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
        }
        button {
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
        .judul{
            font-size:25px;
            color: white;
            padding: 5px;
            margin-bottom: 30px;
        }
    </style>
</head>
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
          <li class="breadcrumb-item active"><a href="{{ route('detailkegiatan-Org', $kegiatan->id_kegiatan) }}" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Detail Kegiatan</strong></a></li>
          <li class="breadcrumb-item active" ><a href="{{ url()->current() }}" style="font-size:18px; color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;"><strong>Edit Kegiatan</strong></a></li>
      </ol>
  </nav>
</div>

{{-- Judul --}}
<div class="d-flex justify-content-center">
    <h1 class="judul"><strong>TAMBAH KEGIATAN</strong></h1>
</div>

{{-- Form Kegiatan Baru --}}
<div class="containerbawah">
    <form class="row g-2"  action="{{ route('updatekegiatan', ['id' => $kegiatan->id_kegiatan]) }}" method="POST" enctype="multipart/form-data">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @csrf

        <div class="col-12">
            <label for="activityName"><strong>Nama Kegiatan</strong></label>
            <input type="text" id="activityName" name="activityName" value="{{ $kegiatan->nama_kegiatan }}" style="background-color: #CBCBCB;">
            <span class="text-danger">@error('activityName') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
            <label for="activityDate"><strong>Tanggal Kegiatan</strong></label>
            <input type="date" id="activityDate" name="activityDate" style="background-color: #CBCBCB;" value="{{ $kegiatan->tanggal_kegiatan }}">
            <span class="text-danger">@error('activityDate') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
            <label for="activityCover"><strong>Sampul Kegiatan</strong></label>
            <input type="file" id="activityCover" name="activityCover" style="background-color: #CBCBCB;">
            <span class="text-danger">@error('activityCover') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
            <label for="activityStatus"><strong>Status Kegiatan</strong></label>
            <select id="activityStatus" name="activityStatus" style="background-color: #CBCBCB;">
                <option selected value="{{ $kegiatan->status_kegiatan }}">{{ $kegiatan->status_kegiatan }}</option>
                <option value="Belum">Belum</option>
                <option value="Berlajan">Berjalan</option>
                <option value="Selesai">Selesai</option>
            </select>
            <span class="text-danger">@error('activityStatus') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
            <label for="activityCategory"><strong>Kategori Kegiatan</strong></label>
            <select id="activityCategory" name="activityCategory" style="background-color: #CBCBCB;">
              <option selected value="{{ $kegiatan->kategori_kegiatan }}">{{ $kegiatan->kategori_kegiatan }}</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Lingkungan">Lingkungan</option>
                <option value="Sosial">Sosial</option>
                <option value="Kesehatan">Kesehatan</option>
            </select>
            <span class="text-danger">@error('activityCategory') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
            <label for="activityDescription"><strong>Deskripsi Kegiatan</strong></label>
            <input id="activityDescription" name="activityDescription" style="background-color: #CBCBCB;" value="{{ $kegiatan->deskripsi_kegiatan }}">
            <span class="text-danger">@error('activityDescription') {{$message}} @enderror</span>
        </div>

        <div class="col-12">
            <button type="submit" style="float: right; background-color:black; color:white; width:150px;"><strong>Perbarui</strong></button>
        </div>
    </form>
</div>

@endsection