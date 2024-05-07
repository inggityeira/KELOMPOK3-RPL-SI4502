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
            margin-top: 20px;
        }
    </style>
@endpush

@section('content')
    {{-- ISI KONTEN KALIAN DIBAWAH INI --}}

    {{-- Breadscrumb --}}
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/listkegiatan-Ind"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Kegiatan</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ route('detailkegiatan-Ind', $kegiatan->id_kegiatan) }}"
                        style="color:white; font-size:20px; text-decoration: none; letter-spacing:1px;">Detail
                            Kegiatan</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ url()->current() }}"
                        style="color:white; font-size:20px; text-decoration: underline; letter-spacing:1px;">Formulir
                            Kegiatan</a>
                </li>
            </ol>
        </nav>

        <div class="container my-3">
            <center>
                <h1 class="judul"><strong>{{ $kegiatan->nama_kegiatan }}</strong></h1>
                <img src="{{ asset('sampulkegiatan/' . $kegiatan->sampul_kegiatan) }}" alt="" class="img-fluid"
                    style="height: 250px; width: 300px">
            </center>
        </div>

        <div class="container px-5" >
            <p class="text-center fs-4"><strong>Mohon Isi Formulir</strong></p>
            <div style="display: flex; justify-content: center; align-items: center;">
                <div class="card" style="width: 950px;">
                    <form action="{{ route('sukarelawanbaru') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="card-body mx-4 my-3">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                                <div style="background-color: #CBCBCB" class="p-2 px-3 rounded">{{ $user->nama_user }}</div>
                            </div>
    
                            <div class="mb-3">
                                <label for="nomor_telp" class="form-label fw-semibold">Nomor Telepon</label>
                                <input name="notelpon_sukarelawan" type="number" class="form-control" id="nomor_telp"
                                    style="background-color: #CBCBCB" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="kontak_wali" class="form-label fw-semibold">Kontak Wali</label>
                                <input name="kontak_wali" type="number" class="form-control" id="kontak_wali"
                                    style="background-color: #CBCBCB" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="kegiatan" class="form-label fw-semibold">Nama Kegiatan</label>
                                <select name="id_kegiatan" id="kegiatan" class="form-select" style="background-color:#CBCBCB"
                                    required>
                                    @foreach ($daftarKegiatan as $item)
                                        <option @if ($item->id_kegiatan == $kegiatan->id_kegiatan) selected @endif
                                            value="{{ $item->id_kegiatan }}">{{ $item->nama_kegiatan }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="mb-3">
                                <label for="pas_foto" class="form-label fw-semibold mb-0">Pas Foto</label>
                                <input name="pas_foto" type="file" class="form-control" id="pas_foto"
                                    style="background-color: #CBCBCB" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="alamat" class="form-label fw-semibold mb-0">Alamat</label>
                                <textarea name="alamat_sukarelawan" id="alamat" cols="30" rows="4" class="form-control"
                                    style="background-color:#CBCBCB" required></textarea>
                            </div>
    
                            <div class="mb-3">
                                <label for="motivasi" class="form-label fw-semibold mb-0">Motivasi Mengikuti
                                    Kegiatan</label>
                                <textarea name="motivasi" id="motivasi" cols="30" rows="4" class="form-control"
                                    style="background-color:#CBCBCB" required></textarea>
                            </div>
    
                            <div class="text-end">
                                <button type="submit" class="btn btn-dark px-5 fs-5"
                                    style="background-color: black">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection