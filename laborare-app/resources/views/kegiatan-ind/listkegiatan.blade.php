@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <link rel="stylesheet" href="css/listkegiatan.css">
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}

<div class="container">
    <div class="row">
      <div class="col">
        <p>Kegiatan</p>
      </div>
      <div class="col">
        <h4>Kegiatan Yang Akan Datang</h4>
      </div>
      <div class="col">
        <a href="" class="btn btn-light">Kegiatan yang diikuti</a>
      </div>
    </div>
</div>

<div class="kegiatan-home">
    <img src="img/listKegiatan/home.png" class="img-fluid" alt="">
    <div class="text-kegiatan-home">
      <h5 class="fw-bolder">Kesempatan untuk membuat perbedaan ada di tangan Anda</h5>
    </div>
</div>


<div class="p-5">
  <div class="container d-flex justify-content-center">
    <div class="row">
      <div class="col position-relative">
        <img src="img/listKegiatan/f.jpg" alt="" width="300px" height="250px">
        <div class="fill-overlay"></div>
        <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
          <p class="card-text fw-bolder text-center text-white">Gendong Untuk Kesetaraan</p>
        </div>
      </div>
      <div class="col position-relative">
        <img src="img/listKegiatan/a.jpg" alt="" width="300px" height="250px">
        <div class="fill-overlay"></div>
        <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
          <p class="card-text fw-bolder text-center text-white">Sukarelawan Sinar Kebaikan</p>
        </div>
      </div>
      <div class="col position-relative">
        <img src="img/listKegiatan/d.jpg" alt="" width="300px" height="250px">
        <div class="fill-overlay"></div>
        <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1">
          <p class="card-text fw-bolder text-center text-white">Hati Yang Rela Berbagi</p>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
