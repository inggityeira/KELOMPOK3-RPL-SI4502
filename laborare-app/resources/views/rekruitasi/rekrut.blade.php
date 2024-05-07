@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}

{{-- Breadscrumb --}}
<div style="margin-top:30px; margin-left:50px;">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/listsukarelawan" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;">Rekruitasi</a></li>
            <li class="breadcrumb-item"><a href="" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px; font-size:18px;">Rekrut Sukarelawan</a></li>
        </ol>
    </nav>
</div>

<div class="d-flex flex-column align-items-center  text-center mb-2" >
    {{-- Foto Profil --}}
        <img src="{{asset('pasfoto/'.$sukarelawan->pas_foto)}}" alt="Profile" class="img-fluid"  style="border-radius: 5%;
        overflow: hidden;">

    {{-- Nama dan Alamat --}}
    <div class="mt-4 text-center", div class="mb-2">
        <h1 class="fw-bolder text-uppercase" style="font-size: 48px">{{$sukarelawan->user->nama_user}}</h1>
    </div>
</div>

</div>

{{-- Detail Profil --}}
<div class="container d-flex justify-content-center">
    <form style="width: 55%" method="post" action="{{ route('rekrut-sukarelawan', ['id' => $sukarelawan->id_sukarelawan]) }}">
        @csrf
        @method('put')
        <div class="mb-2">
            <label for="kegiatan">Kegiatan</label>
            <div class="">
                <select name="kegiatan_sukarelawan" class="card p-2" style="width: 100%; padding: 8px;">
                    @if($kegiatan)
                        <option value="{{$kegiatan->id_kegiatan}}">{{$kegiatan->nama_kegiatan}}</option>
                    @endif
                    @foreach($semuaKegiatan as $kg)
                        @if(!$kegiatan || $kg->id_kegiatan != $kegiatan->id_kegiatan)
                            <option value="{{$kg->id_kegiatan}}">{{$kg->nama_kegiatan}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-2">
            <label for="status_sukarelawan">Status Penerimaan</label>
            <div>
                <select name="status_sukarelawan" class="card p-2" style="width: 100%; padding: 8px;">
                    <option value="Tidak Diterima" {{ $sukarelawan->status_sukarelawan === 'Tidak Diterima' ? 'selected' : '' }}>Tidak Diterima</option>
                    <option value="Diterima" {{ $sukarelawan->status_sukarelawan === 'Diterima' ? 'selected' : '' }}>Diterima</option>
                    <option value="Selesai" {{ $sukarelawan->status_sukarelawan === 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
        </div>

        <div class="form-group center-button mt-4" style="display: flex; justify-content: center;">
            <button type="submit" class="btn px-4" style="background-color: white; color: black;"><strong>Selesai</strong></button>
        </div>
    </form>



@endsection
