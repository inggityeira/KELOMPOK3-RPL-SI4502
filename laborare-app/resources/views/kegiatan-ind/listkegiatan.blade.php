@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <link rel="stylesheet" href="css/listkegiatan.css">
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}

{{-- Breadscrumb --}}
<div style="margin-top:20px; margin-left:50px;">
  <style>
    .breadcrumb-item+.breadcrumb-item::before {
      color: white;
      font-size: 20px;
    }
  </style>
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="{{'listkegiatan-Ind'}}" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;"><strong>Kegiatan</strong></a></li>
      </ol>
  </nav>
</div>

{{-- Judul --}}
<div class="container d-flex justify-content-center">
  <p id="kegiatan-text" class="fw-bolder" style="font-size:25px; margin-top:-45px;">KEGIATAN YANG AKAN DATANG</p>
</div>

{{-- Notes: Tambahin href --}}
<div class="col">
  <a href="" id= "btn-kegiatan-yang-diikuti" class="btn btn-light fw-bolder" style="font-size:15px; margin-top:10px; margin-right:-100px;">Kegiatan yang diikuti</a>
</div>

{{-- Banner --}}
<div class="kegiatan-home" style="margin-top:10px; height:270px;">
    <img src="img/kegiataan.jpg" class="img-fluid" alt="Kegiatan">
    <div class="text-kegiatan-home">
      <h5 class="fw-bolder" style="font-size: 45px;">Kesempatan untuk membuat perubahan ada di tangan Anda</h5>
    </div>
</div>

{{-- Cari dan Filter --}}
<div class="d-flex justify-content-center" style="margin-top:15px; height:200px;">
  <form method="GET" action="{{ route('listkegiatan-Ind') }}">
    <div class="d-flex">
        <input name="search" class="form-control me-2" type="search" placeholder="Cari" aria-label="Search" style="width: 330px; border-radius: 0px;">
        <button class="btn" type="submit" style="background-color:#D9D9D9; margin-left:-8px; border-radius: 0px;"><img src="img/komponen/cari.png" alt="Cari" width="30px"></button>
    </div>
    <div class="mt-2 d-flex justify-content-center" style="width: 250px; margin-left:70px;">
        <span class="input-group-text" style="border-radius: 0px;">Kategori</span>
        <select name="kategori" class="form-select" aria-label="Default select example" style="border-radius: 0px;">
            <option selected value="Semua">Semua</option>
            <option value="Pendidikan">Pendidikan</option>
            <option value="Lingkungan">Lingkungan</option>
            <option value="Sosial">Sosial</option>
            <option value="Kesehatan">Kesehatan</option>
        </select>
    </div>
</form>
</div>

{{-- List Kegiatan dari Database --}}
<div class="p-5" style="margin-top:-120px;">
  <div class="container d-flex justify-content-center">
    <div class="row centered" style="flex-wrap: wrap;">
        @foreach ($kegiatan->items() as $key => $item)
            @php
                $colClass = $kegiatan->count() < 3 ? 'col-md-6' : 'col-md-4';
                $marginLeftClass = $kegiatan->count() == 1 ? 'margin-left: -30px;' : '';
            @endphp
            <div class="{{ $colClass }} position-relative mb-4" style="max-width: 360px; {{ $key == 0 && $kegiatan->count() == 1 ? 'margin-left: -320px;' : '' }}">
                <a href="{{'detailkegiatan-Ind', $item->id_kegiatan}}">
                    <img src="{{asset('sampulkegiatan/'.$item->sampul_kegiatan)}}" alt="{{$item->nama_kegiatan}}" style=" width:340px; height:262px;">
                    <div class="fill-overlay">
                      <p class="card-text fw-bolder text-center text-white" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width:100%; font-size:20px; weight: bold;">{{$item->nama_kegiatan}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
  </div>
</div>



  <div class="pagination-container d-flex justify-content-center">
    {{ $kegiatan->links('pagination::bootstrap-4') }}
  </div>

<br>

@endsection
