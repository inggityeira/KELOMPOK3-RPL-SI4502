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
    <img src="img/kegiataan.jpg" class="img-fluid" alt="">
    <div class="text-kegiatan-home">
      <h5 class="fw-bolder">Kesempatan untuk membuat perbedaan ada di tangan Anda</h5>
    </div>
</div>


<div class="p-5">
  <div class="container d-flex justify-content-center">
    <div class="row">
        @foreach ($kegiatan as $item)
            <div class="col-md-4 position-relative mb-4">
                <a href="{{'detailkegiatan-Ind', $item->id_kegiatan}}">
                    <img src="{{asset('sampulkegiatan/'.$item->sampul_kegiatan)}}" alt="" style=" width:400px; height:250px;">
                    <div class="fill-overlay"></div>
                    <div class="card-body position-absolute bottom-0 start-50 translate-middle-x z-index-1 d-flex align-items-center justify-content-center">
                        <p class="card-text fw-bolder text-center text-white">{{$item->nama_kegiatan}}</p>
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
