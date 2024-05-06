@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}
LIST SUKARELAWAN
<div class="container">
        <style>
            .breadcrumb-item+.breadcrumb-item::before {
                color: white;
                font-size: 20px;
            }
        </style>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listkegiatan-Ind"
                        style="font-size:18px; color:white; font-size:20px; text-decoration: none; letter-spacing:1px;"><strong>List
                            Sukarelawan</strong></a>
                </li>
            </ol>
        </nav>
    </div>

    <img src="{{ asset('img/sukarelawan.png') }}" alt="">

    <center class="my-4">
        <h4 class="fw-semibold">REKRUITASI SUKARELAWAN</h4>
    </center>

    <div class="container text-center">
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach ($sukarelawan as $item)
                <div class="">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('fotoprofil/' . $item->user->foto_profil) }}" class="object-fit-cover"
                            style="max-height: 200px" alt="foto profil">
                        <div class="card-body text-start">
                            <h5 class=" fw-semibold text-truncate">{{ $item->user->nama_user }}</h5>
                            <p class="">{{ $item->kegiatan->nama_kegiatan }}</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-sm text-dark px-3 rounded-3" style="background-color: #CBCBCB"
                                    type="button">Detail</button>
                                <button class="btn btn-sm btn-dark px-3 rounded-3" type="button">REKRUT</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container p-4 px-5 d-flex justify-content-end">
        {{ $sukarelawan->links() }}
    </div>

    

@endsection