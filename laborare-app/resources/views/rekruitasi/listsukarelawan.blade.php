@extends('layouts.main')

@section('title', 'LABORARE | REKRUITASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .pagination-container .pagination .page-link {
            color: white;
            background-color: black;
            border-color: white;
        }
    </style>
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    {{-- Breadscrumb --}}
    <div style="margin-top:20px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listsukarelawan"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Rekruitasi</a>
                </li>
            </ol>
        </nav>
    </div>

    <img src="/img/sukarelawan.png" alt="">

    <center class="my-4">
        <h4 class="fw-semibold">REKRUITASI SUKARELAWAN</h4>
    </center>

    <div class="container text-center">
        <div class="d-flex flex-wrap justify-content-center gap-4">
            @foreach ($sukarelawan as $item)
                <div class="">
                    <div class="card" style="width: 18rem; height:330px;">
                        @if ($item->pas_foto != null)
                            <img src="{{ asset('pasfoto/' . $item->pas_foto) }}" alt="{{ $item->user->nama_user }}"
                                class="object-fit-cover" style="height: 200px">
                        @else
                            <img src="{{ asset('fotoprofil/kosong.png') }}" alt="{{ $item->user->nama_user }}"
                                class="object-fit-cover" style="height: 200px">
                        @endif

                        <div class="card-body text-start">
                            <h5 class=" fw-semibold text-truncate">{{ $item->user->nama_user }}</h5>
                            <p class="">{{ $item->kegiatan->nama_kegiatan }}</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('detail-sukarelawan', ['id' => $item->id_sukarelawan]) }}"
                                    class="btn btn-sm text-dark px-3 rounded-3" style="background-color: #CBCBCB"
                                    type="button">Detail</a>
                                <a href="{{ route('rekrut', ['id' => $item->id_sukarelawan]) }}"
                                    class="btn btn-sm btn-dark px-3 rounded-3" type="button">REKRUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>

    {{-- Pagination --}}
    <div class="pagination-container d-flex justify-content-center">
        {{ $sukarelawan->links('pagination::bootstrap-4') }}
    </div>



@endsection
