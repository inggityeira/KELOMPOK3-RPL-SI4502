@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <link rel="stylesheet" href="css/listkegiatan.css">
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}

<div class="container">
    <nav style="--bs-breadcrumb-divider: ;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/listkegiatan-Ind" class="text-decoration-none text-white fw-semibold">Kegiatan</a>
            </li>
        </ol>
    </nav>
</div>

<div class="container d-flex justify-content-center">
    <p id="kegiatan-text" class="fw-bolder">KEGIATAN YANG AKAN DATANG</p>
      </div>
      <div class="col">
        <a href="" id= "btn-kegiatan-yang-diikuti" class="btn btn-light fw-bolder">Kegiatan yang diikuti</a>
      </div>
    </div>
</div>

<div class="kegiatan-home">
    <img src="img/listKegiatan/kegiataan.jpg" class="img-fluid" alt="">
    <div class="text-kegiatan-home">
      <h5 class="fw-bolder">Kesempatan untuk membuat perbedaan ada di tangan Anda</h5>
    </div>
</div>


<div class="p-5">
  <div class="container d-flex justify-content-center">
    <div class="row">
      <div class="col position-relative">
        <img src="img/listKegiatan/1.1.jpg" alt="" width="300px" height="250px">
        <div class="fill-overlay"></div>
        <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
          <p class="card-text fw-bolder text-center text-white">Gendong Untuk Kesetaraan</p>
        </div>
      </div>
      <div class="col position-relative">
        <img src="img/listKegiatan/1.2.jpg" alt="" width="300px" height="250px">
        <div class="fill-overlay"></div>
        <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
          <p class="card-text fw-bolder text-center text-white">Sukarelawan Sinar Kebaikan</p>
        </div>
      </div>
      <div class="col position-relative">
        <img src="img/listKegiatan/1.3.jpg" alt="" width="300px" height="250px">
        <div class="fill-overlay"></div>
        <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
          <p class="card-text fw-bolder text-center text-white">Hati Yang Rela Berbagi</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="">
    <div class="container d-flex justify-content-center">
      <div class="row">
        <div class="col position-relative">
          <img src="img/listKegiatan/1.4.jpg" alt="" width="300px" height="250px">
          <div class="fill-overlay"></div>
          <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
            <p class="card-text fw-bolder text-center text-white">Beri Waktu Raih Perubahan</p>
          </div>
        </div>
        <div class="col position-relative">
          <img src="img/listKegiatan/1.5.jpg" alt="" width="300px" height="250px">
          <div class="fill-overlay"></div>
          <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
            <p class="card-text fw-bolder text-center text-white">Cinta Dalam Aksi Sinar</p>
          </div>
        </div>
        <div class="col position-relative">
          <img src="img/listKegiatan/1.6.jpg" alt="" width="300px" height="250px">
          <div class="fill-overlay"></div>
          <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
            <p class="card-text fw-bolder text-center text-white">Menebar Kebaikan Meraih Bahagia</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<br>

@endsection
