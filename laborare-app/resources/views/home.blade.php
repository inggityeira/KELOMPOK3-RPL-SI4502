@extends('layouts.main')

@section('title', 'LABORARE | BERANDA')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <link rel="stylesheet" href="css/home.css">
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
@php
    $user = \App\Models\User::where('id_user', session('loginId'))->first();
@endphp

<div id="img-home">
    <img src="img/home.png" class="img-fluid" alt="home.png">
    <p id="gerakan-text" class="fw-bolder">G E R A K A N &nbsp; B E R B A G I &nbsp; 2 0 2 4</p>
    @if($user)
      @if($user->peran_user == 'Organisasi')
        <a href="/listbaru-Org" id="btn-cari-kegiatan" class="btn btn-white fw-bolder rounded-0">KEGIATAN</a>  
      @elseif($user->peran_user == 'Individu')
        <a href="/listkegiatan-Ind" id="btn-cari-kegiatan" class="btn btn-white fw-bolder rounded-0">CARI KEGIATAN</a>  
      @endif
    @endif

    <div id="about-text-image">
      <h1 class="fs-6 text-white" >L A B O R A R E</h1>
      <p style="font-size: 15px" class="fw-lighter">
        Terkadang, kebaikan sederhana bisa menjadi perbedaan besar <br>
        dalam kehidupan seseorang. Bergabunglah dengan kami untuk <br>
        mewujudkan perubahan, satu tindakan sukarela pada satu waktu
      </p>
    </div>
  </div>

  <div id="text-gerakan-sukarelawan" class="d-flex justify-content-center">
    <h3 class="fw-bolder">G e r a k a n &nbsp; S u k a r e l a w a n</h3>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <img src="img/1.png" alt="" width="250px" height="200px">
      </div>
      <div class="col-sm">
        <img src="img/2.png" alt="" width="250px" height="200px">
      </div>
      <div class="col-sm">
        <img src="img/3.png" alt="" width="250px" height="200px">
      </div>
      <div class="col-sm">
        <img src="img/4.png" alt="" width="250px" height="200px">
      </div>
    </div>
  </div>

  <div id="btn-selengkapnya" class="d-flex justify-content-center container">
    @if($user)
      @if($user->peran_user == 'Organisasi')
        <a href="/listbaru-Org" class="fw-bold">Lihat Selengkapnya</a>  
      @elseif($user->peran_user == 'Individu')
        <a href="/listkegiatan-Ind" class="fw-bold">Lihat Selengkapnya</a>
      @endif
    @endif
  </div>


  <div class="home-2">
    <img src="img/home2.jpg" class="img-fluid" alt="Responsive image">
    <div class="text-on-image">
      <h1 class="fw-bolder">
        J a d i l a h <br>
        S u k a r e l a w a n !
      </h1>
      <p>Temukan lebih banyak sukarelawan berkualitas tinggi untuk <br>
         membantu mewujudkan Visi anda. Gabung dengan komunitas <br>
         Kami yang bersemangat dan berkomitmen dalam membawa <br>
         perubahan positif. Bergabunglah sekarang dan jadilah bagian <br>
         dari gerakan kami menuju dunia yang lebih baik!</p>
      
      @if($user)
        @if($user->peran_user == 'Organisasi')
          <a href="/listbaru-Org" class="btn-bergabung">Bergabung Bersama Kami</a>
        @elseif($user->peran_user == 'Individu')
          <a href="/listkegiatan-Ind" class="btn-bergabung">Bergabung Bersama Kami</a>
        @endif
      @endif
  </div>
  </div>


  <div class="home-3">
    <img src="img/homee.jpg" class="img-fluid" alt="">
    <div class="text-home-3">
      <h4 class="fw-bolder">Waktu Anda Berharga, Bergabunglah Bersama Kami</h4>
    </div>
  </div>

  <div class="container kegiatan-kami">
    <h6 class="">k e g i a t a n <br> k a m i,</h6>
    <h2 class="fw-bolder">B a n t u &nbsp; M e r e k a &nbsp; Y a n g <br>
      M e m b u t u h k a n</h2>
  </div>


  <div class="container px-4">
    <div class="row mt-5">
      <div class="col-sm">
        <div class="card border-0 rounded-0" style="width: 18rem;">
          <img class="card-img-top" src="img/1.1.png" alt="Card image cap"  height="237px">
          <div class="card-body">
            <p class="card-text fw-bolder">Sukarelawan, <br> Senyum Untuk Semua</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card border-0 rounded-0" style="width: 18rem;">
          <img class="card-img-top" src="img/1.2.png" alt="Card image cap"  height="237px">
          <div class="card-body">
            <p class="card-text fw-bolder">Bersama, <br> Kita Bisa Membuat Perbedaan</p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card border-0 rounded-0" style="width: 19rem;">
          <img class="card-img-top" src="img/1.3.png" alt="Card image cap"  height="237px">
          <div class="card-body">
            <p class="card-text fw-bolder">Bersama, <br> Bisa Merasakan Hal Yang Sama</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>
  <br>
  @endsection
