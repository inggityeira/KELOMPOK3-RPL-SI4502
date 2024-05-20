@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}
    <div style="margin-top:20px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ 'listdonasi-Ind' }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Donasi</a>
                </li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid p-0">
        <img src="{{ asset('img/hero-listdonasiind.jpeg') }}" alt="hero-background" class="img-fluid p-0">
        <h3 class="p-4 fs-4 fw-semibold">Bergabunglah Dalam Meberi</h3>
    </div>

    <div class="container px-5 text-center">
        <center class="px-4">
            <div class="row justify-content-center align-items-center">
                @foreach ($data as $item)
                    <div class="col-4">
                        <div class="card rounded-0 mb-3" style="width: 24rem;">
                            <img src="{{ asset('donasi/' . $item->sampul_donasi) }}" class="card-img-top object-fit-cover"
                                style="max-height: 250px">
                            <div class="card-body">
                                <h5 class="card-title text-start fw-semibold">{{ $item->nama_donasi }}</h5>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="container rounded-pill py-2 my-auto me-4" style="background-color: #e8e8e8">
                                        <p class="m-0">Donasi : @currency($item->donatur->sum('nominal')) / @currency($item->target_donasi)</p>
                                    </div>
                                    <a href="{{ route('detaildonasi', ['id' => $item->id_donasi]) }}"
                                        class="btn btn-dark rounded-pill px-4 py-2">
                                        <span style="font-size: 10px">DETAIL</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </center>
    </div>
@endsection
