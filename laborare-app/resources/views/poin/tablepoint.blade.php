@extends('layouts.main')

@section('title', 'LABORARE | POIN')

@push('css')
    {{-- ISI CSS KALIAN, BISA EKSTERNAL/INTERNAL --}}
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}
    <div style="margin-top:30px; margin-left:50px;">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/jumlahpoin"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Poin</a></li>
                <li class="breadcrumb-item active"><a href="{{ url()->current() }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Riwayat Poin</a>
                </li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <center>
            <h3 class="fw-semibold" style="font-size: 25px;">RIWAYAT POINT</h3>
            <br>
            <div class="card mx-4" style="width: 850px; margin-bottom:150px; margin-top:20px;">
                <div class="card-body">
                    <table class="table table-borderless rounded-4">
                        <thead class="table-secondary">
                            <tr class="text-center" style="font-size: 14px;">
                                <th class="text-secondary">NO</th>
                                <th class="text-secondary">NAMA KEGIATAN</th>
                                <th class="text-secondary">JUMLAH POIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr class="text-center">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->kegiatan->nama_kegiatan }}</td>
                                    <td>{{ $item->poin }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </center>
    </div>

    <br>

@endsection
