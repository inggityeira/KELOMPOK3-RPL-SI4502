@extends('layouts.main')

@section('title', 'LABORARE | KEGIATAN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
    <style>
        .judul{
            font-size:25px;
            color: white;
            padding: 5px;
            margin-bottom: 30px;
        }

        .sukarelawan{
            text-align: center;
        }

        .identitas{
            text-align: justify;
        }
    </style>
@endpush

@section('content')
{{-- ISI KONTEN KALIAN DIBAWAH INI --}}

{{-- Breadscrumb --}}
<div style="margin-top:30px; margin-left:50px;">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="/listbaru-Org" style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Kegiatan</a></li>
            <li class="breadcrumb-item active" ><a href="{{ route('detailkegiatan-Org', ['id' => $kegiatan->id_kegiatan]) }}" style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Detail Kegiatan</a></li>
            <li class="breadcrumb-item active" ><a href="{{ url()->current() }}" style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Sukarelawan</a></li>
        </ol>
    </nav>
</div>

{{-- Judul --}}
<div class="d-flex justify-content-center">
    <h1 class="judul"><strong>SUKARELAWAN</strong></h1>
</div>

{{-- Tabel Sukarelawan --}}
<div class="d-flex justify-content-center" style="padding-right: 150px; padding-left: 150px;">
    <table class="table-striped table-dark table">
        <thead>
            <tr>
                <th class="sukarelawan" rowspan="2">SUKARELAWAN</th>
                <th class="sukarelawan" rowspan="2">NO TELEPON</th>
                <th class="sukarelawan" rowspan="2">KONTAK WALI</th>
                <th class="sukarelawan" rowspan="2">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sukarelawan as $people)
                <tr>
                    <td class="identitas">
                        <img src="{{asset('pasfoto/'.$people->pas_foto)}}" alt="" width="100px" style="margin-right: 20px;"> {{ $people->user->nama_user }}
                    </td>
                    <td class="sukarelawan py-4">
                        {{$people->notelpon_sukarelawan}}
                    </td>
                    <td class="sukarelawan py-4">
                        {{$people->kontak_wali}}
                    </td>
                    <td class="sukarelawan py-4">
                        @if ($people->status_sukarelawan != 'Selesai')
                            <a href="{{ route('formlaporan-Org', ['id_kegiatan' => $people->id_kegiatan, 'id' => $people->id_sukarelawan]) }}" class="btn" style="background-color: #4A47FF; color:white;">
                                <strong>LAPORKAN</strong>
                            </a>
                        @else
                            <p style="font-size: 20px; background-color:green;"><strong>Selesai</strong></p>
                        @endif
                    </td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<br>
@endsection