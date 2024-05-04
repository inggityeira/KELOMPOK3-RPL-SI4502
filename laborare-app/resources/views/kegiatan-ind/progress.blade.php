@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

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
          <li class="breadcrumb-item active"><a href="/listbaru-Org" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Kegiatan > </strong></a><a href="" style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>Kegiatan Yang Diikuti</strong></a></li>
      </ol>
  </nav>
</div>


{{-- Judul --}}
<div>
  <h1 class="judul"><strong>KEGIATAN YANG ANDA IKUTI</strong></h1>
</div>
{{-- List Kegiatan dari Database --}}
<div class="p-5" style="margin-top:-30px;">
  <div class="container d-flex justify-content-center">
    <div class="row centered" style="flex-wrap: wrap; gap: 20px; justify-content: center;">
      @foreach ($kegiatan->items() as $key => $item)

        <div class="card col-md-6 position-relative mb-4" style="width: 300px; {{ $key == 0 && $kegiatan->count() == 1 ? 'margin-left: -320px;' : '' }} padding: 0; margin: 0; border-radius: 0px;">
          <img src="{{asset('sampulkegiatan/'.$item->sampul_kegiatan)}}" class="card-img-top" alt="{{$item->nama_kegiatan}}" style="height: 180px; width: 100%; object-fit: cover; padding: 0; margin: 0;">
          @if($item->status_kegiatan == 'Selesai')
          <span class="status-label" style="background-color: green;">Selesai</span>
          @elseif($item->status_kegiatan == 'Berjalan')
          <span class="status-label" style="background-color: purple;">Berjalan</span>
          @else
          <span class="status-label" style="background-color: red;">Belum</span>
          @endif
          <div class="card-body">
            <h5 class="card-title"><strong>{{$item->nama_kegiatan}}</strong></h5>
            <p class="card-text">{{$item->kategori_kegiatan}}</p>
            <p class="card-text">{{$item->tanggal_kegiatan}}</p>
            @if($item->status_kegiatan == 'Selesai')
            <h6 class="card-title"><strong>Sertifikat Kegiatan</strong></h6>
            <a href="{{ route('sertifikatkegiatan', ['id_kegiatan'=>$item->id_kegiatan,'id_user'=>$item->id_user]) }}" class="btn" style="float: right; background-color:black; margin-top:-30px; color:white; width:100px; border-radius: 20px;">Lihat</a>
            @endif
          </div>
        </div>
      
      @endforeach
    </div>
  </div>
</div>

{{-- Pagination --}}
<div class="pagination-container d-flex justify-content-center">
  {{ $kegiatan->links('pagination::bootstrap-4') }}
</div>

<br>

@endsection