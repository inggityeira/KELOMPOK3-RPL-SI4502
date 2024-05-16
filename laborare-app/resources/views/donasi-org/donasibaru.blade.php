@extends('layouts.main')

@section('title', 'LABORARE | DONASI')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .judul {
            font-size: 25px;
            margin-top: 40px;
            margin-left: 130px;
        }
    </style>
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    {{-- Breadscrumb --}}
    <div style="margin-top:25px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listdonasi-Org"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Donasi</a>
                </li>
                <li class="breadcrumb-item active"><a href="/donasibaru-Org"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Donasi Baru</a>
                </li>
            </ol>
        </nav>
    </div>

    



@endsection
