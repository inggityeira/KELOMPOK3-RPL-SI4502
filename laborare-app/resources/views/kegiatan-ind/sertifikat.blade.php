@extends('layouts.main')

@section('title', 'LABORARE | SERTIFIKAT')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .kegiatan-banner {
            height: 250px;
        }

        .kegiatan-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .judul {
            font-size: 25px;
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
    <div style="margin-top:20px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ 'listkegiatan-Ind' }}"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Kegiatan</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ route('progresskegiatan') }}"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Kegiatan Yang
                        Diikuti</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ url()->current() }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Sertifikat</a>
                </li>
            </ol>
        </nav>
    </div>

    {{-- Judul --}}
    <div>
        <h1 class="judul"><strong>SERTIFIKAT KEGIATAN</strong></h1>
    </div>

    {{-- List Kegiatan dari Database --}}
    <div class="p-5" style="margin-top:-30px;">
        <div class="container d-flex justify-content-center">
            <div class="row centered" style="gap: 20px; justify-content: center;">
                @foreach ($sukarelawan as $s)
                    <div style="display: flex; align-items: center;">
                        <a href="{{ route('download.sertif', ['filename' => $s->sertifikat]) }}" class="btn"
                            style="background-color: green; color:white; width:100px;">Download</a>

                    </div>
                    <img src="{{ asset('sertifikat/' . $s->sertifikat) }}" alt="Sertifikat" style="height: 700px;">
                @endforeach
            </div>
        </div>
    </div>

    <br>

@endsection
